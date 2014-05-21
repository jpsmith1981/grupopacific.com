<?
$pic = $_GET['pic'];
$max_height = $_GET['ht'];
$max_width = $_GET['wd'];
$size = getimagesize($pic);
$type = $size[2];
$width_ratio  = ($size[0] / $max_width);
$height_ratio = ($size[1] / $max_height);
if($width_ratio >=$height_ratio) 
{
   $ratio = $width_ratio;
}
else
{
   $ratio = $height_ratio;
}
$new_width    = ($size[0] / $ratio);
$new_height   = ($size[1] / $ratio);

if($type==2){
	header("Content-Type: image/jpg");
	$src_img = imagecreatefromjpeg($pic);
	$thumb = imagecreatetruecolor($new_width,$new_height);
	imagecopyresampled($thumb, $src_img, 0,0,0,0,$new_width,$new_height,$size[0],$size[1]);
	imagejpeg($thumb);
	imagedestroy($src_img);
	imagedestroy($thumb);
	
}

else if($type==1){
	header("Content-Type: image/gif");
	$src_img = imagecreatefromgif($pic);
	$thumb = imagecreatetruecolor($new_width,$new_height);
	imagecopyresampled($thumb, $src_img, 0,0,0,0,$new_width,$new_height,$size[0],$size[1]);
	imagegif($thumb);
	imagedestroy($src_img);
	imagedestroy($thumb);
	
}

else if($type==3){
	header("Content-Type: image/png");
	$src_img = imagecreatefrompng($pic);
	$thumb = imagecreatetruecolor($new_width,$new_height);
	imagecopyresampled($thumb, $src_img, 0,0,0,0,$new_width,$new_height,$size[0],$size[1]);
	imagepng($thumb);
	imagedestroy($src_img);
	imagedestroy($thumb);
	
}
	


?> 















