<?php

// aula 2 - include/require

/**
 * include: é usado para incluir um arquivo no script. Se o arquivo não for encontrado, o PHP emitirá um aviso,
 * mas o arquivo continuará sendo executado.
*/
include './data.php';

/**
 * include_once: é semelhante ao 'include', mas garante que o arquivo seja incluído apenas uma vez durante a 
 * execução do arquivo. É útil para evitar a inclusão duplicada de um arquivo.
*/
include_once './data.php';

/**
 * require: também é utilizado para incluir arquivos no script, ma se o arquivo não for encontrado, o PHP
 * emitirá um erro fatal e o script será interrompido. Útil para inclusão de script de conexão com banco de dados.
*/
require './data.php';

/**
 * require_once: é semelhante ao 'require', mas também garante que o arquivo seja incluído apenas uma vez durante a 
 * execução do script, se o arquivo não for encontrado, assim como o 'require', um erro fatal será emitido e a execução
 * será interrompida.
*/
require_once './data.php';

echo $firstName;

//aula 3 - variáveis, tipos e referências
