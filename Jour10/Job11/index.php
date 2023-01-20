<?php
$mysqli=new mysqli("localhost", "root", "root", "jour09");
if( $mysqli->connect_error ) {
    echo "erreur de connexion a MySQL:" .$mysqli -> connect_error;
    exit();
}
$request=$mysqli->query("SELECT AVG(capacite) AS capacite_moyenne FROM salles");
$result=$request->fetch_assoc();

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
        
                <th> Capacite Moyenne</th>
                
        </tr>
    </thead>
    <tbody>
        
       <tr>
        <td><?= $result['capacite_moyenne'] ?></td>
       </tr>
       
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