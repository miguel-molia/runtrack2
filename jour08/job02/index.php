<?php


if (!isset($_COOKIE["nbvisites"]))
{
    setcookie("nbvisites",0);
}

else {
    $_COOKIE["nbvisites"]++;
}

echo setcookie("nbvisites");


if ($_POST["count"] == "Reset") 


{ session_destroy();

}

?>

<form method="post">
    <input type="submit" name="count" value="Reset" >
</form>