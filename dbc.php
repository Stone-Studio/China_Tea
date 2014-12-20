<?php

    $host = 'mysql.hostinger.ru';
    $user = 'u154891117_dev';
    $password = 'cfkfn2002';
    $base = 'u154891117_dev';

    $dbc = mysqli_connect($host, $user, $password, $base)
    or die ('Ошибка подключения к Базе Данных');
