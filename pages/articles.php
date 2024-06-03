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
                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <article>
                        <img src="../assets/db/files/<?= $data['file_name'] ?>" alt="<?= $data['title'] ?> " width="100%">
                        <h3> <?= $data['title'] ?></h3>
                        <p><?= $data['short_description'] ?></p>
                        <?= $data['long_description'] ?>
                        <hr />
                    </article>



                    <form action="../processing/reaction.php" method="POST" enctype="multipart/form-data" class="mb-5">
                        <div class="form-floating">
                            <textarea name="commentaire" id="commentaire" class="form-control" required></textarea><br />
                            <label for="">leave comment here ...</label>
                        </div>
                        <input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>" >
                        <div class="col-xl-4">
                            <button type="submit" name="submitComment" class="btn btn-dark">Comment</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>

        </div>


    <?php
    }
    ?>

</body>

</html>