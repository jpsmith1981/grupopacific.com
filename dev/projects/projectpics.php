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
	
	
	.project_contentArea .mediaPic{
		width:360px;
		height:200px;
		float:left;
	}
	
	.media{
		float:right;
		width:380px;
		height:360px;
	}
		
	.label{
		padding-top:2px;
		height:14px;
		width:200px;
		background-color:#858585;
		text-transform:uppercase;
		text-align:center;
		color:white;
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px;
		float:left;
		margin-bottom:24px;
	}
	#heroImage{
		margin-bottom:16px;
	}
		
	#slideshow {
		position:relative;
		height:230px;
		width: 527px;
		margin-bottom:16px;
		float:left;
		overflow:hidden;
			
	}
	
	#slideshow IMG {
		margin:0 auto;
		position:absolute;
		vertical-align:middle;		
		top:0;
		left:0;
		z-index:8;
		display:none;
	}
	
	#slideshow IMG.active {
		z-index:10;
		display:block;
	}
	
	#slideshow IMG.last-active {
		z-index:9;
		display:none;
	}
	
	.project_contentArea .description{
		font-size:110%;
		width:527px;
		height:130px;
		padding:0 0 16px;
		float:left;
		
	}
	.breadcrumb{
		width:100%;
		clear:both;
		float:left;
		
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
	
	
	
	
	
	-->
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="../includes/imageFader.js" type="text/javascript"></script>
<script src="../includes/imageFlipper.js" type="text/javascript"></script>



</head>
<body>
	<header>
		<?php include '../includes/grupo_header.php'; ?>
	</header>
	
	<?php $project = $_GET['project'];?>
	
	<?php 	$projectInfo = mysql_query("select ProjectTitle,ProjectCategory,ProjectLocation from Grupo_Project_Index where ProjectID = $project");
		while ($projInfo = mysql_fetch_array($projectInfo))
		{
			$projTitle = $projInfo[0];
			$projCat = $projInfo[1];
			$projLocation = $projInfo[2];
		}
		
		$projectInfo = mysql_query("select Description from Grupo_Project_Description where ProjectID = $project");
		while ($projInfo = mysql_fetch_array($projectInfo))
		{
			$projDesc = $projInfo[0];
			
		}
			
	?>
	
	<section class="content-container">
		<div class="content-area">
			<div class="project_contentArea">
				
			<div class="left">
				<div class="description">
				    <h4><?php echo $projTitle;?></h4>
				    <h3><?php echo $projDesc;?></h3>
				</div>
				
				<div id="heroImage">
					<div id=slideshow>
					<?php
					$projectPicture = mysql_query("select Location, OtherMediaID from Grupo_Project_OtherMedia where ProjectID = $project");
					$counter = 0;	
						while ($picLoc = mysql_fetch_array($projectPicture))
						{
						$imgLoc = $projLocation.$picLoc[0];
						$mediaID = $picLoc[1];
					?>
						<a class='show-panel'><img src="../includes/thumbnail.php?pic=../<?php echo $imgLoc;?>&ht=230&wd=588" alt="../<?php echo $imgLoc;?>" class="<?php if($counter==0)echo 'active';?>"  /></a>
					<?php
					
					}
					?>
								
								
					</div>
				</div>
			</div>
			<form>
				<input type="hidden" id="info" value="<?php echo $imgLoc;?>"/>
			</form>
				<div class="media">
                
                	<?php
					$otherMedia = mysql_query("select MediaTitle
														from Grupo_Project_OtherMedia 
														where ProjectID = $project
														AND
														OtherMediaID != $mediaID
														GROUP BY MediaTitle 
														HAVING COUNT(DISTINCT MediaTitle) = 1");
					while ($mediaInfo = mysql_fetch_array($otherMedia))
					{
						$mediaTitle = $mediaInfo[0];
						$otherPic = mysql_query("select Location
														from Grupo_Project_OtherMedia 
														where ProjectID = $project
														and MediaTitle = '$mediaTitle'
														");
														
						?>
                        <div class="mediaGroup"><div class="btnPanel"></div>
                        <?php
						
						while ($picLoc = mysql_fetch_array($otherPic))
						{
							$mediaLoc = $projLocation.$picLoc[0];
					?>
					
					<div class="mediaPic">
						<div><img src="../includes/thumbnail.php?pic=../<?php echo $mediaLoc;?>&ht=300&wd=360"" alt="../<?php echo $mediaLoc;?>" /></div>
					</div>
					
					<?php
						}
						?>
                        </div>
                        <?php
						}
					?>
                    
					
				</div>
				
				
				
				<?php include '../includes/breadcrumb.php'; ?>
			</div>
		</div>
	</section>
    
     <?php include '../includes/lightbox.php'; ?>
     
    <footer>
		<?php include '../includes/grupo_footer.php'; ?>
        
	</footer>
	
	

</body>
</html>
