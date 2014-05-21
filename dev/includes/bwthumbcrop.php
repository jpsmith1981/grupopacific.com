<?

//--------------------------------------------------------
// Get the information.. Source Pic... Desired Mesurements
//--------------------------------------------------------

$src = $_GET['pic'];
$w = $_GET['wd'];
$h = $_GET['ht'];


//Your Image
$imgSrc = $src;

//getting the image dimensions
list($width, $height, $type) = getimagesize($imgSrc);

//saving the image into memory (for manipulation with GD Library)
$myImage = imagecreatefromjpeg($imgSrc);


///--------------------------------------------------------
//setting the crop size
//--------------------------------------------------------
if($width > $height) $biggestSide = $width;
else $biggestSide = $height;

//The crop size will be half that of the largest side
$cropPercent = .5;
$cropWidth   = $biggestSide*$cropPercent;
$cropHeight  = $biggestSide*$cropPercent;

//getting the top left coordinate
$c1 = array("x"=>($width-$cropWidth)/2, "y"=>($height-$cropHeight)/2);


//--------------------------------------------------------
// Creating the thumbnail
//--------------------------------------------------------
$thumbWd = $w;
$thumbHt = $h;
$thumb = imagecreatetruecolor($thumbWd,$thumbHt );
imagecopyresampled($thumb, $myImage, 0, 0, $c1['x'], $c1['y'], $thumbWd, $thumbHt, $cropWidth, $cropHeight);


//--------------------------------------------------------
// Support for jpg, png, gif formats
//--------------------------------------------------------


if($type==2){
	header("Content-Type: image/jpg");
	imagefilter($thumb, IMG_FILTER_GRAYSCALE);
	imagejpeg($thumb);	
	imagedestroy($thumb);
	
}

else if($type==1){
	header("Content-Type: image/gif");
	imagefilter($thumb, IMG_FILTER_GRAYSCALE);
	imagegif($thumb);
	imagedestroy($thumb);
	
}

else if($type==3){
	header("Content-Type: image/png");
	imagefilter($thumb, IMG_FILTER_GRAYSCALE);
	imagepng($thumb);
	imagedestroy($thumb);
	
}
	




?>