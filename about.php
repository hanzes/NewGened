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
$cursor = $coll->find(array('reviewer' => $_SESSION['username']));
			?>         
<br>
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<div class="col-md-4 bg_blur ">
		</div>
        <div class="col-md-8  col-xs-12">
           <img src="img/pf/1.jpg" class="img-thumbnail picture hidden-xs" />
           <img src="img/pf/1.jpg" class="img-thumbnail visible-xs picture_mob" />
           <div class="header">
                <h1>Hello, <?php echo $_SESSION['username'];?></h1>
                <h4>คณะหมูกรอบ</h4>
                <span>กำกำ</span>
           </div>
        </div>
    </div>   

	<div class="row nav">   
        <div class="col-md-4">
		<form action="setpic.php" method="post">
<table width="343" border="1">
<tr>
<td>Upload Profile picture</td>
<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</div>
<?php
$target_dir = "img/pf/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
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