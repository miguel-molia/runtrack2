
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php 

    $myname = "Miguel";
    $myage = 31;
    $myrecord = 18.4;
    $isCorrect = true;


?>

<table>
    <caption>Variables</caption>
    
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td> String</td>
            <td> $myname </td>
            <td> <?= $myname?> </td>
        </tr>
        <tr>
            <td> Int </td>
            <td> $myage</td>
            <td> <?= $myage?> </td>
        </tr>
        <tr>
            <td> Float</td>
            <td> $myrecord </td>
            <td> <?= $myrecord?> </td>
        </tr>
        <tr>
            <td> Bool</td>
            <td> $isCorrect </td>
            <td> <?= $isCorrect?> </td>
        </tr>
</table>



    
</body>
</html>