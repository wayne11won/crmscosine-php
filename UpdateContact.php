<?php
   include("config.php");
   session_start();
   
   if (isset($_POST['submit']))
   // define variables and set to empty values
	{
		$fname   = $_POST['fldfirstname'];
		$lname   = $_POST['fldlastname'];
		$company = $_POST['fldcompany'];
		$industry    = $_POST['fldindustry'];
		$address       = $_POST['fldaddress'];
		$city    = $_POST['fldcity'];
		$phone      = $_POST['fldphone'];
		$email     = $_POST['fldemail'];
		$salesrep    = $_POST['sales_rep'];
		
		
		$query="INSERT INTO tblcontact (contact_first, contact_last, company, industry, address, address_city, phone, email, sales_repid)
			VALUES ('$fname', '$lname', '$company', '$industry', '$address', '$city', '$phone', '$email', '$salesrep')";
           $result = $db->query($query);
			if(! $result)
			 {
				echo "<script>alert('FAILED TO ADD');</script>";
			 }
			else
			 {
				 echo "<script>alert('SUCCESSFULLY ADDED');</script>";
				
			 }

   }
?>
	 
	<!DOCTYPE html>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
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
			
			<!-- Table css -->
			<link rel="stylesheet" type="text/css" href="css/util.css">

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
								Update Contact	
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<div class="contact-page-area section-gap">
				<div class="container">
					<div class="rowForm">
						<div class="col-lg-8">
							<form class="form-area " action="" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="fldfirstname" placeholder="Enter First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter First Name'" class="common-input mb-20 form-control" required="" type="text">
										
										<input name="fldlastname" placeholder="Enter Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Last Name'" class="common-input mb-20 form-control" required="" type="text">
										
										<input name="fldcompany" placeholder="Enter Company" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Company'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="fldindustry" placeholder="Type of Industry" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type of Industry'" class="common-input mb-20 form-control" required="" type="text">
										
										<label >Assign Sales Representave</label>
										 <?php
										
										$query = "SELECT ID, CONCAT(Name_Last, ', ', Name_First) as fldname from tblusers
										 where user_status = 1 && User_Roles=1";
										$result = $db->query($query);
										$rowcount=mysqli_num_rows($result);
										$all_property = array();										 
										 
										 if ($rowcount>0)
										{
											     echo '<select name="sales_rep" class="common-input mb-20 form-control">';
												 echo '<option value="" selected disabled hidden>Choose here</option>';
												 while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

													 echo '<option value="'.$row['ID'].'">'.$row['fldname'].'</option>';
												 
										 
												}
										}
										echo '</select>';
										 ?>

										 
									
									</div>	
									<div class="col-lg-6 form-group">
									
										<input name="fldaddress" placeholder="Enter Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" class="common-input mb-20 form-control" required="" type="text">
										
										<input name="fldcity" placeholder="Enter City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" class="common-input mb-20 form-control" required="" type="text">
										
										<input name="fldphone" placeholder="Enter the Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter the Phone'" class="common-input mb-20 form-control" required="" type="text">
										
									
										<input name="fldemail" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
										
										
										<button type ="submit" name="submit" class="genric-btn primary circle mt-30" style="float: right;">Add</button>

									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
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



