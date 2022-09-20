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
		<link href="assets/css/result.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
        <!-- END CSS for this page -->
        <style>
        body {

            background-color: #023e71;
        }

        .border-10 {

            border-bottom-width: 3px;
            box-shadow: 2px 2px 4px #c9c0c0;
        }

    </style>
        
		
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
		<?php
			$user_email						=	$_SESSION['student_email'];
			$conn							=	mysqli_connect('localhost','root','','allsaints');
			$select_image					=	"SELECT * FROM student_registration WHERE email = '$user_email'";
			$image_query					=	$conn->query($select_image);
			while($row = $image_query->fetch_assoc()){
		?>
				<a href="#" class="logo"><img src= "assets/images/<?php echo $row['passport']; ?>"  class="avatar-rounded"></a>
					
			</div>
        	<nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
						
                        <!--end clear-->
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<img src="assets/images/<?php echo $row['passport']; ?>"  alt="Profile image" class="avatar-rounded">
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
<style>
.border-10{

 border-bottom-width: 3px;
box-shadow: 2px 2px 4px #c9c0c0;
}
    .alertify-logs{
        top:10px;
        right:10px;
        
    }                                
                                
</style>


        <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                         <div class="breadcrumb-holder">
                                <h1 class="main-title float-left"><span style="font-size:.8em" class="badge badge-danger">Student</span> Dashboard</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item active">Welcome, <?php echo $row['surname'].' '.$row['firstname'];?></li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
	<?php } ?>         
                <!-- end row -->

                    </div>
                </div>
                <!-- end row -->
    <div class="card-body">
		<div class="col-xs-6 col-sm-6 col-md-6 mx-auto ">
			<div class="card mb-3 animated bounceInRight">
				<div class="card-header border-10 border-danger bg-success">
					<h3 style="color:white"><i class="fa fa-search"></i> Select Criteria </h3>

    </div>
    <div class="card-body">
	<!--<h6 class="text-center" style="color:red"> Search here for required term report </h6>-->
    <div class="row">
    <form class="mx-auto col-md-6" method="get" action="my_result.php">
     <div class="form-group">
      <label for="ControlSelect">Choose a Term</label>
      <select class="form-control" name="term" id="exampleFormControlSelect1" required>
       <option ></option>
        <option value="1st">1st Term</option>
        <option value="2nd">2nd Term</option>
        <option value="3rd">3rd Term</option>
      </select>
    </div>
      <div class="form-group">
      <label for="ControlSelect">Select Academic Session</label>
      <select class="form-control" name="session" id="exampleFormControlSelect1" required>
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
      </select>
    </div>
     <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Search</button>
    </form>

                          
                              </div>
                          </div>
                      </div>
                      
                      
                      <!-- end card-->
                  </div>

          </div>
          <!-- END container-fluid -->

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

              <!-- END main -->							
									</div>
								</div>
							</div>
							<!--============================================================-->
					   
		
		
				</div>
				<!-- END content -->
		
				</div>
				<!-- END content-page -->
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