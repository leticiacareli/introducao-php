<?php
/**
 * Escreva um programa que calcule a soma dos números pares de 1 a N, onde N é um número inteiro fornecido pelo usuário.
*/

$n = 10;
$evenNumber = 0;

for($i = 1; $i <= $n; $i++)
{
    if($i % 2 == 0)
    {
        $evenNumber += $i;
    }
}

var_dump($evenNumber);