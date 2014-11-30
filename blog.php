<?php
/**
 * @copyright Stone-Studio
 * @new_copyright The Programming Lab Sergeev
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>China-Tea - Интернет Магазин Китайского чая - Блог</title>
    <meta charset="UTF-8" lang="ru"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="copyright" href="project/copyright.php">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 28.11.14
 * Time: 16:34
 */

$query_get_stat_column = "SELECT * FROM is_blog";

mysqli_query($dbc, $query_get_stat_column);

$name = $row['name'];
$short_desc = $row['short_desc'];
$date_pub = $row['date'];
$id = $_GET['id'];
$text = $row['text'];

while($row = mysqli_fetch_array($result)) {
    ?>
    <div class="blog_stat">
        <h3><?php $name ?></h3>
        <p> <?php $short_desc ?></p>
        <p><?php $date_pub ?></p>
        <img src="#" width="#" height="#"/>
        <br />
    </div>
<?
}

//Генерация страницы с записью из блога/статьей и т.д.

$query_get_stat = "SELECT * FROM is_blog WHERE id = $id";
mysqli_query($dbc, $query_get_stat);

if($_POST['button']){
    echo 'header';
    echo $name;
    echo $text;
    echo 'header';
}
?>
</body>
</html>