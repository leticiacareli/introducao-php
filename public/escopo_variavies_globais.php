<?php

$name = 'Letícia';

function person()
{
    global $name;
    // echo $name;

    //ou

    echo $GLOBALS['name'];
}

person();