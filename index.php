<?php
require_once "article.php";
$database = new Database();
$db = $database->connect();
$article = new Article($db);
$articles = $article->read();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: pink;
            font-family: 'Inter', sans-serif;
            padding: 30px;
        }

        .Container {
            margin: 0px auto;
            max-width: 1000px;
        }

        .creat {
            position: absolute;
            top: 30px;
            right: 30px;
            color: black;
            font-weight: 600;
            text-decoration: none;
            padding: 8px 12px;
            background-color: white;
            border-radius: 8px;

        }

        .article {
            display: flex;
            flex-direction: column;
            background-color: white ;
            padding: 20px;
            margin-top: 60px;
            border-radius: 8px;


        }

        img {
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="Container">
        <a href="create.php" class="creat">Create now</a>
        <?php if (count($articles) > 0): ?>
            <?php foreach ($articles as $article) :  ?>
                <div class="article">
                    <img src="image.png" alt="">
                    <div class="text">
                        <h2><?= $article['titre'] ?></h2>
                        <p><?= $article['contenu'] ?></p>
                    </div>
                    <div class="article_footer">
                        <a href="Delete.php?id=<?= $article['id'] ?>">DELETE</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: echo "database introuvable"; ?>
        <?php endif; ?>
    </div>
</body>

</html>