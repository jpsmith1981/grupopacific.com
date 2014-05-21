<?php include '../includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - Project</title>

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
		
		height:180px;
		max-width:360px;
		overflow:hidden;
		
	}
	
	.project_contentArea .btnPanel{
		height:180px;
		width:20px;
		display:inline;
		float:right;
		cursor:pointer;
	}
	
	.photoBtn{
		width:10px;
		height:15px;
		background-color:black;
		display:block;
		padding:4px 5px;
		margin:1px 0;
		text-align:center;
		color:white;
	}
	
	.project_contentArea .mediaGroup{
		min-width:280px;
		height:180px;
		margin-bottom:20px;
		float:right;
		text-align:right;
	}
	
	.media{
		text-align:right;
		float:right;
		width:380px;
		height:390px;
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
		
	.slideshow,.mainImage {
		position:relative;
		height:230px;
		width: 527px;
		margin-bottom:16px;
		float:left;
		
	}
	
		
	.project_contentArea .description{
		font-size:110%;
		width:527px;
		height:130px;
		padding:0 0 16px;
		float:left;
		
	}
	
	
	
	
	
	
	
	
	-->
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<![if !IE]>
<script src="../includes/preloader.js?433220204" type="text/javascript"></script>
<![endif]>

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
				    <p><?php echo $projDesc;?><p>
				</div>
				
				<div id="heroImage">
					<?php
                $total = mysql_query("select COUNT(*) from Grupo_Project_MainPic where ProjectID = $project");
				$totalRows = mysql_fetch_array($total);
				$numOfProjects = $totalRows[0];
				
				if ($numOfProjects>1)
                echo '<div class="slideshow">';
				else
				echo '<div class="mainImage">';
				?>
					<?php
					$projectPicture = mysql_query("select imgLocation from Grupo_Project_MainPic where ProjectID = $project");
					$counter = 0;	
						while ($picLoc = mysql_fetch_array($projectPicture))
						{
						$imgLoc = $projLocation.$picLoc[0];
					?>
						<div><img src="../includes/thumbnail.php?pic=../<?php echo $imgLoc;?>&ht=230&wd=588" alt="" class="<?php if($counter==0)echo 'active';?>"  /></div>
					<?php
					$counter++;
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
						<div><img src="../includes/thumbnail.php?pic=../<?php echo $mediaLoc;?>&ht=180&wd=380" alt="../<?php echo $mediaLoc;?>" /></div>
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
