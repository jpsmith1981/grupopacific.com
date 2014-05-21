<? include '../includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - Home</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="../styles/searchStyle.css" />
<link href="../styles/grupo_styles.css" rel="stylesheet" type="text/css">
<style>
	
	
	
	.project_contentArea .mediaPic{
		max-width:250px;
		min-height:125px;
		float:left;
		overflow:hidden;
	
	}
	
	.project_contentArea .mediaGroup{
		min-width:260px;
		max-height:200px;
		margin-bottom:20px;
		text-align:right;
	
	}
	
	.media{
		float:right;
		min-width:280px;
		max-height:376px;
		padding-right:16px;
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
		
	.slideshow, .mainImage {
		position:relative;
		height:377px;
		width: 374px;
		margin:0 16px;
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
		width:250px;
		padding:0 0 16px 16px;
		float:left;
		
	}
	
	
	
	
	
	
	
	
	-->
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="../includes/imageFader.js" type="text/javascript"></script>
<script src="../includes/imageFlipper.js" type="text/javascript"></script>

</head>
<body>
	<header>
		<? include '../includes/grupo_header.php'; ?>
	</header>
	
	<? $project = $_GET['project'];?>
	
	<? 	$projectInfo = mysql_query("select ProjectTitle,ProjectCategory,ProjectLocation from Grupo_Project_Index where ProjectID = $project");
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
				
			<?		
				
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
					<div><a class='show-panel'><img src="../includes/thumbnail.php?pic=../<?=$imgLoc;?>&ht=377&wd=402" alt="../<?=$imgLoc;?>" class="<? if($counter==0)echo 'active';?>"  /></a></div>
				<?
				
				}
				
                if ($numOfProjects>1){ ?>
				<div class="slideShowBtnPanel"></div>	<? } ?>		
							
				</div>
			
			
			<div class="description">
				<h4><?=$projTitle;?></h4>
				<h3><?=$projDesc;?></h3>
				<?
					$isVid = mysql_query("select videoLink from Grupo_youTube where projectID = $project");
					while ($vidData = mysql_fetch_array($isVid))
				{?>
				<a class="videoBox">Click here to see a video walk-through.</a>
				<div class="video-lightbox-panel">
    				<?= $vidData[0];?>
	
					<p align="center">
						<a class="close-panel" href="#">Close this window</a>
   					</p>
				</div><!-- /lightbox-panel -->

				<div class="video-lightbox"> </div>
				<? }?>
			</div>
			
			<form>
				<input type="hidden" id="info" value="<?=$imgLoc;?>"/>
			</form>
				<div class="media">
					<?
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
                        <?
						
						while ($picLoc = mysql_fetch_array($otherPic))
						{
							$mediaLoc = $projLocation.$picLoc[0];
					?>
					
					<div class="mediaPic">
						<div><img src="../includes/thumbnail.php?pic=../<?=$mediaLoc;?>&ht=220&wd=200" alt="../<?=$mediaLoc;?>" /></div>
					</div>
					
					<?	
						}
						?>
                        </div>
                        <?
						
						}
					?>
				</div>
				
					
				<? include '../includes/breadcrumb.php'; ?>
				</div>
			</div>
		</div>
	</section>
    
     <? include '../includes/lightbox.php'; ?>
     
     <footer>
		<? include '../includes/grupo_footer.php'; ?>
        
	</footer>
	
	<script>
		$(document).ready(function() {
			if($(".mediaGroup").size() == 1){
				$(".description").width("553");
				$(".mediaGroup").width("553");
				var imageLocation = $(".mediaGroup").find('img').attr('alt');
				var imageHieght = 376-$(".description").height();
				imageLocation = "../includes/thumbnail.php?pic="+imageLocation+"&ht="+imageHieght.toString()+"&wd=553";
				
				$(".mediaGroup").find('img').attr('src', imageLocation);
				$(".mediaGroup").find(".mediaPic").css({"float" :"right", 'max-width':'553px'});
				
			}
            
        });
	
		$(document).ready(function(){
 				$("a.videoBox").click(function(){
	
							 
				$(".video-lightbox, .video-lightbox-panel").fadeIn(300);
				$(".content-container").fadeTo(250,.25);
			 })
			 $("a.close-panel").click(function(){
				 $(".video-lightbox, .video-lightbox-panel").fadeOut(300);
				 $(".content-container").fadeTo(250,1);
			 })
			 
			 
		if($(".description").height()>385)
		{
			$(".description").width("586");
			$(".description").height("220");
			$(".media").height("220");
			$(".media").width("586");
			$(".mediaPic").height("132");
			$(".mediaPic").width("200");
			$(".mediaPic").css("margin-left", "24px");
			$(".mediaPic:first").css("float", "right");
			$(".breadcrumb").css({
				'clear':'none',
				'float':'left',
				'width':'280px'});
						
		}
		
		$(".mediaPic").each(function(){
			if($(this).width() > $(this).find(img).width()){
				$(this).width($(this).find(img).width());
			}
			
			if($(this).height() > $(this).find(img).height()()){
				$(this).height($(this).find(img).height());
			}
			
            
        });
			
			
		
		
			});

	</script>
	
	

</body>
</html>
