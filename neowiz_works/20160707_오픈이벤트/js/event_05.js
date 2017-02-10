
///////////////////////////////////////////////////////////////////////////////
function checkHash(){
	setTimeout(function(){reloadUi();}, 25);
};

var docmode = document.documentMode; 
if ('onhashchange' in window && (docmode === undefined || docmode > 7 )) {
	window.onhashchange = checkHash;
} 
else {
	window.onunload = function() {
		setTimeout(checkHash, 25);
	};
}

////////////////////////////////////////////////////////////////////////////////
function reloadUi() {
	scrollMove();
	layerBtn();
	pmGnb();
};

//document Ready
$(function(){
	reloadUi();
	
	// Scroll Event
	var gnbEl = $('.wrap_pm_gnb');
	
	var gnbOffSet = gnbEl.offset();
	if(gnbEl.length != 0){
		$(window).bind('scroll',function(){
			wsTop = $(this).scrollTop();
			if($('.scroll_value').length != 0){$('.scroll_value').text(wsTop);}
			if (gnbOffSet.top < wsTop) {
				gnbEl.addClass('fixed')
			} else {
				gnbEl.removeClass('fixed')
			}
			
		});
	}

	// ajax reload
	if (typeof pmangpub !== 'undefined' && pmangpub.setOnloadView) {
		pmangpub.setOnloadView(function() {
			reloadUi();
		});
	}
});
