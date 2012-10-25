$(function() {


 $('.gallery-thumbnail').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.addClass('active')
					})
					.bind('mouseleave',function(){
					var $elem = $(this);
					$elem.removeClass('active')

					});

 $('#white-button').click(function (){
 
    			    		$('body').addClass('white-back');
    			    		$.post("http://mg.digidol-media.com/wp-content/themes/digidoltheme/getsession.php", { bgcolor: "white-back"});
    	});
  $('#black-button').click(function (){
 
    			    		$('body').removeClass('white-back');
    			    		$.post("http://mg.digidol-media.com/wp-content/themes/digidoltheme/getsession.php", { bgcolor: "black-back"});
    	});


$(".icon-bar a").hover(
  function () {
    $(this).addClass("active");
  }, 
  function () {
    $(this).removeClass("active");
  }
);


//$('#news-pane').animate({right: -275}, 1000);

$('#news-pane-button').toggle(
	function() 
	{
	
	$('#news-pane').animate({right: 0}, 1000);
	$('#news-pane-button').animate({right: -60}, 1000);
		
	},
	function()
	{
		$('#news-pane').animate({right: -300}, 1000);
		$('#news-pane-button').animate({right: -260}, 1000);
	
	});


/*
$('#close-pane').bind('click', function() {
	
	$('#news-pane').animate({right: -300}, 1000);
	$('#news-pane-button').animate({right: -260}, 1000);	
});
*/



 });