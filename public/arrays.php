<?php

$data = ['apple', 'orange', 24, true, false];

// print_r($data);

// var_dump($data);

// var_dump($data[1]);

//add elemento no final do array
array_push($data, 'last');


//add elemento no início do array
array_unshift($data, 'first');

$person = 
[
    'name'  => 'Letícia',
    'age'   => 28,
    
    'documents' => 
    [
        'cpf'   => 12345,
        'rg'    => 123,
    ],
];

var_dump($person);