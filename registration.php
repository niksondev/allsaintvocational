<?php
session_start();
if(isset($_SESSION['student_email'])){
	echo "<script>
		alert('You have done your registration before');
		window.location = 'my_profile.php';
		</script>";
}else if(!isset($_SESSION['code'])){
	header('Location:confirmation_page.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Pike Admin - Free Bootstrap 4 Admin Template</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
        <!-- END CSS for this page -->
        
        <link href="assets/css/reg_style.css" rel='stylesheet' type='text/css' />
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        
		
</head>

<body class="adminbody">

		<div id="main">
		
			<!-- top bar navigation -->
			<div class="headerbar">
		
				<!-- USER LOGO -->
				<div class="headerbar-left">
					<a href="#" class="logo"><img src='assets/images/allsaint.jpg' class="avatar-rounded"></a>
				</div>
				<!--USER LOGO -->
				<nav class="navbar-custom">
		
							<ul class="list-inline float-right mb-0">
									
								<li class="list-inline-item dropdown notif">
									<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
										<img src='assets/images/allsaint.jpg' class="avatar-rounded">
									</a>
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
									<a class="active" href="#"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
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
										<ol class="breadcrumb float-right">
											<li class="breadcrumb-item active">Welcome, Helen Carrington</li>
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
										<h3 style="color:#079a07"><i class="fa fa-user"></i> 
											All Saints School Of Vocational Studies, Nnewi
                               			</h3>
									</div>
									<div class="card-body">
		<div class="alert alert-success hide"></div>	                          
        <form id="user_form" novalidate action="register.php"  method="post" enctype="multipart/form-data" autocomplete="on">	
        <fieldset>
            <div class="main-title">
               <h3>Registration Form</h3>
            </div>
            <h4>Personal Data</h4>
            <div class="form-group">
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>
               </div>
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" required>
               </div>
            </div>
            <div class="form-group">
               <div class="form-grid-w3ls">
			   		<input placeholder ="Date of Birth" name = "dob" class="form-control" type="text" onclick="(this.type='date')"  id="date" required>
               </div>
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Residential Address" required="">
                </div>
               
            </div>
            
            <div class="form-group">
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="place" id="place" placeholder="State Of Origin" required>   
                </div>
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Nationality" required>
                </div>    
               
            </div>
            <div class="form-group">
            <div class="form-grid-w3ls">
                  <p>Sex : </p><br> 
                  <label><input type="radio" id = "sex" value="Female" name= "sex" checked required> Female</label><br>
                  <label><input type="radio"  id = "sex" value="Male" name= "sex" required> Male</label>
                </div>
               <div class="form-grid-w3ls">
                  <p>Marital Status :</p> <br> 
                  <label><input type="radio" id = "status" value="Single" name = "status" checked required> Single</label><br>
                  <label><input type="radio" id = "status" value="Married"  name = "status" required>Married</label>
               </div> 
               
            </div>
            <h5>OTHER PERSONAL DETAILS:</h5>
            <div class="form-group">
                  <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Father's name" required>
                  </div>
                  <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="father's occupation" required>
                  </div>
               
               
            </div>
            <div class="form-group">
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="faddress" id="add" placeholder="Father's address" required="">
               </div>
               <div class="form-grid-w3ls">
                    <input type="phone" class="form-control" name="fone" id="fone" placeholder="Father's Phone" required>
               </div>
            </div>
            <div class="form-group">
               
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="mname" id="mname" placeholder="Mother's name" required>
               </div>
               <div class="form-grid-w3ls">
                     <input type="text" class="form-control" name="moccupation" id="moccupation" placeholder="Mother's occupation" required>
                </div>
            </div>
            <div class="form-group">
               
               <div class="form-grid-w3ls">
                    <input type="phone" class="form-control" name="mfone" id="mfone" placeholder="Mother's Phone" required>
                </div>
                <div class="form-grid-w3ls">
                   <p>Guadian/Sponsor (IF DIFFERENT FROM THE ABOVE):</p> <br>
                  <input type="text" class="form-control" name="sponsor" id="sponsor" placeholder="Guadian/Sponsor">
                </div>
               
            </div>
            <input type="button" class="next btn btn-info" value="Next" />
            
        </fieldset>

        <fieldset>
            <!--<div class="main-title">
                <h3>Step 2: HOSTEL ACCOMMODATION FORM</h3>
            </div>
            -->
			<div class="form-group">
               <div class="form-grid-w3ls">
			   		<p>Passport</p> <br>
			   		<input type = "file" name = "passport" accept="image/*" class="form-control" id="plat_img" required>
					
               </div>
               <div class="form-grid-w3ls">
					<p>Signature</p> <br>
                    <input type = "file" name = "signature" accept="image/*" class="form-control" id="signature" required>
               </div>
            </div>
            <div class="form-group">
				<div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="department" id="department" placeholder="Department" required="">
               	</div>
                <div class="form-grid-w3ls">
                  <p>Do you need a hostel?</p> <br> 
                  <label><input type="radio" value="yes" name="room" required checked> Yes</label><br>
                  <label><input type="radio" value="no" name="room" required> No</label>
                </div>
				
               
            </div>
                <center><h4>NEXT OF KIN INFORMATION<h4></center>
            <div class="form-group">
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="kin_name" id="name" placeholder="Name Of Next Of Kin" required>
               </div>
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="kin_address" id="kin_add" placeholder="Address Of Next Of Kin" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-grid-w3ls">
                    <input type="phone" class="form-control" name="kin_phone" id="kin_phone" placeholder="Phone Number of Next of Kin"required>
               </div>
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" name="relationship" id="relationship" placeholder="Relationship" required>
               </div>
            </div>
            <center><h4>HEALTH INFORMATION</h4></center>
            <div class="form-group">
                <div class="form-grid-w3ls">
                  <p>Do you have any disability(ies)?</p> <br> 
                  <label><input type="radio" value="yes" name = "question1" > Yes</label><br>
                  <label><input type="radio" value="no"  name = "question1" checked>No</label>
                </div>
               <div class="form-grid-w3ls">
                    <p>If yes, please specify below: </p><br>
                    <input type="text" class="form-control" name="answer1" id="quest1" placeholder="Please specify your disability">
                </div>
            </div>
            <div class="form-group">
                <div class="form-grid-w3ls">
                  <p>Do you have any allergy (ies)? </p><br> 
                  <label><input type="radio" value="yes" name = "question2" > Yes</label><br>
                  <label><input type="radio" value="no"  name = "question2" checked>No</label>
                </div>
                <div class="form-grid-w3ls">
                    <p>If yes, please specify below: </p><br>
                    <input type="text" class="form-control" name="answer2" id="quest2" placeholder="Please specify your allergy">
                </div>
               
            </div>
            <div class="form-group">
                <div class="form-grid-w3ls">
                  <p>Do you have any terminal and reoccuring health challenge(s)?</p> <br> 
                  <label><input type="radio" value="yes" name = "question3"> Yes</label><br>
                  <label><input type="radio" value="no"  name = "question3" checked>No</label>
                </div>
                <div class="form-grid-w3ls">
                    <p>If yes, please specify below: </p><br>
                    <input type="text" class="form-control" name="answer3" id="quest3" placeholder="Please specify your terminal and reoccurring health challenge(s)">
                </div>
            </div><br>
            
            <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
            <input type="button" name="next" class="next btn btn-info" value="Next" />
        </fieldset>

        <fieldset>
        <div class="main-title">
               <h3>ACCOUNT</h3>
            </div>
            <div class="form-group">
               <div class="form-grid-w3ls">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
               <div class="form-grid-w3ls">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-grid-w3ls">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
               </div>
               <div class="form-grid-w3ls">
                    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirmed Password" required>
               </div>
            </div>
	        <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
	        <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
	</fieldset>

    </form>	
									
									
									
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
  </div>
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
<script src="assets/js/form.js"></script>

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
		//Image Upload

		var imageInput = document.getElementById("plat_img");
            // listening on when someone selects a file
            imageInput .onchange = function(e) {
            e.preventDefault();

            // get the file someone selected
            var file = imageInput.files && imageInput.files[0];

            // create an image element with that selected file
            var img = new Image();
            img.src = window.URL.createObjectURL(file);

            // as soon as the image has been loaded
            img.onload = function() {
               var width = img.naturalWidth,
                  height = img.naturalHeight;

               // unload it
               window.URL.revokeObjectURL(img.src);

               // check its dimensions
               if (width <= 300 && height <= 300) {
                  // it fits 
               } else {
                  // it doesn't fit, unset the value 
                  // post an error
                  imageInput.value = ""
                  alert("your image size should not be more than 300x300")
               }
            };

            };
			//**Upload Signature **/

			var fileInput = document.getElementById("signature");
            // listening on when someone selects a file
            fileInput .onchange = function(e) {
            e.preventDefault();

            // get the file someone selected
            var file = fileInput.files && fileInput.files[0];

            // create an image element with that selected file
            var img = new Image();
            img.src = window.URL.createObjectURL(file);

            // as soon as the image has been loaded
            img.onload = function() {
               var width = img.naturalWidth,
                  height = img.naturalHeight;

               // unload it
               window.URL.revokeObjectURL(img.src);

               // check its dimensions
               if (width <= 200 && height <= 200) {
                  // it fits 
               } else {
                  // it doesn't fit, unset the value 
                  // post an error
                  fileInput.value = ""
                  alert("your image size should not be more than 200x200")
               }
            };

            };
			//**Upload signature **/

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