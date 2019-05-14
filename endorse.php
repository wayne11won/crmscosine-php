<?php
   include("config.php");
   session_start();
 ?>  
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>COSINE - CRMS 2019</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main2.css">
		</head>
		<body>	
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
							
								<!--session of userid-->
		                        <h8 class="text-white">
								<?php
								if($_SESSION["username"]) {
								?>
								Welcome <?php echo $_SESSION["username"]; ?>. <br/>
								Click here to <a href="logout" tite="Logout"><u>Logout</u></a>
								
								<?php
								}else echo "<h1>Please login first .</h1>";
								?>
								</h8>
								<!--session of userid-->
								
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="tel:+880 012 3654 896">+880 012 3654 896</a>
				  				<a href="mailto:support@colorlib.com">support@colorlib.com</a>				
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
						 <a href="main"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-has-children"><a href="task">Task</a>
						  	<ul>
							
								<li><a href="Addtask">New Task</a></li>
								<li><a href="closed">Closed Task</a></li>
							</ul>
							<li class="menu-has-children"><a href="endorse">Consumers Needs</a>
				          <li class="menu-has-children"><a href="contact">Contact</a>
						  	<ul>
							
								<li><a href="AddContact">New Contact</a></li>
							</ul>
						  <li class="menu-has-children"><a href="product">Product</a>
							<ul>
							
								<li><a href="Addproduct">New Product</a></li>
							</ul>	
						  <li class="menu-has-children"><a href="profile">Profile</a>
							<ul>
								<li><a href="Adduser">New User</a>
								<li><a href="editemail">Change Email</a>
								
								<li><a href="changepassword">Change Password</a></li>
							</ul>
						
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								CONSUMERS NEEDS	
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap aboutus-about" id="about">
				<div class="container">
						 <div class="wrap-table100">
							<div class="table100">

							<h5> Consumer's Needs</h5>
							<?php
							
							
							//$query = "SELECT ,a.Quantity,a.Product,a.Subprice,a.Total,b.Company,CONCAT(c.Name_Last, ',', c.Name_First) AS Salesperson, a.Notes,a.Status 
							//FROM tbltask AS a 
							//left join tblcontact AS b ON a.contact_id=b.id 
							//left join tblusers AS c ON a.sales_rep_id=c.id
							//where a.status = 'CLOSED' && c.User_Roles=1";
							
							$query="SELECT a.Product,b.Company,AVG(a.Quantity) as AverageNum FROM tbltask AS a left join tblcontact AS b ON a.contact_id=b.id left join tblusers AS c ON a.sales_rep_id=c.id where a.status = 'CLOSED' && c.User_Roles=1 && a.Quantity >= 20 GROUP BY a.Product,b.Company";
							
							$result = $db->query($query);
							//$arraycount= mysqli_fetch_array($result,MYSQLI_ASSOC);
							$rowcount=mysqli_num_rows($result);
							$all_property = array();
							
							if (($result)||(mysql_errno == 0))
							{
								if ($rowcount>0)
							    {
									echo '<html><body><table><thead><tr class="table100-head">';
									//loop thru the field names to print the correct headers
									 //$i = 0;
										
										echo "<th>PRODUCT</th>";
										echo "<th>COMPANY</th>";
										echo "<th>Product Sales Last 30 days</th>";
									
									echo '</thead><tbody>';
									
									//display the data
									while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
									{
									  echo "<tr>";
									  foreach ($row as $data)
									  {
										echo "<td align='center'>". $data . "</td>";
									  }
									  echo '</tr></tbody>';
									}
									
									

									echo '</table></body></html>';
								}
								
								else
								{
									echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";
								}
								echo "</table>";

							}
							else
							{
							  echo "Error in running query :". mysql_error();
							}
							?>
						</div>
					</div>
					
					<!-- Graph -->
												<h5> Product Sales per Month</h5>
					<?php
							
							
							//$query = "SELECT ,a.Quantity,a.Product,a.Subprice,a.Total,b.Company,CONCAT(c.Name_Last, ',', c.Name_First) AS Salesperson, a.Notes,a.Status 
							//FROM tbltask AS a 
							//left join tblcontact AS b ON a.contact_id=b.id 
							//left join tblusers AS c ON a.sales_rep_id=c.id
							//where a.status = 'CLOSED' && c.User_Roles=1";
							
							$query2="SELECT Product, AVG(Quantity) as AVG FROM tbltask where status='CLOSED' GROUP BY Product";
							
							$result2 = $db->query($query2);
							//$arraycount= mysqli_fetch_array($result,MYSQLI_ASSOC);
							$rowcount2=mysqli_num_rows($result2);
							$all_property = array();
							
							if (($result)||(mysql_errno == 0))
							{
								if ($rowcount>0)
							    {

									//display the data
									while ($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
									{
									  
									
										
										
										
											$dataPoints = array(
										
											array("label"=> "Automatic voltage regulator" , "y"=> 50),
											array("label"=> "Capacitor Bank" , "y"=> 14),
											array("label"=> "Panel board" , "y"=> 33),
											);
											foreach ($row2 as $data)
											{
											}
											
											
											
									  
									}

								}
								
								else
								{
									echo "No Results found!";
								}
								echo "</table>";

							}
							else
							{
							  echo "Error in running query :". mysql_error();
							}
					?>
				</div>	
				<script>
				window.onload = function () {
				 
				var chart = new CanvasJS.Chart("chartContainer", {
					animationEnabled: true,
					exportEnabled: true,
					title:{
						text: "Most Product have been Sold"
					},
					subtitles: [{
						text: ""
					}],
					data: [{
						type: "pie",
						showInLegend: "true",
						legendText: "{label}",
						indexLabelFontSize: 16,
						indexLabel: "{label} - #percent%",
						yValueFormatString: "฿#,##0",
						dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
					}]
				});

				var chart2 = new CanvasJS.Chart("chartContainer2", {
					animationEnabled: true,
					exportEnabled: true,
					theme: "light1", // "light1", "light2", "dark1", "dark2"
					title:{
						text: "Sales per Consumers"
					},
					data: [{
						type: "column", //change type to bar, line, area, pie, etc
						//indexLabel: "{y}", //Shows y value on all Data Points
						indexLabelFontColor: "#5A5757",
						indexLabelPlacement: "outside",   
						dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
					}]
				});

				chart.render();
				chart2.render();
				 
				}
				</script>
			
						<div id="chartContainer" style="height: 370px; width: 100%;"></div>
						
						<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
			</section>
			<!-- End home-about Area -->
				
			
				
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6></h6>
								<p>
									
								</p>
							</div>
						</div>
												
													
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



