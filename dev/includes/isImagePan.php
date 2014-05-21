<?
$pic = $_GET['pic'];
$size = getimagesize($pic);
$type = $size[2];
$width  = ($size[0]);
$height = ($size[1]);

if($height/$width<.55)
{
	return true;
}

else false;

?>