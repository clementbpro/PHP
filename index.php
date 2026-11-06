<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nom = "Clément";
        $anneeDeNaissance = 2008;
        $anneeActuelle = 2026;
        $age = $anneeActuelle - $anneeDeNaissance;
        echo "<h1>Salut $nom !</h1>";
        echo "<p>Tu as actuellement : $age ans ! </p>";
        $x = 5;
        $y = 5;
        $total = $x+$y;
        if ($total > 10)
        {
            echo $total. " : ";
            echo " C'est plus grand";
        } 
        else
        {
            echo "C'est plus petit";
        }

        $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
    $x++;
}

$tab=array("lundi", "mardi", "mercredi");

foreach($tab as $item)
    echo $item. "<br/>";
    ?> 
</body>
</html>