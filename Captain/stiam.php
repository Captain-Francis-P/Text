<?php
session_start();
include('connect.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
<title>Student Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
									<li style="color: red;font-size: 15px;border : 1px solid #a5a5a5;padding: 5px;"><b>USN :<?php echo " ".$_SESSION['usn']; 
										$usn=$_SESSION['usn'];?></b></li>
									<li><a href=""></a></li>
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
	<br><br><br><br>
	<div class="container">
		<div class="row" style="margin-top: 10%;back">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><center>IA Marks</center></div>
				<div class="panel-body">
					<table style="border: 1px solid black;width: 330px;">
                                	<tr style="border: 1px solid black">
                                		<th style="border: 1px solid black;text-align: center;">Subjects</th>
                                		<th style="border: 1px solid black;text-align: center;">IA I</th>
                                		<th style="border: 1px solid black;text-align: center;">IA II</th>
                                		<th style="border: 1px solid black;text-align: center;">IA III</th>
                                		<th style="border: 1px solid black;text-align: center;">Final IA</th>
                                	</tr>
                                	<?php
       	 								$sth = $conn->query("SELECT * FROM iamarks_1 where USN='$usn'");
                                        $row = $sth->fetch(PDO::FETCH_ASSOC);   	 
                					?>			
                                	<tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">SAN</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $a=$row['SAN1'];
                                				$sth = $conn->query("SELECT * FROM iamarks_2 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                        	?>
                                        	</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $b=$row['SAN2'];
                                				$sth = $conn->query("SELECT * FROM iamarks_3 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                			?>
                                		</td> 
                                		<td style="border: 1px solid black;text-align: center;"> <?= $c=$row['SAN3']?></td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?php
                                				$array = array($a,$b,$c);
												$max_1 = $max_2 = 0;

												for($i=0; $i<count($array); $i++)
												{
    												if($array[$i] > $max_1)
    												{
      													$max_2 = $max_1;
      													$max_1 = $array[$i];
    												}
    												else if($array[$i] > $max_2)
    												{
     		 											$max_2 = $array[$i];
    												}
												}
												$avg=($max_1+$max_2)/2;
												echo $avg;
                                			?>
                                		</td>
                                    </tr>

                                    <?php
       	 								$sth = $conn->query("SELECT * FROM iamarks_1 where USN='$usn'");
                                        $row = $sth->fetch(PDO::FETCH_ASSOC);   	 
                					?>			
                                	<tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">WEB</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $a=$row['WEB1'];
                                				$sth = $conn->query("SELECT * FROM iamarks_2 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                        	?>
                                        	</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $b=$row['WEB2'];
                                				$sth = $conn->query("SELECT * FROM iamarks_3 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                			?>
                                		</td> 
                                		<td style="border: 1px solid black;text-align: center;"> <?= $c=$row['WEB3']?></td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?php
                                				$array = array($a,$b,$c);
												$max_1 = $max_2 = 0;

												for($i=0; $i<count($array); $i++)
												{
    												if($array[$i] > $max_1)
    												{
      													$max_2 = $max_1;
      													$max_1 = $array[$i];
    												}
    												else if($array[$i] > $max_2)
    												{
     		 											$max_2 = $array[$i];
    												}
												}
												$avg=($max_1+$max_2)/2;
												echo $avg;
                                			?>
                                		</td>
                                    </tr>
                                    
                                    <?php
       	 								$sth = $conn->query("SELECT * FROM iamarks_1 where USN='$usn'");
                                        $row = $sth->fetch(PDO::FETCH_ASSOC);   	 
                					?>			
                                	<tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">ACA</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $a=$row['ACA1'];
                                				$sth = $conn->query("SELECT * FROM iamarks_2 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                        	?>
                                        	</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $b=$row['ACA2'];
                                				$sth = $conn->query("SELECT * FROM iamarks_3 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                			?>
                                		</td> 
                                		<td style="border: 1px solid black;text-align: center;"> <?= $c=$row['ACA3']?></td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?php
                                				$array = array($a,$b,$c);
												$max_1 = $max_2 = 0;

												for($i=0; $i<count($array); $i++)
												{
    												if($array[$i] > $max_1)
    												{
      													$max_2 = $max_1;
      													$max_1 = $array[$i];
    												}
    												else if($array[$i] > $max_2)
    												{
     		 											$max_2 = $array[$i];
    												}
												}
												$avg=($max_1+$max_2)/2;
												echo $avg;
                                			?>
                                		</td>
                                    </tr>

                                    <?php
       	 								$sth = $conn->query("SELECT * FROM iamarks_1 where USN='$usn'");
                                        $row = $sth->fetch(PDO::FETCH_ASSOC);   	 
                					?>			
                                	<tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">USP</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $a=$row['USP1'];
                                				$sth = $conn->query("SELECT * FROM iamarks_2 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                        	?>
                                        	</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $b=$row['USP2'];
                                				$sth = $conn->query("SELECT * FROM iamarks_3 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                			?>
                                		</td> 
                                		<td style="border: 1px solid black;text-align: center;"> <?= $c=$row['USP3']?></td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?php
                                				$array = array($a,$b,$c);
												$max_1 = $max_2 = 0;

												for($i=0; $i<count($array); $i++)
												{
    												if($array[$i] > $max_1)
    												{
      													$max_2 = $max_1;
      													$max_1 = $array[$i];
    												}
    												else if($array[$i] > $max_2)
    												{
     		 											$max_2 = $array[$i];
    												}
												}
												$avg=($max_1+$max_2)/2;
												echo $avg;
                                			?>
                                		</td>
                                    </tr>

                                    <?php
       	 								$sth = $conn->query("SELECT * FROM iamarks_1 where USN='$usn'");
                                        $row = $sth->fetch(PDO::FETCH_ASSOC);   	 
                					?>			
                                	<tr style="border: 1px solid black;text-align: center;">
                                		<td style="border: 1px solid black;text-align: center;">ML</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $a=$row['ML1'];
                                				$sth = $conn->query("SELECT * FROM iamarks_2 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                        	?>
                                        	</td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?= $b=$row['ML2'];
                                				$sth = $conn->query("SELECT * FROM iamarks_3 where USN='$usn'");
                                        		$row = $sth->fetch(PDO::FETCH_ASSOC);  
                                			?>
                                		</td> 
                                		<td style="border: 1px solid black;text-align: center;"> <?= $c=$row['ML3']?></td>
                                		<td style="border: 1px solid black;text-align: center;"> 
                                			<?php
                                				$array = array($a,$b,$c);
												$max_1 = $max_2 = 0;

												for($i=0; $i<count($array); $i++)
												{
    												if($array[$i] > $max_1)
    												{
      													$max_2 = $max_1;
      													$max_1 = $array[$i];
    												}
    												else if($array[$i] > $max_2)
    												{
     		 											$max_2 = $array[$i];
    												}
												}
												$avg=($max_1+$max_2)/2;
												echo $avg;
                                			?>
                                		</td>
                                    </tr>
                                    <?php  
        							?>
                                </table><br>
				</div>
			</div>
		</div>
			</div>
		</div>

	

	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>


