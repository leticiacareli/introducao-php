<?php

$fruits = ['apple', 'orange', 'lemon', 'strawberry'];
$i = 0;

do {
    echo $fruits[$i] . " ";
    $i++;
} while ($i < count($fruits));