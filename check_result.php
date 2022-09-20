<?php
session_start();
if(!isset($_SESSION['admin_email'])){
    header('Location:admin.php');
    die();
}


//Grab the term and academic session  chosen from my_report.php using form method 'get'

$session       =   $_GET['session'];
$term          =   $_GET['term'];
$user_email    =   $_GET['email'];

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
                           
                <a href="#" class="logo"><img src='assets/images/allsaint.jpg' class="avatar-rounded"></a>
            </div>
    
            <nav class="navbar-custom">
    
                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src='assets/images/allsaint.jpg' class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Hello, <span>Admin</span></small> </h5>
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

                    <h3 style="color:#079a07"><i class="fa fa-user"></i> Term Report:

                        <button type="button" href="" onclick="window.print();" class="btn btn-primary"><i class="fa fa-print "></i> Print Report Card</button></span>

                    </h3>

                </div>


               
                <div class="card-body">

                    <!--tale -grid-->

                    <h3 class="text-center py-4">SCHOOL TERM REPORT</h3>

                    <div>

                        <div class="row">

                            <div class="col-md-4">

                            </div>

                        </div>

                    </div>

                    <!--PHP SCRIPT FOR RESULT START-->





                    




                    <!--PHP SCRIPT FOR RESULT CLOSE-->

                    

                        <!-- end card -->

                    </div>

                    <!-- end row col -->

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <?php if(isset($_SESSION['result'])){echo $_SESSION['result'];} ?>
                        <div class="row">
                            <table class="table table-bordered table-sm table-hover">

                                <thead style="background-color:#f0f0f0">

                                    <tr class="table-primary">

                                        <th scope="col">Courses</th>

                                        <th scope="col">Score</th>

                                        <th scope="col">Grade</th>

                                        <th scope="col">Point Weight</th>

                                        <th scope="col">Remarks</th>

                                    </tr>

                                </thead>

                                <tbody>



                                    <!-- oUTPUT-->

                                    <tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                    <?php
                                    
                                    $conn			=	mysqli_connect('localhost','root','','allsaint');
                                    $select			=	"SELECT * FROM result WHERE email = '$user_email' AND academic_session= '$session' AND term = '$term'";
                                    $select_query	=	$conn->query($select);
                                    $check_result   = $select_query->num_rows;
                                    if($check_result ==0 ){echo"<b>The results for this term and session have not been uploaded</b>";}
                                    while($row = $select_query->fetch_assoc()){
                                       
                                ?>

                                                <td><?php echo $row['course']; ?></td>

                                                <td><?php echo $row['score']; ?></td>

                                                <td><?php echo $row['grade']; ?></td>

                                                <td><?php echo $row['point_weight']; ?></td>

                                                <td><?php echo $row['remarks']; ?></td>

                                                

                                            </tr>
                                            
        <?php } ?>
                                            

                                </tbody>

                            </table>

                        </div>

                        <div class="col-md-12">

                            <div class="row">

                                        <div class="card-body">

                                        <table class="table table-bordered table-sm table-hover">

                                            <thead style="background-color:#f0f0f0">

                                                <tr class="table-primary">

                                                    <th scope="col">G.P.A/C.G.P.A</th>

                                                    <th scope="col">PERFORMANCE LEVEL</th>

                                                </tr>

                                            </thead>

                                            <tbody>



                                                <!-- oUTPUT-->

                                                <tr style='background-color:rgba(230, 230, 230, 0.57)'>


                                                            <td>4.00 - 3.50</td>

                                                            <td>Distinction</td>

                                                         
                                                        </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                            <td>3.49 - 3.00</td>

                                                            <td>Upper Credit</td>

                                                        
                                                        </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                            <td>2.99 - 2.50</td>

                                                            <td>Lower Credit</td>


                                                        </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                            <td>2.49 - 2.00</td>

                                                            <td>Pass</td>

                                                        </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                            <td>1.99 - 0.00</td>

                                                            <td>Fail</td>

                                                            </tr>
                                            </tbody>

                                            </table>

                                </div>

                                <!--grid-->

                                 <!--grid-->

                                <div class="col-md-8" style="width" 100%>
                                    <br>
                                <table class="table table-bordered table-sm table-hover">

                                    <thead style="background-color:#f0f0f0">

                                        <tr class="table-primary">

                                            <th scope="col">Score</th>

                                            <th scope="col">Grade</th>

                                            <th scope="col">Rating</th>

                                            <th scope="col">Point Weight</th>

                                        </tr>

                                    </thead>

                                    <tbody>



                                        <!-- oUTPUT-->

                                        <tr style='background-color:rgba(230, 230, 230, 0.57)'>


                                                    <td>80 - 100</td>

                                                    <td>A</td>

                                                    <td>Distinction</td>

                                                    <td>4</td>

                                                    

                                                </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                    <td>70 - 79</td>

                                                    <td>AB</td>

                                                    <td>Very Good</td>

                                                    <td>3.5</td>

                                                    

                                                </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                    <td>60 - 69</td>

                                                    <td>B</td>

                                                    <td>Good</td>

                                                    <td>3.0</td>

                                                    

                                                </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                    <td>50 - 59</td>

                                                    <td>BC</td>

                                                    <td>Fairly Good</td>

                                                    <td>2.5</td>

                                                    

                                                </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                    <td>40 - 49</td>

                                                    <td>C</td>

                                                    <td>Pass</td>

                                                    <td>2.0</td>

                                                    

                                                </tr><tr style='background-color:rgba(230, 230, 230, 0.57)'>

                                                    <td>Below 40</td>

                                                    <td>F</td>

                                                    <td>Fail</td>

                                                    <td>1.5</td>

                                                    

                                                </tr>

                                    </tbody>

                                    </table>
                                        

                                    <!--grid-->

                                </div>



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