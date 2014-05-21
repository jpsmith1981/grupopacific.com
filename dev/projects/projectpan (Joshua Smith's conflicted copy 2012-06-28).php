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
		height:200px;
		float:left;
		overflow:hidden;
	}
	
	.media{
		float:right;
		width:380px;
		height:360px;
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

<script>
$(function() {
    var $slideshow = $('.slideshow'),
    $slides = [],
    active = null;
    
    // build the slides array from the children of the slideshow.  this will pull in any children, so adjust the scope if needed
    $slideshow.children().each(function(i) {
        var $thisSlide = $(this);
		$(this).css("display","none");
        
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
    	$lastActive.fadeOut();
		$lastActive.removeClass('active last-active');
        $nextActive
            .addClass('active')
            .fadeIn(1000, function() {
				
                
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
				
			<div class="left">
				<div class="description">
				    <h4><?=$projTitle;?></h4>
				    <p><?=$projDesc;?><p>
				</div>
				
				<div id="heroImage">
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
						<img src="../includes/thumbnail.php?pic=../<?=$imgLoc;?>&ht=230&wd=588" alt="" class="<? if($counter==0)echo 'active';?>"  />
					<?
					$counter++;
					}
					?>
								
								
					</div>
				</div>
			</div>
			<form>
				<input type="hidden" id="info" value="<?=$imgLoc;?>"/>
			</form>
				<div class="media">
					<?
					$otherMedia = mysql_query("select Location, MediaTitle
														from Grupo_Project_OtherMedia 
														where ProjectID = $project
														GROUP BY MediaTitle 
														HAVING COUNT(DISTINCT MediaTitle) = 1");
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
			
		});

	</script>

</body>
</html>
