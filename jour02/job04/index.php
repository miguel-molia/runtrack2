<?php

for ($x=0; $x<=100; $x=$x+1)
{
    if ($x % 3 == 0)
    {
        echo "Fizz" . "</br>";
    }

    if ($x % 5 == 0)
    {
        echo "Buzz" . "</br>";
    }

    if ($x % 3 == 0 && $x % 5 == 0)
    {
        echo "FizzBuzz";
    }
}






?>