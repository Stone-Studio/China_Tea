<!DOCTYPE html>
<html>
<head>
    <title>China-Tea - Интернет Магазин Китайского чая</title>
    <meta charset="UTF-8" lang="ru"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="copyright" href="project/copyright.php">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<form action="/buy.php" method="post">
    <p>ФИО:</p>
    <input type="text" class="FIO" placeholder="Введите сюда Ваше ФИО"/>
    <p>Телефон:</p>
    <input type="text" class="phone" placeholder="Введите сюда Ваш Телефон"/>
    <p>Адрес:</p>
    <input type="text" class="addres" placeholder="Введите сюда Ваш фактический адрес"/>
    <p>Email:</p>
    <input type="email" class="email" placeholder="Введите сюда Вашу электр. почту"/>
    <p>Способ оплаты</p>
    <input type="radio" class="nal" />
    <input type="radio" class="cartochka" />
    <p>Способ доставки</p>
    <input type="radio" class="post"/>
    <input type="radio" class="kurer"/>
    <p>Примечания</p>
    <textarea class="primech"></textarea>
    <input type="button" value="Отправить!">
</form>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 29.11.14
 * Time: 10:42
 */

include_once('./modules/mysqli_connect/connect.php');

if(!isset($_SESSION)&&(!isset($_COOKIE))){
    session_start();
}

/**
 * @copyright Stone-Studio
 * @new_copyright The Programming Lab Sergeev
 */

if(isset($_REQUEST)){

if(!empty($phone)&& !empty($addres) && !empty($email)
    && !empty($nal) && !empty($kartochka) && !empty($kurer)
    && !empty($FIO) && !empty($post) && !empty($primech) &&
    !empty($dostavka) && !empty($oplata)) {

//Создаем конечные переменные
//С проверкой на защиту от SQL инъекций
//Тобишь защищенную от спец-символов
$phone = mysqli_real_escape_string($dbc, $phone_trim);
$addres = mysqli_real_escape_string($dbc,$addres_trim );
$email = mysqli_real_escape_string($dbc, $email_trim);
$nal = mysqli_real_escape_string($dbc, $nal_trim);
$kartochka = mysqli_real_escape_string($dbc, $kartochka_trim);
$kurer = mysqli_real_escape_string($dbc, $kurer_trim);
$FIO = mysqli_real_escape_string($dbc, $FIO_trim);
$post = mysqli_real_escape_string($dbc, $post_trim);
$primech = mysqli_real_escape_string($dbc, $primech_trim);
$dostavka = mysqli_real_escape_string($dbc, $dostavka_trim);
$oplata = mysqli_real_escape_string($dbc, $oplata_trim);

//Создаем переменные с обрезанными пробелами
$phone_trim = trim($_POST['phone']);
$addres_trim = trim($_POST['addres']);
$email_trim = trim($_POST['email']);
$nal_trim = trim($_POST['nal']);
$kartochka_trim = trim($_POST['kartochka']);
$kurer_trim = trim($_POST['kurer']);
$FIO_trim = trim($_POST['FIO']);
$post_trim = trim($_POST['post']);
$primech_trim = trim($_POST['primech']);
$dostavka_trim = trim($_POST['dostavka']);
$oplata_trim = trim($_POST['oplata']);

} else {
//Иначе, если в форме не все заполнено, то начать проверьки

    if(empty($phone)){
        echo 'Извините, но Вы забыли указать номер телефона :(';
        echo '<br />';
        $back_form = true;
    }
    if(empty($addres)){
        echo 'Извините, но Вы забыли указать адрес :(';
        echo '<br />';
        $back_form = true;
    };
    if(empty($email)){
        echo 'Извините, но Вы забыли указать свою Электронную почту :(';
        echo '<br />';
        $back_form = true;
    };
    if(empty($kartochka)&&(empty($nal))){
        echo 'Извините, но Вы забыли указать способ оплаты :(';
        echo '<br />';
        $back_form = true;
    };
    if(empty($post)&&(empty($kurer))){
        echo 'Извините, но Вы забыли указать способ Доставки :(';
        echo '<br />';
        $back_form = true;
    };

    if(empty($phone)&&(empty($addres))){
        echo 'Вы забыли указать телефон и адрес';
        echo '<br />';
        $back_form = true;
    }

    if(empty($phone)&&(empty($email))){
        echo 'Вы забыли указать телефон и Email';
        echo '<br />';
        $back_form = true;
    }

    if(empty($addres)&&(empty($email))){
        echo 'Вы забыли указать телефон и Email';
        echo '<br />';
        $back_form = true;
    }

    if(empty($FIO)){
        echo 'Вы забыли указать Фамилию Имя и Отчество';
        echo '<br />';
        $back_form = true;
    }

    if(empty($FIO)&&(empty($phone))){
        echo 'Вы забыли указать Фамилию Имя и Отчество и телефон';
        echo '<br />';
        $back_form = true;
    }

    if(empty($FIO)&&(empty($email))){
        echo 'Вы забыли указать Фамилию Имя и Отчество и Email';
        echo '<br />';
        $back_form = true;
    }

    if(empty($FIO)&&(empty($addres))){
        echo 'Вы забыли указать Фамилию Имя и Отчество и телефон';
        echo '<br />';
        $back_form = true;
    }
}}

