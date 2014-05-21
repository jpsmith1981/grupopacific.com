		height:500px;
			margin:0 auto;
			overflow:none;
		}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>

<title>Grupo Pacific - Home</title>


<link rel="stylesheet" type="text/css" href="styles/searchStyle.css" />
<link href="styles/grupo_styles.css" rel="stylesheet" type="text/css"> 
</head>
<body>
	<header>
		<?php include 'http://www.thecodemonkey.biz/dev/grupo/site/includes/grupo_header.php'; ?>
	</header>
	
	
	<section class="content-container">
		<div class="content-area">
		</div>
	</section>
	
	
<div id="container">
    <span id="spnCloudHolder"></span>

    <script type="text/javascript">
        $(document).ready(function() {
            for (var i = 0; i < 10; ++i) {
                $("#spnCloudHolder").append("<img src=\"http://static.jquery.com/files/rocker/images/logo_jquery_215x53.gif\" class=\"cloud\" />");
            }
            StartWindForClouds();
        });

        var cloudMaxWidth = 215;
        function StartWindForClouds() {
            $(".cloud").each(function(i) {
                $(this).css("left", +( screen.width + (cloudMaxWidth*i)) + "px").css("top", +10 + "px");
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
            $(_obj).animate({ "left": (parseInt(newLeft) -500) + "px" }, (18000+(i*1500)), "linear", function() {
		i=0;
		$(this).css("left", +( screen.width + (cloudMaxWidth*i)) + "px").css("top", +10 + "px");
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
