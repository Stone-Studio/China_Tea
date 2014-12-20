<?php

    $host = '';
    $user = '';
    $password = '';
    $base = '';

    $dbc = mysqli_connect($host, $user, $password, $base)
    or die ('Ошибка подключения к Базе Данных');
