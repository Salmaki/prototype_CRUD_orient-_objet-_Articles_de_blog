<?php 
require_once "Article.php";
$database = new Database();
$db = $database->connect();
$article = new Article($db);
$articles = $article->readAll();

foreach( $articles as $item){
    echo $item['titre'];
    echo "<br>";
    echo $item['contenu'];
}


?>