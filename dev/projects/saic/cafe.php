<?php include '../includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - Home</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="../styles/searchStyle.css" />
<link href="../styles/grupo_styles.css" rel="stylesheet" type="text/css">
<style>
	
	.project_contentArea{
		padding:0 17px;
		width:990px;
		height:400px;
		background-color:white;
	}
		
	.project_contentArea .media{
		width:360px;
		height:149px;
		float:right;
		padding-bottom:38px;
		float:right;
	}
	
	.project_contentArea .mediaButton{
		height:100px;
		width:140px;
		background-color:grey;
		overflow:hidden;
		
		
	}
	
	.label{
		padding-top:2px;
		height:14px;
		width:140px;
		background-color:#858585;
		text-transform:uppercase;
		text-align:center;
		color:white;
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px;
		float:left;
		margin-bottom:24px;
	}
	
		
	.project_contentArea .description{
		font-size:110%;
		width:583px;
		height:160px;
		float:left;
		
	}
	
	.project_contentArea h3{
		font-size:13px;
	}
		
	.lgImageDisplay {
		margin-right:17px;
		position:relative;
		height:229px;
		width: 583px;
		float:left;
		overflow:hidden;
		
			
	}
	
	.smImageDisplay {
		position:relative;
		height:240px;
		width: 360px;
		float:right;
		overflow:hidden;
		
			
	}
	
	
	
		
	.breadcrumb li{
		font-size:13px;
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
				
				<div class="description">
					
				    <h1>SAIC  - Caf� Remodel </h1>
				    <h3>Science Applications International Corporation, SAIC, is a leading provider of scientific, engineering, systems integration and technical services and solutions.  SAIC has campuses worldwide with more than 41,000 employees.  As SAIC�s Campus Point facilities in San Diego continued to grow, a renovation and enlargement of their existing employee caf� was needed.  Efficient design layouts were a key component to enable large groups of employees to utilize and process through the caf� at the same time.  Interior and exterior dining facility finishes were selected that were light, bright and provided an inviting daytime retreat.</h3>
				</div>
				
				
				
				
				
				
				<div class=smImageDisplay>
					<img src="../includes/thumbnail.php?pic=../saic/NewCafe/Spaceplans/IsometricSpaceplan.jpg&ht=240&wd=360" alt="" />
				</div>
				
				<div class=lgImageDisplay>
					<img src="../includes/thumbnail.php?pic=../saic/NewCafe/Renderings/SAIC-PatioDining04.12.05.jpg&ht=349&wd=583" alt="" />
				</div>
				
				
				<div class="media">
					<h4>See More:</h4>
					<div class="mediaButton left"><a href="lobby.php"><img src="../includes/thumbnail.php?pic=../saic/LobbyRemodel/Renderings/FINALPERSPECTIVE.16.F.MAR,2005.jpg&ht=140&wd=140" /></a></div>
					<div class="mediaButton right"><a href="corp.php"><img src="../includes/thumbnail.php?pic=../saic/CorporateOffices/Spaceplans/EXITING-E1.jpg&ht=140&wd=140" /></a></div>
					<div class="label left">Lobby</div><div class="label right">Corporate Offices</div>
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
