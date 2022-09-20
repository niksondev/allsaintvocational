<?php
session_start();
if(isset($_SESSION['student_email'])){
    session_destroy();
    header('Location:login.php');
}elseif(isset($_SESSION['admin_email'])){
    session_destroy();
    header('Location:admin.php');

}

?>