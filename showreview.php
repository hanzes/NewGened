<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Cluster - Creative Portfolio HTML Template</title>
	
	<!-- Main CSS file -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon-57-precomposed.png">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>
<header id="header">
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
				    	<li><a href="#header">Home</a></li>
				    	<li><a href="#services">Services</a></li>
				    	<li><a href="#our-works">Works</a></li>
				    	<li><a href="#pricing">Pricing</a></li>
				    	<li><a href="#our-team">Team</a></li>
				    	<li><a href="#contact">Contact</a></li>
				    	<li><a href="blog.html">Blog</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</header>
	<br><br><br><br><br><br><br>
<?php 

			
			      

$uri = "mongodb://distdbpro:distdb555@ds023570.mlab.com:23570/distdata";
$m = new MongoClient($uri);

$db = $m->selectDB("distdata");

$coll = $db->reviews;

$cursor = $coll->find(array('SID' => $_GET["SID"])); ?>

<?php
$rate=0;
$num=0;
foreach ($cursor as $doc) {
$sname = array('title'=> $doc['title'],'location' => $doc['location'],'category' => $doc['category'], 'credit' => $doc['credit'],'rate' => $doc['rate']) ;
$rate  = $rate + $sname['rate'];
$num = $num+1;
}


?>


<section id="about-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="about-us text-center">
						<h4><?php echo $sname['title'];  ?> &nbsp;  <?php echo $_GET['SID'] ?></h4>
						<p>
							<?php  echo 'Categoty:' . $sname['category'] 	?>&nbsp; 
							<?php  echo 'Location:' . $sname['location'] 	?><br>
							<?php  echo 'Credit:' . $sname['credit'] 	?>&nbsp; 
							<?php  echo 'Rating:' . $sname['rate'] 	?><br>
							
							
						
						</p>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>


<section id="testimonial">
		<div class="container">
			<div class="row">
				<div class="overlay"></div>
				<div class="col-md-8 col-md-offset-2 col-sm-12">
					<div class="st-testimonials">

						<div class="item active text-center">

						
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolore nesciunt natus ullam possimus quas obcaecati suscipit voluptate facilis cum"</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Slide to see All Comments</h5>
								<span><- -></span>
							</div>
						</div>
						<?php
foreach ($cursor as $doc) {
$rname = array('reviewer'=> $doc['reviewer'],'grade' => $doc['grade'],'rate' => $doc['rate'], 'descrip' => $doc['description']); 
?>
						<div class="item text-center">
							<p><?php echo $rname['descrip']; ?></p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5><?php echo $rname['reviewer']; ?></h5>
								<span>><?php echo "Reviewer rating:" . $rname['rate']; ?>&nbsp; <?php echo "Reviewer Grade: " . $rname['grade']; ?></span>
							</div>
						</div>

					
				</div><?php }?>
			</div>
		</div>
		</div>
			</div>
		</div>
	</section>

<section id="fun-facts">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-thumbs-o-up"></i> <span class="st-counter"><?php sprintf("%.2f", ($rate/$num)); ?></span></h3>
						<p>Average Rating</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-briefcase fa-6"></i> <span class="st-counter"><?php echo $num; ?></span></h3>
						<p>Reviewer Number</p>
					</div>
				</div>
		
			
			</div>
		</div>
	</section>

	<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>

	
	<!-- JS -->
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
</body>