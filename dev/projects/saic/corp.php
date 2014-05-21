<? include '../includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - Home</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="../styles/searchStyle.css" />
<link href="../styles/grupo_styles.css?45" rel="stylesheet" type="text/css">
<style>
	
	.project_contentArea{
		padding:0 17px;
		width:990px;
		height:400px;
		background-color:white;
	}
		
	.project_contentArea .media{
		width:393px;
		height:99px;
		float:left;
		padding-bottom:38px;
	}
	
	.project_contentArea .mediaButton{
		height:99px;
		width:188px;
		background-color:grey;
		overflow:hidden;
		
	}
	
		
	.project_contentArea .description{
		font-size:110%;
		width:493px;
		height:217px;
		float:left;
		
	}
	
	.label{
		padding-top:2px;
		height:14px;
		width:188px;
		background-color:#858585;
		text-transform:uppercase;
		text-align:center;
		color:white;
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px;
		float:left;
		margin-bottom:24px;
	}
	
	.project_contentArea h3{
		font-size:13px;
	}
		
	#slideshow {
		margin-right:17px;
		position:relative;
		height:349px;
		width: 480px;
		float:right;
		overflow:hidden;
		padding-bottom:38px;
			
	}
	
	#slideshow IMG {
		margin:0 auto;
		position:absolute;
		vertical-align:middle;		
		top:0;
		left:0;
		z-index:8;
		
	}
	.breadcrumb{
		width:100%;
		clear:both;
		float:left;
		
	}
		
	.breadcrumb li{
		font-size:16px;
		display:inline;
		float:left;
		text-transform:uppercase;
	}
	
	.breadcrumb li:nth-child(1){
		color:#6989C6;
	}
	
	.breadcrumb li:nth-child(2){
		color:#858585;
	}
	
	.breadcrumb li:nth-child(3){
		color:#020202;
	}
	
	.left{
		float:left;
	}
	
	.right{
		float:right;
	}
	-->
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>

</script>

</head>
<body>
	<header>
		<? include '../includes/grupo_header.php'; ?>
	</header>
	
	<? $project = $_GET['project'];?>
	<section class="content-container">
		<div class="content-area">
			<div class="project_contentArea">
				<div id=slideshow>
					<img src="../includes/thumbnail.php?pic=../saic/CorporateOffices/Spaceplans/EXITING-E1.jpg&ht=349&wd=580" alt="" />
				</div>
				
				
				<div class="description">
					
				    <h4>SAIC - Corporate Offices</h4>
				    <h3>Science Applications International Corporation, SAIC, is a leading provider of scientific, engineering, systems integration and technical services and solutions.  SAIC has campuses worldwide with more than 41,000 employees.  At multiple locations in San Diego, including their Campus Point facilities, we developed efficient layouts and organization of office spaces within the various buildings that make up SAIC ‘s sprawling campuses.  
For more than ten years Grupo Pacific worked with the facilities department at SAIC.  Areas of concentration included office tenant improvements, department relocations and expansions, exiting analyses, square footage assessments and developing organizational standards for their buildings and employees based on hierarchy and departments.
</h3>
				</div>
				<div class="media">
					<h4>See More:</h4>
					<div class="mediaButton left"><a href="cafe.php"><img src="../includes/thumbnail.php?pic=../saic/NewCafe/Renderings/SAIC-PatioDining04.12.05.jpg&ht=149&wd=340" /></a></div>
					<div class="mediaButton right"><a href="lobby.php"><img src="../includes/thumbnail.php?pic=../saic/LobbyRemodel/Renderings/FINALPERSPECTIVE.16.F.MAR,2005.jpg&ht=200&wd=188" /></a></div>
					<div class="label left">Cafe</div><div class="label right">Lobby</div>
				</div>
				
				<ul class="breadcrumb">
					<li>Portfolio&gt;</li>
					<li>Corporate&gt;</li>
					<li><a href="project.php">SAIC</a></li>
				</ul>
			</div>
		</div>
	</section>

</body>
</html>
