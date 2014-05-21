<? include 'includes/grupo_declare.php'; ?>

<!DOCTYPE html>
<html>
<head>


<title>Grupo Pacific - Home</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.5.0/build/cssreset/cssreset-min.css">
<link rel="stylesheet" type="text/css" href="styles/searchStyle.css" />
<link href="styles/grupo_styles.css" rel="stylesheet" type="text/css">
<style>
	
	.panarama_left{
		float:left;
		width:634px;
		height:385px;
		overflow:hidden;
	}
	
	.project_contentArea{
		padding:0 17px;
		width:990px;
		height:400px;
		background-color:white;
	}
	
	
	.project_contentArea .heroImage{
		width: 594px;
		height: 243px;
		background-color:blue;
		float:left;
		overflow:hidden;
	}
	
	.project_contentArea .media{
		padding-left:50px;
		width:250px;
		height:360px;
		float:left;
		text-align:center;
	}
	
	.project_contentArea .mediaButton{
		height:180px;
		width:250px;
		margin:0 17px 10px;
		overflow:hidden;
	}
	
	.project_contentArea .mediaButton:nth-child(2){
		
	}
	
	
	.project_contentArea .description{
		width:634px;
		height: 130px;
		float:left;
		
	}


	.top{
		width:100%;
	}
	
		
		
	#slideshow {
		position:relative;
		height:243px;
		width: 594px;
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
		clear:both;
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
		<? include 'includes/grupo_header.php'; ?>
	</header>
	
	<? $project = $_GET['project'];?>
	<section class="content-container">
		<div class="content-area">
        	<div class="project_contentArea">
            	<div class="panarama_left">
			<div class="description">
				<?
				$projectDescription = mysql_query("select Description from Grupo_Project_Description where ProjectID = $project");
					while ($descrip = mysql_fetch_array($projectDescription))
						$projDes = $descrip[0];
						?>
			    <h1><?=$projTitle;?></h1>
			    <h3><?=$projDes;?></h3>
			</div>
            <div id="heroImage">
				<div id="slideshow">
					<?
					$projectInfo = mysql_query("select ProjectTitle,ProjectCategory,ProjectLocation from Grupo_Project_Index where ProjectID = $project");
						while ($picInfo = mysql_fetch_array($projectInfo))
						{
							$projTitle = $picInfo[0];
							$projCat = $picInfo[1];
							$projLoc = $picInfo[2];
							
						}
					$projectPicture = mysql_query("select imgLocation from Grupo_Project_MainPic where ProjectID = $project");
					$counter = 0;	
						while ($picLoc = mysql_fetch_array($projectPicture))
						{
							$imgLoc = $projLoc.$picLoc[0];
					?>
					<img src="includes/thumbnail.php?pic=..<?=$imgLoc;?>&ht=253&wd=594" alt="" class="<? if($counter==0)echo 'active';?>"  />
				    <?					$counter++;
								}
							?>
							
							
				</div>
				
			</div>
			<form>
				<input type="hidden" id="info" value="<?=$imgLoc;?>"/>
			</form>
			
		</div>
				
                <div class="media right">
			<?
			$otherMedia = mysql_query("select Location,MediaTitle from Grupo_Project_OtherMedia where ProjectID = $project");
				while ($mediaInfo = mysql_fetch_array($otherMedia))
				{
					$mediaLoc = $projLoc.$mediaInfo[0];
					$mediaTitle = $mediaInfo[1];
			?>	
				<div class="mediaButton">
					<form>
					<input type="hidden" value="<?=$mediaLoc;?>"/>
					</form>
					<img src="includes/thumbnail.php?pic=..<?=$mediaLoc;?>&ht=200&wd=280" alt="" class="<? if($counter==0)echo 'active';?>"  />
				</div>
			<?	
				}
			?>
                	
                    
                </div>
                
                <ul class="breadcrumb">
                	<li>Portfolio&gt;</li>
                    <li><?=$projCat;?>&gt;</li>
                    <li><?=$projTitle;?></li>
                </ul>
            </div>
		</div>
	</section>
	<script>
		
		
		$(".mediaButton").click(function() {
			
			var heroImage = ($('#info').val());
			
			var newHeroImg = ($(this).find("input").val());
			var newMediaImg = heroImage;
			($('#info').val(newHeroImg));
			
			
						
			$("#heroImage").html("<img src='includes/thumbnail.php?pic=.."+newHeroImg+"&ht=253&wd=590' alt=''/>");
			
			
			
						
			$(this).find("img").attr({
			src: "includes/thumbnail.php?pic=.."+heroImage+"&ht=200&wd=280"
			});
			$(this).find("input").val(newMediaImg);
			alert($(this).find("input").val());
			
			
		});

	</script>
</body>
</html>
