<?php
include 'operation.php';
if($_POST){
    $serial_no      =   $_POST['serial_no'];
}

$obj        =   new Db_connection();
$obj->add_code($serial_no);
?>