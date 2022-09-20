<?php
session_start();
if(!isset($_SESSION['student_email'])){
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>All Saints School of Vocational studies</title>
		<meta name="description" content="All Saints School of Vocational studies is designed to provide vocational education, or technical skills required to perform the tasks of a particular and specific job. It is one option for students interested in practical postsecondary education and job training. All Saints School of Vocational studies typically offer relatively short, career-focused programs that quickly prepare graduates for the workforce. ">
		<meta name="author" content="Matthew Samson Philip">
		<meta name="keyword" content="Tailoring, Cattering, Baking, Food and Nutrition,Cake Making, Cooking">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/allsaint.ico">

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->
		
</head>

<body class="adminbody">

		<div id="main">
		
			<!-- top bar navigation -->
			<div class="headerbar">


				<!-- LOGO -->
				<div class="headerbar-left">
				<?php
						$user_email						=	$_SESSION['student_email'];
						$conn									=	mysqli_connect('localhost','root','','allsaints');
						$select_image					=	"SELECT * FROM student_registration WHERE email = '$user_email'";
						$image_query					=	$conn->query($select_image);
						while($row = $image_query->fetch_assoc()){
				?>
					<a href="#" class="logo"><img src= "assets/images/<?php echo $row['passport']; ?>"  class="avatar-rounded"></a>
					
				</div>
		
				<nav class="navbar-custom">
		
							<ul class="list-inline float-right mb-0">
							
								
								
								<li class="list-inline-item dropdown notif">
									<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
										<img src="assets/images/<?php echo $row['passport']; ?>"  alt="Profile image" class="avatar-rounded">
									</a>
									<?php } ?>
									<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
										<!-- item-->
										<div class="dropdown-item noti-title">
											<h5 class="text-overflow"><small>Hello, <span>Students</span></small> </h5>
										</div>
		
										<!-- item-->
										<a href="my_profile.php" class="dropdown-item notify-item">
											<i class="fa fa-user"></i> <span>Profile</span>
										</a>
		
										<!-- item-->
										<a href="logout.php" onclick="return confirm('Logout?')" class="dropdown-item notify-item">
											<i class="fa fa-power-off"></i> <span>Logout</span>
										</a>
									</div>
								</li>
							</ul>
		
							<ul class="list-inline menu-left mb-0">
								<li class="float-left">
									<button class="button-menu-mobile open-left">
										<i class="fa fa-fw fa-bars"></i>
									</button>
								</li>                       
							</ul>
		
				</nav>
		
			</div>
			<!-- End Navigation -->
			
		 
			<!-- Left Sidebar -->
			<!-- Left Sidebar -->
				<div class="left main-sidebar">
		
					<div class="sidebar-inner leftscroll">
		
						<div id="sidebar-menu">
		
							<ul>
		
		
								<li class="submenu">
									<a class="active" href="#"><i class="fa fa-fw fa-bars"></i><span>Dashboard </span> </a>
								</li>
								<li class="submenu">
									<a href="registration.php"><i class="fa fa-fw fa fa-graduation-cap"></i><span> Registration </span> </a>
                                </li>
                                <li class="submenu">
									<a href="my_profile.php"><i class="fa fa-fw fa fa-user-circle-o"></i><span> My Profile </span> </a>
								</li>
								<li class="submenu">
									<a href="report_card.php"><i class="fa fa-fw fa fa-vcard"></i><span> My Report Card </span> </a>
								</li>
								<li class="submenu">
									<a href="logout.php" onclick="return confirm('Logout?')" class="dropdown-item notify-item">
									<i class="fa fa-power-off"></i> <span>Logout</span></a>
								</li>
							</ul>
		
		
							<div class="clearfix"></div>
		
						</div>
		
						<div class="clearfix"></div>
		
					</div>
		
				</div>
			<!-- End Sidebar=========================================================== -->
		
				<!-- End Sidebar -->
		
		
				<div class="content-page">
		
					<!-- Start content -->
					<div class="content">
		
						<div class="container-fluid">
		
							<div class="row">
								<div class="col-xl-12">
									 <div class="breadcrumb-holder">
										<h1 class="main-title float-left"><span style="font-size:.8em" class="badge badge-danger">Student</span> Dashboard</h1>

										<!--fetch data from database and update-->
									<?php
										$user_email		=		$_SESSION['student_email'];
										$conn					=		mysqli_connect('localhost','root','','allsaints');
										$select				=		"SELECT * FROM student_registration WHERE email = '$user_email'";
										$select_query	=		$conn->query($select);
										while($row = $select_query->fetch_assoc()){
											
									?>

										<ol class="breadcrumb float-right">
											<li class="breadcrumb-item active">Welcome, <?php echo $row['surname'].' '.$row['firstname'];?></li>
										</ol>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<!-- end row -->
		
							<!--<div class="alert alert-success" role="alert">-->
		
						</div>
						<div class="row">
							<style>
                                  #user_form fieldset:not(:first-of-type) {
                                    display: none;
                                }
								body {
		
									background-color: #023e71;
								}
		
								.border-10 {
		
									border-bottom-width: 3px;
									box-shadow: 2px 2px 4px #c9c0c0;
								}
		
							</style>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card mb-3 mx-auto" style="width:97%">
									<div class="card-header border-10 border-danger">
										<h3 style="color:#079a07"><i class="fa fa-user"></i> Profile details:
										<?php echo $row['surname'].' '.$row['firstname']; ?> </h3>
									</div>
									<div class="card-body">
									<div class="row"><!----row start-->
									
									<div class="col-lg-3 col-xl-6 "><!----Grid1-->
									
												<form action="profile.php" method="post" enctype="multipart/form-data">
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Username</label>
																<input class="form-control" name="username" type="text" placeholder="<?php echo $row['username']; ?>">
															</div>
														</div>
		
														<div class="col-lg-6">
															<div class="form-group">
																<label>Email</label>
																<input class="form-control" name="email" type="email" placeholder="<?php echo $row['email']; ?>"/>
															</div>
														</div>
													</div>
		
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Surname</label>
																<input class="form-control" name="surname" type="text" placeholder="<?php echo $row['surname']; ?>">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Firstname</label>
																<input class="form-control" name="finame" type="text" placeholder="<?php echo $row['firstname']; ?>">
															</div>
														</div>
													</div>
													
													<div class="row">
													  <div class="col-lg-6">
															<div class="form-group">
																<label>Marital Status</label>
																<input class="form-control" name="status" type="text" placeholder="<?php echo $row['status']; ?>">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Address</label>
																<input class="form-control" name="address" type="text" placeholder="<?php echo $row['address']; ?>">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>State</label>
																<input class="form-control" name="state" type="text" placeholder="<?php echo $row['state']; ?>">
															</div>
														</div>
		
														
														<div class="col-lg-6">
															<div class="form-group">
																<label>Date of Birth</label>
																<input class="form-control" id = "dob" name="dob" type="text" onclick = "document.getElementById('dob').setAttribute('type','date');"placeholder="<?php echo $row['dob']; ?>">
															</div>
														</div>
													</div>
		
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" name="update" class="btn btn-primary">Update profile</button>
														</div>
													</div>
										</form>
										<?php } ?>
												</div><!----Grid1 end-->
										
										<div class="col-lg-3 col-xl-3 border-left "><!----Grid2-->
										<div class="card alert-secondary">
										   <div class="card-header">
										<h5 class="text-center"><i class="fa fa-unlock"></i> Change your Password</h5>
									</div>
											<div class="card-body ">
																				
											 	<form method="post" action="password_update.php">
														<div class="form-group">
														<label for="opass">Enter your email</label>
														<input type="email" class="form-control" id="opass" name="remail" placeholder="Enter your email address">
															
														</div>
														<div class="form-group">
														<label for="opass">Enter new password</label>
														<input type="password" class="form-control" id="npass" name="npass" placeholder="Enter old password">
															</div>
														<div class="form-group">
														<label for="opass">Confirm new password</label>
														<input type="password" class="form-control" id="cpass" name="cpass" placeholder="Retype new password">
														</div>
														<button type="submit" name="passwordChange" class="btn btn-primary btn-block btn-sm">Change Password</button>
												</form>   
											</div>
										</div>
										</div><!----Grid2 end-->
										<div class="col-lg-3 col-xl-3 border-left rounded pt-3 table-info"><!----Grid3-->
										<!--Upload image(passport) from the database-->
										<?php
											$conn									=	mysqli_connect('localhost','root','','allsaints');
											$select_image					=	"SELECT * FROM student_registration WHERE email = '$user_email'";
											$image_query					=	$conn->query($select_image);
											while($row = $image_query->fetch_assoc()){
										?>
										<img class='mb-2' style='max-width:300px; height:auto; ' src='assets/images/<?php echo $row['passport'];?>' />                                            <div class="m-b-10"></div>
											<?php } ?>
													<form action="update_image.php" method="post" enctype="multipart/form-data">
														<div class="form-group">
															
															<div class="alert alert-secondary"><label for="exampleFormControlFile1">Change Photo</label><input type="file" class="form-control-file" name="image" id="image"></div>
														</div>
														<button type="submit" name="upload" class="btn-block btn btn-success "><i class="fa fa-upload"></i> Change Photo</button>
														<p class="small">You may wish to upload a passport-size photo here. Files must be in JPG format and file size must not exceed 200KB (Kilobytes). To replace an existing photo, just upload another one.</p>
																									</form>
										</div><!----Grid3 end-->
									 </div><!----row end-->
									
									
									
									</div>
								</div>
							</div>
							<!--============================================================-->
					   
		
		
				</div>
				<!-- END content -->
		
				</div>
				<!-- END content-page -->
				<footer class="footer">
      <span class="float-right mr-5">
	  &copy; <a target="_blank" href="#">Allsaintsvocational</a>
  </span>
  </footer>
<!-- END main -->

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>
		
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Counter-Up-->
	<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>			

	<script>
		$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();
					
			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		
	</script>
	
	<script>
	var ctx1 = document.getElementById("lineChart").getContext('2d');
	var lineChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
					label: 'Dataset 1',
					backgroundColor: '#3EB9DC',
					data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
				}, {
					label: 'Dataset 2',
					backgroundColor: '#EBEFF3',
					data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
				}]
				
		},
		options: {
						tooltips: {
							mode: 'index',
							intersect: false
						},
						responsive: true,
						scales: {
							xAxes: [{
								stacked: true,
							}],
							yAxes: [{
								stacked: true
							}]
						}
					}
	});


	var ctx2 = document.getElementById("pieChart").getContext('2d');
	var pieChart = new Chart(ctx2, {
		type: 'pie',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});


	var ctx3 = document.getElementById("doughnutChart").getContext('2d');
	var doughnutChart = new Chart(ctx3, {
		type: 'doughnut',
		data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true
			}
	 
	});
	</script>
<!-- END Java Script for this page -->

</body>
</html>