<?php 
if(isset($_POST['submit'])){
    $to         = "transcript@allsaintsvocational.com.ng"; // this is your Email address
    $from       = 'VERIFIER EMAIL: ' . $_POST['email']; // this is the sender's Email address
    $fullname   = 'STUDENT NAME: ' . $_POST['sname'];
    $vfullname  =  'VERIFIER NAME: '. $_POST['vname'];
    $vaddress   =  'VERIFIER ADDRESS: '. $_POST['add'];
    $vphone     =  'VERIFIER PHONE: '. $_POST['phone'];

    //Upload the file to the root directory
    //the path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);
    //get all the submitted data from the form
    $image      = $_FILES['image']['name'];
    $image_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_name, $target);

    $body       = "TRANSCRIPT IMAGE LINK: http://allsaintsvocational.com.ng/images/$image";
    $message    = 'MESSAGE: ' . $_POST['message'];
    $subject    = "Transcript Verification";
    $messages   = "Transcript verification details:" . "\n\n" . $vfullname . "\n\n" . $vaddress . "\n\n" . $vphone . "\n\n" . $from . "\n\n" . $fullname . "\n\n" . $body . "\n\n" .$message;
    //$message = $fullname . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    
    $headers = "From:" . $from;
    mail($to,$subject,$messages,$headers);
    echo "<script>
    alert('Mail Sent. Thank you " . $_POST['vname'] . ", we will contact you shortly.');
    window.location='index.php';
    </script>";
    
    }
?>