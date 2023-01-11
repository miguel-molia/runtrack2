<?php


$str = "I'm sorry Dave I'm afraid I can't do that.";
$voy= "aeiouyAEIOUY";

for ($x=0; isset ($str[$x]) == true; $x=$x+1)
{//pour la variable str
    
    
    for ($y=0; isset ($voy[$y]) == true; $y=$y+1)
    {  //pour la variable voy dans la variable str (connecter les deux)

        if ($str[$x] == $voy[$y])
        {//si la variable str de $x est indentique à la variable voy de $y
            echo $str[$x];
        }// tu m'affiches la variable str de $x


    }
}






?>
