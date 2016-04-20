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
                <h1>Boss</h1>
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
<td><input name="fileUpload" type="file"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</div>
        <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
            <div class="col-md-12 col-xs-12 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
        </div>
    </div>
</div>

</body>
</html>