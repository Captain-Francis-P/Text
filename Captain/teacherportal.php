<?php
session_start();
include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher Portal</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script type="text/javascript">
	function display()
	{
		alert("Coming Soon !");
	}
</script>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-center">
									
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="https://vitb.ac.in/">
									<img src="images/logo.jpg" width="70%" height="70%">
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
									
									<li><a href="teacher.html"><b>Logout</b></a></li>
									<li style="color: red;font-size: 15px;border : 1px solid #a5a5a5;padding: 5px;"><b>User ID :<?php echo " ".$_SESSION['tname']; ?></b></li>
								</ul>
								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	
	</header>
		
	<div class="container-fluid">
		<div class="container-fluid">
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_1.jpg" alt=""></div>
						<div class="course_body">
							<center><h3 class="course_title"><a href="updateas1.php">Attendance</a></h3></center>
							<div class="course_text">
								<center><p>Attendance will be updated regurarly by the lecturers and the students will be able to view the same</p></center>
							</div>
						</div>
						
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_2.jpg" alt=""></div>
						<div class="course_body">
							<center><h3 class="course_title"><a href="updateia1.php">IA Marks</a></h3></center>
							<div class="course_text">
								<center><p>IA marks of the students will be updated after every internals and students can view the same</p></center>
							</div>
						</div>
						
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/course_3.jpg" alt=""></div>
						<div class="course_body">
							<center><h3 class="course_title"><a href="" onclick="display()">Notes</a></h3></center>
							<div class="course_text">
								<center><p>Notes will be uploaded by lecturers and the same can be downloaded by the students</p></center>
							</div>
						</div>
						
					</div>
				</div>

			</div>
			
		</div>
	</div>
	<br>
	<br>
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-6 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="https://vitb.ac.in/">
											<img src="images/logo.jpg" width="70%" height="70%">
										</a>
									</div>
									<div class="footer_about_text">
										<p>Department of Computer Science</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-6 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact justify-content-end">
									<div class="footer_title">Contact Us</div>
									<div class="footer_about_text">
										<p>Kumbalagodu, Kengeri, <br>
										   Bengaluru-560 074.<br> 
										   Mobile: +91 7625013435<br>
										   Office: 080 -2843 7696, 28437036<br>
										   Fax : 080-28437944</p><br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>