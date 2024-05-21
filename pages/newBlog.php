<?php
if (!isset($_COOKIE['username'])) {
    header('Location: /Blog/pages/connexion.php?page=connexion');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/summernote/summernote-lite.min.css" rel="stylesheet">
    <title>Blog</title>
</head>
<body>
   <?php
   require_once '../includes/menu.php';
   ?>
   <div class="article">
    <form action="../processing/blogging.php" method="POST" enctype="multipart/form-data" >
        <label for="title">Saisir le titre de l'article</label>
        <input type="text" name="title" id="title" required>

        <label for="short_description">Saisir une breve description de l'article de l'article</label>
        <textarea name="short_description" id="short_description" placeholder="Saisir une breve description de votre article" required></textarea>

        <label for="long_description">Saisir une plus longue description  de l'article de l'article</label>
        <textarea name="long_description" id="long_description" placeholder="Saisir une breve description de votre article" required></textarea>

        <label for="file">Joindre un fichier a votre article</label>
        <input type="file" name="file" id="file" required>

        <button type="submit">Soummettre</button>

        <button type="reset">Annuler</button>
    </form>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="../assets/summernote/summernote-lite.min.js"></script>

   <script>
        $(document).ready(function () {
            $('#long_description').summernote({
                height: 400,
            });
       
        });
    </script>
    
</body>
</html>