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
<?php
include 'nav.php';
?>
	<br><br><br><br><br><br><br>
<?php 

			
			      

$uri = "mongodb://distdbpro:distdb555@ds023570.mlab.com:23570/distdata";
$m = new MongoClient($uri);

$db = $m->selectDB("distdata");

$coll = $db->reviews;
$toregex = "/" . $_GET["SID"] . "/i";
	
	$regex = new MongoRegex($toregex);

$cursor = $coll->find(array('SID' => $regex )); ?>

<?php
$rate=0;
$num=0;
foreach ($cursor as $doc) {
$sname = array('title'=> $doc["title"],'location' => $doc["location"],'category' => $doc["category"], 'credit' => $doc["credit"],'rate' => $doc["rate"]) ;
$title = $doc["title"];
}

$coll1 = $db->rate;
				$cursor1 = $coll1->find(array('SID' => $regex)); 
				foreach ($cursor1 as $doc1) {
$dname = array('avgrate'=> $doc1["avgrate"],'count' => $doc1["count"]);  }
				?>

?>


<section id="about-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="about-us text-center">
						<h4><?php echo $title;  ?> &nbsp;  <?php echo $_GET['SID'] ?></h4>
						<p>
							<?php  echo 'Categoty:' . $sname['category'] ;	?>&nbsp; 
							<?php  echo 'Location:' . $sname['location'] ;	?><br>
							<?php  echo 'Credit:' . $sname['credit'] ;	?>&nbsp; 
							
							
							
						
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

						
							<p>"This is the Reviews box. Many User's Reviews will be shown here Please Enjoy!"</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Slide to see All Reviews</h5>
								<span><- -></span>
							</div>
						</div>
						<?php
foreach ($cursor as $doc) {
$rname = array('reviewer'=> $doc["reviewer"],'grade' => $doc["grade"],'rate' => $doc["rate"], 'descrip' => $doc["description"]); 

?>
						<div class="item active text-center">
							<p><?php echo $rname['descrip']; ?></p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5><?php echo $rname['reviewer']; ?></h5>
								<span>><?php echo "Reviewer rating:" . $rname['rate']; ?>&nbsp; <?php echo "Reviewer Grade: " . $rname['grade']; ?></span>
							</div>
						
						</div>
					
				<?php }
				
				
				
				?>	
			</div></div>
		</div>
		
			
	</section>

<section id="fun-facts">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-thumbs-o-up"></i> <span class="st-counter"><?php echo $dname['avgrate']; ?></span></h3>
						<p>Average Rating</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-briefcase fa-6"></i> <span class="st-counter"><?php echo $dname["count"]; ?></span></h3>
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