/* Author: James Dennis */

$(document).ready(function(){
	
//fade access submenu dropdown	
	$('#access ul:first').superfish();	
	
//fade body cotent when hovering over #branding
	$("#branding .navTools").hover(
		function(){
			maskOverlay();
		},
		function(){
			$('#modalMask').fadeTo("slow",0, 
			function() {
        		$('#modalMask').hide();
			});
    	}
	);

//Get the screen height and width
	function maskOverlay(){
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();		
	//Set heigth and width to mask to fill up the whole screen
		$('#modalMask').css({'width':maskWidth,'height':maskHeight});
	//transition effect			
		$('#modalMask').fadeTo(800,0.7);
	};
	
// animate scroll to top of window
	$("#back-top").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		$('#back-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

// placeholder text
	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});


// Equal Height
	function equalHeight(){
	 var max = 0;  
	 $(".eheight").each(function(){  
		if ($(this).height() > max)  
			 max = $(this).height();  
		});  
		$("section#content").height(max);
		};
			
	equalHeight();
	
// Equal Height
	function fEqualHeight(){
	 var max = 0;  
	 $(".fEheight").each(function(){  
		if ($(this).height() > max)  
			 max = $(this).height();  
		});  
		$(".fEheight").height(max);
		};
			
	fEqualHeight();

});