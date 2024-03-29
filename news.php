<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is news page</h1>


    <?php
       $news_item = $_GET['news_item'];
       $category = $_GET['category'];
       $age = $_GET['age']; 
    ?>

    <h3>News item : <?php echo $news_item;?></h3>
    <h3>Category : <?php echo $category;?></h3>
    <h3>Age : <?php echo $age;?></h3>

</body>
</html>