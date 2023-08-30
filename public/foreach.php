<?php 

$fruits = ['apple', 'orange', 'lemon', 'strawberry'];

foreach($fruits as $key => $fruit)
{
    echo $key . ' => ' . $fruit . "\n"; 
}

//Continue e break

foreach($fruits as $key => $fruit)
{
    if($key === 1)
    {
        // continue;
        break;
    }

    echo $fruit . " ";
}