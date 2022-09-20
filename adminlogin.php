<?php
include 'operation.php';
if($_POST['submit'] && $_POST['email'] && $_POST['password']){
    $email      =   $_POST['email'];
    $password   =   $_POST['password'];
}

$obj    =   new Db_connection();
$obj->adminlogin($email,$password);

?>