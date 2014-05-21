<? include '../includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - Home</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="../styles/searchStyle.css" />
<link href="../styles/grupo_styles.css" rel="stylesheet" type="text/css">
<style>
	
	.project_contentArea{
		padding:0;
		width:990px;
		height:400px;
		background-color:white;
	}
	
	
	.project_contentArea .heroImage{
		margin:0 16px;
		width: 466px;
		height: 362px;
		background-color:blue;
		float:left;
	}
	
	.project_contentArea .media{
		width:456px;
		height:362px;
		float:left;
	}
	
	.project_contentArea .smMediaButton{
		height:164px;
		width:212px;
		background-color:#858585;
		overflow:hidden;
		margin-right:16px;
		margin-bottom:22px;
	}
	
	
	
	
	
	.label{
		display:block;
		padding:4px 0;
		height:14px;
		width:212px;
		background-color:#858585;
		text-transform:uppercase;
		text-align:center;
		color:white;
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px;
		float:left;
		margin-bottom:24px;
	}
	
	


	.top{
		width:100%;
	}
	
		
		
	.slideshow, .mainImage {
		position:relative;
		height:387px;
		width: 466px;
		margin:0 16px;
		float:left;
		overflow:hidden;
			
	}
	
		
	
	
	-->
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<![if !IE]>
<script src="../includes/preloader.js?433220204" type="text/javascript"></script>
<![endif]>
<script src="../includes/imageFader.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<? include '../includes/grupo_header.php'; ?>
	</header>

	
	
	<section class="content-container">
		<div class="content-area">
			<div class="project_contentArea">
				
				<? $project = $_GET['project'];
				if($project){?>
                
                
                
				<? 
	
				$projectInfo = mysql_query("select ProjectTitle,ProjectCategory,ProjectLocation from Grupo_Project_Index where ProjectID = $project");
					while ($projInfo = mysql_fetch_array($projectInfo))
					{
						$projTitle = $projInfo[0];
						$projCat = $projInfo[1];
						$projLocation = $projInfo[2];
					}
							
                $total = mysql_query("select COUNT(*) from Grupo_Project_MainPic where ProjectID = $project");
				$totalRows = mysql_fetch_array($total);
				$numOfProjects = $totalRows[0];
				
				if ($numOfProjects>1)
                echo '<div class="slideshow">';
				else
				echo '<div class="mainImage">';
				?>
				<?
				$projectPicture = mysql_query("select imgLocation from Grupo_Project_MainPic where ProjectID = $project");
				$counter = 0;	
					while ($picLoc = mysql_fetch_array($projectPicture))
					{
					$imgLoc = $projLocation.$picLoc[0];
				?>
					<div><img src="../includes/thumbnail.php?pic=../<?=$imgLoc;?>&ht=350&wd=466" alt=""></div>
				<?
				$counter++;
				}
				?>
							
							
				</div>
				      
			
				<div class="media">
					<?
						$subProjectInfo = mysql_query("select SubProjectName, subProjectID from Grupo_SubProject where ProjectID = $project");
						while ($subProjectData = mysql_fetch_array($subProjectInfo))
							{
								$SubProjectName = $subProjectData[0];
								$subProjectID = $subProjectData[1];
								$subProjectImage = mysql_query("select PictureLocation from Grupo_Project_Photo where SubProjectID = $subProjectID");
								
								while ($subProjectPic = mysql_fetch_array($subProjectImage))
								{
									$SubProjectImageLoc = $projLocation.$subProjectPic[0];
								}
					?>
							<div class="smMediaButton left">
								<a href="project.php?sp=<?=$subProjectID;?>">
								<img src="../includes/thumbcrop.php?pic=../<?=$SubProjectImageLoc;?>&ht=140&wd=212" />
								</a>
								<div class="label"><?=$SubProjectName;?></div>
							</div>
					<?
							
							}
					?>
					
					
					
				</div>
				<? }?>
				<? $subProject = $_GET['sp'];
				
				if($subProject){?>
                
                <?
                $total = mysql_query("SELECT COUNT(*) from Grupo_Project_Photo where SubProjectID = $subProject");
		
				$totalRows = mysql_fetch_array($total);
				$numOfProjects = $totalRows[0];
				if ($numOfProjects>1)
                echo '<div class="slideshow">';
				else
				echo '<div class="mainImage">';
				?>
					<?
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
								
								$subProjectImage = mysql_query("select PictureLocation from Grupo_Project_Photo where SubProjectID = $subProject");
								while ($subProjectPic = mysql_fetch_array($subProjectImage))
								{
									$SubProjectImageLoc = $projLocation.$subProjectPic[0];
								
								
								
								
								
							?>
						<div><img src="../includes/thumbnail.php?pic=../<?=$SubProjectImageLoc;?>&ht=349&wd=580" alt=""  /></div>
					<? $counter++;
					}}
					?>
					
				</div>
				
				
				<div class="subProjDescription">
					
				    <h4><?=$projTitle;?> <? 
					if(!($projTitle==$SubProjectName))
					echo "- ".$SubProjectName;
					?></h4>
				    <p><?=$subProjectDesc;?></p>
				</div>
				
				<div class="subProjMedia">
					<h4>Related Projects:</h4>
					<?
						$subProjectInfo = mysql_query("select SubProjectName, subProjectID from Grupo_SubProject where ProjectID = $project and subProjectID != $subProject");
						while ($subProjectData = mysql_fetch_array($subProjectInfo))
							{
								$SubProjectName = $subProjectData[0];
								$subProjectID = $subProjectData[1];
								$subProjectImage = mysql_query("select PictureLocation from Grupo_Project_Photo where SubProjectID = $subProjectID");
								
								while ($subProjectPic = mysql_fetch_array($subProjectImage))
								{
									$SubProjectImageLoc = $projLocation.$subProjectPic[0];
								}
					?>
							<div class="subProjMediaButton left">
								<a href="project.php?sp=<?=$subProjectID;?>">
								<img src="../includes/thumbcrop.php?pic=../<?=$SubProjectImageLoc;?>&ht=80&wd=115" />
								</a>
								<div class="subProjLabel"><?=$SubProjectName;?></div>
							</div>
					<?
							
							}
					?>
                
                
				<? }?>
                
                
                
                
				
				<? include '../includes/breadcrumb.php'; ?>
               
                
			</div>
		</div>
	</section>
    
    <footer>
		<? include '../includes/grupo_footer.php'; ?>
        
	</footer>

</body>
</html>
