<?php
$mysqli=new mysqli("localhost", "root", "root", "jour09");
if( $mysqli->connect_error ) {
    echo "erreur de connexion a MySQL:" .$mysqli -> connect_error;
    exit();
}
$request=$mysqli->query("SELECT salles.nom, etage.nom FROM salles, etage WHERE etage.id = salles.id_etage");
$result=$request->fetch_all();
var_dump($result)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<table>
    <thead>
        <tr>
        
        <th>Nom des salles </th>
        <th>Nom des etages</th>
        </tr>
    </thead>
    <tbody>
        
    
    <?php foreach($result as $value): ?>
             <tr>   
            <td>
                <?= $value[0]  ?>
            </td>
            <td>
            <?= $value[1]  ?>
            </td>
            </tr>
                <?php endforeach; ?>


       
       
    </tbody>
</table>  

</body>
</html>

<style>

table {
    border-collapse: collapse;
}

th, td 
{
    border: 1px solid; 
}

</style>