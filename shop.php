<!DOCTYPE html>
<html>
<head>
    <title>China-Tea - Интернет Магазин Китайского чая</title>
    <meta charset="UTF-8" lang="ru"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="copyright" href="project/copyright.php">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div>
    <div class="header">

    </div>
    </html>
<?php

include_once('./modules/mysqli_connect/connect.php');

/**
 * @copyright StoneStudio
 * @developer Vyacheslav Sergev
 */

$query = "SELECT * FROM is_items";
$result = mysqli_query($dbc, $query);

mysqli_query($dbc, $query);

/*$item_name = $row['name'];
$count = $row['count'];
$nalichie = $row['nalichie'];*/

$item_name = 'name';
$count = 'count';
$nalichie = true;

echo '<table>';

while($row = mysqli_fetch_array($result)){
    ?>
    <div class="item">
        <h3><?php echo $item_name ?></h3>
        <img src="#" width="#" height="#"/>
        <p><?php echo $count ?></p>
        <p>
            <?php
            if($nalichie == true) {
                echo 'В наличии';
            } else {
                echo 'Нет в наличии :(';
            };
            ?>
        </p>
        <img src=""><a href="#">В корзину</a></img>
        <img src=""><a href="#">Просмотр</a></img>
    </div>
    <?
}

echo '</table>'

?>
<html>
    <div class="big_div_shop">
    </div>
    <div class="footer">
       <!--TODO: Сделать футер -->
    </div>
</div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 23.11.14
 * Time: 9:30
 */