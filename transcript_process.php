<?php 
if(isset($_POST['submit'])){
    $to         = "transcript@allsaintsvocational.com.ng"; // this is your Email address
    $from       = 'EMAIL: ' . $_POST['email']; // this is the sender's Email address
    $firstname  = 'FIRSNAME: ' . $_POST['firstname'];
    $lastname   = 'LASTNAME: ' . $_POST['lastname'];
    $reg        = 'REGISTRATION NO: ' . $_POST['reg'];
    $phone      = 'PHONE: ' . $_POST['phone'];
    $cert_trans  = $_POST['cert'];
    $department = 'COURSE OFFERED/DEPARTMENT: ' . $_POST['department'];
    $year       = 'YEAR OF GRADUATION: ' . $_POST['year'];
    $subject = $cert_trans . " REQUEST";
    //$subject2 = "Copy of your form submission";
    $message = $cert_trans . " Request for:" . "\n\n" . $firstname . "\n\n" . $lastname . "\n\n" . $reg . "\n\n" . $from . "\n\n" . $phone . "\n\n" . $department . "\n\n" . $year;
    //$message = $fullname . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    //$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<script>
    alert('Mail Sent. Thank you " . $_POST['firstname'] . ", we will contact you shortly.');
    window.location='index.php';
    </script>";
    
    }
?>