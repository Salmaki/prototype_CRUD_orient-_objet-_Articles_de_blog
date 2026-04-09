<?php 
require_once "Article.php";
$database = new Database();
$db = $database->connect();
$article = new Article($db); 
$articles = $article->readAll();

  foreach( $articles as $item){
    echo "<h1>" . $item['titre'] . "</h1>";
    echo "<br>";
    echo "<p>". $item['contenu'] . "<p>";
}

$art=$article->readbyid(3);
var_dump($art);
?>
