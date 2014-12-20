<?php

include_once('./pages/head.php');

    ?>
    <html>
    <div class="table_cart">
     <h3 class="h_cart">Корзина</h3>
     <table>
         <tr class="tr_cart">
         <td class="head_table_cart">Наименование</td>
         <td class="head_table_cart">Цена</td>
         <td class="head_table_cart">Кол-во(г)</td>
         <td class="head_table_cart">Сумма</td>
         </tr>
         <?php

         $id = $_GET['id'];

         foreach($_SESSION['cart'] as $id => $key) {

             echo '<tr class="tr_cart">';
             echo ' <td class="cart_td">' . $item['head'] . '</td>';
             echo ' <td class="cart_td">' . $item ['cena']. '</td>';
             echo ' <td class="cart_td">1</td>';
             echo ' <td class="cart_td">' . $id . '</td>';
             echo ' </tr>';
         }
         ?>

     </table>
      <br />
        <div class="buy_cart_final">
        <a hr+ef="#">
            <img src="../images/buttons/buy.psd" width="#" height="#"/>
        </a>
        </div>
     </div>
    <br />

    <?php
    include_once('./pages/footer.php');
