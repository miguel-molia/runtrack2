<?php

for ($x=0; $x<=100; $x++)
{
    
    if ($x>=0 && $x<=20) {
        echo "<i>".$x."</i>"."</br>";
    }
    
    elseif ($x==42) {
        echo "LaPlateforme"."</br>";
    }
    
    elseif ($x>=25 && $x<=50) {
        echo "<u>".$x."</u>"."</br>";
    }
    
   
    else { echo $x . "</br>";}
     
}




?>