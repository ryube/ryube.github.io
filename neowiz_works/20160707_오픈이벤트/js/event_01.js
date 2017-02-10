
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



var puzzelQueset = {
	elem : {},
	init : function(answerArray){
		puzzelQueset.elem.$table = $('.table'),
		puzzelQueset.elem.$cursor = $('#today_cursor'),
		puzzelQueset.elem.$input = $('#input_answer'),
		puzzelQueset.elem.$question = $('#question'),
		puzzelQueset.elem.words = "",
		puzzelQueset.userAnswer = [],
		puzzelQueset.endDay = puzzleData.length-1,
		isPuzzleToday > puzzelQueset.endDay ? puzzelQueset.elem.today = puzzelQueset.endDay : puzzelQueset.elem.today = isPuzzleToday;
		//이전 입력했던 답안
		for (var i = 0, l = puzzelQueset.elem.today; i <= l; i++) {
			if(!(puzzleUserData[i].answer === "")){
				puzzelQueset.userAnswer.push(i);
			}
		}
		// 이전 퍼즐 셋팅
		puzzelQueset.setup(puzzelQueset.userAnswer);

		//문제 셋팅
		puzzelQueset.questionInsert(puzzelQueset.elem.today);
		//날짜 이동
		$('#btn_qprev').off().on('click', function(e){
			e.preventDefault();
			puzzelQueset.moveClcik(e);
			if(puzzelQueset.elem.today>0){
				puzzelQueset.elem.today--;
			} else {
				puzzelQueset.moveLimit(e);
				return false;
			}
			puzzelQueset.questionInsert(puzzelQueset.elem.today);
		});
		$('#btn_qnext').off().on('click', function(e){
			e.preventDefault();
			puzzelQueset.moveClcik(e);
			if(puzzelQueset.endDay > puzzelQueset.elem.today && isPuzzleToday > puzzelQueset.elem.today){
				puzzelQueset.elem.today++;
			} else {
				puzzelQueset.moveLimit(e);
				return false;
			}
			puzzelQueset.questionInsert(puzzelQueset.elem.today);
		});
		//수정
		$('.btn_modi').off().on('click', function(e){
			e.preventDefault();
			puzzelQueset.modiClcik(e);
			puzzelQueset.elem.$input.attr('readonly', false);
		});



		puzzelQueset.elem.$input.off().on({
			keydown : puzzelQueset.onKeyDown,
			keyup : function(e){
				if(e.keyCode == 13){
				 	
					puzzelQueset.onEnter(e);
				}
			}
		});

		$(document).on('keyup',function(e){
			if(e.keyCode == 37){
				$('#btn_qprev').click();
			}
			if(e.keyCode == 39){
				$('#btn_qnext').click();	
			}
			if(e.keyCode == 13){
				puzzelQueset.elem.$input.focus();
			}
		});

		$('#btn_submit').off().on('click', function(e){
			e.preventDefault();
			puzzelQueset.onEnter(e);
		});
		
	},
	wordPosition : function(x){
		var left = parseInt(puzzleData[x].pos%14) == 0 ? 14 : parseInt(puzzleData[x].pos%14), //left
			top = parseInt(puzzleData[x].pos/14), //top
			wordSize = puzzleData[x].aspect === "hori" ? "w" : "h";
			left = (left-1)*41;
			top = top*41;
			wordSize += puzzleData[x].size;
		return {left:left, top:top, wordSize:wordSize};

	},
	wordInsert : function(x){
		var pos = puzzelQueset.wordPosition(x),
			ansArray = puzzleUserData[x].answer.split(''),
			ans = "";
			for (var i2 = 0, l2 = ansArray.length; i2 <= l2-1; i2++) {
				ans += '<i>'+ansArray[i2]+'</i>';
			}
			return '<span data-index="'+puzzleData[x].idx+'" class="'+pos.wordSize+'" style="left:'+pos.left+'px;top:'+pos.top+'px; background-position:'+-(pos.left)+'px '+pos.top+'px; transition-delay:.5s;">'+ans+'</span>';
	},
	questionInsert : function(today){
		var	t = today,
			d = puzzleData[t].today.d.toString().split(''),
			month = puzzleData[t].today.m === 12 ?  '<em class="n1"></em><em class="n2"></em>':'<em class="n0"></em><em class="n1"></em>',
			days = puzzleData[t].today.d < 10 ?  '<em class="n0"></em><em class="n'+puzzleData[t].today.d+'"></em>':'<em class="n'+d[0]+'"></em><em class="n'+d[1]+'"></em>',
			aspect = puzzleData[t].aspect === "hori" ?  "가로": "세로",
			pos = puzzelQueset.wordPosition(today);
			
		var qHtml = '<div class="day">'+
						'<span class="m">'+
							month+		
						'</span>'+
						'<span class="d">'+
							days+
						'</span>'+
						'<span class="dt">'+
							'<em class="wt'+puzzleData[t].today.dt+'"></em>'+
						'</span>'+
					'</div>'+
					'<div class="q">'+
						'<span class="a">'+aspect+' '+puzzleData[t].anum+' 문제</span>'+
						'<p class="txt">'+puzzleData[t].q+'</p>'+
						'<span class="hint">'+puzzleData[t].hint+'</span>'+
					'</div>';
		puzzelQueset.elem.$question.html(qHtml);
		puzzelQueset.elem.$cursor.css({left: pos.left-3, top: pos.top-3}).attr('class', 'today_cursor '+pos.wordSize);
		if(puzzleUserData[t].answer === ""){
			puzzelQueset.elem.$input.val('');
			puzzelQueset.elem.$input.attr('readonly', false);
		} else {
			puzzelQueset.elem.$input.val(puzzleUserData[t].answer);
			puzzelQueset.elem.$input.attr('readonly', true);
		}

	},
	setup : function(answerArray){
		for (var i = 0, l = answerArray.length; i <= l-1; i++) {
			var x = puzzelQueset.userAnswer[i];
			puzzelQueset.elem.words += puzzelQueset.wordInsert(x);
		}
		puzzelQueset.elem.$table.append(puzzelQueset.elem.words);
	},
	update : function(x){
		$('span[data-index='+x+']').remove();
		puzzleUserData[x].answer = puzzelQueset.elem.$input.val();
		puzzelQueset.elem.$table.append(puzzelQueset.wordInsert(x));
	}
};

