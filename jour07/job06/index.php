<?php 
    
function leetSpeak($str){
    for($i=0; isset($str[$i]); $i++){   
   if($str[$i]=="a" || $str[$i]=="A"){
  $str[$i]=4;
   }
elseif ($str[$i]=="b" || $str[$i]=="B") {
    $str[$i]=8;
}
elseif ($str[$i]=="E" || $str[$i]=="e") {
    $str[$i]=3;
}
elseif ($str[$i]=="G" || $str[$i]=="g") {
    $str[$i]=6;
}
elseif ($str[$i]=="L" || $str[$i]=="l") {
    $str[$i]=1;
}
elseif ($str[$i]=="s" || $str[$i]=="S") {
    $str[$i]=5;
}
elseif ($str[$i]=="T" || $str[$i]=="t") {
    $str[$i]=7;
}
}
    return $str;
    }


$leet=leetSpeak("Ballade dans les tiges");
echo $leet;
    ?> 

0