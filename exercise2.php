<?php
    // Sauvegarde des données de connexion
    setcookie("username", "raissa", time() + (86400 * 30), "/"); // 86400 = 1 day

    $submit = false;
    $connexion = false;
    // 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submit = true;
        if (($_COOKIE["username"] == $_POST["username"])) {
            $connexion = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" id="username" placeholder="Nom de l'utilisateur">
        <input type="submit" value="Envoyer">
    </form>

    <!-- message de connexion -->
    <?php if($submit): ?>
        <h3>Connexion <?= $connexion ? "success" : "error" ?> </h3>
    <?php endif; ?>

</body>
</html>