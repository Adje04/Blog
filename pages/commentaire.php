<?php
require_once '../processing/allArticle.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once '../includes/menu.php';
    ?>
<form action="../processing/reaction.php" method="POST" enctype="multipart/form-data">

<textarea name="commentaire" id="commentaire" placeholder="votre commentaire ici"></textarea><br />
<button type="submit" name="submitComment">Comment</button>

</form>
</body>
</html>
