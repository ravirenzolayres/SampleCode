 $(function () {
        $('a[href*="#"]').on('click', function (e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 1000, 'linear');
        });
});
// RRGO LOGO SECTION //
$(function(){
    $('.navbar-nav li').click(function(){
        $('.navbar-nav li').removeClass('active');
        $(this).addClass('active');
    });
});

// HOME SECTION //
$(function(){
	$(window).scroll(function(){
		if ($(document).scrollTop() > 0){
			$('.navbar-nav li').removeClass('active');
			$('#navHome').addClass('active');
			$('nav').removeClass('navbar-transparent');
		}
		else{
			$('nav').addClass('navbar-transparent');
		}
	});
});

// EXPERTISE SECTION //
$(function(){
	$(window).scroll(function(){
		if ($(document).scrollTop() > 615){
			$('.navbar-nav li').removeClass('active');
			$('#navAbout').addClass('active');
		}
	});
});

// PROJECT SECTION //
$(function(){
	$(window).scroll(function(){
		if($(document).scrollTop() > 1360){
			$('.navbar-nav li').removeClass('active');
			$('#navProjects').addClass('active');
		}	
	});
});

// CONTACT SECTION //
$(function(){
	$(window).scroll(function(){
		if($(document).scrollTop() > 2290){
			$('.navbar-nav li').removeClass('active');
			$('#navContact').addClass('active');
		}	
	});
});

