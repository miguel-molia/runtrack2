<form method="post">

    <input type="text" name="username">
    <input type="text" name="password">
    <input type="submit">



</form>

<?php

var_dump($_POST["username"]);

if ($_POST["username"] !="" && $_POST["password"] != "")

{

    
    
    if (
        $_POST["username"] == "John" && $_POST["password"] == "Rambo"
     )
     
     {
         echo "C'est pas ma guerre";
        }
        
        else {
            echo "Votre pire cauchemar";
        }
        
    }
        
        
        
?>





