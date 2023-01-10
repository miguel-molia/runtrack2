<?php

function calcule($a, $operation, $b)
{
    
    if ($operation == "+")
    {
        return $a + $b;  
    }

    if ($operation == "-")
    {
        return $a - $b;
    }

    if ($operation == "*")
    {
        return $a * $b;
    }

    if ($operation == "/")
    {
        return $a / $b;
    }

    if ($operation == "%")
    {
        return $a % $b;
    }

    }

    $x = calcule(1, "+", 2);
    echo $x;

    $y = calcule(4, "-", 2);
    echo $y;

    $z = calcule(5, "*", 4);
    echo $z;

    $r = calcule(16, "/", 8);
    echo $r;

    $t = calcule(4, "%", 2);
    echo $t;







?>