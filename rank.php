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

?>
<section id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Ranking</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="st-pricing text-center">
						<h3>Science</h3>
						<div class="st-border"></div>
						<ul>
							 <a href=" <?php  echo "showreview.php?SID=" . $arrsci[0][2];  ?>"><li><?php  echo $arrsci[0][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsci[1][2];  ?>"><li><?php  echo $arrsci[1][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsci[2][2];  ?>"><li><?php  echo $arrsci[2][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsci[3][2];  ?>"><li><?php  echo $arrsci[3][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsci[4][2];  ?>"><li><?php  echo $arrsci[4][0] ?></li></a>
						</ul>
						
					</div>
				</div>

				<div class="col-sm-3">
					<div class="st-pricing text-center">
						<h3>Society</h3>
				
						<div class="st-border"></div>
						<ul>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsoc[0][2];  ?>"><li><?php  echo $arrsoc[0][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsoc[1][2];  ?>"><li><?php  echo $arrsoc[1][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsoc[2][2];  ?>"><li><?php  echo $arrsoc[2][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsoc[3][2];  ?>"><li><?php  echo $arrsoc[3][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrsoc[4][2];  ?>"><li><?php  echo $arrsoc[4][0] ?></li></a>
						</ul>
					
					</div>
				</div>

				<div class="col-sm-3">
					<div class="st-pricing text-center">
						<h3>Human</h3>
						<div class="st-border"></div>
						<ul>
							<a href=" <?php  echo "showreview.php?SID=" . $arrhum[0][2];  ?>"><li><?php  echo $arrhum[0][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrhum[1][2];  ?>"><li><?php  echo $arrhum[1][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrhum[2][2];  ?>"><li><?php  echo $arrhum[2][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrhum[3][2];  ?>"><li><?php  echo $arrhum[3][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrhum[4][2];  ?>"><li><?php  echo $arrhum[4][0] ?></li></a>
						</ul>
					
					</div>
				</div>
				<div class="col-sm-3">
					<div class="st-pricing text-center">
						
						<h3 class="small">Interdisciplinary</h3>
						<div class="st-border"></div>
						<ul>
							<a href=" <?php  echo "showreview.php?SID=" . $arrin[0][2];  ?>"><li><?php  echo $arrin[0][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrin[1][2];  ?>"><li><?php  echo $arrin[1][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrin[2][2];  ?>"><li><?php  echo $arrin[2][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrin[3][2];  ?>"><li><?php  echo $arrin[3][0] ?></li></a>
							<a href=" <?php  echo "showreview.php?SID=" . $arrin[4][2];  ?>"><li><?php  echo $arrin[4][0] ?></li></a>
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>


</body>