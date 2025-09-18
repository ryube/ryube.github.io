<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr_n.php"); ?>
<script type="text/javascript">
$(document).ready(function () {
	//setMinWidth();.
	var a = $('#text').text()
	log(a.length);
	var html = '<span class="num"><span class="img"></span></span>'
	for ( var i=0; i<a.length;  i++){
		$('#holder').append(html)
		switch(a[i]) {
			case '0' :
				pos = 0
				$(".img:eq("+i+")").animate({top:"-90px"}, 900, 'linear').removeAttr("style")
				break;
			case '1' :
				pos = -10
				$(".img:eq("+i+")").animate({top:"-90px"}, 900, 'linear', function({this.removeAttr("style")})).animate({top:''+pos+'px'}, 900, 'linear').delay(900);
				break;
			case '2' :
				animateNum(i, -20)
				break;
			case '3' :
				animateNum(i, -30)
				break;
			case '4' :
				animateNum(i, -40)
				break;
			case '5' :
				animateNum(i, -50)
				break;
			case '6' :
				animateNum(i, -60)
				break;
			case '7' :
				animateNum(i, -70)
				break;
			case '8' :
				animateNum(i, -80)
				break;
			case '9' :
				animateNum(i, -90)
				break;
			case '0' :
				animateNum(i, 0)
				break;
			case ',' :
				animateNum(i, -100)
				break;

		
		}
	};

	
	//animateTheBox();

});
	// function resets()
	// {
	//   $('.img').removeAttr("style");
	//   animateTheBox();
	// }
	// function animateTheBox(){
 //    	$(".img").animate({top:"-90px"}, 900, 'linear', resets);
	// }
	function animateNum(i, pos){

    	$(".img:eq("+i+")").animate({top:"-90px"}, 900, 'linear').removeAttr("style").stop().animate({top:''+pos+'px'}, 900, 'linear').delay(900);
	}




</script>
<style type="text/css">
	.num {display: inline-block; width: 10px; height: 10px; position: relative; overflow: hidden;}
	.num .img {display: block; width: 10px; height: 100px; position: absolute; left: 0; top: 0; background: url(test_num.png) no-repeat 0 0;}
</style>

<body>
	<div class="grower">x</div>
	<span id="text">123,1234</span>
	<span id="holder"></span>
	<span class="num"><span class="img"></span></span>
</body>
</html>
