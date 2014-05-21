<? include '../../includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - Home</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="../../styles/searchStyle.css" />
<link href="../../styles/grupo_styles.css" rel="stylesheet" type="text/css">
<style>
	
	.project_contentArea{
		padding:0 17px;
		width:990px;
		height:400px;
		background-color:white;
	}
	
	
	.project_contentArea .media{
		width:700px;
		height:362px;
		float:left;
	}
	
	.project_contentArea .smMediaButton{
		height:350px;
		width:322px;
		background-color:#858585;
		overflow:hidden;
		float:left;
		margin-right:24px;
	}
	
	
		
	.label{
		padding-top:2px;
		height:14px;
		width:322px;
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
	
		
		
	#slideshow {
		position:relative;
		height:387px;
		width: 274px;
		float:left;
			
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
$(function() {
    var $slideshow = $('#slideshow'),
    $slides = [],
    active = null;
    
    // build the slides array from the children of the slideshow.  this will pull in any children, so adjust the scope if needed
    $slideshow.children().each(function(i) {
        var $thisSlide = $(this);
        
        // if its the active slide then set it to this index
        if ( $thisSlide.hasClass('active') ) active = i;
        
        $slides.push( $thisSlide );
    });
    
    // if no active slide, take the last one
    if ( active === null ) active = $slides.length - 1;
    
    function slideSwitch() {
        // add the last-active class to the previously active slide
        var $lastActive = $slides[active];
        $lastActive.addClass('last-active');
        
        // find the next slide
        active++;
        
        // set to zero if it's too high
        if ( active >= $slides.length ) active = 0;
        
        var $nextActive = $slides[active];
    
        $nextActive.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1000, function() {
                $lastActive.removeClass('active last-active');
            });
    }

    // start the interval
    setInterval( slideSwitch, 5000 );
});


</script>

</head>
<body>
	<? $project = $_GET['project'];?>
	<? $projectInfo = mysql_query("select ProjectTitle,ProjectCategory,ProjectLocation from Grupo_Project_Index where ProjectID = $project");
		while ($picInfo = mysql_fetch_array($projectInfo))
		{
			$projTitle = $picInfo[0];
			$projCat = $picInfo[1];
			$projLoc = $picInfo[2];
		}
	?>
	
	<header>
		<? include '../../includes/grupo_header.php'; ?>
	</header>
	
	
	<section class="content-container">
		<div class="content-area">
			<div class="project_contentArea">
				<div id=slideshow>
				<?
				$projectPicture = mysql_query("select imgLocation from Grupo_Project_MainPic where ProjectID = $project");
				$counter = 0;	
					while ($picLoc = mysql_fetch_array($projectPicture))
					{
					$imgLoc = $projLoc.$picLoc[0];
				?>
					<img src="../../includes/thumbnail.php?pic=../<?=$imgLoc;?>&ht=350&wd=274" alt="" class="<? if($counter==0)echo 'active';?>"  />
				<?
				$counter++;
				}
				?>
							
							
				</div>
				      
			
				<div class="media">
					<div class="smMediaButton">
						<a href="corridor.php">
							<img src="../../includes/thumbnail.php?pic=../projects/FirstAlliedPlazaBuilding/B-ResidentialTowerCorridorRemodel/BeforeAfterPhotos/After.JPG&ht=350&wd=358" />
						<div class="label">Residential Tower</div>
						</a>
					</div>
					<div class="smMediaButton">
						<a href="lobby.php">
							<img src="../../includes/thumbnail.php?pic=../projects/FirstAlliedPlazaBuilding/B-LobbyRemodel/LobbyRenderings/jpeg-1.jpg&ht=350&wd=358" />
						<div class="label">Lobby Remodel</div></a>
						
					</div>
					
					
					
				</div>
				
				
				<ul class="breadcrumb">
					<li>Portfolio&gt;</li>
					<li><?=$projCat;?>&gt;</li>
					<li><a href="project.php"><?=$projTitle;?></a></li>
				</ul>
			</div>
		</div>
	</section>

</body>
</html>
