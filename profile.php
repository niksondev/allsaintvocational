<?php
include 'operation.php';
if($_POST){
$username       =   $_POST['username'];
$email          =   $_POST['email'];
$surname        =   $_POST['surname'];
$finame         =   $_POST['finame'];
$status         =   $_POST['status'];
$address        =   $_POST['address'];
$state          =   $_POST['state'];
$dob            =   $_POST['dob'];

}

$obj       =   new Db_connection();
$obj->update_profile($username,$email,$surname,$finame,$status,$address,$state,$dob);
?>