<?php
include 'operation.php';
$email      =   $_GET['email'];

$obj        =   new Db_connection();
$obj->delete_user_result($email);
?>