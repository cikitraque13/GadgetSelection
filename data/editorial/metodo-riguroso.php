<?php

return [
    'hero' => [
        'eyebrow' => 'Seleccion con metodo',
        'title' => 'Metodo riguroso',
        'lead' => 'Analizamos, comparamos y descartamos antes de recomendar.',
        'support' => 'No mostramos mas opciones. Filtramos mejor para acercarte a decisiones con mas sentido y menos friccion.',
        'tags' => [
            'Filtrado util',
            'Comparacion real',
            'Recomendacion responsable',
        ],
        'cta_text' => 'Ver metodo',
        'cta_url' => '#partimos-del-problema',
        'media' => [
            'aria_label' => 'Seleccion guiada con criterio y validacion',
            'badge' => 'Seleccion guiada',
            'headline' => 'Menos ruido. Mas criterio.',
            'support' => 'Una logica clara antes de comparar.',
            'proof_points' => [
                'Contexto leido',
                'Ruido descartado',
                'Encaje validado',
            ],
        ],
    ],

    'index' => [
        'items' => [],
    ],

    'sections' => [
        [
            'id' => 'partimos-del-problema',
            'title' => 'Partimos del problema',
            'core_idea' => 'No empezamos por el producto. Empezamos por lo que necesita resolverse.',
            'body' => [
                'Un gadget solo tiene sentido si responde a una necesidad concreta. Por eso cada seleccion empieza en el contexto: dolor, viaje, energia, outdoor, entrenamiento o autonomia.',
            ],
            'box' => ['type' => 'criterion', 'text' => 'La necesidad define el producto. El producto no redefine la necesidad.'],
            'compare_items' => [
                'Problema claro',
                'Uso real',
                'Frontera de categoria',
            ],
            'micro_example' => 'No es lo mismo energia para una mochila que energia para una camper.',
            'echo_line' => 'Cuando el punto de partida es correcto, comparar sirve de verdad.',
            'transition' => '',
        ],
        [
            'id' => 'eliminamos-ruido',
            'title' => 'Eliminamos ruido',
            'core_idea' => 'Una seleccion seria no se construye acumulando opciones.',
            'body' => [
                'Quitamos productos repetidos, promesas flojas, categorias mezcladas y soluciones que no aportan una funcion diferencial clara.',
            ],
            'box' => ['type' => 'alert', 'text' => 'Mas productos no significa mejor decision. A veces significa mas ruido.'],
            'compare_items' => [
                'Duplicados fuera',
                'Promesas flojas fuera',
                'Relleno fuera',
            ],
            'micro_example' => 'Si una tarjeta queda mejor con 5 o 6 gadgets, no se rellena hasta 8.',
            'echo_line' => 'Eliminar bien es parte del criterio.',
            'transition' => '',
        ],
        [
            'id' => 'comparamos-lo-importante',
            'title' => 'Comparamos lo importante',
            'core_idea' => 'Comparar mucho no equivale a comparar bien.',
            'body' => [
                'Miramos lo que cambia la decision: utilidad, encaje, precio, imagen real, disponibilidad, funcion principal, limites y confianza del producto.',
            ],
            'box' => ['type' => 'criterion', 'text' => 'Comparar no es ampliar la duda. Es estrechar la decision.'],
            'compare_items' => [
                'Funcion principal',
                'Precio visible',
                'Encaje real',
            ],
            'micro_example' => 'Dos productos pueden parecer iguales hasta que uno ocupa la mitad, pesa menos o resuelve mejor el uso diario.',
            'echo_line' => 'El criterio convierte una lista en una seleccion.',
            'transition' => '',
        ],
        [
            'id' => 'recomendamos-si-encaja',
            'title' => 'Recomendamos si encaja',
            'core_idea' => 'No todo producto real merece entrar.',
            'body' => [
                'Un gadget entra si tiene funcion clara, imagen correcta, enlace real, precio visible y lugar logico dentro de una necesidad concreta.',
            ],
            'box' => ['type' => 'trust', 'text' => 'Si el encaje no es claro, no se fuerza la recomendacion.'],
            'compare_items' => [
                'Producto real',
                'Naming limpio',
                'JSON validado',
            ],
            'micro_example' => 'Si una imagen no coincide con el producto, se corrige la imagen antes de publicar.',
            'echo_line' => 'Recomendar menos, pero mejor, genera mas confianza.',
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