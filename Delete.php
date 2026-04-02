<?php
require_once "Article.php";
if (isset($_GET['id'])) {
    $database = new Database();
    $db = $database->connect();
    $article = new article($db);
    $article->id = $_GET['id'];
    if ($article->delete()) {
        header("Location: index.php");
        exit;
    } else {
        echo "ne peut pas suprrimer cette article";
    }
}else {
    header("Location: index.php");
    exit;
}
