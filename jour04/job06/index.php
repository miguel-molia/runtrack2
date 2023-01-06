<form method="get">

<input type="text" name="nombre">
<input type="submit">


</form>

<?php

//Savoir si le nombre (variable) est differente de vide
if ($_GET["nombre"] != "")

{

    
    //savoir si $_GET["nombre"] est pair
    
    if ($_GET["nombre"] % 2==0)
    {
        //Si c'est pair, afficher "Nombre pair"
        echo "Nombre pair";
    }
    
    //Sinon (impair), afficher "Nombre impair"
    else {
        echo "Nombre impair";
    }

    
    
}
    


?>






