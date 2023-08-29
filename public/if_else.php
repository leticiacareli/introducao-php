<?php
// aula 12 - condicionais: if-else

//return
$isAdmin = true;

if($isAdmin)
{
    echo 'é admin';
    return;
}

echo 'não é admin';

//operadores ternários
echo ($isAdmin) ? 'é admin' : 'não é admin';