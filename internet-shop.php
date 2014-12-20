<?php

    include_once('./pages/head.php');
    include_once('./dbc.php');

    $query = "SELECT * FROM is_items";

    $result = mysqli_query($dbc, $query) or die (':C:' . mysqli_error($dbc));

    ?>
    <p>Просмотреть товары по категориям:</p>
    <a class="a_sort" href="./cat.php?cat=cups">Чашки</a>
    <a class="a_sort" href="./cat.php?cat=teas">Чаи</a>
    <a class="a_sort" href="./cat.php?cat=sets">Чайные наборы</a>
    <br />

    <?
    echo '<br />';

    session_start();

    while ($row = mysqli_fetch_array($result)) {

        echo '<div class="shop_item">';
        echo '<div class="item_border">';
        echo '<div class="item_content_central">';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '</div>';
        echo '<img src="./images/tea.psd" class="" alt="">';
        echo '<div class="item_content_central">';
        echo '<p class="cena_item">' . $row['cost'] . 'руб.</p>';
        echo '<p class="nalichie">';
        if ($row['nal'] == 1) {
            echo 'В наличии';
        }
        else {
            echo 'Под заказ';
        }
        echo '</p>';
        echo '<a href="add_to_cart.php?id=' . $row['id'] . '&cost=' . $row['cost'] . '&name=' . $row['name'] . '"><input type="button"><img src="images/buttons/buy.psd"
           class="" alt="" width="200"></a>';
        echo '<a href="item.php?id=' . $row['id'] . '"><img src="images/buttons/buy.psd" class="" alt="" width="200"></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<br />';
}