<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is home page</h1>

    <?php
        $news_item = 3452;
        $category = urlencode("sports & hobbies");
        $age = 20;
        $url = "news.php?news_item={$news_item}&category={$category}&age={$age}";
    ?>

    <a href="<?php echo $url;?>">Go to news page</a>
</body>
</html>