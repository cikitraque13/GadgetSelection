<?php
declare(strict_types=1);

final class WorldRepository
{
    private string $path;

    public function __construct(?string $path = null)
    {
        $this->path = $path ?? dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'worlds';
    }

    public function all(bool $publishedOnly = true): array
    {
        $files = glob($this->path . DIRECTORY_SEPARATOR . '*.json') ?: [];
        $worlds = [];

        foreach ($files as $file) {
            $world = $this->readJson($file);

            if ($publishedOnly && (($world['status'] ?? 'draft') !== 'published')) {
                continue;
            }

            $worlds[] = $world;
        }

        usort($worlds, static function (array $a, array $b): int {
            return strcmp((string)($a['title'] ?? ''), (string)($b['title'] ?? ''));
        });

        return $worlds;
    }

    public function find(string $id): ?array
    {
        $file = $this->path . DIRECTORY_SEPARATOR . $id . '.json';

        if (!is_file($file)) {
            return null;
        }

        $world = $this->readJson($file);

        return $world ?: null;
    }

    public function exists(string $id): bool
    {
        return is_file($this->path . DIRECTORY_SEPARATOR . $id . '.json');
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