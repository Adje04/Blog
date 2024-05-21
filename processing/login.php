<?php
require '../config/database.php';
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$hashed_password = md5($password);


$req = $myPDO->query("SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password';");
 $result = $req->fetch();

if (isset($result) && $result) {
    setcookie('username', $username, time()+3600000, '/');
    setcookie('id', $result['id'], time()+3600000, '/');
    header('Location: /Blog/index.php');
}else{
    header('Location: /Blog/pages/connexion.php?page=connexion&user=unknown');
}

