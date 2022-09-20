<?php
include 'operation.php';
if($_POST){
$image         =   $_FILES['passport']['name'];

}

$obj       =   new Db_connection();
$obj->update_image($image);
?>