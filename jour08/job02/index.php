<?php
    setcookie("utilisateur", "nbvisites", time());

    
    if (isset($_COOKIE['nbvisites'])) {
        
        setcookie('nbvisites', $_COOKIE['nbvisites'] + 1);
        
        echo $_COOKIE['nbvisites'] + 1;
    
    }

   
    if (isset($_GET['reset'])) {
       
        setcookie('nbvisites', 0);
    
    }
    
    ?>

    
<form action="" method="get">
        
    <input type="submit" name="reset" value="Reset">
    
</form>