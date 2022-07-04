<?php
declare(strict_types=1);

require 'Post.php';
require 'PostLoader.php';
$data = require 'data.txt';
date_default_timezone_set("UTC");
$Date = date('m/d/Y');



//if (isset($_POST['submit'])) {
//     $post = new Post($_POST['text'], $_POST['title'], $_POST['author']);
//     var_dump($post);
//
//}

if (isset($_POST['submit'])) {
    $title = "Title:" .$_POST['title'];
    $text = "Text:" .$_POST['text'];
    $author = "Author" .$_POST['author'];
    var_dump($title, $text, $author);

    $file = fopen("data.txt", 'a');
    fwrite($file, $title);
    fwrite($file, $text);
    fwrite($file, $author);
    fclose($file);
}





?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My WebSite</title>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">
            <h1>GestBook</h1>
        </div>
        <form method="post" action="index.php">
            <div class="date">
                <span>
            </div>
            <div class="title">
                <label for="title">
                    Title: <input type="text" name="title">
                </label>
            </div>
            <div class="author">
                <label for="author">
                    Authot: <input type="text" name="author">
                </label>
            </div>

            <div class="message">
                <label>
                    Message: <textarea name="text" rows="5" cols="40"></textarea>
                </label>
                <button type="submit" name="submit">Post Comment</button>
            </div>
            <div class="output_message">
                <output name="result" for="a b">

                </output>
            </div>
        </form>
    </div>
</div>


</body>
</html>
