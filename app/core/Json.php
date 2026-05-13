<?php

declare(strict_types=1);

final class Json
{
    public static function read(string $path): array
    {
        if (!file_exists($path)) {
            return [];
        }

        $content = file_get_contents($path);

        if ($content === false) {
            return [];
        }

        $data = json_decode($content, true);

        if (!is_array($data)) {
            return [];
        }

        return $data;
    }
}
