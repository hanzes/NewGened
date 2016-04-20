<?php if(trim($_FILES["fileUpload"]["tmp_name"]) != "")
	{
		$images = $_FILES["fileUpload"]["tmp_name"];
		$new_images = "Thumbnails_".$_FILES["fileUpload"]["name"];
		copy($_FILES["fileUpload"]["tmp_name"],"img/pf/".$_FILES["fileUpload"]["name"]);
		$width=100; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"img/pf/".$new_images);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
	}
?>