<?php

for ($x=0; $x<=100; $x=$x+1)
{
    echo $x . "</br>";
    
    if ($x>=0 && $x<=20) {
        echo "<i>".$x."</i>"."</br>";
    }

    if ($x>=25 && $x<=50) {
        echo "<u>".$x."</u>"."</br>";
    }

    if ($x==42) {
        echo "LaPlateforme"."</br>";
    }
}




?>