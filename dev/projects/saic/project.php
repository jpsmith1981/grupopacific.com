<?php include '../../includes/grupo_declare.php'; ?>

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
	
	
	.project_contentArea .heroImage{
		width: 466px;
		height: 362px;
		background-color:blue;
		float:left;
	}
	
	.project_contentArea .media{
		width:440px;
		height:362px;
		float:left;
	}
	
	.project_contentArea .smMediaButton{
		height:150px;
		width:212px;
		background-color:#858585;
		overflow:hidden;
	}
	
	
	.project_contentArea .lgMediaButton{
		margin-top:13px;
		height:217px;
		width:440px;
		background-color:#858585;
		float:left;
		overflow:hidden;
	}
	
	
	.label{
		padding-top:2px;
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
	
		
		
	#slideshow {
		position:relative;
		height:387px;
		width: 544px;
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
	<header>
		<?php include '../../includes/grupo_header.php'; ?>
	</header>
	
	<?php $project = 12//$_GET['project'];?>
	<section class="content-container">
		<div class="content-area">
			<div class="project_contentArea">
				<div id=slideshow>
				<?php 				$projectPicture = mysql_query("select imgLocation from Grupo_ProjectPic where ProjectID = $project");
				$counter = 0;	
					while ($picLoc = mysql_fetch_array($projectPicture))
					{
					$imgLoc = $picLoc[0];
				?>
					<img src="../../includes/thumbnail.php?pic=../projects<?php echo $imgLoc;?>&ht=350&wd=466" alt="" class="<?php if($counter==0)echo 'active';?>"  />
				<?php 				$counter++;
				}
				?>
							
							
				</div>
				      
			
				<div class="media">
					<div class="smMediaButton left">
						<a href="lobby.php">
							<img src="../../includes/thumbnail.php?pic=../projects/saic/LobbyRemodel/Renderings/FINALPERSPECTIVE.16.F.MAR,2005.jpg&ht=300&wd=212" />
							</a>
						</a>
						
					</div>
					<div class="smMediaButton right">
						<a href="cafe.php">
							<img src="../../includes/thumbnail.php?pic=../projects/saic/NewCafe/Renderings/SAIC-PatioDining04.12.05.jpg&ht=300&wd=400" />
							
						</a>
					</div>
					<div class="label left">Lobby Remodel</div><div class="label right">Cafe Remodel</div>
					<div class="smMediaButton">
						<a href="corp.php">
							<img src="../../includes/thumbnail.php?pic=../projects/saic/CorporateOffices/Spaceplans/EXITING-E1.jpg&ht=300&wd=300" />
						</a>
					</div>
					<div class="label">Corporate Office </div>
				</div>
				<?php $projectInfo = mysql_query("select ProjectTitle,ProjectCategory,ProjectDescription from Grupo_Project where ProjectID = $project");
					while ($picInfo = mysql_fetch_array($projectInfo))
					{
						$projTitle = $picInfo[0];
						$projCat = $picInfo[1];
						$projDes = $picInfo[2];
					}
				?>
				
				<ul class="breadcrumb">
					<li>Portfolio&gt;</li>
					<li><?php echo $projCat;?>&gt;</li>
					<li><a href="project.php"><?php echo $projTitle;?></a></li>
				</ul>
			</div>
		</div>
	</section>

</body>
</html>
