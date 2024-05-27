<?php
require_once '../processing/allArticle.php';
?>

<?php
date_default_timezone_set('Africa/Lome');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Articles</title>
</head>

<body>
    <?php
    require_once '../includes/menu.php';
    ?>
    <a href="/Blog/pages/newBlog.php">
        Créer un nouvel article
    </a>
    <h1>Liste des articles</h1>
    <?php
    while ($data = $request->fetch()) {
    ?>
        <div class="container">
            <div class="row">
                <div class=" col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <article>
                        <img src="../assets/db/files/<?= $data['file_name'] ?>" alt="<?= $data['title'] ?> " width="100%">
                        <h3> <?= $data['title'] ?></h3>
                        <p><?= $data['short_description'] ?></p>
                        <?= $data['long_description'] ?>
                        <hr />
                    </article>
                    <form action="../processing/reaction.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
                        <textarea name="commentaire" id="commentaire" placeholder="votre commentaire ici"></textarea><br />
                        <button type="submit" name="submitComment">Comment</button>

                    </form>
                </div>
            </div>

        </div>


    <?php
    }
    ?>

</body>

</html>