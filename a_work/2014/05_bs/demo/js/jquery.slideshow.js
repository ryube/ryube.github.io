/*
	jquery.slideshow.js
	v1.5
	mailto : ji9@neowiz.com
**********************************************************/

$.fn.slideshow = function(options){
	var settings = $.extend({
		list			: 'list',
		nav				: 'slide_nav',
		prev			: 'btn_prev',
		next			: 'btn_next',
		item			: 'node', // li prefix class
		active			: 'on', // active class
		focus			: 'click', // click, hover, focus
		effect			: 'fade', // slide, fade, none
		easing			: 'easeOutCubic',
		start			: 1,
		speed			: 300,
		time			: 400000,
		display			: 1,
		control			: true, // prev, next
		reverse			: false,
		xml				: null // if get xml data
	}, options);

	$.ndl = [];
	return this.each(function(er){
		$.ndl[er] = $.ndl[er] || {
			selector		: $(this),
			init			: function(){
								$($.ndl[er].selector)
								.append('<div class="'+settings.list+'"><ul /></div>')
								.append('<span class="'+settings.nav+'" />');
							},
			control			: function(){
								if(settings.control==true) {
									$($.ndl[er].selector).prepend('<a class="'+settings.prev+'"/><a class="'+settings.next+'"/>');
								};
							},
			ring			: function(){
								this.li().each(function(idx){
									$(this).addClass(settings.item+(idx+1));
								});
								$($.ndl[er].selector).find('.'+settings.nav+' a').each(function(idx){
									$(this).addClass(settings.item+(idx+1));
								});
							},
			print			: function(n,i1,u,t){
								this.n = n, this.i1 = i1, this.u = u, this.t = t,
								this.append = function(){
									$('<li><a href="'+this.u+'" target="'+this.t+'"><img src="'+this.i1+'" alt="" /></a></li>')
										.appendTo($($.ndl[er].selector).find('div.'+settings.list+' ul'));
									$('<a><span>'+(this.n+1)+'</span></a>')
										.appendTo($($.ndl[er].selector).find('span.'+settings.nav));
								};
							},
			parse			: function(xml){
								this.init();
								this.control();
								$.each(xml,function(i,b) {
									var node = new $.ndl[er].print(i, b.m_img, b.url, b.target);
									node.append();
								});
								this.ring();
								this.play();
							},
			extend			: function(option){
								$.extend(settings, option);
							},
			div				: function(){ return $($.ndl[er].selector).find('div.'+settings.list); },
			width			: function(){ return $.ndl[er].div().find('li').eq(0).width(); },
			height			: function(){ return $.ndl[er].div().find('li').eq(0).height(); },
			ul				: function(){ return $.ndl[er].div().find('ul'); },
			li				: function(){ return $.ndl[er].div().find('li'); },
			total			: function(){ return $.ndl[er].li().length; },
			clone			: function(){ return settings.display-1; },
			slide			: function(){
								var move = this.width()*(settings.start-1);
								$.ndl[er].ul().stop().animate({left:-move},1000,settings.easing);
							},
			fade			: function(){
								var move = $.ndl[er].width()*(settings.start-1);
								$.ndl[er].ul().hide().css('left',-move).stop().fadeIn(500,settings.easing,function(){$(this).css('opacity',1);});
							},
			none			: function(){
								var move = this.width()*(settings.start-1);
								$.ndl[er].ul().stop().css('left',-move);
							},
			action			: function(dir){
								if(dir=='prev') {
									settings.start -= 1;
									if(settings.start<=0) { 
										settings.start = $.ndl[er].total()-($.ndl[er].clone()); 
									};
									$.ndl[er].eq = settings.start-1;
								} else if(dir=='next') { 
									settings.start += 1;
									if(settings.start>$.ndl[er].total()-$.ndl[er].clone()) { 
										settings.start = 1; 
									};
								};
								eval('$.ndl[er].'+settings.effect+'();');
								$.ndl[er].on();
							},
			on				: function(){
								$($.ndl[er].selector).find('span.'+settings.nav)
									.find('a > b > span').unwrap().end()
									.find('a:eq('+(settings.start-1)+') span').wrap('<b class="'+settings.on+'" />');
							},
			// interval		: {
			// 					data	: {},
			// 					start	: function() { if(settings.reverse==false) { var derection = 'next'; } else { var derection = 'prev'; }; return $.ndl[er].interval.data = setInterval(function(){ $.ndl[er].action(derection); }, settings.time); },
			// 					stop	: function() { return clearInterval($.ndl[er].interval.data); }
			// 				},
			play			: function(){
								this.ring();
								var n = settings.start-1;
								if($.ndl[er].total()>0) {
									if($.ndl[er].clone()>=0) {
										$.ndl[er].ul()
											.width((($.ndl[er].total()+$.ndl[er].clone())*$.ndl[er].width())+3)
											.css('overflow','hidden')
											.find('li:lt('+$.ndl[er].clone()+')').clone()
											.appendTo($.ndl[er].ul());
										$.ndl[er].div().width(settings.display*$.ndl[er].width());
									} else {
										$.ndl[er].ul()
											.width(($.ndl[er].total()*$.ndl[er].width())+3)
											.css('left',-$.ndl[er].width()*n);
										$.ndl[er].div().width($.ndl[er].width());
									};
									if(settings.control==true) {
										$($.ndl[er].selector).find('a.btn_prev').bind('click',function(){
											$.ndl[er].action('prev');
										});
										$($.ndl[er].selector).find('a.btn_next').bind('click',function(){
											$.ndl[er].action('next');
										});
									};
									$($.ndl[er].selector).find('span.'+settings.nav+' a').bind(settings.focus,function(){

										if(settings.start!==$(this).attr('class').replace(settings.item,'')*1) {
											settings.start = $(this).attr('class').replace(settings.item,'')*1;
											$.ndl[er].action(settings.start);
										};
									});
									// $($.ndl[er].selector)
									// 	.bind('mouseenter',function(){$.ndl[er].interval.stop();})
									// 	.bind('mouseleave',function(){$.ndl[er].interval.start();});
									$.ndl[er].action(settings.start);
									//$.ndl[er].interval.start();
								} else {
									return false;
								};
							}
		};
		if(settings.xml) {
			$.ndl[er].parse(settings.xml);
		} else {
			$.ndl[er].control();
			$.ndl[er].play();
		};
	});
};