//Если форму надо перегрузить
if($back_form == true){
  ?>
  <html>
    <form action="/buy.php" method="post">
        <p>ФИО:</p>
        <input type="text" class="FIO" value="<?php ?>"/>
        <p>Телефон:</p>
        <input type="text" class="phone" value="<?php ?>"/>
        <p>Адрес:</p>
        <input type="text" class="addres" value="<?php ?>"/>
        <p>Email:</p>
        <input type="email" class="email" value="<?php ?>"/>
        <p>Способ оплаты</p>
        <input type="radio" class="nal" />
        <input type="radio" class="cartochka" />
        <p>Способ доставки</p>
        <input type="radio" class="post"/>
        <input type="radio" class="kurer"/>
        <p>Примечания</p>
        <textarea><?php ?></textarea>
        <input type="button" value="Отправить!">
    </form>
    </html>
<?php
} else {
      while($id = $_GET['id']){
        $id_item = $_SESSION['id'];
      }

    //TODO: Нормально сделать сессии

    //Задаем переменные запросам
    $query_zakaz = "INSERT INTO is_zakaz (id, fio, phone, addres, email, oplata,
                    dostavka, date, primechan, items) VALUES (identity, '$FIO',
                    '$phone','$addres', '$email', '$oplata', '$dostavka', NOW(), '$primech',
                    '$id_item' )";

    $query_email = "INSERT INTO is_email (id, fio, email) VALUES (identity, '$fio', '$email')";
    //Также добавляем в отдельную таблицу email

    mysqli_query($dbc, $query_email);
    mysqli_query($dbc, $query_zakaz);
    //Отправляем данные в таблицу с заказами
    //и отдельно в таблицу с email-ами

    $shop_of = 'Китайского Чая - China-Tea';
    $phone_consult = '8-833-333-33-33';
    $name_consult = 'Сергей';
    $skype_consult = 'skype12-1';

    $subject = 'Ваш заказ в интернет-магазине'.$shop_of.'!';
    $message = 'Здравтвуйте,'.$FIO.' Вы успешно совершили свой заказ в Интрнет Магазине /n
                '.$shop_of.'! Ваш заказ вскоре обработают и позвонят Вам что-бы /n
                Уточнить Детали заказа! Надеюсь что Вы правильно указали телефон :) /n'
                .$phone.'/n Вы также можете связаться со мной лично по Скайпу:'.$skype_consult.',
                Здесь или по телефону'.$phone_consult.'. С Увжаением,'.$name_consult.'!';
    $send_to = $email;
    $sender = 'consult-Sergei@china-tea.ru';

    mail($send_to, $subject, $message, 'From:'. $sender);
}

//TODO: ПОдключить регулярные выражения