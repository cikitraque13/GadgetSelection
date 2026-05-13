<?php

declare(strict_types=1);

require_once __DIR__ . '/../core/Json.php';

final class GadgetRepository
{
    private string $directory;

    public function __construct(string $dataPath)
    {
        $this->directory = rtrim($dataPath, '/\\') . '/gadgets';
    }

    public function findAll(): array
    {
        $files = $this->collectJsonFiles();
        $items = [];

        foreach ($files as $file) {
            $gadget = Json::read($file);

            if (is_array($gadget)) {
                $items[] = $gadget;
            }
        }

        return $this->sortItems($items);
    }

    public function findAllByWorldAndNeed(string $worldId, string $needId, bool $publishedOnly = true): array
    {
        $files = $this->collectJsonFilesForWorldAndNeed($worldId, $needId);
        $items = [];

        foreach ($files as $file) {
            $gadget = Json::read($file);

            if (!is_array($gadget)) {
                continue;
            }

            if (($gadget['world_id'] ?? null) !== $worldId) {
                continue;
            }

            $needIds = $gadget['need_ids'] ?? [];

            if (!is_array($needIds) || !in_array($needId, $needIds, true)) {
                continue;
            }

            if ($publishedOnly && (($gadget['status'] ?? '') !== 'published')) {
                continue;
            }

            $items[] = $gadget;
        }

        return $this->sortItems($items);
    }

    public function findAllBySubcontextId(string $subcontextId): array
    {
        $files = $this->collectJsonFiles();
        $items = [];

        foreach ($files as $file) {
            $gadget = Json::read($file);

            if (!is_array($gadget)) {
                continue;
            }

            if (($gadget['subcontext_id'] ?? null) === $subcontextId) {
                $items[] = $gadget;
            }
        }

        return $this->sortItems($items);
    }

    private function collectJsonFiles(): array
    {
        $files = [];

        $patterns = [
            $this->directory . '/*.json',
            $this->directory . '/*/*.json',
            $this->directory . '/*/*/*.json',
        ];

        foreach ($patterns as $pattern) {
            $matchedFiles = glob($pattern);

            if (is_array($matchedFiles)) {
                $files = array_merge($files, $matchedFiles);
            }
        }

        return array_values(array_unique($files));
    }

    private function collectJsonFilesForWorldAndNeed(string $worldId, string $needId): array
    {
        $needDirectory = $this->directory . '/' . $worldId . '/' . $needId;

        if (is_dir($needDirectory)) {
            $files = glob($needDirectory . '/*.json');

            return is_array($files) ? $files : [];
        }

        $worldDirectory = $this->directory . '/' . $worldId;

        if (!is_dir($worldDirectory)) {
            return [];
        }

        $files = glob($worldDirectory . '/*.json');

        return is_array($files) ? $files : [];
    }

    private function sortItems(array $items): array
    {
        usort($items, static function (array $a, array $b): int {
            $rankingA = isset($a['ranking']) && is_numeric($a['ranking']) ? (int)$a['ranking'] : 9999;
            $rankingB = isset($b['ranking']) && is_numeric($b['ranking']) ? (int)$b['ranking'] : 9999;

            if ($rankingA !== $rankingB) {
                return $rankingA <=> $rankingB;
            }

            $scoreA = (float)($a['score'] ?? 0);
            $scoreB = (float)($b['score'] ?? 0);

            if ($scoreA !== $scoreB) {
                return $scoreB <=> $scoreA;
            }

            return strcmp((string)($a['title'] ?? ''), (string)($b['title'] ?? ''));
        });

        return $items;
    }
}