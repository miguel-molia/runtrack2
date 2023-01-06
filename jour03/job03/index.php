<?php


$str = "I'm sorry Dave I'm afraid I can't do that.";
$voy= "aeiouyAEIOUY";

for ($x=0; isset ($str[$x]) == true; $x=$x+1)
{
    
    
    for ($y=0; isset ($voy[$y]) == true; $y=$y+1)
    {  

        if ($str[$x] == $voy[$y])
        {
            echo $str[$x];
        }


    }
}






?>
