
if(ytScript === false){ytScriptFire();};

// Bless OST Player
var blOstPlayer = {},
	$blPlayerWapper,
	$blPlayer,
	$blMusic,
	$blMusicTitle,
	$blBar,
	$blCurrTime,
	$blRuntime,
	$blPlayBtn,
	$blMuteBtn,
	$blMusicLink,
	blMusicIndex,
	timeTextItv,
	sliderItv,
	musicDuration,
	musciCurrTime;


blOstPlayer.vars = {
	'musicCode' : [],
	'musicTitle' : [],
	'ytPlayList' : "",
	'firstVideo' : null
}

blOstPlayer.progress = function(idx) {
	musicDuration = player.getDuration();
	var	runTime = secondsToTime(musicDuration);
	
	$blMusicTitle.text(blOstPlayer.vars.musicTitle[idx]);
	$blMusicLink.text(player.getVideoUrl()).attr('href', player.getVideoUrl());
	//총 플레이 타임
	$blRuntime.text(runTime.m+':'+runTime.s)
	$blBar.slider({	range: "min", min: 0, max: musicDuration});
	blOstPlayer.playTime();
	blOstPlayer.sliderControl();
}

blOstPlayer.playTime = function(){
	// 현재 플레이 타임
	if(!timeTextItv && player.getPlayerState() == 1){
		clearInterval(timeTextItv);
		timeTextItv = setInterval(function(){
			musciCurrTime = player.getCurrentTime();
			var d = player.getDuration();
			var c = secondsToTime(musciCurrTime);
			$blCurrTime.text(c.m+':'+c.s);
		}, 200);
	}
}

blOstPlayer.sliderControl = function(){
	if(player.getPlayerState() == 1){
		clearInterval(sliderItv);
		sliderItv = setInterval(function(){
			$blBar.slider({value: musciCurrTime});
		}, 200);
	}
}

blOstPlayer.buttonEvent = function(){
	$blPlayBtn.on('click', function(){
		$($blMusic[player.getPlaylistIndex()]).addClass('playing');

		if($(this).hasClass('on')){
			$(this).removeClass('on');
			player.pauseVideo();
		} else {
			$(this).addClass('on');
			player.playVideo();
		}
		return false;
	})

	$blMuteBtn.on('click', function(){
		if($(this).hasClass('off')){
			$(this).removeClass('off');
			player.unMute();
		} else {
			$(this).addClass('off');
			player.mute();
		}
		return false;
	})

	$blMusic.on('click', function(){
		blMusicIndex = $(this).find('.num').text()-1;
		player.playVideoAt(blMusicIndex);
		$blMusic.removeClass('playing');
		$(this).addClass('playing');
		$blPlayBtn.addClass('on');
		return false;
	})
}

blOstPlayer.init = function() {
	$blPlayerWapper = $('.tab_content.on')
	$blMusic = $blPlayerWapper.find('.btn_music'),
	$blBar = $blPlayerWapper.find('.bar_slider'),
	$blCurrTime = $blPlayerWapper.find('.currtime'),
	$blRuntime = $blPlayerWapper.find('.runtime'),
	$blPlayBtn = $blPlayerWapper.find('.btn_play'),
	$blMuteBtn = $blPlayerWapper.find('.btn_sound'),
	$blMusicTitle = $blPlayerWapper.find('.ost_info > .tl');
	$blMusicLink = $blPlayerWapper.find('.btn_yt_link');

	//list up
	$blMusic.each(function(){
		blOstPlayer.vars.musicCode.push($(this).attr('yt-code'));
		blOstPlayer.vars.musicTitle.push($(this).find('span.tl').text());
	})
	blOstPlayer.vars.firstVideo = blOstPlayer.vars.musicCode[0]
	for (var i = 0, videoLeng = blOstPlayer.vars.musicCode.length; i<videoLeng; i++) {
		if(blOstPlayer.vars.firstVideo != blOstPlayer.vars.musicCode[i]){
			blOstPlayer.vars.ytPlayList += blOstPlayer.vars.musicCode[i]+',';
		}
	};

	//player
	player = new YT.Player('ytplayer', {
	height: '224',
	width: '221',
	videoId: blOstPlayer.vars.firstVideo,
	events: {
		'onReady': onPlayerReady,
		'onStateChange': onPlayerStateChange
	},
		playerVars : {
			autoplay:'0',
			controls:'0',
			modestbranding:'1',
			showinfo:'0',
			rel:'0',
			loop:'0',
			fs:'0',
			playlist: blOstPlayer.vars.ytPlayList,
			listType:'playlist',
			disablekb:'1',
			wmode:'transparent'
		}
	});

	//$.getScript("http://file.pmang.kr/javascript/lib/jq/jquery-ui-1.9.2.min.js", function() {
	$.ajax( {url:"http://file.pmang.kr/javascript/lib/jq/jquery-ui-1.9.2.min.js", dataType:"script", cache:true, success: function() {
		if ( $.fn.slider ) {
			$('input.bar_value').val('');
			$blBar.slider({
				range: "min",
				value: 0,
				create: function( event, ui ) {
				},
				slide: function(event, ui) {
				},
				start: function( event, ui ) {
					clearInterval(sliderItv);
				},
				stop: function( event, ui ) {
					player.seekTo(ui.value)
					blOstPlayer.sliderControl();

				}
			}).find('a').bind('focus', function() { this.blur(); });
		}
	} });

}

function secondsToTime(secs){
	var hours = Math.floor(secs / (60 * 60)),
		divisor_for_minutes = secs % (60 * 60),
		minutes = Math.floor(divisor_for_minutes / 60),
		divisor_for_seconds = divisor_for_minutes % 60,
		seconds = Math.ceil(divisor_for_seconds);
		if(seconds<10){
			seconds = "0"+seconds;
		}
		if(minutes<10){
			minutes = "0"+minutes;
		}
	var obj = {
			"h": hours,
			"m": minutes,
			"s": seconds
		};
	return obj;
}

function onYouTubeIframeAPIReady(){
	if($('body').hasClass('bless_sub')){blOstPlayer.init();};
	//if($('body').hasClass('bless_main')){mainYtSet();};
};

function onPlayerReady(event) {
	event.target.setVolume(100);
	event.target.setPlaybackRate(1);
	blOstPlayer.progress(player.getPlaylistIndex());
	blOstPlayer.buttonEvent();
};

function onPlayerStateChange(event) {
	if(event.data == 1){
		blOstPlayer.progress(player.getPlaylistIndex());
		$blPlayBtn.addClass('on');
		$blMusic.removeClass('playing');
		$($blMusic[player.getPlaylistIndex()]).addClass('playing');
	}
};

