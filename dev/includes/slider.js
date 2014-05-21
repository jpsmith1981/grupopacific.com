	$(document).ready(function() {         
            
        StartWindForClouds();
			
        });

        var cloudMaxWidth = 184;
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
			var lastElementPos = findLastElement();
			$(this).css("left", +(cloudMaxWidth+(lastElementPos)) + "px");
			new AnimateCloud(_obj);/*new AniateCloud(_obj);*/ });
		}
		
	function AnimateCloud2(_obj) {
		//$(_obj).slideDown("fast");
		$(_obj).animate({ "left": -cloudMaxWidth + "px" }, ((numOfClouds*cloudSpeed)), "linear", function() {
		var lastElementPos = findLastElement();
		$(this).css("left", +(cloudMaxWidth+(lastElementPos)) + "px");
		new AnimateCloud2(_obj);/*new AniateCloud(_obj);*/ });
	}
	
	function AnimateCloud3(_obj) {
			
		//$(_obj).slideDown("fast");
		var pos = $(_obj).position();
		
		
		var restartSpeed=((pos.left+cloudMaxWidth)/(cloudMaxWidth))*cloudSpeed;
		//alert(restartSpeed);
		
		
		
		$(_obj).animate({ "left": -cloudMaxWidth + "px" }, ((restartSpeed)), "linear", function() {
			var lastElementPos = findLastElement();
			$(this).css("left", +(cloudMaxWidth+(lastElementPos)) + "px");
			new AnimateCloud3(_obj);/*new AniateCloud(_obj);*/ });
	}
        
	function Stop_Animate(){
		$(".cloud").stop(false,false);
	}
	
	function findLastElement(){
		 var lastPos = 0;
		 $(".cloud").each(function(i){
				if($(this).position().left > lastPos)
					lastPos = $(this).position().left;
			});
		return lastPos;
	}
		
	function Start_Animate(){
		
		 
		 $(".cloud").each(function(i) {
			//alert(numOfClouds);
			AnimateCloud3(this);
		});
		
	}
		
