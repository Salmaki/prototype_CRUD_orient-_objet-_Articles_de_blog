<?php
require_once "Article.php";

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $database= new Database();
    $db= $database->connect();
    $article= new Article($db);
    $article->titre=$_POST['titre'];
    $article->contenu=$_POST['contenu'];

if ($article->create()) {
    header("Location: index.php");
    exit;
}   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>titre</label><br>
        <input type="text" name="titre"><br><br>
        <label>contenu</label><br>
        <textarea name="contenu"></textarea><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>