<!DOCTYPE html>
<html>
<head>

<?php	include 'includes/grupo_declare.php';
	$searchString = $_GET['qry'];
	
				$projectssql = mysql_query("SELECT *
FROM `Grupo_People`
WHERE (
CONVERT( `firstName`
USING utf8 ) LIKE '%Jeff%'
OR CONVERT( `lastName`
USING utf8 ) LIKE '%Jeff%'
OR CONVERT( `picture`
USING utf8 ) LIKE '%Jeff%'
OR CONVERT( `bio`
USING utf8 ) LIKE '%Jeff%'
OR CONVERT( `miscFactTitle1`
USING utf8 ) LIKE '%Jeff%'
OR CONVERT( `miscFact`
USING utf8 ) LIKE '%Jeff%'
OR CONVERT( `email`
USING utf8 ) LIKE '%Jeff%'
LIMIT 0 , 30");
				while ($pic = mysql_fetch_array($projectssql))
				{
						$ProjectID = $pic[0];
						$projectPicture = mysql_query("select imgLocation from Grupo_ProjectPic where ProjectID = $ProjectID");
						while ($picLoc = mysql_fetch_array($projectPicture))
							$imgLoc = $picLoc[0];
						$bwThumb = "includes/bwthumbcrop.php?pic=../".$imgLoc."&amp;ht=108&amp;wd=161";
						$colorThumb = "includes/thumbcrop.php?pic=../".$imgLoc."&amp;ht=108&amp;wd=161";
					
				
              	}
				?>
	


<title>Grupo Pacific - Search Results</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="styles/searchStyle.css" />
<link href="styles/grupo_styles.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<?php include 'includes/grupo_header.php'; ?>
	</header>
	
	
	<section class="content-container">
		<div class="content-area">
		</div>
	</section>

</body>
</html>
