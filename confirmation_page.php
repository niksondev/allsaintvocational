<?php
session_start();
$message = "";
if(isset($_POST['submit'])){
$serial_no      =   $_POST['serial'];
$conn           =   mysqli_connect('localhost','root','','allsaint');
$select_serial  =   "SELECT * FROM confirmation WHERE serial_no = '$serial_no' AND status = 0";
$select_used    =   "SELECT * FROM confirmation WHERE serial_no = '$serial_no' AND status = 1";
$serial_query   =   $conn->query($select_serial);
$used_query     =   $conn->query($select_used);
$check_serial   =   $serial_query->num_rows;
$check_used     =   $used_query->num_rows;

if($check_serial != 0){
    $update             =   "UPDATE confirmation SET status=1 WHERE serial_no ='$serial_no'";
    $update_query       =   $conn->query($update);
    $_SESSION['code']   =   $serial_no;
    header('Location:registration.php');
}else if($check_used !=0){
    $message    =   '<div class="alert alert-danger" role="alert" style = "width:100%;font-weight:bold;">Your activation code has been used</div>';
}else{
    $message    =   '<div class="alert alert-danger" role="alert" style = "width:100%;font-weight:bold;">Incorrect activation code"</div>';
}
}

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>All Saints School of Vocational studies</title>
	<!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="All Saints School of Vocational studies is designed to provide vocational education, or technical skills required to perform the tasks of a particular and specific job. It is one option for students interested in practical postsecondary education and job training. All Saints School of Vocational studies typically offer relatively short, career-focused programs that quickly prepare graduates for the workforce. ">
    <meta name="author" content="Matthew Samson Philip">
    <meta name="keyword" content="Tailoring, Cattering, Baking, Food and Nutrition,Cake Making, Cooking">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/allsaint.ico">
   
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!--Icon-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--Custom CSS-->
	<link href="assets/css/custom.css" rel='stylesheet' type='text/css' />
	<!--//Custom CSS-->
	<!--// Stylesheets -->
	<!--fonts-->
	<!-- title -->
	<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!--//fonts-->
	<style>
		
	</style>
</head>

<body>
	<h1>Confirmation Page</h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="" method="post">
            <img src="assets/images/image.png" alt="" width = "108px" height = "108px" />
                <?php echo $message; ?>
 
			<div class="agile-field-txt">
				<label for = "serial">
					<i class="fa fa-lock" aria-hidden="true"></i> Activation Code:</label>
				<input type="text" name="serial" placeholder="Enter your serial no" id = "serial" required>
				<span>NB: You can only use your activation code once</span>
			</div>
			
			<div class="w3ls-bot">
				
				<input type="submit" name = "submit" value="SEND">
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	
</body>
</html>