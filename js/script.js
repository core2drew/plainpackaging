$(window).resize(function() {
	var path = $(this);
	var contW = path.width();
	if(contW >= 751){
		document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
	}else{
		document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
	}
});
$(document).ready(function(){
	$('.sidebar-nav a').click(function(e){
        var target = $( $(this).attr('href') );
		var offset = 100;
		var scrollTop = target.offset().top - offset
        if(target.length) {
            e.preventDefault();
            $('html,body').animate({scrollTop: scrollTop}, 500)
		}
	});

	$('.dc-step-by-step').mouseenter(function() {
		$('.dc-step-by-step-cont').css('display','block');
		$('.dc-step-by-step-li').css('background-color','rgb(204,204,204)');
		$('.dc-step-by-step').css('color','#000');
		// console.log('step in');
	}).mouseleave(function(){
		$('.dc-step-by-step-cont').css('display','none');
		$('.dc-step-by-step-li').css('background-color','');
		$('.dc-step-by-step').css('color','#fff');
		// console.log('step out');
	});

	$('.dc-reference').mouseenter(function() {
		$('.dc-reference-cont').css('display','block');
		$('.dc-reference-li').css('background-color','rgb(204,204,204)');
		$('.dc-reference').css('color','#000');
		// console.log('ref in');
	}).mouseleave(function(){
		$('.dc-reference-cont').css('display','none');
		$('.dc-reference-li').css('background-color','');
		$('.dc-reference').css('color','#fff');
		// console.log('ref out');
	});

	$('.dc-more').mouseenter(function() {
		$('.dc-more-cont').css('display','block');
		$('.dc-more-li').css('background-color','rgb(204,204,204)');
		$('.dc-more').css('color','#000');
		console.log('ref in');
	}).mouseleave(function(){
		$('.dc-more-cont').css('display','none');
		$('.dc-more-li').css('background-color','');
		$('.dc-more').css('color','#fff');
		console.log('ref out');
	});


	$('a#explore-the-guides').click(function(){
		$('.dc-step-by-step-cont').css('display','block');
		$('.dc-step-by-step-li').css('background-color','rgb(204,204,204)');
		$('.dc-step-by-step').css('color','#000');
	});

	$('a#tools-and-resources').click(function(){
		$('.dc-reference-cont').css('display','block');
		$('.dc-reference-li').css('background-color','rgb(204,204,204)');
		$('.dc-reference').css('color','#000');
	});

});