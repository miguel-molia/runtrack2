<form method="get">
    
    <input type="text" name="prenom">
    <input type="text" name="nom">
    <input type="submit">

</form>


<?php

    if($_GET["prenom"] != "" && $_GET["nom"] != "")
    {
        echo $_GET["prenom"] .' '. $_GET["nom"];
    }


?>

<table>
    <tr>
    <th>Prénom</th>
    <th>Nom</th>
    </tr>
    <tr>
    <td><?php echo $_GET['prenom']?></td>
    <td><?= $_GET['nom']?></td>
    </tr>

</table>
    

