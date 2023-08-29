<?php
//aula 4 - constantes

/**
 * Em PHP, as constantes são valores que permanecem inalterados durante a execução do script.
 * Ela são usadas para armazenar valores que não devem ser modificados ao longo do código,
 * como configurações, vaores fixos e outras informações constantes. 
 * Diferente das variáveis, as contantes não podem ser reatribuídas após serem definidas 
 * e não possuem o símbolo '$' antes do nome.
 * 
 * No exemplo abaixo, 'CONSTANT_NAME' é o nome da constante e 'constant_value' é o valor atribuído a ela.
 * As constantes são definidas usando a função 'define()', que recebe dois argumentos: o nome (em letras maíusculas, por convenção)
 * e o valor que a constante deve armazenar. Após a definição, a constante pode ser utilizada em qualquer parte do código,
 * e o valor dela permanecerá constante ao longo da execução do script.
*/

define('CONSTANT_NAME', "constant_value");
echo CONSTANT_NAME;


/**
 * Algumas características importantes das constantes em PHP:
 * 
 * Não há necessidade de usar o símbolo '$': Diferentemente das variáveis, as constantes não usam o símbolo '$' antes do nome;
 * 
 * Não é possível redefinir uma constante: Depois que uma constante é definida, ela não pode ser alterada o valor dela durante a 
 * execução do script;
 * 
 * Escopo global: As constantes são globais, o que significa que podem ser acessadas de qualquer lugar do código;
 * 
 * Convensão de nomenclatura: Por conversão, os nomes das constantes são geralmente escritos em letras maiúsculas
 * e separadas por underline (_), exemplo: 'CONSTANT_NAME';
 * 
 * Não é necessário o uso de aspas para valores numéricos: Se o valor da constante for um número, não precisa usar aspas para defini-lo;
*/

/**
 * CONSTANTES MÁGICAS: são um conjunto de constantes pré-definidas que fornecem informações contextuais sobre o script em execução.
 * Essas constantes são automáticas e não precisam ser declaradas, pois são fornecidas pelo próprio PHP.
 * Elas começam e terminam com dois underlines, como '__CONSTANT__'.
 * 
 * As constantes mágicas são usadas para obter informações sobre o ambiente de execução do script, o arquivo atual,
 * o local de chamada e outras informações úteis durante o desenvolvimento e depuração de scripts PHP
 * 
 * Algumas das constantes mágicas mais comuns:
 * 
 * '__LINE__': Retorna o número da linha atual no script;
 * '__FILE__': Retorna o caminho completo e o nome do arquivo;
 * '__DIR__': Retorna o diretório do arquivo atual;
 * '__FUNCTION__': Retorna o nome da função atual;
 * '__CLASS__': Retorna o nome da classe atual (funciona somente dentro do contexto de uma classe);
 * '__METHOD__': Retorna o nome do método atual (funciona somente dentro do contexto de uma classe);
 * '__NAMESPACE__': Retorna o namespace atual;
 * '__TRAIT___': Retorna o nome do trait atual (funciona somente dentro do contexto de um trait).
 * 
 * Essas constantes mágicas podem ser usadas para fornecer informações úteis em memsagens de erros, logs 
 * ou para ajudar na depuração. Segue um exemplo de como podemos usar algumas dessas constantes mágicas: 
*/

echo "Estamos na linha " . __LINE__ . " do arquivo " . __FILE__;

/**
 * Verificando se uma constante foi definida.
*/

define('NAME', 'Letícia');

if(defined('NAME'))
{
    echo 'foi definido';
}
else
{
    echo 'não foi definido';
}

/**
 * Lista de todas as constantes fornecidas pelo PHP
*/

$const = get_defined_constants(true);

var_dump($const);