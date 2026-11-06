<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Récupération des données
    $nom = $_GET["txtlogin"];
    $mdp = $_GET["txtmdp"];
    $couleurs = $_GET["couleur"];
    
    //Traitements des données
    echo "Votre nom d'utilisateur est : ".$nom."<br/> Votre mot de passe est : " .$mdp;
    "<br/>Vos couleurs préférées sont";
    foreach($couleurs as $c)
        echo $c. " ; ";
?>
</body>
</html>