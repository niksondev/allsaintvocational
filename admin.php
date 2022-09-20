<?php
session_start();
 if(!empty($_SESSION['admin_email']))
 {
	 
	 header('Location:add_result.php');
	
	 die();
 }
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>All Saints School of Vocational studies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="All Saints School of Vocational studies is designed to provide vocational education, or technical skills required to perform the tasks of a particular and specific job. It is one option for students interested in practical postsecondary education and job training. All Saints School of Vocational studies typically offer relatively short, career-focused programs that quickly prepare graduates for the workforce. ">
	<meta name="author" content="Matthew Samson Philip">
	<meta name="keyword" content="Tailoring, Cattering, Baking, Food and Nutrition,Cake Making, Cooking">

		<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/allsaint.ico">
	<!-- Meta-Tags -->
	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
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
	<link href="assets/css/custom_login.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<!-- title -->
	<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!--//fonts-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
	<h1>All Saints School of Vocational studies</h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="adminlogin.php" method="post">
			<img src="assets/images/image.png" alt="" width = "108px" height = "108px" />
			<div class="agile-field-txt">
				<label for = "email">
					<i class="fa fa-user" aria-hidden="true"></i> Admin Email</label>
				<input type="email" name="email" placeholder="Enter your email" id = "email" required>
				
			</div>
			<div class="agile-field-txt">
				<label for = "myInput">
					<i class="fa fa-lock" aria-hidden="true"></i> Admin Password</label>
				<input type="password" name="password" placeholder="Enter your password" required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
				<div class="agile-right">
					<a href="reset_password.php">forgot password?</a>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "email";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //end script -->
			<div class="w3ls-bot">
				
				<input type="submit" name = "submit" value="LOGIN">
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	
</body>
</html>