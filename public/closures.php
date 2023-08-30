<?php
/**
 * Uma closure em PHP é uma função anônima que pode ser armazenada em uma variável, passada como argumento para outras funções e até mesmo retornada por outras funções. As closures permitem que você crie blocos de código reutilizáveis que podem ser tratados como objetos. Elas são úteis em situações em que você deseja definir um comportamento específico para uma função de maneira flexível e dinâmica.
*/

$person = function($name)
{
    return $name;
};

var_dump($person('Letícia'));

function lastName()
{
    $person = function()
    {
        return 'Careli';
    };

    return $person;
}

var_dump(lastName()());