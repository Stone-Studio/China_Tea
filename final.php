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

    include_once('pages/head.php');
    include_once('dbc.php');

    session_start();
    //Подготока к работе: ввод настроек БД и Заголовка страницы

    foreach ($_SESSION['BUSKET'] as $key => $arResult) {
//Генерация списка заказанных товаров: проход по элементам массива

        $query1 = "INSERT INTO `is_items_in_zakazs`
              (`id`, `item_id`, `count`, `zakaz`)
              VALUES ('', '" . $arResult['id'] . "', '" . $arResult['count'] . "', '" . $FIO . "')";

        mysqli_query($dbc, $query1) or die ('Ошибка' . mysqli_error($dbc));

        include_once('email_buy.php');
        //Ввод информации в Базу Данных и отправка подтверждения на Email
    }

    echo 'id:' . $arResult['id'] . '.';
    echo 'Товар был успешно добвален.';
//Уведомление об успешном добавлении товаров для заказа

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Купи!</title>
        <meta/>
    </head>
    <body>
    <form method="post" action="final.php">
        <input type="text" value="addres" class="addres" name="addres"/>
        <input type="text" value="name" class="name" name="name"/>
        <input type="text" value="phone" class="phone" name="phone"/>
        <input type="email" value="email" class="email" name="email"/>
        <input type="submit" class="submit" name="submit" value="Отправить!"/>
    </form>
    </body>
    </html>
    <?
//Форма отправки данных о пользователе

    if (isset($_POST['submit'])) {
//Проерка: отправлена-ли форма

        include_once('dbc.php');

        echo 'GOOD';

        $addres = $_POST['addres'];
        $phone = $_POST['phone'];
        $FIO = $_POST['name'];
        $email = $_POST['email'];
//Получаем данные из формы

        if (!empty($addres) && (!empty($phone) && (!empty($FIO) && (!empty($email))))) {
//Проверка на не пустоту форм

            $_SESSION['USER']['addres'] = $addres;
            $_SESSION['USER']['phone'] = $phone;
            $_SESSION['USER']['name'] = $FIO;
            $_SESSION['USER']['email'] = $email;
//Задаем значения сессиям (будет полезно при обновлениях программы)

            $query2 = "INSERT INTO `is_users` (
`id` , `email_id` , `password` , `addres` , `name` , `phone`
) VALUES (
    NULL ,  '" . $email . "',  'password',  '" . $addres . "',  '" . $FIO . "',  '" . $phone . "'
)";

            mysqli_query($dbc, $query2) || die ('Ошибка' . mysqli_error($dbc));
            echo 'Успешно.';

            //Добавление пользователя в БД и уведомление об успешной отправке
        }
    }

    $query3 = "INSERT INTO `is_zakazs`
(`id`, `tovars_id`, `total`, `user`) VALUES (NULL, '" . $FIO . "', 'Be', '" . $FIO . "');";

    mysqli_query($dbc, $query3) or die ('Ошибка:' . mysqli_error($dbc));