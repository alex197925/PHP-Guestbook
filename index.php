<?php
declare(strict_types=1);

require 'Post.php';
require 'PostLoader.php';
date_default_timezone_set("UTC");
$Date = date('m/d/Y');

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
                <span><?php
                    echo "Date:".$Date;

                    ?></span>
            </div>
            <div class="message">
                <label>
                    Message: <textarea name="text data" rows="5" cols="40"></textarea>
                </label>
                <button type="submit" name="submit">Post Comment</button>
            </div>
            <div class="output_message">
                <output name="result" for="a b">
                    <?php
                    echo "hello"
                    ?>

                </output>
            </div>
        </form>
    </div>
</div>


</body>
</html>
