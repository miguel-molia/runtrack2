<?php

for ($x=0; $x<=100; $x=$x+1)
{
    
    if ($x>=0 && $x<=20) {
        echo "<i>".$x."</i>"."</br>";
    }
    else if ($x==42) {
        echo "LaPlateforme"."</br>";
    }
    else if ($x>=25 && $x<=50) {
        echo "<u>".$x."</u>"."</br>";
    }
    
   
    
    else { echo $x . "</br>";}
     
}




?>