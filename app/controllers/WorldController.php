<?php
declare(strict_types=1);

require_once __DIR__ . '/../catalog/WorldRepository.php';
require_once __DIR__ . '/../catalog/NeedRepository.php';
require_once __DIR__ . '/../system/View.php';

final class WorldController
{
    private WorldRepository $worlds;
    private NeedRepository $needs;

    public function __construct()
    {
        $this->worlds = new WorldRepository();
        $this->needs = new NeedRepository();
    }

    public function show(string $worldId): void
    {
        $world = $this->worlds->find($worldId);

        if (!$world) {
            http_response_code(404);
            View::render('pages/404', [
                'message' => 'Mundo no encontrado',
            ]);
            return;
        }

        $needs = $this->needs->allByWorld($worldId, false);

        View::render('pages/world', [
            'world' => $world,
            'needs' => $needs,
        ]);
    }
}