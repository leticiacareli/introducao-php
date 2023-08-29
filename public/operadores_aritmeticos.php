<?php
//aula 6 - operadores aritméticos

$n1 = 30;
$n2 = 3;

echo nl2br("\n");

//soma
echo nl2br("\n Soma = " . $n1 + $n2);

//subtração
echo nl2br("\n Subtração = " . $n1 - $n2);

//multiplicação
echo nl2br("\n Multiplicação = " . $n1 * $n2);

//divisão
echo nl2br("\n Divisão = " . $n1 / $n2);

//operação com mais de 1 operador aritmético

$operacao = ($n1 + $n2) * 5;
echo nl2br("\n" . $operacao);