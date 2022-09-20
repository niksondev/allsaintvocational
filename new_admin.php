<?php
include 'operation.php';
if($_POST){
    $email      =   $_POST['email'];
    $password   =   $_POST['password'];
}

$obj        =   new Db_connection();
$obj->new_admin($email,$password);
?>