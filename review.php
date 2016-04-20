<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Review</title>

	
</head>
<body>

<?php 

function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

$uri = "mongodb://distdbpro:distdb555@ds023570.mlab.com:23570/distdata";
$m = new MongoClient($uri);
$db = $m->selectDB("distdata");
$coll = $db->rate;
$cursor = $coll->find(array('category' => "Society"));
$cursor2 =  $coll->find(array('category' => "Science"));
$cursor3 = $coll->find(array('category' => "Interdisciplinary"));
$cursor4 = $coll->find(array('category' => "Human"));
$i=0;
foreach ($cursor as $doc) {
	$sname = array(0 =>$doc['title'],1 => $doc['rate'], 2=>$doc['SID']);
	if($i==0){
	$arr = array(array($doc['title'], $doc['rate'], $doc['SID']));
	}
	else{
	$arr = array_merge($arr,array($sname));
	}
	
	$i++;

}
$i=0;
foreach ($cursor2 as $doc) {
	$sname2 = array(0 =>$doc['title'],1 => $doc['rate'], 2=>$doc['SID']);
	if($i==0){
	$arr2 = array(array($doc['title'], $doc['rate'], $doc['SID']));
	}
	else{
	$arr2 = array_merge($arr2,array($sname2));
	}
	
	$i++;

}
$i=0;
foreach ($cursor3 as $doc) {
	$sname3 = array(0 =>$doc['title'],1 => $doc['rate'], 2=>$doc['SID']);
	if($i==0){
	$arr3 = array(array($doc['title'], $doc['rate'], $doc['SID']));
	}
	else{
	$arr3 = array_merge($arr3,array($sname3));
	}
	
	$i++;

}
$i=0;
foreach ($cursor4 as $doc) {
	$sname4 = array(0 =>$doc['title'],1 => $doc['rate'], 2=>$doc['SID']);
	if($i==0){
	$arr4 = array(array($doc['title'], $doc['rate'], $doc['SID']));
	}
	else{
	$arr4 = array_merge($arr4,array($sname4));
	}
	
	$i++;

}



$arrsoc = array_sort($arr,'rate',SORT_ASC);
$arrsci = array_sort($arr2,'rate',SORT_ASC);
$arrin = array_sort($arr3,'rate',SORT_ASC);
$arrhum = array_sort($arr4,'rate',SORT_ASC);


					include 'nav.php'; 	
			?>      

<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Reviews</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-desktop"></i> Web Design</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-cogs"></i> Web Developement</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-code"></i> Custom Development</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-dashboard"></i> Super Fast Web</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-life-ring"></i> Friendly Support</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-weixin"></i> Live Support</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>
			</div>
		</div>
	</section> 

	<section id="our-works">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
					<div class="section-title">
						<h1>Write some reviews</h1>
						<span class="st-border"></span>
					</div>
				</div>

			<div class="portfolio-wrapper" >
			<div class="portfolio-items">
						
						<div class="col-md-4 col-sm-6 work-grid wordpress graphic">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-1.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-1.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>Web Development</h5>
									<p>Design, Develop</p>
								</div>
							</div>	
						</div>
						</div></div></div></div>


<br>

	<section id="services">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
					<div class="section-title">
						<h1>Recommended</h1>
						<span class="st-border"></span>
					</div>
				</div>

			<div class="portfolio-wrapper" >
			<div class="portfolio-items">
						
						<div class="col-md-3 col-sm-3 work-grid wordpress graphic">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-1.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-1.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5><?php  echo $arrsci[0][0] ?></h5>
									<p><?php  echo $arrsci[0][2] ?></p>
								</div>
							</div>	
						</div>
						<div class="col-md-3 col-sm-3 work-grid wordpress graphic">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-1.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-1.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5><?php  echo $arrhum[0][0] ?></h5>
									<p><?php  echo $arrhum[0][2] ?></p>
								</div>
							</div>	
						</div>
					
						<div class="col-md-3 col-sm-3 work-grid wordpress graphic">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-1.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-1.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5><?php  echo $arrsoc[0][0] ?></h5>
									<p><?php  echo $arrsoc[0][2] ?></p>
								</div>
							</div>	
						</div>
						<div class="col-md-3 col-sm-3 work-grid wordpress graphic">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-1.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-1.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5><?php  echo $arrin[0][0] ?></h5>
									<p><?php  echo $arrin[0][2] ?></p>
								</div>
							</div>	
						</div>
						</div></div></div></div>

						<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>


	</body>