

$(window).scroll(function(event){
	
	var y = $(this).scrollTop();
	
	if (y >= 100) {
		$('.navHorizontalTransparence').addClass('fixed');
		$('.navHorizontalNonIndex').addClass('fixed');
		$('.navHorizontalGagnerCompetivite').addClass('fixed');
		$('.navHorizontalDemarcheCitoyenne').addClass('fixed');
		$('.navHorizontalContact').addClass('fixed');
		$('.navHorizontalOuvrirDonnees').addClass('fixed');
	}else{
		$('.navHorizontalTransparence').removeClass('fixed');
		$('.navHorizontalNonIndex').removeClass('fixed');
		$('.navHorizontalGagnerCompetivite').removeClass('fixed');
		$('.navHorizontalDemarcheCitoyenne').removeClass('fixed');
		$('.navHorizontalContact').removeClass('fixed');
		$('.navHorizontalOuvrirDonnees').removeClass('fixed');
	}
});

