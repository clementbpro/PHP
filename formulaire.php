<html>
<body>
<form action="formulaire.php" method="post">

Nom: <input type="text" name="txtnom"><br>
Prénom: <input type="text" name="txtprenom"><br>
Adresse: <input type="text" name="txtadresse"><br>

<input type="submit" name="valid" value="OK">

</form>
<?php
if (isset($_POST["valid"]))
    {
$nom =$_POST["txtnom"];
$prenom =$_POST["txtprenom"];
$adresse =$_POST["txtadresse"];
require_once("connexion.php");
$stmt = $connexion->prepare("INSERT INTO client (nom, prenom, adresse) VALUES (:pNom, :pPrenom,  :pAdresse)");
$stmt->bindValue(':pNom', $nom);
$stmt->bindValue(':pPrenom', $prenom);
$stmt->bindValue(':pAdresse', $adresse);

$stmt->execute();

$nblignes = $stmt->rowCount();
echo $nblignes." ligne(s) insérée(s).</br>";
    }
?>
</body>
</html>