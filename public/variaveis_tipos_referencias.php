<?php
//aula 3 - variáveis, tipos e referências

/**
 * VARIÁVEL: é um nome simbólico que representa um valor armazenado na memória de um programa de computador.
 * Ela é usada para armazenar e manipular dados durante a execução de um script. As variáveis tem um papel fundamental na programação,
 * pois permitem que armazene informações, realize códigos, tome decisões e crie lógicas complexas.
 * 
 * No exemplo abaixo, '$age' e '$name' são variáveis, o símbolo '$' é usado para indicar que algo é uma variável, seguido pelo nome da variável, as variáveis podem armazenar diferentes tipos de dados, como números inteiros, números de ponto flutuante, textos, lógicos
 * e até mesmo estruturas mais complexas, como arrays e objetos.
*/

$age = 25;
$name = 'Letícia';

/**
 * TIPOS DE DADOS: o PHP suporta vários tipos de dados, que são utilizados para armazenar diferentes tipos de informações:
*/

/**
 * integer: representa números inteiros, positivos e negativos, sem casas decimais.
*/

$age = 25;

/**
 * float ou double: representa números com casas decimais.
*/

$height = 1.75;

/**
 * string: representa sequencia de caracteres, como texto.
*/

$fullName = "Maria dos Santos";

/**
 * booleanos: representa valores de verdadeiro (true) ou falso (false).
*/

$havePermission = false;

/**
 * array: é uma coleção de valores, onde cada valor é acesso por meio de um índice. Os arrays podem conter valores de diferentes tipos.
*/

$colors = [25, "blue", "green", 1, 1.75];

/**
 * object: representa instancias de classes definidas pelo usuário. Os objetos contêm propriedades e métodos que permitem modelar entidades do mundo real.
*/

class Person
{
    public $name;
    public $age;
}

$person = new Person();
$person->name = "João";
$person->age = 30;

/**
 * null: representa a ausência de valor ou não inicialização de uma variável.
*/

/**
 * REFERÊNCIA: passar um valor por referência no PHP significa permitir que uma função modifique diretamente o valor de uma variável
 * definida fora do escopo da função. Em PHP, por padrão, os argumentos de uma função são passados por valor,
 * o que siginifica que a função trabalha com cópias dos valores originais. No entanto, é possível passar um argumento por referência,
 * usa-se o símbolo '&' antes do parâmetro da função e na chamada da função.
 * 
 * No exemplo abaixo, a função 'bendyByReference' recebe um parâmetro por referência '&$number'. Isso significa que qualquer alteração
 * feita ao parâmetro dentro da função afetará diretamente a variável original '$value' definida fora da função.
 * Quando a função é chamada com '$value' como argumento, o valor é dobrado dentro da função e a alteração e refletida quando o 
 * valor de '$value' é impresso após a chamada da função.
*/

function bendyByReference(&$number)
{
    $number *= 2;
}

$value = 7;
bendyByReference($value);

echo $value; //output: 10