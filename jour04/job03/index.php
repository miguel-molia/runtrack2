<form method="post">
   
    <input type="text" name="test">
    
    <input type="submit">

</form>


<?php

$a=0;


foreach ($_POST as $x)
{
    if($_POST["test"] != "")
    {
        $a++;

    }

    
}

echo "Le nombre d’argument GET envoyé est :".$a;



    ?> 