<?php
include 'operation.php';
if($_POST['submit']){
 $academic     =   $_POST['acada'];
 $term         =   $_POST['term'];
 /* Course/Student */
 $course       =   $_POST['course'];
 $score        =   $_POST['score'];
 $grade        =   $_POST['grade'];
 $power_weight =   $_POST['power_weight'];
 $remark       =   $_POST['remark'];
 

 /*hidden*/
 $surname        =  $_POST['surname'];
 $firstname      =  $_POST['firstname'];
 $email          =  $_POST['email'];
 $dept           =  $_POST['dept'];
 

 $obj       =   new Db_connection();
 $obj->student_result($surname,$firstname,$email,$dept,$academic,$term,$course,$score,$grade,$power_weight,$remark);

}
?>