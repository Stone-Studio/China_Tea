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

    session_start();

    $id = $_GET['id'];

    if ($_GET['id']) {
        $_SESSION['BUSKET'][$id]['id'] = $id;
        $_SESSION['BUSKET'][$id]['cost'] = $_GET['cost'];
        $_SESSION['BUSKET'][$id]['name'] = $_GET['name'];
//Задаем значения массивам

        if ($_SESSION['BUSKET'][$_GET['id']]) {
            $count = $_SESSION['BUSKET'][$_GET['id']]['count'];
            $_SESSION['BUSKET'][$_GET['id']]['count'] = $count + 1;
        }
        else {
            $_SESSION['BUSKET'][$_GET['id']]['count'] = 1;
        }
        //Изменяем кол-во товаров
    }

    echo 'Товар был успешно добавлен!';
    echo '<br />';
    echo 'Идентификатор товара:' . $id . '.';
//Оповещаем об успешном добавлении