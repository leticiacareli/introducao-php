<?php

/**
 * Faça um programa que verifique se um número dado pelo usuário é primo ou não. Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.
*/

//O número inicial que queremos verificar
$n = 63;

//Supomos inicialmente que o número é primo
$isPrime = true;

//Números menores ou iguais a 1 não são primos
if($n <= 1)
{
    $isPrime = false;
}
else
{
    //entramos no loop 'for' que varia de '$i = 2' até a raiz quadrada de '$n'.
    for($i = 2; $i <= sqrt($n); $i++)
    {   
        //verificamos se '$n' é divisivel por '$i'. Se encontrarmos algum divisor, isso significa que '$n' não é primo,
        //então definimos '$isPrime' como 'false' e saímos do loop usando o 'break'.
        if($n % $i == 0)
        {
            $isPrime = false;
            break;
        }
    }
}

//verificamos o valor de '$isPrime', se permanecer 'true', isso significa que não encontramos divisores além de 1 e do próprio número,
//portanto, '$n' é primo. Se '$isPrime' for 'false', exibimos a mensage, de que '$n' não é primo.
if($isPrime)
{
    echo "$n é primo";
}
else
{
    echo "$n não é primo";
}