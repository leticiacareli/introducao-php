<?php
/**
 * Um callback em PHP é uma função que é passada como argumento para outra função e é executada após a conclusão dessa função. Isso permite que você defina um comportamento personalizado que será executado em um determinado ponto do código. Os callbacks são amplamente utilizados em situações em que você deseja estender ou modificar o comportamento de uma função sem precisar modificar o próprio código da função.
*/

function name($name)
{
    return "Olá, meu nome é {$name}";
}

function callName($callback)
{  
    //verificando se '$callback' é uma função
    if(is_callable($callback))
    {
        return $callback('Letícia');
    }
}

echo callName('name');

//call_user_func
function showName($name)
{
    return "Olá, meu nome é {$name}";
}

echo call_user_func('showName', 'Letícia');

//classe
class User
{
    public function person($name, $age)
    {
        return "Olá, meu nome é {$name} e minha idade é {$age}";
    }
}

$user = new User;

echo call_user_func([$user, 'person'], 'Letícia', 28);

//call_user_func dentro de outras funções
function showFullName($name)
{
    return "Olá, meu nome é {$name}";
}

function callInfo($callback)
{
    return call_user_func($callback, 'Letícia');
}

echo callInfo('showFullName');

//__invoke pode ser passado como callback
class Car
{
    public function __invoke()
    {
        return 'Spacefox';
    }
}

$car = new Car;

function callCar($callback)
{
    return $callback();
}

echo callCar($car);

//call_user_func_array
function car($brand, $model)
{
    return "Meu carro é da marca {$brand} e seu modelo é {$model}";
}

echo call_user_func_array('car', ['Volkswagem', 'Spacefox']);

//closures
$user = function($name)
{
    return "Meu nome é {$name}";
};

function callNames($callback)
{
    return $callback('Letícia');
}

echo callNames($user);