<!DOCTYPE html>

<? include '../includes/grupo_declare.php'; ?>

<html>
<head>

<style type="text/css">
    body{
		overflow-x:hidden;
	}
	
	.cloud
        {
            position:absolute;
            //z-index: -1;
            width:225px;
            overflow:hidden;
            text-align:center;
            background-color: #bcbcbc;
        }
		
	#container{
		width:1024px;
		height:500px;
		margin:0 auto;
		overflow:none;
	}
		
		

</style>

<script src="http://code.jquery.com/jquery-latest.js"></script>


<title>Grupo Pacific - Home</title>


<link rel="stylesheet" type="text/css" href="../styles/searchStyle.css" />
<link href="../styles/grupo_styles.css" rel="stylesheet" type="text/css"> 
</head>
<body>
	<header>
		<? include '../includes/grupo_header.php'; ?>
	</header>
	
	
	<section class="content-container">
		<div class="content-area">
                
		</div>
	</section>
	
	
<div id="container">
    <span id="spnCloudHolder"></span>

   
			<? 
				$projectssql = mysql_query("select ProjectID from Grupo_Project");
				while ($pic = mysql_fetch_array($projectssql))
					{
						$ProjectID = $pic[0];
						$projectPicture = mysql_query("select imgLocation from Grupo_ProjectPic where ProjectID = $ProjectID");
						while ($picLoc = mysql_fetch_array($projectPicture))
							$imgLoc = $picLoc[0];
						$bwThumb = "../includes/bwthumbnail.php?pic=../".$imgLoc."&amp;ht=180&amp;wd=215";
						$colorThumb = "../includes/thumbnail.php?pic=../".$imgLoc."&amp;ht=180&amp;wd=215";
					
				?>
               <div class="cloud">
               		<img src="<?=$bwThumb;?>" onmouseover="this.src='<?=$colorThumb;?>';Stop_Animate();" onmouseout="this.src='<?=$bwThumb;?>';Start_Animate();" alt="Project" />
                    
               </div>
                <?
				}
				?>
   </div>     
        <script type="text/javascript">
			
			$(document).ready(function() {         
            
            StartWindForClouds();
			
        });

        var cloudMaxWidth = 225;
		var totalSpeed = 500000;
		var cloudSpeed = totalSpeed/cloudMaxWidth;
		var cloudCounter = 0;
		var numOfClouds = 0;
		
        function StartWindForClouds() {
			
            $(".cloud").each(function(i) {
				numOfClouds++;
				//alert(numOfClouds);
                $(this).css("left", +((cloudMaxWidth*i)) + "px");
                AnimateCloud(this);
            });
        }

        function AnimateCloud(_obj) {
			cloudCounter++;
            
			//$(_obj).slideDown("fast");
			
            $(_obj).animate({ "left": -cloudMaxWidth + "px" }, ((numOfClouds*cloudSpeed)), "linear", function() {
			$(this).css("left", +(cloudMaxWidth*(numOfClouds-1)) + "px");
					new AnimateCloud(_obj);/*new AniateCloud(_obj);*/ });
		}
		
	function AnimateCloud2(_obj) {
		//$(_obj).slideDown("fast");
		$(_obj).animate({ "left": -cloudMaxWidth + "px" }, ((numOfClouds*cloudSpeed)), "linear", function() {
		$(this).css("left", +(cloudMaxWidth*(numOfClouds-1)) + "px");
		new AnimateCloud2(_obj);/*new AniateCloud(_obj);*/ });
	}
	
	function AnimateCloud3(_obj) {
			
		//$(_obj).slideDown("fast");
		var pos = $(_obj).position();
		
		var restartSpeed=((pos.left+cloudMaxWidth)/(cloudMaxWidth))*cloudSpeed;
		alert(restartSpeed);
		$(_obj).animate({ "left": -cloudMaxWidth + "px" }, ((restartSpeed)), "linear", function() {
		$(this).css("left", +(cloudMaxWidth*(numOfClouds-1)) + "px");
		new AnimateCloud2(_obj);/*new AniateCloud(_obj);*/ });
	}
        
	function Stop_Animate(){
		$(".cloud").stop(false,false);
	}
		
	function Start_Animate(){
		 
		 
		 $(".cloud").each(function(i) {
			
			//alert(numOfClouds);
			AnimateCloud3(this);
		});
		
	}
		
    </script>
    
  



</body>
</html>

