<?php
include 'operation.php';
if($_POST['submit']){
    $surname        =   $_POST['surname'];
    $firstname      =   $_POST['firstname'];
    $dob            =   $_POST['dob'];
    $address        =   $_POST['address'];
    $state          =   $_POST['place'];
    $nationality    =   $_POST['nationality'];
    $sex            =   $_POST['sex'];
    $status         =   $_POST['status'];
    $fname          =   $_POST['fname'];
    $occupation     =   $_POST['occupation'];
    $faddress       =   $_POST['faddress'];
    $fone           =   $_POST['fone'];
    $mname          =   $_POST['mname'];
    $moccupation    =   $_POST['moccupation'];
    $mfone          =   $_POST['mfone'];
    $sponsor        =   $_POST['sponsor'];
    $passport       =   $_FILES['passport']['name'];
    $signature      =   $_FILES['signature']['name'];
    $department     =   $_POST['department'];
    $room           =   $_POST['room'];
    $kin_name       =   $_POST['kin_name'];
    $kin_address    =   $_POST['kin_address'];
    $kin_phone      =   $_POST['kin_phone'];
    $relationship   =   $_POST['relationship'];
    $question1      =   $_POST['question1'];
    $answer1        =   $_POST['answer1'];
    $question2      =   $_POST['question2'];
    $answer2        =   $_POST['answer2'];
    $question3      =   $_POST['question3'];
    $answer3        =   $_POST['answer3'];
    $username       =   $_POST['username'];
    $email          =   $_POST['email'];
    $password       =   $_POST['password'];
    $cpassword      =   $_POST['cpassword'];
}
$obj        =   new Db_connection();
$obj->students_registration($surname,$firstname,$dob,$address,$state,$nationality,$sex,$status,$fname,$occupation,$faddress,$fone,$mname,$moccupation,$mfone,$sponsor,$passport,$signature,$department,$room,$kin_name,$kin_address,$kin_phone,$relationship,$question1,$answer1,$question2,$answer2,$question3,$answer3,$username,$email,$password,$cpassword);
?>