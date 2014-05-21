<!DOCTYPE html>

<?php include '../includes/grupo_declare.php'; ?>

<html>
<head>

<style type="text/css">
        .cloud
        {
            position: absolute;
            z-index: -1;
            display: none;
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>

<title>Grupo Pacific - Home</title>


<link rel="stylesheet" type="text/css" href="../styles/searchStyle.css" />
<link href="../styles/grupo_styles.css" rel="stylesheet" type="text/css"> 
</head>
<body>
	<header>
		<?php include '../includes/grupo_header.php'; ?>
	</header>
	
	
	<section class="content-container">
		<div class="content-area">
		</div>
	</section>
	
	
<div id="container">
    <span id="spnCloudHolder"></span>

    <script type="text/javascript">
        $(document).ready(function() {
			<?php 
				$projectssql = mysql_query("select ProjectID from Grupo_Project");
				while ($pic = mysql_fetch_array($projectssql))
					{
						$ProjectID = $pic[0];
						$projectPicture = mysql_query("select imgLocation from Grupo_ProjectPic where ProjectID = $ProjectID");
						while ($picLoc = mysql_fetch_array($projectPicture))
							$imgLoc = $picLoc[0];
					
				?>
                $("#spnCloudHolder").append("<div class=\"cloud\"><img src=\"../includes/imagebw.php?pic=../<?php echo $imgLoc;?>&ht=180&wd=215\"  /></div>");
                <?php
				}
				?>
            
                
            
            StartWindForClouds();
        });

        var cloudMaxWidth = 225;
        function StartWindForClouds() {
            $(".cloud").each(function(i) {
                $(this).css("left", +( screen.width + (cloudMaxWidth*i)) + "px");
                AniateCloud(this,i);
            });
        }

        function AniateCloud(_obj,i) {
            var tmpLeft = $(_obj).css("left").replace("px", "");
            var docWidth = screen.width;
			var newLeft = "15";
            if (tmpLeft > (docWidth / 2)) {
                //newLeft = 15;
            }
            else {
                //newLeft = docWidth - cloudMaxWidth;
				
		    }
			$(_obj).slideDown("slow");
            $(_obj).animate({ "left": -225 + "px" }, (28000+(i*2500)), "linear", function() {
		i=0;
		$(this).css("left", +( screen.width + (cloudMaxWidth*i)) + "px");
                new AniateCloud(_obj,i);/*new AniateCloud(_obj);*/ });
        }
        function RandomNumber(min, max) {
            var rnd = 5;//Math.floor((max - (min - 1)) * Math.random()) + min;
            return rnd;
        }
    </script>
</div>

</body>
</html>
