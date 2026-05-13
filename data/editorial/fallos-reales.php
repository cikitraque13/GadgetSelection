<?php

return [
    'hero' => [
        'eyebrow' => 'Comprar peor empieza antes del clic',
        'title' => 'Fallos reales',
        'lead' => 'Comprar mejor empieza por saber que descartar antes de comparar.',
        'support' => 'Detectamos promesas exageradas, categorias mezcladas, productos duplicados y decisiones mal planteadas antes de recomendar.',
        'tags' => [
            'Errores tipicos',
            'Senales de alerta',
            'Ruido eliminado',
        ],
        'cta_text' => 'Ver fallos',
        'cta_url' => '#comprar-por-categoria',
        'media' => [
            'aria_label' => 'Revision critica de errores de compra',
            'badge' => 'Revision critica',
            'headline' => 'Menos fallos. Mas criterio.',
            'support' => 'Descartar bien tambien forma parte de recomendar bien.',
            'proof_points' => [
                'Promesas filtradas',
                'Riesgos detectados',
                'Ruido eliminado',
            ],
        ],
    ],

    'index' => [
        'items' => [],
    ],

    'sections' => [
        [
            'id' => 'comprar-por-categoria',
            'title' => 'Comprar por categoria',
            'core_idea' => 'La categoria no resuelve. La necesidad si.',
            'body' => [
                'Buscar el mejor gadget sin definir el problema termina en listas largas y decisiones pobres. No hay mejor producto en abstracto. Hay mejor encaje.',
            ],
            'box' => ['type' => 'alert', 'text' => 'El producto equivocado puede parecer correcto si la necesidad esta mal definida.'],
            'compare_items' => [
                'Powerbank de viaje no es bateria camper',
                'Localizador no es seguridad de equipaje',
                'Masaje no sustituye movilidad',
            ],
            'micro_example' => 'Una powerbank grande puede parecer mejor hasta que pesa demasiado para llevarla cada dia.',
            'echo_line' => 'La mala compra empieza cuando el problema esta mal nombrado.',
            'transition' => '',
        ],
        [
            'id' => 'comprar-por-numero',
            'title' => 'Comprar por cifra grande',
            'core_idea' => 'La cifra grande vende. El uso real decide.',
            'body' => [
                'Mas potencia, mas modos o mas capacidad no siempre significan mejor compra. A veces solo significan mas friccion.',
            ],
            'box' => ['type' => 'alert', 'text' => 'Mas numero no significa mas valor.'],
            'compare_items' => [
                'Mas mAh puede ser mas peso',
                'Mas modos puede ser mas confusion',
                'Mas potencia puede ser mas ruido',
            ],
            'micro_example' => 'Una cinta de correr rapida no sirve si no se pliega bien o vibra demasiado en casa.',
            'echo_line' => 'El numero correcto ayuda. El numero inflado distrae.',
            'transition' => '',
        ],
        [
            'id' => 'comprar-sin-contexto',
            'title' => 'Comprar sin contexto',
            'core_idea' => 'Un buen producto puede fallar en el lugar equivocado.',
            'body' => [
                'Antes de recomendar miramos espacio, uso, frecuencia, transporte, montaje, peso, ruido y compatibilidad. La compra buena tiene que vivir bien en tu rutina.',
            ],
            'box' => ['type' => 'criterion', 'text' => 'El contexto convierte una ficha tecnica en una decision real.'],
            'compare_items' => [
                'Casa pequena: importa el plegado',
                'Viaje: importa peso y tamano',
                'Escritorio: importa compatibilidad',
            ],
            'micro_example' => 'Un soporte puede ser excelente y aun asi no servir si tu mesa no tiene espacio o estabilidad.',
            'echo_line' => 'El producto no vive en una ficha. Vive en tu uso real.',
            'transition' => '',
        ],
        [
            'id' => 'comprar-por-promesa',
            'title' => 'Comprar por promesa',
            'core_idea' => 'Si promete resolverlo todo, hay que mirar dos veces.',
            'body' => [
                'Desconfiamos de productos con demasiadas promesas, titulos infinitos, imagenes genericas o funciones que no se explican con claridad.',
            ],
            'box' => ['type' => 'trust', 'text' => 'Recomendar bien tambien es saber decir no.'],
            'compare_items' => [
                'Promesa exagerada: revisar',
                'Marca confusa: revisar',
                'Uso poco claro: descartar',
            ],
            'micro_example' => 'Un gadget que dice servir para todo suele ser mediocre en lo que realmente importa.',
            'echo_line' => 'Descartar bien protege mas que mostrar demasiado.',
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