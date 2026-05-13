<?php
declare(strict_types=1);

final class NeedRepository
{
    private string $path;

    public function __construct(?string $path = null)
    {
        $this->path = $path ?? dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'needs';
    }

    public function allByWorld(string $worldId, bool $publishedOnly = false): array
    {
        $files = glob($this->path . DIRECTORY_SEPARATOR . $worldId . DIRECTORY_SEPARATOR . '*.json') ?: [];
        $needs = [];

        foreach ($files as $file) {
            $need = $this->readJson($file);

            if ($publishedOnly && (($need['status'] ?? 'draft') !== 'published')) {
                continue;
            }

            $needs[] = $need;
        }

        usort($needs, static function (array $a, array $b): int {
            return strcmp((string)($a['title'] ?? ''), (string)($b['title'] ?? ''));
        });

        return $needs;
    }

    public function find(string $worldId, string $needId): ?array
    {
        $file = $this->path . DIRECTORY_SEPARATOR . $worldId . DIRECTORY_SEPARATOR . $needId . '.json';

        if (!is_file($file)) {
            return null;
        }

        $need = $this->readJson($file);

        return $need ?: null;
    }

    public function exists(string $worldId, string $needId): bool
    {
        return is_file($this->path . DIRECTORY_SEPARATOR . $worldId . DIRECTORY_SEPARATOR . $needId . '.json');
    }

    private function readJson(string $file): array
    {
        $raw = file_get_contents($file);

        if ($raw === false) {
            throw new RuntimeException("Cannot read JSON file: {$file}");
        }

        $raw = preg_replace('/^\xEF\xBB\xBF/', '', $raw);
        $data = json_decode($raw, true);

        if (!is_array($data)) {
            throw new RuntimeException("Invalid JSON file: {$file} | " . json_last_error_msg());
        }

        return $data;
    }
}