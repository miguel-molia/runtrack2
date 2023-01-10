<?php

for ($x=0; $x<=100; $x++)
{
    if ($x % 3 == 0 && $x % 5 == 0)
    {
        echo $x . "FizzBuzz". "</br>";
    }

    elseif ($x % 3 == 0)
    {
        echo $x . "Fizz" . "</br>";
    }

    elseif ($x % 5 == 0)
    {
        echo $x . "Buzz" . "</br>";
    }


    else 
    { echo $x. "</br>";
    
    }
}






?>