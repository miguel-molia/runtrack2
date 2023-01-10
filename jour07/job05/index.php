<?php

function occurrences($str, $char)

{

    $nombre=0;

    
    for ($i=0; isset ($str[$i]); $i++) { 
        
        if ($str[$i]==$char)
        {
             $nombre++;
        }
    }

    echo $nombre;
}


occurrences("bonjour","o");



?>