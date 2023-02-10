<?php
    session_start();
    $_SESSION["username"] = "Raissa";
    //   Nom de la session

    // Modifier le nom de l'utilisateur
    $name =  !empty($_POST["name"]) ? $_POST["name"] : $_SESSION["username"];

    // Si déconnexion
    if (isset($_GET["logout"])) {
        unset($_SESSION['username']);
        session_destroy();
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
        <input type="text" name="name" id="name" placeholder="Nom">
        <input type="submit" value="Valider">
    </form>

    <a href="<?= htmlspecialchars($_SERVER["PHP_SELF"]."?logout=true"); ?>">Déconnexion</a>

    <!-- message de bienvenue -->
    <h3>Bienvenue <?= $name ?> </h3>
</body>
</html>