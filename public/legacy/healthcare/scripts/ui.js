var pressClass = function() {
	$('.btn').mousedown(function(){
      $(this).addClass("active");
    }).mouseup(function(){
      $(this).removeClass('active');
    });

}

var setMinWidth = function() {
	var defaultMinWidth = parseInt($('.contents_width').css('min-width'))
	var leftWidth = $('#left').width();
	var optionLeftWidth = $('.contents_option_left').outerWidth();
	var optionRightWidth = $('.contents_option_right').outerWidth();
	var contentsMinWidth = optionLeftWidth + optionRightWidth + leftWidth + 50;/*50 = contents_option padding + contest_padding  */
	var wrapperMinWidth = contentsMinWidth + 40 /*40 = basic wrap margin */

	if(contentsMinWidth > defaultMinWidth){
		alert('set min-width')
		$('.contents_width, .header_width, .footer_width').css({'min-width' : contentsMinWidth});
		$('#wrapper').css({'min-width' : wrapperMinWidth});
	}
}

$(document).ready(function () {
	//setMinWidth();
	$( "#sortable" ).sortable({
		placeholder: "sort-landing-area",
		handle: ".sort-handle"
	});
	$( "#sortable" ).disableSelection();
		
	


	function variableHeight() {

		var docHeight = $('body').height()
		var headerHeihgt = $('#header').height();
		var footerHeihgt = $('#footer').height();
		var leftMenuHeight = $('#left').outerHeight();
		var contentsHeight = 0
		var target = $('.contents_padding')
		log('doc H = '+docHeight)
		log('head H = '+headerHeihgt)
		contentsHeight = docHeight - (headerHeihgt + footerHeihgt + 45)
		if(contentsHeight > leftMenuHeight){
			target.css("min-height", contentsHeight);
		}
	}
	variableHeight();
	$(window).bind("resize", function(){
		variableHeight()
	});


	var currentHeight = $('.contents_padding').height()
	
	$('.sub > a').click(function() {
		var contents = $('.contents_padding')
		var slideTarget = $(this).parent().find('.left_menu_sub');
		var liTarget = slideTarget.parent();
		var leftHeight = $('#left').outerHeight();
		var subHeight = slideTarget.height();
		var sumHeight = 568
		var contentsHeight = contents.height();
		

		if(liTarget.hasClass('on')){
			liTarget.removeClass('on')
			sumHeight = leftHeight - subHeight
			log('123123')
		} else {
			liTarget.addClass('on')
			sumHeight = leftHeight + subHeight
		};

		slideTarget.slideToggle();
		log('sum '+sumHeight)
		log('cont'+contentsHeight)
		if (sumHeight > contentsHeight) {
			currentHeight = contents.height()
			log('currentHeight ++' +currentHeight)
		};

		if (sumHeight < contentsHeight) {
			sumHeight = currentHeight
		};

		contents.animate({'min-height': sumHeight});
		return false;
	});

	$.fn.placeholder = function() {
	    if(typeof document.createElement("input").placeholder == 'undefined') {
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
	      }).blur().parents('form').submit(function() {
	        $(this).find('[placeholder]').each(function() {
	          var input = $(this);
	          if (input.val() == input.attr('placeholder')) {
	            input.val('');
	          }
	      })
	    });
	  }
	}
	$.fn.placeholder();
});