<?

    include_once('./pages/head.php'); ?>
    <br/>
    <? session_start(); ?>

    <?
    if ($_REQUEST['clear'] == 'y') {
        $_SESSION['BUSKET'] = Array();
    }

    ?>

    <? if (count($_SESSION['BUSKET']) < 1): ?>
        В вашей корзине нет товаров!!!
        <br/>
        Доавить товары в корзину вы мможете по следующей ссылке
        <a href="/0.2/internet-shop.php">Каталог товаров</a>

    <? else: ?>
        <div class="table_cart">
            <table>

                <h3 class="h_cart">Корзина</h3>

                <br/>

                <tr>
                    <td class="head_table_cart">Наименование</td>
                    <td class="head_table_cart">Цена</td>
                    <td class="head_table_cart">Кол-во</td>
                    <td class="head_table_cart">Сумма</td>
                </tr>

                <? foreach ($_SESSION['BUSKET'] as $key => $arResult): ?>

                    <tr class="tr_cart">
                        <td class="cart_td"><?= $arResult['name'] ?></td>
                        <td class="cart_td"><?= $arResult['cost'] ?></td>
                        <td class="cart_td"><?= $arResult['count'] ?></td>
                        <td class="cart_td"><?= $arResult['cost'] * $arResult['count'] ?></td>
                    </tr>

                <? endforeach; ?>
            </table>
            <br/>

            <p>Очистить корзину</p>
            <a href="/0.2/cart.php?clear=y" id="clear_cart">Очистить</a>
            <br/>
            <a href="/0.2/internet-shop.php" id="katalog_tovarov">Каталог товаров</a>
        </div>

    <?endif; ?>

    <br/>

    <? include_once('./pages/footer.php');
    ?>