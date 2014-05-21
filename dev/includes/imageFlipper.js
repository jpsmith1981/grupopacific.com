		
			$(document).ready(function(e) {
            
						
			var groupWidth = 0;
			
			$(".mediaGroup").each(function(i) {
				$mediaGroup = $(this),
				$mediaslides = [],
				$mediaBtns = [],
				mediaactive = null;
				
				if(($(this).find('.mediaPic').size())>1)
				{
					
					var $counter = 0;
					
					//$mediaslideshow.append('<div class="btnPanel"></div>');
					
					$(this).find('.mediaPic').each(function(j){
						$counter++;
						var $mediathisSlide = $(this);
						$mediathisSlide.wrap("<a class='show-panel'></a>");
						$mediaslides.push( $mediathisSlide );
						$mediathisSlide.addClass($counter.toString());
						if(parseInt(groupWidth)<parseInt($mediathisSlide.width()))
							groupWidth=$mediathisSlide.width();
						$mediathisSlide.hide();
						$mediaGroup.find('.btnPanel').append('<div class="photoBtn new" onclick="switchPics(this)">'+$counter+'</div>');
						$mediaBtns.push($('.new'));
						$('.new').addClass('btn'+$counter.toString()).removeClass('new');
						
					});
					
						
						
					mediaactive = $mediaslides.length -1;
					
					
					$mediaslides[mediaactive].show().addClass('active').wrap("<a class='show-panel'></a>");
					groupWidth=(parseInt(groupWidth)+20).toString();
					$(this).width(groupWidth);
					$mediaBtns[mediaactive].fadeTo(500,.20);/*.addClass('active')*/;
				}
				
				else{
					$(this).find('.mediaPic').wrap("<a class='show-panel'></a>");
					if(groupWidth==0)
						groupWidth=($(this).find('.mediaPic').width());
				}
				
				
					
				
			
			
			
			});
			
			
			
			});
			
			function switchPics(_obj)
			{
				var slide2Show = ($(_obj).html()).toString();
				var mediaGroup = ($(_obj).parent().parent().find('.'+slide2Show));
				var slide2hide = ($(_obj).parent().parent().find('.active'));
				
				//$(_obj).parent().find('.photoBtn').hide();
				
				$(_obj).parent().find('.photoBtn').each(function(h){
					var slideCount = ($(this).html()).toString();
					if(slideCount==slide2Show)
					{
						$(this).fadeTo(500,.20);
					}
					else
					{
						$(this).fadeTo(500,1);
					}
				});
				slide2hide.slideToggle().removeClass('active').removeClass('show-panel');
						
				
				mediaGroup.slideToggle().addClass('active').wrap("<a class='show-panel'></a>");
				
			}
			
			$(document).ready(function(){
 				$("a.show-panel").click(function(){
	
				 var currentImage = ($(this).find("img").attr('alt'));
				 $(".lightbox-Image").html("<img src='../includes/thumbnail.php?pic="+currentImage+"&ht=400&wd=1024' />");
				$(".lightbox, .lightbox-panel").fadeIn(300);
				$(".content-container").fadeTo(250,.75);
			 })
			 $("a.close-panel").click(function(){
				 $(".lightbox, .lightbox-panel").fadeOut(300);
				 $(".content-container").fadeTo(250,1);
			 })
			})
	// JavaScript Document