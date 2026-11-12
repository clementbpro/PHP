<?php
$pdo = new PDO("mysql:host=localhost;dbname=bddFormation;charset=utf8", "root", "");


$reqActivites = $pdo->query("SELECT numero, libelle FROM activite");
$activites = $reqActivites->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['activite']) && !empty($_GET['activite'])) {
    $reqActions = $pdo->prepare("SELECT intitule FROM action WHERE numeroActivite = :numActivite");
    $reqActions->execute(['numActivite' => $_GET['activite']]);
    $actions = $reqActions->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accès Bibliothèque Numérique</title>
</head>
<body>
    <form method="GET" action="">
        <label for="activite"><strong>Activité :</strong></label>
        <select name="activite" id="activite" onchange="this.form.submit()">
            <option value="">-- Choix --</option>
            <?php foreach ($activites as $act): ?>
                <!-- On garde l'option sélectionnée visible après le rechargement -->
                <option value="<?= htmlspecialchars($act['numero']) ?>" <?= (isset($_GET['activite']) && $_GET['activite'] == $act['numero']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($act['libelle']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

    <?php if (!empty($actions)): ?>
        <p><strong>Action :</strong></p>
        <?php foreach ($actions as $action): ?>
            <!-- Affichage dans des champs input comme sur l'image -->
            <input type="text" value="<?= htmlspecialchars($action['intitule']) ?>" readonly style="display:block; margin-bottom:5px; width:300px;"><br>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>