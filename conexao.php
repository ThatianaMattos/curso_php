<?php

$host = 'localhost';
$user = 'root';
$passwd = '';
$bd_name = 'agenda_php';

$connx + mysqli_connect($host, $user, $passwd, $bd_name);

if(!$connx){
    echo 'conectou';
}else{
    echo 'erro';
}



?>