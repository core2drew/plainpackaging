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
	var isSBSClicked = false;
	var isTARClicked = false;
	var isMoreClicked = false;

	$('body').click(function(){
        resetAllDropDownMenu();
	});

	function resetAllDropDownMenu(){
        isSBSClicked = false;
        isTARClicked = false;
        isMoreClicked = false;
        $('.dc-step-by-step-cont').hide();
        $('.dc-reference-cont').hide();
        $('.dc-more-cont').hide();
        $('.dc-step-by-step-li').css('background-color','transparent');
        $('.dc-reference-li').css('background-color', 'transparent');
        $('.dc-more-li').css('background-color', 'transparent');
	}

	function resetDropDownSiblings(elem, content) {
        isSBSClicked = false;
        isTARClicked = false;
        isMoreClicked = false;
		elem.parent().siblings().css({
			'background-color':'transparent',
            'color':'#fff'
		});
        content.show();
        content.parent().siblings().children().not('.page-scroll.nav').hide();
	}

	$('.sidebar-nav a').click(function(e){
        var target = $( $(this).attr('href') );
		var offset = 100;
		var scrollTop = target.offset().top - offset;
        if(target.length) {
            e.preventDefault();
            $('html,body').animate({scrollTop: scrollTop}, 500)
		}
	});

	$('.navbar-nav .dc-step-by-step').click(function(e){
        e.stopPropagation();
        resetDropDownSiblings($(this), $('.dc-step-by-step-cont'));
        isSBSClicked = true;
    }).mouseenter(function() {
    	if(!isTARClicked && !isMoreClicked){
            $('.dc-step-by-step-cont').css('display','block');
		}
        $('.dc-step-by-step-li').css({
			'background-color':'rgb(204,204,204)',
            'color':'#000'
        });
	}).mouseleave(function(){
		if(!isSBSClicked) {
            $('.dc-step-by-step-cont').css('display','none');
            $('.dc-step-by-step-li').css('background-color','transparent');
            $(this).css('color','#fff');
            // console.log('step out');
		}
	});

	$('.navbar-nav .dc-reference').click(function(e){
        e.stopPropagation();
        resetDropDownSiblings($(this), $('.dc-reference-cont'));
        isTARClicked = true;
    }).mouseenter(function() {
        if(!isSBSClicked && !isMoreClicked) {
            $('.dc-reference-cont').css('display', 'block');
        }
        $('.dc-reference-li').css({
            'background-color':'rgb(204,204,204)',
            'color':'#000'
        });
	}).mouseleave(function(){
        if(!isTARClicked) {
            $('.dc-reference-cont').css('display', 'none');
            $('.dc-reference-li').css('background-color', 'transparent');
            $(this).css('color', '#fff');
        }
		// console.log('ref out');
	});

	$('.navbar-nav .dc-more').click(function(e){
        e.stopPropagation();
        resetDropDownSiblings($(this),  $('.dc-more-cont'));
        isMoreClicked = true;
    }).mouseenter(function() {
        if(!isSBSClicked && !isTARClicked) {
            $('.dc-more-cont').css('display', 'block');
        }
        $('.dc-more-li').css({
            'background-color':'rgb(204,204,204)',
            'color':'#000'
        });
	}).mouseleave(function(){
		if(!isMoreClicked) {
            $('.dc-more-cont').css('display', 'none');
            $('.dc-more-li').css('background-color', 'transparent');
            $(this).css('color', '#fff');
        }
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