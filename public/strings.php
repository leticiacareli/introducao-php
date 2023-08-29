<?php

$name = 'Letícia';
$age = 28;

//aspas simples PHP entende que é tudo texto
$data = '{$name} tem {$age} anos';

//aspas duplas a variável funciona
$data = "{$name} tem {$age} anos";

echo $data;

echo nl2br("\n");

//contagem de caracteres
echo strlen($data);

echo nl2br("\n");

//corta texto
echo substr($data, 0, 15);

echo nl2br("\n");

//verifica se contém dentro da string
echo str_contains($data, 28);