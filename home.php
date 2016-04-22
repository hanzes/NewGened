							<?php
			session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
</style>
</head>

<body>

    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1 style="color:white;">GENED REVIEW</h1>
            <h3 style="color:#ffb3ff;">Free Space for WRITE or READ The Reviews</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Website for Sharing your PAST and Planing your NEXT GENED STUDY!</h2>
                    <p class="lead">Our Website targets Student that want to share or need supporting information</p>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row"><?php if($_SESSION['check'] == 0){ ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Sign Up</strong>
                                </h4>
                                <p>Sign up to Bring your basic information to the readers.</p>
                                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#signup-modal">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Login</strong>
                                </h4>
                                <p>Login to the System to gain access to our Content.</p>
                                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#login-modal">Learn More</a>
                            </div>
                        </div>
 <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Reviews</strong>
                                </h4>
                                <p>Read or Write GENEDs you interested or want to share.</p>
                                <a href="review.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Ranking</strong>
                                </h4>
                                <p>To support your Decision. Calculated Ranking is ready for you!</p>
                                <a href="rank.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>

					<?php
			}
else {
					?>

                        <div class=".col-sm-5 .col-md-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Reviews</strong>
                                </h4>
                                <p>Read or Write GENEDs you interested or want to share.</p>
                                <a href="review.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class=".col-sm-5 .col-md-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Ranking</strong>
                                </h4>
                                <p>To support your Decision. Calculated Ranking is ready for you!</p>
                                <a href="rank.php" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
									<?php
			}
					?>
					                       
                    </div>
                </div>
            </div>
        </div>
    </section>
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
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<input type="text" name="email" placeholder="Email">
					<input type="text" name="stdid" placeholder="Student ID">
				<div class="form-group">
  <label for="fac">Select list:</label>
  <select class="form-control" id="fac" name="fac">
      <option value="" disabled selected>Choose your faculty</option>
      <option value="Faculty of Applied Health Sciences">Faculty of Applied Health Sciences</option>
      <option value="Faculty of Architecture">Faculty of Architecture</option>
      <option value="Faculty of Arts">Faculty of Arts</option>
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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <br>
					<br>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
</body>
</html>
