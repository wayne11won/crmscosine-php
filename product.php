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
		<title>COSINE - CRMS</title>

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
								Product	
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
							<?php
							
							
							//query1
							$query = "SELECT prdID AS PRODUCT_ID, product_name as PRODUCT, PRICE FROM tblproduct";
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
									 while ($finfo = mysqli_fetch_field($result))
								    {
										 echo "<th>". $finfo->name . "</th>";
									}
									
									echo '</tr></thead><tbody>';
									

										
									while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
										{
											  echo "<tr>";	
											  foreach ($row as $data)
											  {
												echo "<td align='center'><a href='editproduct?aid=". $row['PRODUCT_ID'] ."'>". $data . "</a></td>";
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
						<form class="form-inline" method="post" action="pdf_product" target="_blank">
						<button type="submit" id="pdf" name="generate_pdf" class="genric-btn primary circle mt-30"><i class="fa fa-pdf"" aria-hidden="true"></i>
						Generate PDF</button>
						</form>
				</div>	
			</section>
			<!-- End home-about Area -->
				
			
				
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
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



