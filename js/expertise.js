$(document).ready(function(){
	$("#softdev").click(function(){
		 document.getElementById("modalSoftDev").style.display = "flex";
	});

	$("#uiux").click(function(){
		 document.getElementById("modalSoftDev").style.display = "flex";
	});

	$("#troubleshooting").click(function(){
		 document.getElementById("modalSoftDev").style.display = "flex";
	});
});


//MODAL SOFTDEV//
$(function(){
	$("#softdev").click(function(){
		 document.getElementById("modalSoftDev").style.display = "flex";
	});

	$(".btnX").click(function(){
		 document.getElementById("modalSoftDev").style.display = "none";
	});
});


//MODAL UIUX//
$(function(){
	$("#uiux").click(function(){
		 document.getElementById("modalUIUX").style.display = "flex";
	});

	$(".btnX").click(function(){
		 document.getElementById("modalUIUX").style.display = "none";
	});
});


//MODAL UIUX//
$(function(){
	$("#troubleshooting").click(function(){
		 var modal = document.getElementById("modalTroubleshooting").style.display = "flex";
		
});

	$(".btnX").click(function(){
		 document.getElementById("modalTroubleshooting").style.display = "none";
	});
});

