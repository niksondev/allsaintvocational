<?php
session_start();
if(!isset($_SESSION['admin_email'])){
    header('Location:admin.php');
    die();
}

 $surname        =   $_GET['surname'];
 $firstname      =   $_GET['firstname'];
 $email          =   $_GET['email'];
 $dept           =   $_GET['dept'];
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
                <a href="#" class="logo"><img src= "assets/images/voc.jpg"  alt="Profile image" class="avatar-rounded"></a>
            </div>
    
            <nav class="navbar-custom">
    
                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src=assets/images/voc.jpg  alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Welcome <span>Admin</span></small> </h5>
                            </div>

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
									<a href="add_student.php"><i class="fa fa-fw fa fa-graduation-cap"></i><span> Add Student </span> </a>
                                </li>
                                <li class="submenu">
									<a href="add_result.php"><i class="fa fa-fw fa fa-user"></i><span> Add Result </span> </a>
								</li>
                                <li class="submenu">
									<a href="delete_result.php"><i class="fa fa-fw fa fa-envelope"></i><span> Check Result/Delete Result </span> </a>
								</li>
								<li class="submenu">
									<a href="add_admin.php"><i class="fa fa-fw fa fa-vcard"></i><span> Add Admins </span> </a>
								</li>
                                <li class="submenu">
									<a href="confirmation_code.php"><i class="fa fa-lock"></i><span> Add Activation Code </span> </a>
								</li>
                                <li class="submenu">
									<a href="activation_list.php"><i class="fa fa-vcard"></i><span> List of Activation Code </span> </a>
								</li>
                                <li class="submenu">
									<a href="reset_admin_password.php"><i class="fa fa-unlock"></i><span> Reset Password </span> </a>
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

                            <h1 class="main-title float-left"><span style="font-size:.8em" class="badge badge-danger">Admin</span> Dashboard</h1>

                            <ol class="breadcrumb float-right">

                                <li class="breadcrumb-item active">Welcome, Admin</li>

                                

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

            body {



                background-color: #023e71;

            }



            .border-10 {



                border-bottom-width: 3px;

                box-shadow: 2px 2px 4px #c9c0c0;

            }



        </style>



        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            <div class="card mb-3 mx-auto animated bounceInBottom" style="width:97%">

                <div class="card-header border-10 border-danger">

                    <h3 style="color:#079a07"><i class="fa fa-user"></i> 
                        All Saints School Of Vocational Studies Term Report:

                    </h3>

                </div>

                  
                <form method = "post" action = "submit_result.php">
                   
                    <strong>ACADEMIC SESSION: <select name="acada" style = "width:22%;padding:7px;" required>
                        <option ></option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2030">2031</option>
                            <option value="2030">2032</option>
                            <option value="2030">2033</option>
                            <option value="2030">2034</option>
                            <option value="2030">2035</option>
                        </select></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <strong>TERM:</strong> <select name="term" style = "width:22%;padding:7px;" required>
                    <option ></option>
                        <option value="1st">1st Term</option>
                        <option value="2nd">2nd Term</option>
                        <option value="3rd">3rd Term</option>
                    </select>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                        
                            <table class="table table-bordered table-sm table-hover">

                                <thead style="background-color:#f0f0f0">

                                    <tr class="table-primary">

                                        <th scope="col">Courses/Subject</th>

                                        <th scope="col">Score</th>

                                        <th scope="col">Grade</th>

                                        <th scope="col">Point Weight</th>

                                        <th scope="col">Remarks</th>

                                    </tr>

                                </thead>

                                <tbody>



                                    <!-- oUTPUT-->

                                    <tr style='background-color:rgba(230, 230, 230, 0.57)'>



                                                <td><input type = "text" name = "course" required></td>

                                                <td><input type = "text" name = "score" required></td>

                                                <td><input type = "text" name = "grade" required></td>

                                                <td><input type = "text" name = "power_weight" required></td>

                                                <td><input type = "text" name = "remark" required></td>

                                                

                                            </tr>
                                </tbody>

                            </table>
                            <strong><em>NB:Enter the subject/course name, score, grade, power-weight and remark for each subject one after the other after using submit button</em></strong>
                        </div>
                        
                        <input type = "hidden" name = "surname" value = "<?php echo $surname; ?>">
                        <input type = "hidden" name = "firstname" value = "<?php echo $firstname; ?>">
                        <input type = "hidden" name = "email" value = "<?php echo $email; ?>">
                        <input type = "hidden" name = "dept" value = "<?php echo $dept; ?>">
                        <input type = "submit" name = "submit" class = "btn btn-success" value = "Submit">
                    </form>
                            </div>

                            <div class="col-xl-12">

                                <hr><a class="btn btn-warning" href="report_card.php" role="button"><i class="fa fa-arrow-circle-left"></i> Go back</a>

                            </div>

                            <!-- end row -->



                        </div>

                        <!-- END container-fluid -->



                    </div>

                    <!-- END content -->



                </div>

                <!-- END content-page -->



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