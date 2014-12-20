<?php

    session_start();

    $id = $_GET['id'];

    if ($_GET['id']) {
        $_SESSION['BUSKET'][$id]['id'] = $id;
        $_SESSION['BUSKET'][$id]['cost'] = $_GET['cost'];
        $_SESSION['BUSKET'][$id]['name'] = $_GET['name'];

        if ($_SESSION['BUSKET'][$_GET['id']]) {
            $count = $_SESSION['BUSKET'][$_GET['id']]['count'];
            $_SESSION['BUSKET'][$_GET['id']]['count'] = $count + 1;
        }
        else {
            $_SESSION['BUSKET'][$_GET['id']]['count'] = 1;
        }
    }

    echo 'Товар был успешно добавлен!';
    echo '<br />';
    echo 'Идентификатор товара:' . $id . '.';