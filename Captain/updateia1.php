<?php
session_start();
include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Attendance Status</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
</head>
<body style="background-image:url(images/bg1.jpg)">

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
									
									<li><a href="student.html"><b>Logout</b></a></li>
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
	<br>
	<br>
    <br>
    <br>
	<div class="container">
		<div class="row" style="margin-top: 10%;back">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><center>Update IA Marks</center></div>
				<div class="panel-body">
					<form action="updateia.php" method="POST">
							<label>USN</label>
							<select class="form-control" name="usn" style="height: 40px;">
									<option>--Select USN--</option>
                                    <option value="1VK15CS031">1VK15CS031</option>
                                    <option value="1VK15CS032">1VK15CS032</option>
                                    <option value="1VK15CS033">1VK15CS033</option>
                                    <option value="1VK15CS034">1VK15CS034</option>
                                    <option value="1VK15CS035">1VK15CS035</option>
                                    <option value="1VK15CS036">1VK15CS036</option>
                                    <option value="1VK15CS037">1VK15CS037</option>
                                    <option value="1VK15CS038">1VK15CS038</option>
                                    <option value="1VK15CS039">1VK15CS039</option>
                                    <option value="1VK15CS040">1VK15CS040</option>
                                    <option value="1VK15CS041">1VK15CS041</option>
                                    <option value="1VK15CS042">1VK15CS042</option>
                                    <option value="1VK15CS043">1VK15CS043</option>
                                    <option value="1VK15CS044">1VK15CS044</option>
                                    <option value="1VK15CS045">1VK15CS045</option>
                                    <option value="1VK15CS046">1VK15CS046</option>
                                    <option value="1VK15CS047">1VK15CS047</option>
                                    <option value="1VK15CS048">1VK15CS048</option>
                                    <option value="1VK15CS049">1VK15CS049</option>
                                </select><br>
                                <select class="form-control" name="iam" style="height: 40px;">
                                	<option>--Select IA--</option>
                                	<option value='1'>First IA</option>
                                	<option value='2'>Second IA</option>
                                	<option value='3'>Third IA</option>
                                </select><br>
                                <table style="border: 1px solid black;width: 330px;">
                                	<tr style="border: 1px solid black">
                                		<th style="border: 1px solid black;text-align: center;"></th>
                                		<th style="border: 1px solid black;text-align: center;" colspan="6">Part 1</th>
                                		<th style="border: 1px solid black;text-align: center;" colspan="6">Part 2</th>
                                	</tr>
                                	<tr style="border: 1px solid black">
                                		<th style="border: 1px solid black;text-align: center;">Subjects</th>
                                		<th style="border: 1px solid black;text-align: center;">1a</th>
                                		<th style="border: 1px solid black;text-align: center;">1b</th>
                                		<th style="border: 1px solid black;text-align: center;">1c</th>
                                		<th style="border: 1px solid black;text-align: center;">2a</th>
                                		<th style="border: 1px solid black;text-align: center;">2b</th>
                                		<th style="border: 1px solid black;text-align: center;">2c</th>
                                		<th style="border: 1px solid black;text-align: center;">3a</th>
                                		<th style="border: 1px solid black;text-align: center;">3b</th>
                                		<th style="border: 1px solid black;text-align: center;">3c</th>
                                		<th style="border: 1px solid black;text-align: center;">4a</th>
                                		<th style="border: 1px solid black;text-align: center;">4b</th>
                                		<th style="border: 1px solid black;text-align: center;">4c</th>
                                	</tr>
                                	<tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">SAN</td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san1a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san1b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san1c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san2a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san2b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san2c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san3a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san3b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san3c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san4a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san4b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="san4c" required="" style="width: 20px"></td>
                                    </tr>
                                    <tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">WEB</td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web1a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web1b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web1c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web2a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web2b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web2c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web3a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web3b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web3c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web4a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web4b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="web4c" required="" style="width: 20px"></td>
                                    </tr>
                                    <tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">ACA</td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca1a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca1b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca1c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca2a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca2b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca2c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca3a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca3b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca3c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca4a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca4b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="aca4c" required="" style="width: 20px"></td>
                                    </tr>
                                    <tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">USP</td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp1a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp1b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp1c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp2a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp2b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp2c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp3a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp3b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp3c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp4a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp4b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="usp4c" required="" style="width: 20px"></td>
                                    </tr>
                                    <tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">ML</td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml1a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml1b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml1c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml2a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml2b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml2c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml3a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml3b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml3c" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml4a" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml4b" required="" style="width: 20px"></td>
                                		<td style="border: 1px solid black;text-align: center;"><input type="text" name="ml4c" required="" style="width: 20px"></td>
                                    </tr>
                                    
                                </table><br>
							<center><button class="btn btn-primary">Submit</button></center><br>
                            <center><a href="viewatd.php">View all</a></center><br>
						
					</form>
				</div>
			</div>
		</div>
			</div>
		</div>


	

	<!-- Footer -->

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