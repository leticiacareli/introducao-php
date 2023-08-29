<?php

/**
 * Crie um programa que verifique se uma palavra fornecida pelo usuário é um palíndromo, ou seja, se ela é lida da mesma forma tanto de trás para frente quanto de frente para trás.
*/

$sentence = "amor a roma";

$replaced = str_replace(" ", "", $sentence);

var_dump($replaced);

$pieces = str_split($replaced);

var_dump($pieces);