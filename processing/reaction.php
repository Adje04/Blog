<?php
require('../config/database.php');
$commentaire= $_POST['commentaire'];
$date= $_POST['date'];
// $articleId = $_GET['id'];

if(isset($_POST['submitComment']) && !empty($_POST['commentaire'])){
 

    $req = $myPDO->query("INSERT INTO comments(commentaire, date) VALUES(\"$commentaire\", \"$date\");");
    $req->fetch();
    header("Location: ../");
    exit();
}

 
      