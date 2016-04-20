<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	
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
	<br>
<section id="services">
		<div class="container">
		 <form method="post"> 
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Create a review</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="input-field col s12">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          <input id="name"  name="name" type="text" class="validate" required="required">
          <label for="name">Reviewer Name</label>
        </div>
		 </div>
		<div class="row">
        <div class="input-field col s12">
           <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
          <input id="SID" name="SID" type="text" class="validate" required="required">
          <label for="SID">Subject ID</label>
        </div>
      </div>
	  		<div class="row">
        <div class="input-field col s12">
           <span class="glyphicon glyphicon-text-size" aria-hidden="true"></span>
          <input id="title"  name="title" type="text" class="validate" required="required">
          <label for="title">Subject Title</label>
        </div>
      </div>
	  <div class="row">
    <div class="input-field col s12">
	 <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
		 <select name="category" id="select">
		 <option value="" selected>Choose Category...</option>
			<option value="Science">Science</option>
			<option value="Human">Human</option>
			<option value="Society">Society</option>
			<option value="Interdisciplinary">Interdisciplinary</option>
			</select>  
			<label>Category</label>
			</div>
			
      </div>
	  <div class="row">
        <div class="input-field col s12">
           <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
          <input id="location"  name="location" type="text" class="validate" required="required">
          <label for="location">Class Location</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
		 <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
          
          <input id="credit"  name="credit" type="text" class="validate" required="required">
          <label for="credit">Subject Credit</label>
        </div>
      </div>
	  <div class="row">
	<div class="input-field col s6">
	 <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
    <select name="grade">
      <option value="" disabled selected>Choose your grade</option>
      <option value="A">A</option>
	  <option value="B+">B+</option>
	  <option value="B">B</option>
	  <option value="C+">C+</option>
	  <option value="C">C</option>
	  <option value="D+">D+</option>
	  <option value="D">D</option>
<option value="W">W</option>
<option value="F">F</option>
<option value="I">I</option>
    </select>
    <label>Reviewer Grade</label>
  </div> </div>
<p class="range-field">
 <div class="row">
        <div class="input-field col s12">
 <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
<label for="rate">Rate (min at 0 max at 10)</label></div></div>
      <div class="row">
        
        <div class="col-xs-6">
          <div class="range">
            <input type="range" name="rate" min="1" max="10" value="5" onchange="range.value=value">
            <output id="range">5</output>
          </div>
        </div>
      </div>
    </p>
<br>
	        <div class="row">
			 <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
			 <label for="descrip">Describe on this subject</label>
          <div class="input-field col s12">
            <textarea id="descrip" name="descrip" required="required" ></textarea>
            
          </div>
        </div>
<div class="row">
        <div class="input-field col s12">
<button class="btn waves-effect waves-light" type="submit"name="submit">Submit
   
  </button></div></div>

    
  </form>
			</div>
		</div>
	</section>
	<?php
 
			
 $uri = "mongodb://distdbpro:distdb555@ds023570.mlab.com:23570/distdata";
$m = new MongoClient($uri);

$db = $m->selectDB("distdata");

$coll = $db->reviews;
if ($_POST) {
$rate = intval($_POST['rate']);
$coll = $db->rate;
$cursor = $coll->find(array('SID' => $_POST['SID']));
foreach ($cursor as $doc ) {
$up = $doc;
}
$newrate = $up['rate'] + $rate;
$newcount = $up['count'] + 1;
$newavg = (float)($newrate/$newcount);
$coll->update($up,
array('$set'=>array("title"=>$_POST['title'], "SID" => $_POST['SID'],"rate" => $newrate,
    "count" => $newcount,
    "avgrate" => $newavg)));
$coll = $db->reviews;
$review = array( "SID" => $_POST['SID'],
    "title" => $_POST['title'],
    "category" => $_POST['category'],
	"location" => $_POST['location'],
    "credit" => $_POST['credit'],
    "grade" => $_POST['grade'],
    "description" => $_POST['descrip'],
    "rate" => $rate,
    "reviewer" => $_POST['name'] );
$coll->insert($review); 


}
 ?>
</body>