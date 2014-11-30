<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 23.11.14
 * Time: 8:44
 */
public function check_null_form (){
if(isset($_REQUEST)){
    if(empty($_REQUEST)){
        echo 'Вы забыли ввести данные в форму';
    } else {
        //Продолжить работу
        exit;
    }
};}