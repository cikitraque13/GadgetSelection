<?php

declare(strict_types=1);

require_once __DIR__ . '/../catalog/WorldRepository.php';
require_once __DIR__ . '/../catalog/NeedRepository.php';
require_once __DIR__ . '/../catalog/GadgetRepository.php';
require_once __DIR__ . '/../system/View.php';

final class NeedController
{
    private WorldRepository $worlds;
    private NeedRepository $needs;
    private GadgetRepository $gadgets;

    public function __construct()
    {
        $dataPath = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'data';

        $this->worlds = new WorldRepository();
        $this->needs = new NeedRepository();
        $this->gadgets = new GadgetRepository($dataPath);
    }

    public function show(string $worldId, string $needId): void
    {
        $world = $this->worlds->find($worldId);

        if (!$world) {
            http_response_code(404);
            View::render('pages/404', [
                'message' => 'Mundo no encontrado',
            ]);
            return;
        }

        $need = $this->needs->find($worldId, $needId);

        if (!$need) {
            http_response_code(404);
            View::render('pages/404', [
                'message' => 'Necesidad no encontrada',
            ]);
            return;
        }

        $gadgets = $this->gadgets->findAllByWorldAndNeed($worldId, $needId, true);

        View::render('pages/need', [
            'world' => $world,
            'need' => $need,
            'gadgets' => $gadgets,
        ]);
    }
}