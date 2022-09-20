<?php
session_start();
/*********************************************ADMIN BACKEND*****************************************************************/
class Db_connection{
    //Database Connection
    public $conn;
    public function __construct(){
        $this->conn =   mysqli_connect('localhost','root','','allsaints');
    }
    /*
     *Admin Login integration
    */
    public function adminlogin($email,$password){
        $select         =   "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
        $select_query   =   $this->conn->query($select);
        $check_user     =   $select_query->num_rows;
        if($check_user !=0){
            $_SESSION['admin_email']    =   $email;
            header('Location:add_result.php');
        }else{
            echo "<script>
            alert('Incorrect Login Details');
            window.location = 'admin.php';
            </script>";
        }
    }
    /*
        *admin adding student portal
    */
    public function admin_students_registration($surname,$firstname,$dob,$address,$state,$nationality,$sex,$status,$fname,$occupation,$faddress,$fone,$mname,$moccupation,$mfone,$sponsor,$passport,$signature,$department,$room,$kin_name,$kin_address,$kin_phone,$relationship,$question1,$answer1,$question2,$answer2,$question3,$answer3,$username,$email,$password,$cpassword){

        //check if email exist
        $select_all     =   "SELECT * FROM student_registration WHERE email = '$email'";
        $select_query   =   $this->conn->query($select_all);
        $check_user     =   $select_query->num_rows;
        if($check_user !=0){
            echo "<script>
            alert('The Email Address has been used');
            window.location = 'registration.php';
            </script>";
        }elseif($password != $cpassword){
            echo "<script>
            alert('Your password is not the same with the confirmed password');
            window.location = 'registration.php';
            </script>";
        }else{
            //the path to store the uploaded image
            $target = "assets/images/".basename($_FILES['passport']['name']);
            //get all the submitted data from the form
            $passport   =   $_FILES['passport']['name'];
            //move the uploaded image into the folder images
            if(move_uploaded_file($_FILES['passport']['tmp_name'],$target)){

                //the path to store the uploaded signature
                $target = "assets/images/".basename($_FILES['signature']['name']);
                //get all the submitted data from the form
                $signature   =   $_FILES['signature']['name'];
                //move the uploaded image into the folder images
                if(move_uploaded_file($_FILES['signature']['tmp_name'],$target)){

                

                //insert into the database
                    $insert_all     =   "INSERT INTO student_registration(surname,firstname,dob,address,state,nationality,sex,status,fname,occupation,faddress,fone,mname,moccupation,mfone,sponsor,passport,signature,department,room,kin_name,kin_address,kin_phone,relationship,question1,answer1,question2,answer2,question3,answer3,username,email,password)VALUES('$surname','$firstname','$dob','$address','$state','$nationality','$sex','$status','$fname','$occupation','$faddress','$fone','$mname','$moccupation','$mfone','$sponsor','$passport','$signature','$department','$room','$kin_name','$kin_address','$kin_phone','$relationship','$question1','$answer1','$question2','$answer2','$question3','$answer3','$username','$email','$password')";
                    $insert_query   =   $this->conn->query($insert_all);

                    if($insert_query){
                        echo "<script>
                        alert('Registration has been completed');
                        window.location = 'my_profile.php';
                        </script>";
                    }
                    //it didn't insert into database...check all the variable and database variable very well
                }
            }
        }

    }

    /*
        *Add result
    */

    public function student_result($surname,$firstname,$email,$dept,$academic,$term,$course,$score,$grade,$power_weight,$remark){
        $insert_result          =   "INSERT INTO result(surname,firstname,email,department,academic_session,term,course,score,grade,point_weight,remarks)VALUES('$surname','$firstname','$email','$dept','$academic','$term','$course','$score','$grade','$power_weight','$remark')";
        $insert_query           =   $this->conn->query($insert_result);
        if($insert_query){
        header('Location:'.$_SERVER['HTTP_REFERER']);
        }else{
            echo "error";
        }
    }

    /*
        *Add new Admin
    */
    public function new_admin($email,$password){
        $insert_admin       =   "INSERT INTO admin(email,password)VALUES('$email','$password')";
        $insert_query       =   $this->conn->query($insert_admin);
        header('Location:add_admin.php');
    }

    /*
        *Add new Code
    */

    public function add_code($serial_no){
        $insert_code       =   "INSERT INTO confirmation(serial_no,status)VALUES('$serial_no','0')";
        $insert_query       =   $this->conn->query($insert_code);
        header('Location:confirmation_code.php');
    }

    public function delete_user($email){
        $delete         =   "DELETE FROM student_registration WHERE email = '$email'";
        $query          =   $this->conn->query($delete);
        if($query){
            echo "<script>
            alert('The student has been successfully deleted');
            window.location = 'add_result.php';
            </script>";
        }
        
    }

