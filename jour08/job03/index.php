
<?php

session_start();


if (isset($_GET["prenom"]))
{
    $_SESSION["prenom"] = $_GET["prenom"];

    
    echo $_GET["prenom"];
   
}
// if ($_GET["count"] == $_SESSION["reset"]){
//     session_destroy();

// }
?>

<form>

<input type="text" name="prenom">
<input type="submit">
<input type="submit" name="count" value="reset">

</form>






