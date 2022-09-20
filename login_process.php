<?php
include 'operation.php';
if($_POST['email'] && $_POST['password'] && $_POST['submit']){
    $email      =   $_POST['email'];
    $password   =   $_POST['password'];
}

$obj    =   new Db_connection();
$obj->student_login($email,$password);

?>