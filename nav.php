
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<link rel="stylesheet" href="css/profile.css" />
	<link rel="shortcut icon" href="images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon-57-precomposed.png">

</head>
<body>

	<!-- PRELOADER -->
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	
	<!-- HEADER -->
	<header id="header">
							<?php
			session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}
			
			if($_SESSION['check'] == 1){
				?>


		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.html"><img src="images/logo.png" alt=""></a>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="index.php">Home</a></li>
				    	<li><a href="reviews.php">About Reviews</a></li>
				    	<li><a href="rank.php">Ranking</a></li>
				    	<li><a href="map.php">Maps</a></li>
				    	<li><a href="contact.php">Contact Us</a></li>
						 <li class="dropdown" style="bgcolor:#d9d9d9;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $_SESSION['username'];?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="about.php">Setting</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>

					</ul>
				</div>
			</div>
		</nav>
						<?php
			}
			else{
					?>
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.html"><img src="images/logo.png" alt=""></a>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="index.php">Home</a></li>
				    	<li><a href="#services">About Reviews</a></li>
				    	<li><a href="#our-works">Ranking</a></li>
				    	<li><a href="#pricing">Maps</a></li>
				    	<li><a href="#our-team">Contact Us</a></li>
				 		<li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
				    	<li><a href="#" data-toggle="modal" data-target="#signup-modal">Signup</a></li>
					</ul>
				</div>
			</div>
		</nav>




								<?php
					
			}			
			?>
	</header>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form action="checklog.php" method="post">
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
				</div>
			</div>
		  </div>


		  <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Signup to Your Account</h1><br>
				  <form action="checksign.php" method="post">
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="text" name="email" placeholder="Email">
					<input type="text" name="sid" placeholder="Student ID">
				<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
      <option value="" disabled selected>Choose your faculty</option>
      <option value="Faculty of Applied Health Sciences">Faculty of Applied Health Sciences</option>
      <option value="Faculty of Architecture">Faculty of Architecture</option>
      <option value="Faculty of Arts3">Faculty of Arts3</option>
	  <option value="Faculty of Commerce and Accountancy">Faculty of Commerce and Accountancy</option>
      <option value="Faculty of Communication Arts">Faculty of Communication Arts</option>
      <option value="Faculty of Dentistry">Faculty of Dentistry</option>
      <option value="Faculty of Economics">Faculty of Economics</option>
      <option value="Faculty of Education">Faculty of Education</option>
      <option value="Faculty of Engineerin">Faculty of Engineering</option>
      <option value="Faculty of Fine and Applied Arts">Faculty of Fine and Applied Arts</option>
      <option value="Faculty of Law">Faculty of Law</option>
	  <option value="Faculty of Medicine">Faculty of Medicine</option>
	  <option value="Faculty of Nursing">Faculty of Nursing</option>
	  <option value="Faculty of Pharmaceutical Sciences">Faculty of Pharmaceutical Sciences</option>
	  <option value="Faculty of Political Science">Faculty of Political Science</option>
	  <option value="Faculty of Psychology">Faculty of Psychology</option>
	  <option value="Faculty of Science">Faculty of Science</option>
	  <option value="Faculty of Sports Science">Faculty of Sports Science</option>
	  <option value="Faculty of Veterinary Science">Faculty of Veterinary Science</option>
    </select>
</div>
					<input type="submit" name="signup" class="login loginmodal-submit" value="Signup">
				  </form>
				</div>
			</div>
		  </div>
	<script type="text/javascript" src="js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script><!-- masonry -->
	<script type="text/javascript" src="js/jquery.fitvids.js"></script><!-- fitvids -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/waypoints.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script><!-- isotope -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
	<script type="text/javascript" src="js/scripts.js"></script><!-- Scripts -->
   <script>  
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
   </script>
</body>
</html>