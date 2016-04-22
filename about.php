<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About</title>
</head>
<style>

.bg_blur
{
    background-image:url("img/bg.jpg");
    height: 300px;
    background-size: cover;
}
</style>
<body>
<?php
			session_start();
			error_reporting(0);
			$_SESSION["backurl"] =$_SERVER['HTTP_REFERER'] ;
			$backurl = $_SESSION["backurl"];
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}
					include 'nav.php'; 	
			
			$uri = "mongodb://distdbpro:distdb555@ds023570.mlab.com:23570/distdata";
$m = new MongoClient($uri);

$db = $m->selectDB("distdata");

$coll = $db->reviews;

			?>         
<br>
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<div class="col-md-4 bg_blur ">
		</div>
        <div class="col-md-8  col-xs-12">
           <img src="img/<?php echo $_GET["username"];?>.jpg" class="img-thumbnail picture hidden-xs" />
           <img src="img/<?php echo $_GET["username"];?>.jpg" class="img-thumbnail visible-xs picture_mob" />
           <div class="header">
                <h1>About, <?php echo $_GET["username"];?></h1>
                <h4>คณะหมูกรอบ</h4>
                <span>กำกำ</span>
           </div>
        </div>
    </div>   

	<div class="row nav">   
        <div class="col-md-4">
		<?php
			if($_SESSION['check'] == 1){
				?>

	<form enctype="multipart/form-data" action="upload.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    Choose a file to upload: <input name="uploaded_file" type="file" />
    <input type="submit" value="Upload" />
  </form> 
  <?php
	}
				?>
</div>
        <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
            <div class="col-md-12 col-xs-12 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
        </div>
    </div>
</div>
<div class="col-md-12" >
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
		<thead>
            <tr>
                <th>Subject ID</th>
                <th>Title</th>
                <th>Category</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Subject ID</th>
                <th>Title</th>
                <th>Category</th>
            </tr>
        </tfoot>

        <tbody>
		<?php 
$cursor = $coll->find(array('reviewer' => $_GET["username"]));
foreach ($cursor as $doc) {
$rname = array('SID'=> $doc['SID'],'title' => $doc['title'],'category' => $doc['category']) ;
?>
            <tr>
                <td><a href="showreview.php?SID=<?php echo $rname['SID']; ?>"><?php echo $rname['SID']; ?></td>
                <td><?php echo $rname['title']; ?></td>
                <td><?php echo $rname['category']; ?></td>
            </tr></a>
			<?php }
?>

        </tbody>
    </table>
	</div>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
	

	<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
	</script>
</body>
</html>