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
    <title>Inscription</title>
</head>

<body>
    <?php
    require_once '../includes/menu.php';
    ?>
    <div class="signin  container col-xl-4">

        <?php
        if (isset($_POST['email']) && $_GET['error']) {
            echo "<h2>Email invalide. Veuillez saisir entre 5 et 50 caractères.</h2>";
        }

        if (isset($_GET['password']) ==  'error') {
            echo "<h2>les mots de passe ne sont pas identiques</h2>";
        }
        ?>

        <form action="/Blog/processing/authentification.php" method="POST">
            <label for="username">Adresse Email</label>
            <input type="email" name="email" id="email" placeholder="Saisir votre adresse email" required class="form-control">
            <br />
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudnyme ici" minlength="5" maxlength="20" required class="form-control">
            <br />
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" required class="form-control">
            <br />
            <label for="confirmation">Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="Confirmez votre mot de passe ici" minlength="8" maxlength="20" required class="form-control">
            <br />

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>

            <p>déja un compte ? Connectez-vous en cliquant <a href="/Blog/pages/connexion.php">ici</a></p>
        </form>
    </div>
</body>

</html>