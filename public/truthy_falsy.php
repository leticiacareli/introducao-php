<?php
//aula 11 - Truthy e Falsy

/**
 * Os termos 'truty' e 'falsy', são usados para descrever valores que podem ser avaliados como verdadeiros ou falsos
 * em contextos booleanos. Esses conceitos são frequentemente usados em estruturas de controle condicionais,
 * como declarações 'if', para determinar se uma determinada expressão é considerada verdadeira ou falsa.
 * 
 * Truty: são aqueles que são considerados como "verdadeiro" quando são avalidos em contextos booleano.
 * Isso significa que, se um valor truthy for usado em uma expressão booleana, ele será tratado como 'true'.
 * 
 * Exemplos:
 * 
 * -> Todos os números diferentes de zero;
 * -> Strings não vazias;
 * -> Arrays nã vazio;
 * -> Objetos;
 * -> Qualquer outro valor que não seja explicitamente falsy.
 * 
 * Falsy: são aqueles que são considerados como "falsos" quando avaliados em um contexto booleano.
 * Isso significa que, se um valor falsy for usado em uma expressão booleana, ele será tratado como 'false'.
 * 
 * Exemplos:
 * 
 * -> O número zero;
 * -> String vazia;
 * -> null;
 * -> false;
 * -> 0.0;
 * -> Arrays vazios;
 * -> Objetos sem propriedades ou métodos definidos;
*/

$value = 43;
$value2 = "";

if($value)
{
    echo 'valor é truthy';
}

if(!$value2)
{
    echo 'valor é falsy';
}