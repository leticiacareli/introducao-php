<?php
function connection()
{
    $pdo = new PDO('mysql:host=localhost;dbname=dbalbums;', 'root', '');
    return $pdo;
}

function getData($table)
{
    $connection = connection();
    $query = $connection->query("select * from {$table}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData('albums'));