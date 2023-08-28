<?php

/**
 * Implemente um programa que gere os primeiros N termos da série de Fibonacci. A série de Fibonacci começa com 0 e 1, e cada termo subsequente é a soma dos dois termos anteriores.
*/

$n = 8;
$primeiroTermo = 0;
$segundoTermo = 1;

for($i = 1; $i <= $n; $i++)
{
    //A cada iteração do loop, exibimos o valor atual de '$primeiroTermo', 
    //que é um termo da série de Fibonacci.
    echo $primeiroTermo . " ";

    //Calculando o próximo termo, somando os valores de '$primeiroTermo' e '$segundoTermo'.
    $proximoTermo = $primeiroTermo + $segundoTermo;

    //Atualizando os valores para prepará-los para o próximo loop da série.
    $primeiroTermo = $segundoTermo;
    $segundoTermo = $proximoTermo;
}

