<?php
if (isset($_COOKIE['username'])) {
    header('Location: /Blog');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Connnexion</title>
</head>

<body>
    <?php
    require_once '../includes/menu.php';
    ?>
    <div class="login container col-xl-4">

        <?php
        if (isset($_GET['user']) && $_GET['user'] == 'unknown') {
            echo "<h2>Les identifiants saisis sont incorrects. Veuillez les verifier et Réessayer !</h2>";
        }
        ?>
        <form action="/Blog/processing/login.php" method="POST">

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudnyme ici" minlength="5" maxlength="20" required class="form-control">
            <br />
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" required class="form-control">
            <br />
            <button type="submit" class="btn btn-secondary">Se connecter</button>
            <br />
            <p>Déja un compte ? Inscrivez-vous en cliquant <a href="/Blog/pages/inscription.php">ici</a></p>
        </form>
    </div>
</body>

</html>