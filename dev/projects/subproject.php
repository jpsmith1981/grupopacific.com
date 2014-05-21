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
		
	.project_contentArea .subProjMedia{
		width:393px;
		height:99px;
		float:left;
	}
	
	.project_contentArea .subProjMediaButton{
		height:99px;
		width:115px;
		background-color:grey;
		overflow:hidden;
		margin-right:16px;
	}
	
		
	.project_contentArea .subProjDescription{
		font-size:110%;
		width:393px;
		height:281px;
		float:left;
		
	}
	
	.subProjLabel{
		padding:2px 0;
		height:14px;
		width:115px;
		background-color:#858585;
		text-transform:uppercase;
		text-align:center;
		color:white;
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px;
		float:left;
		margin-bottom:24px;
		
	}
	
			
	
	
	
	
		
	.breadcrumb{
		width:580px;
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
<![if !IE]>
<script src="../includes/preloader.js?433220204" type="text/javascript"></script>
<![endif]>
<script src="../includes/imageFader.js?77" type="text/javascript"></script>

</head>
<body>
	<header>
		<?php include '../includes/grupo_header.php'; ?>
	</header>
	
	<?php $subProject = $_GET['sp'];?>
	<section class="content-container">
		<div class="content-area">
			<div class="project_contentArea">
				<?php
                $total = mysql_query("SELECT COUNT(*) from Grupo_Project_Subproject_Media where SubProjectID = $subProject");
		
				$totalRows = mysql_fetch_array($total);
				$numOfProjects = $totalRows[0];
				if ($numOfProjects>1)
                echo '<div class="slideshow">';
				else
				echo '<div class="mainImage">';
				?>
					<?php
						$counter = 0;
						$subProjectInfo = mysql_query("select SubProjectName, ProjectID, subProjectDescription from Grupo_SubProject where subProjectID = $subProject");
						while ($subProjectData = mysql_fetch_array($subProjectInfo))
							{
								$SubProjectName = $subProjectData[0];
								$project = $subProjectData[1];
								$subProjectDesc = $subProjectData[2];
								
								$projectInfo = mysql_query("select ProjectTitle,ProjectCategory,ProjectLocation from Grupo_Project_Index where ProjectID = $project");
								
								while ($projInfo = mysql_fetch_array($projectInfo))
								{
									$projTitle = $projInfo[0];
									$projCat = $projInfo[1];
									$projLocation = $projInfo[2];
								}
								
								$subProjectImage = mysql_query("select PictureLocation from Grupo_Project_Subproject_Media where SubProjectID = $subProject");
								while ($subProjectPic = mysql_fetch_array($subProjectImage))
								{
									$SubProjectImageLoc = $projLocation.$subProjectPic[0];
								
								
								
								
								
							?>
						<div><img src="../includes/thumbnail.php?pic=../<?php echo $SubProjectImageLoc;?>&ht=349&wd=580" alt="" class="<?php //if($counter==0)echo 'active';?>" /></div>
					<?php $counter++;
					}}
					?>
					
				</div>
				
				
				<div class="description">
					
				    <h4><?php echo $projTitle;?> <?php
					if(!($projTitle==$SubProjectName))
					echo "- ".$SubProjectName;
					?></h4>
				    <p><?php echo $subProjectDesc;?></p>
				</div>
				
				<div class="media">
					<h4>Related Projects:</h4>
					<?php 						$subProjectInfo = mysql_query("select SubProjectName, subProjectID from Grupo_SubProject where ProjectID = $project and subProjectID != $subProject");
						while ($subProjectData = mysql_fetch_array($subProjectInfo))
							{
								$SubProjectName = $subProjectData[0];
								$subProjectID = $subProjectData[1];
								$subProjectImage = mysql_query("select PictureLocation from Grupo_Project_Subproject_Media where SubProjectID = $subProjectID");
								
								while ($subProjectPic = mysql_fetch_array($subProjectImage))
								{
									$SubProjectImageLoc = $projLocation.$subProjectPic[0];
								}
					?>
							<div class="mediaButton left">
								<a href="subproject.php?sp=<?php echo $subProjectID;?>">
								<img src="../includes/thumbcrop.php?pic=../<?php echo $SubProjectImageLoc;?>&ht=80&wd=115" />
								</a>
								<div class="label"><?php echo $SubProjectName;?></div>
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
