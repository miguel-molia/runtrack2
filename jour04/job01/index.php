
<form method="get">
   
    <input type="text" name="test">
    
    <input type="submit">

</form>


<?php

$a=0;


foreach ($_GET as $x)
{
    if($_GET["test"] != "")
    {
        $a++;

    }

    
}

echo "Le nombre d’argument GET envoyé est :".$a;



    ?> 