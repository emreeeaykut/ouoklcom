$(window).load(function(){
	preloaderPage();
}); 

function preloaderPage(){
	
}


(function($){
	$(function(){


		$(window).scroll(function(){ 
        	var text = $(window).scrollTop();
        	var m_width = $(document).width(); 

        	if (m_width <= 991) {
	        	if (text >= 1) {
	        		$('#header').css({'position':'fixed','top':'0', 'margin-top':'0'});
	        		$('#header .logo a').css({'border-bottom':'4px solid #3b10f5','padding-bottom':'10px'});
	        		$('#header .nav-right').css({'border-bottom':'4px solid #424151','padding-bottom':'58px'});
	        		// $('#header').animate({marginTop: 0},'100');
	        	}
	        	else if (text < 1) {
	        		$('#header').css({'position':'relative', 'margin-top':'0px'});
	        		$('#header .logo a').css({'border-bottom':'7px solid #3b10f5','padding-bottom':'7px'});
	        		$('#header .nav-right').css({'border-bottom':'7px solid #424151','padding-bottom':'55px'});
	        	}
	        }

        });


		$(document).ready(function(){
			
			/*menu js start*/
			$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
				$(this).toggleClass('open');
			});
			/*menu js finish*/

			
			$('#nav-icon1').toggle(
				function(){
					$('#bg,#menu').slideToggle("slow");
					$('#nav-icon1 span').css('background','#fff');
					$('#header').css('background','#3b10f5');
					$('#header .logo a').css({'color':'#fff', 'border-bottom':'7px solid #fff'});
					$('#header .nav-right .search').css('display','none');
					$('#header .nav-right').css('border-bottom','7px solid #fff');
					// $('#header .logo a').attr('src','http://ouokl.com/assets/img/logo-white.png');
					// $('#header .nav-right').animate({'background':'#fff'});
				},
				function(){
					// $('#bg').fadeOut();
					$('#bg,#menu').slideToggle("slow");
					$('#nav-icon1 span').css('background','#3b10f5');
					$('#header').css('background','#eaeaea');
					$('#header .logo a').css({'color':'#4a4a4a', 'border-bottom':'7px solid #3b10f5'});
					$('#header .nav-right .search').css('display','block');
					$('#header .nav-right').css('border-bottom','7px solid #424151');
					$('#header .logo a').attr('src','http://ouokl.com/assets/img/logo1.png');
					// $('#header .nav-right').animate({'width':'94px'});
			});	
				
			

		});	

	});
})(jQuery);

		