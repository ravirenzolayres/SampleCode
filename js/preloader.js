$(document).ready(function(){
	$('main').hide();

	$(window).on({
		load:function(){
			$('.preloader').hide();
			$('main').show();
		}
	})
})