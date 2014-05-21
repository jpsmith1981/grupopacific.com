<?php include 'includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Portfolio</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="styles/searchStyle.css" />
<link href="styles/grupo_styles.css" rel="stylesheet" type="text/css">
	
	<style>
		.portfolio_contentArea{
			width:1024px;
			height:400px;
			background-color:white;
		}
		
		.portfolio_contentArea .projectNav{
			width:44px;
			padding:144px 5px 0;
			height:241px;
			float:left;
		}
		
				
		.portfolio_contentArea .portfolio_projects{
			height:385px;
			width:896px;
			padding:0 5px;
			overflow:hidden;
			float:left;
		}
		
		.portfolio_contentArea .projectLink{
			height:	112px;
			width: 169px;
			margin:0 5px 15px;
			float:left;
			overflow:hidden;
			
		}
		
		.projectLink .label{
			position:absolute;
			padding-top:5px;
			height:27px;
			width:169px;
			opacity:.85;
			margin-top:80px;
			background-color:#6989c6;
			text-transform:uppercase;
			text-align:center;
			color:white;
			font-family:Arial, Helvetica, sans-serif;
			font-size:10px;
		}
		
		.protfolio_contentArea ul{
			padding:0;
			margin:0;
			width:1024px;
			
		}
		
		.portfolio_contentArea li{
			display:block;
			width:109px;
			font-size:12px;
			color:white;
			float:left;
			padding-left:17px;
		}
		
		.portfolio_contentArea img{
			position:absolute;				
		}
		
		.portfolio_contentArea a{
			color:#858585;
		}
		
		.clearBoth{
			clear:both;
		}
	</style>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<![if !IE]>
	<script src="includes/preloader.js?433220204" type="text/javascript"></script>
	<![endif]>
	
</head>
<body>
	<header>
    	<?php include 'includes/grupo_header.php'; ?>
	</header>
	<?php
        $whereCat = '';
        $andCat = '';
		$page = isset($_GET['page'])?$_GET['page']:false;
		if(isset($_GET['cat'])){
			$cat = "ProjectCategory = '".$_GET['cat']."' ";
			$whereCat = "where ".$cat;
			$andCat = "and ".$cat;
		}
		if(!$page)
		     $page = 1;
			 
		
		$total = mysql_query("SELECT COUNT(*) FROM Grupo_Project_Index $whereCat");
		
		$total = mysql_fetch_array($total);
		$numOfProjects = $total[0];
	?>
	
	<section class="content-container">
		<div class="content-area">
			<div class="portfolio_contentArea">
            	<div class="projectNav">
			<?php if ($page>1){?>
			<a href="<?php echo  $_SERVER['PHP_SELF'];?>?page=<?php echo  $page-1;?>"><img src="images/prev.png" alt="prev" /></a>
			<?php } ?>
		</div>
            	<div class="portfolio_projects">
				<?php
                $projectssql = '';
				$low = ($page-1)*15;
				if (isset($_POST['qry']))
			   {
                   $qry = $_POST['qry'];
					$projectssql = mysql_query("select `ProjectID` 
					from Grupo_Project_Description where (Grupo_Project_Description.Description like '%$query%') 					union
					select `ProjectID`
					from Grupo_SubProject where
					(Grupo_SubProject.subProjectDescription like '%$query%' 
					or Grupo_SubProject.SubProjectName like '%$query%') 
					union
					select `ProjectID`
					from Grupo_Project_Index 
					where
					(Grupo_Project_Index.ProjectTitle like '%$query%'
					or Grupo_Project_Index.ProjectCategory like '%$query%')");
					$numOfProjects = mysql_num_rows($projectssql);
			   }
			   
			   else
			   {
				
				$projectssql = mysql_query("select ProjectID,ProjectTitle,ProjectLocation from Grupo_Project_Index $whereCat limit $low,15");  
			   }				
				
				while ($proj = mysql_fetch_array($projectssql))
					{
						$ProjectID = $proj[0];
						$projectTitle = $proj[1];
						$projectLoc = $proj[2];
						
						$thesql = mysql_query("select ProjectTitle,ProjectLocation from Grupo_Project_Index where ProjectID = $ProjectID $andCat limit $low,15");
												
						while ($pic = mysql_fetch_array($thesql))
						{  
						$projectTitle = $pic[0];
						$projectLoc = $pic[1];
						}
						$projectPicture = mysql_query(	"select imgLocation 
														from Grupo_Project_MainPic 
														where Grupo_Project_MainPic.ProjectID = $ProjectID
														UNION 
														select Location
														from Grupo_Project_OtherMedia 
														where Grupo_Project_OtherMedia.ProjectID = $ProjectID
														LIMIT 1");
														
							while ($picLoc = mysql_fetch_array($projectPicture))
							$imgLoc = $picLoc[0];
					
				?>
                <a href="projects/projectpicker.php?project=<?php echo $ProjectID;?>">
                    <div class="projectLink">
                    <img src="includes/thumbcrop.php?pic=../<?php echo $projectLoc.$imgLoc;?>&amp;ht=112&amp;wd=169" alt=""  />
                    <div class="label"><?php echo $projectTitle;?></div>
                    </div>
                </a>
                <?php
				}
				?>
				</div>
                <div class="projectNav">
			<?php
			
			if ($numOfProjects > ($page*15)){?>
			<a href="<?php echo  $_SERVER['PHP_SELF'];?>?page=<?php echo  $page+1;?>"><img src="images/next.png" alt="next" /></a>
			<?php } ?>
		</div>
            <div class="clearBoth">
            <ul>
                <li><a href="<?php echo  $_SERVER['PHP_SELF'];?>?cat=Corporate">CORPORATE</a></li>
                <li><a href="<?php echo  $_SERVER['PHP_SELF'];?>?cat=Industrial">INDUSTRIAL</a></li>
                <li><a href="<?php echo  $_SERVER['PHP_SELF'];?>?cat=Medical">MEDICAL</a></li>
                <li><a href="<?php echo  $_SERVER['PHP_SELF'];?>?cat=Residential">RESIDENTIAL</a></li>
                <li><a href="<?php echo  $_SERVER['PHP_SELF'];?>?cat=Retail">RETAIL</a></li>
                <li><a href="<?php echo  $_SERVER['PHP_SELF'];?>?cat=Identity">IDENTITY</a></li>
                <li><a href="<?php echo  $_SERVER['PHP_SELF'];?>?cat=Hospitality">HOSPITALITY</a></li>
                <li><a href="<?php echo  $_SERVER['PHP_SELF'];?>?cat=Institutional">INSTITUTIONAL</a></li>
            </ul>
            </div>	
            
			</div>
		</div>
	</section>
    
    <footer>
		<?php include 'includes/grupo_footer.php'; ?>
	</footer>

</body>
</html>
