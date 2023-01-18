<?php

session_start();

if (!isset($_SESSION["nbvisites"]))
{// si la variable n'existe pas 
    $_SESSION["nbvisites"] = 0;
} //  la variable commence a 0

else { 
    $_SESSION["nbvisites"]++;
}// sinon incrementes de 1 a chaque visite

 echo $_SESSION["nbvisites"];
// affiches la variable

if ($_POST["count"] == "reset")

{
    session_destroy();
    header('Location: http://localhost/runtrack2/jour08/job01/');
}

?>

<form method="post">
    <input type="submit" name="count" value="reset" >
</form>