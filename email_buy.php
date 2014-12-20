<?php

    $shop_of = 'Китайского Чая - China-Tea';
    $phone_consult = '8-833-333-33-33';
    $name_consult = 'Сергей';
    $skype_consult = 'skype12-1';

    $subject = 'Ваш заказ в интернет-магазине' . $shop_of . '!';
    $message = 'Здравтвуйте,' . $FIO . ' Вы успешно совершили свой заказ в Интрнет Магазине /n
                ' . $shop_of . '! Ваш заказ вскоре обработают и позвонят Вам что-бы /n
                Уточнить Детали заказа! Надеюсь что Вы правильно указали телефон :) /n'
        . $phone . '/n Вы также можете связаться со мной лично по Скайпу:' . $skype_consult . ',
                Здесь или по телефону' . $phone_consult . '. С Увжаением,' . $name_consult . '!';
    $send_to = 'Wozl77774@yandex.ru';
    $sender = 'consult-Sergei@china-tea.ru';

    mail($send_to, $subject, $message, 'From:' . $sender) || die (
    'Не удалось отправить письмо! Сообщите разработчикам!'
    );

    echo 'Успешно отправлено!';