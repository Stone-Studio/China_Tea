<?php

include_once('./pages/head.php');

?>
<br />
    <div class="form_buy">
        <div class="form_buy_border">

        <h3 class="zaverch_zakaz">Завершение заказа!</h3>
        <br />
        <p class="zaverch_zakaz">Пожалуйста, введите необходимую информацию
        , что-бы мы могли правильно доставить заказ и
        связаться.</p>
            <br />
    <form action="/project/buy.php" method="post" class="form_buy_pad">
        <p>ФИО:</p>
        <input type="text" class="FIO" placeholder="Введите сюда Ваше ФИО"/>
        <p>Телефон:</p>
        <input type="text" class="phone" placeholder="Введите сюда Ваш Телефон"/>
        <p>Адрес:</p>
        <input type="text" class="addres" placeholder="Введите сюда Ваш фактический адрес"/>
        <p>Email:</p>
        <input type="email" class="email" placeholder="Введите сюда Вашу электр. почту"/>
        <p>Способ оплаты</p>
        <input type="text" class="oplata" placeholder="Введите сюда Ваше ФИО"/>
        <p>Способ доставки</p>
        <input type="text" class="dostavka" placeholder="Введите сюда Ваше ФИО"/>
        <p>Примечания</p>
        <textarea class="primech"></textarea>
        <br />
        <input type="button" class="but_send_buy" value="Отправить!">
    </form>
            </div>
    </div>
    <br />

<?php

include_once('./pages/footer.php');

?>