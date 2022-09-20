<?php
include 'operation.php';
if($_POST){
$remail         =   $_POST['remail'];
$npass          =   $_POST['npass'];
$cpass          =   $_POST['cpass'];

}

$obj       =   new Db_connection();
$obj->update_password($remail,$npass,$cpass);
?>