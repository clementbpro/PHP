<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("connexion.php");
    $stmt=$connexion->prepare('SELECT * FROM lieu WHERE codePostal LIKE "17%";');
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();

    while($enreg=$stmt->fetch())
        echo $enreg->codePostal." ".$enreg->libelle."</br>";
?>
</body>
</html>