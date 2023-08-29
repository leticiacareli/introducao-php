<?php
//aula 13 - condicionais: switch

$isAdmin = 'Maria';

switch ($isAdmin)
{
    case true:
        echo 'é admin';
        break;
    
    case false:
        echo 'não é admin';
        break;
    
    default:
        echo 'não encontrado';
        break;
}