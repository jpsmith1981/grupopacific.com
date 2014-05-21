<?php include '../includes/grupo_declare.php'; ?>

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
		height:149px;
		float:left;
		padding-bottom:38px;
	}
	
	.project_contentArea .mediaButton{
		height:149px;
		width:188px;
		background-color:grey;
		overflow:hidden;
		
	}
	
		
	.project_contentArea .description{
		font-size:110%;
		width:393px;
		height:147px;
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
		width: 580px;
		float:left;
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
		<?php include '../includes/grupo_header.php'; ?>
	</header>
	
	<?php $project = $_GET['project'];?>
	<section class="content-container">
		<div class="content-area">
			<div class="project_contentArea">
				<div id=slideshow>
					<img src="../includes/thumbnail.php?pic=../saic/LobbyRemodel/Renderings/FINAL-PERSPECTIVE.16.jpg&ht=349&wd=580" alt="" />
				</div>
				
				
				<div class="description">
					
				    <h4>SAIC - Main Lobby Remodel</h4>
				    <h3>At Science Applications International Corporation, SAIC, Campus Point location in San Diego, a new main lobby was desired that would act as a secure centralized �check-in� location to serve as a central hub for the entire campus.</h3>
				</div>
				<div class="media">
					<h4>See More:</h4>
					<div class="mediaButton left"><a href="cafe.php"><img src="../includes/thumbnail.php?pic=../saic/NewCafe/Renderings/SAIC-PatioDining04.12.05.jpg&ht=149&wd=340" /></a></div>
					<div class="mediaButton right"><a href="corp.php"><img src="../includes/thumbnail.php?pic=../saic/CorporateOffices/Spaceplans/EXITING-E1.jpg&ht=200&wd=188" /></a></div>
					<div class="label left">Cafe</div><div class="label right">Corporate Offices</div>
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
