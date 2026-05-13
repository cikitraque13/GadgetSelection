<?php

class View
{
    public static function render($view, $data = [])
    {
        extract($data);

        // ruta absoluta a la vista
        $view = __DIR__ . '/../../templates/' . $view . '.php';

        // render del layout principal
        require __DIR__ . '/../../templates/layout/main.php';
    }
}