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



$('#news-pane').bind('mouseenter', function() {
	
	$('#news-pane').animate({left:0}, 1000);
	
});

$('#news-pane').bind('mouseleave', function() {
	
	$('#news-pane').animate({left: -250}, 1000);	
});


 });