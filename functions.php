<?php

session_start();

function getQuestions()
{
    return [
        [
            'question' => 'W którym roku rozpoczęła się II wojna światowa?',
            'answers' => ['1914', '1939', '1945'],
            'correct' => 1
        ],
        [
            'question' => 'Kto odkrył Amerykę?',
            'answers' => ['Krzysztof Kolumb', 'Napoleon', 'Cezar'],
            'correct' => 0
        ],
        [
            'question' => 'Które imperium upadło w 1453 roku?',
            'answers' => ['Rzymskie', 'Bizantyjskie', 'Brytyjskie'],
            'correct' => 1
        ]
    ];
}