<?php

/**
 * Crie um programa que calcule o fatorial de um número inteiro positivo fornecido pelo usuário. O fatorial de um número N é dado pela multiplicação de todos os números de 1 a N.
*/

$n = 6;
$fatorial = 1;

for($i = 1; $i <= $n; $i++)
{
    $fatorial *= $i;
}

var_dump($fatorial);