    public function delete_user_result($email){
        $delete         =   "DELETE FROM result WHERE email = '$email'";
        $query          =   $this->conn->query($delete);
        if($query){
            echo "<script>
            alert('The student result has been successfully deleted');
            window.location = 'delete_result.php';
            </script>";
        }
    }
    /****************************************STUDENT BACKEND****************************************************************/
    /*
        *Student login
    */
    public function student_login($email,$password){
        echo $email;
        $select_all     =   "SELECT * FROM student_registration WHERE email = '$email'";
        $select_query   =   $this->conn->query($select_all);
        $check_user     =   $select_query->num_rows;
        if($check_user !=0){
            $_SESSION['student_email']  =   $email;
            header('Location:my_profile.php');
        }else{
            echo "<script>
            alert('Incorrect username or password');
            window.location = 'login.php';
            </script>";
        }
    }
    /*
        *Student registration portal
    */
    public function students_registration($surname,$firstname,$dob,$address,$state,$nationality,$sex,$status,$fname,$occupation,$faddress,$fone,$mname,$moccupation,$mfone,$sponsor,$passport,$signature,$department,$room,$kin_name,$kin_address,$kin_phone,$relationship,$question1,$answer1,$question2,$answer2,$question3,$answer3,$username,$email,$password,$cpassword){

        //check if email exist
        $select_all     =   "SELECT * FROM student_registration WHERE email = '$email'";
        $select_query   =   $this->conn->query($select_all);
        $check_user     =   $select_query->num_rows;
        if($check_user !=0){
            echo "<script>
            alert('The Email Address has been used');
            window.location = 'registration.php';
            </script>";
        }elseif($password != $cpassword){
            echo "<script>
            alert('Your password is not the same with the confirmed password');
            window.location = 'registration.php';
            </script>";
        }else{
            //the path to store the uploaded image
            $target = "assets/images/".basename($_FILES['passport']['name']);
            //get all the submitted data from the form
            $passport   =   $_FILES['passport']['name'];
            //move the uploaded image into the folder images
            if(move_uploaded_file($_FILES['passport']['tmp_name'],$target)){

                //the path to store the uploaded signature
                $target = "assets/images/".basename($_FILES['signature']['name']);
                //get all the submitted data from the form
                $signature   =   $_FILES['signature']['name'];
                //move the uploaded image into the folder images
                if(move_uploaded_file($_FILES['signature']['tmp_name'],$target)){

                

                //insert into the database
                    $insert_all     =   "INSERT INTO student_registration(surname,firstname,dob,address,state,nationality,sex,status,fname,occupation,faddress,fone,mname,moccupation,mfone,sponsor,passport,signature,department,room,kin_name,kin_address,kin_phone,relationship,question1,answer1,question2,answer2,question3,answer3,username,email,password)VALUES('$surname','$firstname','$dob','$address','$state','$nationality','$sex','$status','$fname','$occupation','$faddress','$fone','$mname','$moccupation','$mfone','$sponsor','$passport','$signature','$department','$room','$kin_name','$kin_address','$kin_phone','$relationship','$question1','$answer1','$question2','$answer2','$question3','$answer3','$username','$email','$password')";
                    $insert_query   =   $this->conn->query($insert_all);

                    if($insert_query){
                        echo "<script>
                        alert('Registration has been completed');
                        window.location = 'my_profile.php';
                        </script>";
                    }
                    //it didn't insert into database...check all the variable and database variable very well
                }
            }
        }

    }
    /*
        *Update Profile Details
    */

    public function update_profile($username,$email,$surname,$finame,$status,$address,$state,$dob){
        $update_profile     =   "UPDATE student_registration SET username='$username', email='$email', surname='$surname', firstname='$finame', status='$status', address='$address', state='$state', dob='$dob' WHERE email='$email'";
        $update_query       =   $this->conn->query($update_profile);
        if($update_query){
            echo "<script>
            alert('Your profile has been updated successfully');
            window.location = 'my_profile.php';
            </script>";
        }
        
    }
    /*
        *Change Password
    */
    public function update_password($remail,$npass,$cpass){
        if($npass == $cpass){
            $update_password     =   "UPDATE student_registration SET password='$npass' WHERE email='$remail'";
            $update_query       =   $this->conn->query($update_password);
            if($update_query){
                echo "<script>
                alert('Your password has been updated successfully');
                window.location = 'my_profile.php';
                </script>";
            }
           
        }
    }
    
    public function update_image($image){
        $update_email   =   $_SESSION['student_email'];
        $target = "assets/images/".basename($_FILES['image']['name']);
            //get all the submitted data from the form
            $image   =   $_FILES['image']['name'];
            //move the uploaded image into the folder images
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                $update_image     =   "UPDATE student_registration SET passport='$image' WHERE email='$update_email'";
                $update_query       =   $this->conn->query($update_image);
                header('Location:my_profile.php');
                
            }
    }

    public function student_reset_password($email,$password){
        $update_password     =   "UPDATE student_registration SET password='$password' WHERE email='$email'";
        $update_query       =   $this->conn->query($update_password);
        if($update_query){
            echo "<script>
            alert('Your password has been updated successfully');
            window.location = 'login.php';
            </script>";
        }
    }
}
?>