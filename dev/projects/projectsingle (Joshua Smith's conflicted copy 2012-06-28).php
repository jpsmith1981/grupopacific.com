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
		padding:0 17px;
		width:990px;
		height:400px;
		background-color:white;
	}
	
	
	.project_contentArea .mediaPic{
		width:380px;
		height:150px;
		float:left;
	}
	
	.media{
		float:left;
		width:1024px;
		height:130px;
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
		width: 402px;
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
		width:490px;
		height:230px;
		padding:0 0 16px;
		float:right;
		
	}
	.breadcrumb{
		width:100%;
		clear:both;
		float:left;
		
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
				
					
				
			<div id="heroImage">
				<div id=slideshow>
				<?
				$projectPicture = mysql_query("select imgLocation from Grupo_Project_MainPic where ProjectID = $project");
				$counter = 0;	
					while ($picLoc = mysql_fetch_array($projectPicture))
					{
					$imgLoc = $projLocation.$picLoc[0];
				?>
					<img src="../includes/thumbnail.php?pic=../<?=$imgLoc;?>&ht=230&wd=402" alt="" class="<? if($counter==0)echo 'active';?>"  />
				<?
				
				}
				?>
							
							
				</div>
			</div>
			
			<div class="description">
				<h4><?=$projTitle;?></h4>
				<h3><?=$projDesc;?></h3>
			</div>
			<form>
				<input type="hidden" id="info" value="<?=$imgLoc;?>"/>
			</form>
				<div class="media">
					<?
					$otherMedia = mysql_query("select Location,MediaTitle from Grupo_Project_OtherMedia where ProjectID = $project");
					while ($mediaInfo = mysql_fetch_array($otherMedia))
					{
						$mediaLoc = $projLocation.$mediaInfo[0];
						$mediaTitle = $mediaInfo[1];
					?>	
					<div class="mediaPic">
						<form>
							<input type="hidden" value="<?=$mediaLoc;?>"/>
						</form>
						<img src="../includes/thumbnail.php?pic=../<?=$mediaLoc;?>&ht=300&wd=380" alt="" class="<? if($counter==0)echo 'active';?>"  />
					</div>
					<?	
						}
					?>
				</div>
				
					
				<? include '../includes/breadcrumb.php'; ?>
			</div>
		</div>
	</section>
     <footer>
		<? include '../includes/grupo_footer.php'; ?>
        
	</footer>
	
	<script>
		
		
		$(".mediaPic").click(function() {
			
			var heroImage = ($('#info').val());
			
			var newHeroImg = ($(this).find("input").val());
			var newMediaImg = heroImage;
			($('#info').val(newHeroImg));
			
			
						
			$("#heroImage").html("<img src='../includes/thumbnail.php?pic=../"+newHeroImg+"&ht=253&wd=590' alt=''/>");
			
			
			
						
			$(this).find("img").attr({
			src: "../includes/thumbnail.php?pic=../"+heroImage+"&ht=300&wd=380"
			});
			$(this).find("input").val(newMediaImg);
			alert($(this).find("input").val());
			
			
		});

	</script>

</body>
</html>
