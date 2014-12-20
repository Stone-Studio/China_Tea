<?php

/**
 * @copyright Защищено Авторским Правом
 * Все права защищиены
 * @license: Open-Source
 * @rights Редактирование или Использование
 * копий разрешено при ведоме и разрешении автора
 * @year 2014
 * @date 20 Декабря
 *
 * @developer Вячеслав С.
 * @developer-eng Vyacheslav S.
 * @email Wozl77774@yandex.ru
 *
 * @developer Евгений Л.
 * @developer-eng Evgeny L.
 * @email kursklit@yandex.ru
 *
 * @copyright-eng Copyright. All Rights Reserved.
 * @date-eng 20 of December 2014
 *
 * @support Wozl77774@yandex.ru
 * @demo www.labdevelop.16mb.com/0.2
 *
 * @version 0.2
 * @state Alpha
 *
 * @GitHub: https://github.com/Stone-Studio/China_Tea
 *
 */

    include_once('./pages/head.php');
    include_once('./dbc.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM is_items WHERE id = " . $id . "";

    $result = mysqli_query($dbc, $query) or die (':C:' . mysqli_error($dbc));
    $row = mysqli_fetch_array($result);

    echo '<br />';

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
    echo '<a href=""><input type="button"><img src="images/buttons/buy.psd"
           class="" alt="" width="200"></a>';
    echo '<p>' . $row['desc'] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<br />';