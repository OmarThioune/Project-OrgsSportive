<?php
require_once 'Framework/Vue.php';

$sports = [
    [
        'id' => 1,
        'name' => 'Football',
        'description' => 'Sport collectif joué avec un ballon rond',
        'teams' => [
            [
                'id' => 101,
                'name' => 'FC Test',
                'stadium' => 'Stade Test A',
                'sport_id' => 1
            ],
            [
                'id' => 102,
                'name' => 'Real Bidon',
                'stadium' => 'Stade Test B',
                'sport_id' => 1
            ]
        ]
    ],
    [
        'id' => 2,
        'name' => 'Basketball',
        'description' => 'Sport collectif joué avec un ballon et un panier',
        'teams' => [] 
    ],
    [
        'id' => 3,
        'name' => 'Rugby',
        'description' => 'Sport collectif de contact',
        'teams' => [
            [
                'id' => 201,
                'name' => 'Rugby Bidon Club',
                'stadium' => 'Stade Test C',
                'sport_id' => 3
            ]
        ]
    ]
];

$vue = new Vue('index', 'Sports'); 
$vue->generer(['sports' => $sports]);
