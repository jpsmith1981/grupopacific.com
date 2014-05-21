<?php include 'includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - Home</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="styles/searchStyle.css" />
<link href="styles/grupo_styles.css" rel="stylesheet" type="text/css">
<style>
	
	.project_contentArea{
		padding:0 17px;
		width:990px;
		height:400px;
		background-color:white;
	}
	
	
	.project_contentArea .heroImage{
		width: 544px;
		height: 362px;
		background-color:blue;
		float:left;
	}
	
	.project_contentArea .media{
		width:190px;
		height:362px;
		float:left;
	}
	
	.project_contentArea .mediaButton{
		height:110px;
		width:156px;
		margin:0 17px 10px;
		background-color:#858585;
	}
	
	.project_contentArea .mediaButton:nth-child(2){
		
	}
	
	
	.project_contentArea .description{
		width:256px;
		height: 387px;
		float:left;
		
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
		<?php include 'includes/grupo_header.php'; ?>
	</header>
	
	<?php $project = $_GET['project'];?>
	<section class="content-container">
		<div class="content-area">
        	<div class="project_contentArea">
            	<div id=slideshow>
                	<?php
			$projectInfo = mysql_query("select ProjectTitle,ProjectCategory,ProjectDescription from Grupo_Project where ProjectID = $project");
				while ($picInfo = mysql_fetch_array($projectInfo))
				{
					$projTitle = $picInfo[0];
					$projCat = $picInfo[1];
					$projDes = $picInfo[2];
					
				}
			$projectPicture = mysql_query("select imgLocation from Grupo_ProjectPic where ProjectID = $project");
			$counter = 0;	
				while ($picLoc = mysql_fetch_array($projectPicture))
				{
					$imgLoc = $picLoc[0];
			?>
			<img src="includes/thumbnail.php?pic=..<?php echo $imgLoc;?>&ht=350&wd=544" alt="" class="<?php if($counter==0)echo 'active';?>"  />
                    <?php					$counter++;
						}
					?>
					
					
</div>
                
                <div class="media">
                	<div class="mediaButton"></div>
                    <div class="mediaButton"></div>
                    <div class="mediaButton"></div>
                </div>
                <div class="description">
                	<?php
					?>
                    <h1><?php echo $projTitle;?></h1>
                    <h3><?php echo $projDes;?></h3>
                </div>
                <ul class="breadcrumb">
                	<li>Portfolio&gt;</li>
                    <li><?php echo $projCat;?>&gt;</li>
                    <li><?php echo $projTitle;?></li>
                </ul>
            </div>
		</div>
	</section>

</body>
</html>
