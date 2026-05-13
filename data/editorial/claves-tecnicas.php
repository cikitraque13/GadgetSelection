<?php

return [
    'hero' => [
        'eyebrow' => 'Criterio tecnico sin humo',
        'title' => 'Claves tecnicas',
        'lead' => 'La ficha tecnica solo importa si ayuda a decidir mejor.',
        'support' => 'Filtramos los datos que afectan al uso real: compatibilidad, autonomia, potencia, tamano, materiales y limites practicos.',
        'tags' => [
            'Datos utiles',
            'Uso real',
            'Compatibilidad',
        ],
        'cta_text' => 'Ver claves',
        'cta_url' => '#datos-que-importan',
        'media' => [
            'aria_label' => 'Lectura tecnica aplicada al uso real',
            'badge' => 'Lectura util',
            'headline' => 'Menos numeros vacios. Mas decision.',
            'support' => 'No gana la cifra mas grande. Gana el dato que aclara.',
            'proof_points' => [
                'Datos filtrados',
                'Ruido tecnico fuera',
                'Encaje revisado',
            ],
        ],
    ],

    'index' => [
        'items' => [],
    ],

    'sections' => [
        [
            'id' => 'datos-que-importan',
            'title' => 'Datos que importan',
            'core_idea' => 'Importa el dato que cambia el uso real del producto.',
            'body' => [
                'No leemos una ficha tecnica como una lista de numeros. La leemos desde la necesidad: viaje, energia, ergonomia, entrenamiento, outdoor o recuperacion.',
            ],
            'box' => ['type' => 'criterion', 'text' => 'Una buena especificacion no impresiona. Aclara la decision.'],
            'compare_items' => [
                'Powerbank: capacidad + potencia + peso',
                'Auriculares: cancelacion + comodidad + bateria',
                'Cinta: velocidad + estabilidad + plegado',
            ],
            'micro_example' => 'Un powerbank enorme puede ser peor para viajar si pesa demasiado, carga lento o no tiene USB-C potente.',
            'echo_line' => 'El dato correcto reduce duda. El dato decorativo solo ocupa espacio.',
            'transition' => '',
        ],
        [
            'id' => 'numeros-que-enganan',
            'title' => 'Numeros que enganan',
            'core_idea' => 'Mas no siempre significa mejor.',
            'body' => [
                'Mas vatios, mas modos, mas velocidades o mas mAh pueden parecer ventaja. Pero sin contexto tambien pueden esconder peso, ruido, calor, mala autonomia o funciones que nadie usa.',
            ],
            'box' => ['type' => 'alert', 'text' => 'La cifra grande no gana si empeora el uso.'],
            'compare_items' => [
                '30 velocidades no garantizan mejor masaje',
                'Muchos lumenes no garantizan mas autonomia',
                'Mas capacidad no garantiza mejor energia util',
            ],
            'micro_example' => 'Una linterna muy potente puede ser mala para emergencia si dura poco o se calienta demasiado.',
            'echo_line' => 'Los numeros importan cuando explican uso real, no cuando maquillan el producto.',
            'transition' => '',
        ],
        [
            'id' => 'compatibilidad-real',
            'title' => 'Compatibilidad real',
            'core_idea' => 'Un producto bueno puede ser mala compra si no encaja con tu entorno.',
            'body' => [
                'Miramos espacio, peso, puertos, montaje, cables, ruido, forma de uso y frecuencia real. La compatibilidad no es solo tecnica: tambien es practica.',
            ],
            'box' => ['type' => 'criterion', 'text' => 'Compatibilidad real = tecnica + espacio + habito + contexto.'],
            'compare_items' => [
                'Casa pequena: no toda maquina cabe',
                'Viaje ligero: no toda bateria compensa',
                'Escritorio: importa compatibilidad',
            ],
            'micro_example' => 'Un soporte puede ser excelente y aun asi no servir si tu mesa no tiene espacio o estabilidad.',
            'echo_line' => 'El encaje real vale mas que la lista de funciones.',
            'transition' => '',
        ],
        [
            'id' => 'uso-antes-que-ficha',
            'title' => 'Uso antes que ficha',
            'core_idea' => 'Primero se entiende la necesidad. Despues se leen los datos.',
            'body' => [
                'Si empiezas por la ficha tecnica, comparas ruido. Si empiezas por el problema, los datos se convierten en filtro.',
            ],
            'box' => ['type' => 'trust', 'text' => 'La ficha tecnica se lee desde el problema, no desde el marketing.'],
            'compare_items' => [
                'Dolor: ajuste, soporte y material',
                'Viaje: tamano, peso y compatibilidad',
                'Energia: potencia, puertos y autonomia real',
            ],
            'micro_example' => 'Una mochila no se evalua solo por litros: importan acceso al portatil, peso, resistencia y organizacion.',
            'echo_line' => 'Primero uso. Luego datos. Despues decision.',
            'transition' => '',
        ],
    ],

    'cta' => [
        'title' => 'Sigue desde una necesidad real',
        'text' => 'Vuelve al inicio y entra por el mundo que mejor encaje con lo que quieres resolver.',
        'button_text' => 'Volver al inicio',
        'button_url' => '/',
    ],
];