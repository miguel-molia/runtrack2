<form method="post">
    
    <input type="text" name="prenom">
    <input type="text" name="nom">
    <input type="submit">

</form>


<?php

    if($_POST["prenom"] != "" && $_POST["nom"] != "")
    {
        echo $_POST["prenom"] .' '. $_POST["nom"];
    }


?>

<table>
    <tr>
    <th>Prénom</th>
    <th>Nom</th>
    </tr>
    <tr>
    <td><?php echo $_POST['prenom']?></td>
    <td><?= $_POST['nom']?></td>
    </tr>

</table>