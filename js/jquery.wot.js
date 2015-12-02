/* -------------------------------------------------- *
 * Project scripts
 * -------------------------------------------------- *
 * Author: Morozov Igor
 * URL: http://www.igormorozov.com/
 * Copyright: 2011 Morozov Igor
** -------------------------------------------------- */

$(function(){
	if($('.b-photoslides').length) {
		$('.photoslides-bigphotos__ul').carouFredSel({
		    items: {
		        visible: 1
		    },
		    auto: false,
		    align: 'left'
		});
		$('.photoslides-thumbs__ul a').click(function(){
			var $t = $(this);
			if(!$t.hasClass('active')) {
//				console.info($(".photoslides-thumbs__ul").triggerHandler("currentPosition"))
				var idx = $t.attr('href');
				$('.photoslides-thumbs__ul a').removeClass('active');
				$t.addClass('active');
				$('.photoslides-bigphotos__ul').trigger('slideTo', [idx]);

			};
			return false;
		});

		$(".photoslides-thumbs__ul").carouFredSel({
			scroll: 2,
			circular: false,
			infinite: false,
			items: {
				visible: 4
			},
			auto: false,
			next: ".b-photoslides-thumb .ar-r",
			prev: ".b-photoslides-thumb .ar-l"
		});
	};

	if($('.b-listvacancies').length) {
		//listvacancy();
	};

	if($('.awards-list__ul').length) {
		$(".awards-list__ul").carouFredSel({
			scroll: 3,
			circular: false,
			infinite: false,
			auto: false,
			next: ".b-awards-list .ar-r",
			prev: ".b-awards-list .ar-l"
		});
	};

	if($('.b-visual').length) {
		mainvisual();
	};

	if($('.b-mapviewer').length) {
		contacts();
	};
});

function mainvisual(){
	var $visual = $('.b-visual'),
		$wnd = $('#minWidth').width(),
		anim = false,
		el_active = 0,
		el_timeout;
		$(".visual__li",$visual).width($wnd);

    $(document).ready(function(){
        gotoanim(el_active)
    });

	$(window).bind('resize', function(){
		$wnd = $('#minWidth').width();
		$(".visual__li",$visual).width($wnd);

	});

	function gotoanim(el_active, old_active){
		anim = true;
		var $t = $(".visual__li",$visual).eq(el_active),
			el_time = 0;

		$(".vis, .gus",$visual).removeAttr('style');

		if(old_active !== undefined) {
			el_time = 1600;

			var $old_t = $(".visual__li",$visual).eq(old_active);

			$('.visabout-logo',$old_t).animate({
				top:-226
			}, 200);

			$('.b-vis-about',$old_t).delay(250).animate({
				marginBottom:'50px',
				opacity:0
			}, 400);

			$('.b-vis-about .txt',$old_t).delay(100).animate({
				marginBottom:'-30px',
				opacity:0
			}, 200);

			$old_t.delay(800).animate({
				opacity:0
			}, 800, function(){
				$old_t.css({
					top:'-1000px'
				});
			});

		}

		setTimeout(function(){

			$('.vis',$t).rotate(0).translate({
				y: 0,
				x: 0
			});

			if(el_active === 0) {
				$('body').removeClass('main-page-wow main-page-wob').addClass('main-page-wot');
			}
			else if(el_active === 1) {
				$('body').removeClass('main-page-wot main-page-wob').addClass('main-page-wow');
			}
			else {
				$('body').removeClass('main-page-wot main-page-wow').addClass('main-page-wob');
			}

			$t.css({
				top:0,
				opacity:0
			});

			$('.visabout-logo',$t).css('top', '-226px');
			$('.b-vis-about',$t).css({
				marginBottom: '50px',
				opacity:0
			});

			$('.b-vis-about .txt',$t).css({
                marginBottom: '-30px',
				opacity:0
			});

			var t_bg_src = $t.attr("data-imgsrc");
			var t_img = new Image();
			t_img.src = t_bg_src;
			$t.css("background-image", "url(" + t_bg_src + ")");

			$(t_img).imagesLoaded(function () {
				$t.animate({
					opacity:1
				}, 800, function(){
					$('.visabout-logo',$t).delay(600).animate({
						top:80
					}, 200)

					$('.b-vis-about',$t).animate({
                        marginBottom:0,
						opacity:1
					}, 400);

					$('.b-vis-about .txt',$t).delay(300).animate({
                        marginBottom:0,
						opacity:1
					}, 200);

					$('.b-vis-about, .b-vis-about .txt, .visabout-logo',$t).promise().done(function() {
						anim = false;
					});
				});
			});

		}, el_time)

	};

	$('.b-visual .ar-l').bind('click', function(){
		if(!anim) {
			var el_old = el_active;
			if(el_active === 0) {
				el_active = 2
			}
			else {
				el_active--
			}

			gotoanim(el_active, el_old)
		}
		return false;
	});

	$('.b-visual .ar-r').bind('click', function(){

		if(!anim) {
			var el_old = el_active;

			if(el_active === 2) {
				el_active = 0
			}
			else {
				el_active++;
			}

			gotoanim(el_active, el_old)
		}
		return false;
	});

};

function listvacancy(){
	var $vaclist = $('.b-listvacancies'),
		anim = false;
	$('.hd',$vaclist).click(function(e){
		$(this).find('a').trigger('click');

	});
	$('.showvac',$vaclist).click(function(){
		var $t = $(this).parent().parent();
		if(!anim) {
			anim = true;
			if(!$t.hasClass('active-listvac')) {
				if($('.listvacancies__ul li.active-listvac').length) {
					$('.listvacancies__ul .active-listvac ul').slideUp('200');
					$('.listvacancies__ul .active-listvac').removeClass('active-listvac');
				};

				$t.addClass('active-listvac');
				$('ul',$t).slideDown('200');
			}
			else {
				$t.removeClass('active-listvac');
				$('ul',$t).slideUp('200');
			};
			$('.listvacancies__ul ul').promise().done(function() {
			    anim = false;
			  });
		}
		return false;
	});
	$('.hd a',$vaclist).click(function(){
		var $t = $(this).parents('.listvacancies__li');

		if(!anim) {
			anim = true;
			if($t.hasClass('active-vac')) {
				$('.hcont',$t).slideUp('200', function(){
					$('.b-listvacancies .active-listvac',$t).removeClass('active-listvac');
					anim = false;
				});
				$t.removeClass('active-vac');

			}
			else {

				/*$('.active-vac .hcont',$vaclist).slideUp('200', function(){
					$('.b-listvacancies .active-listvac').removeClass('active-listvac');
				});*/
				//$('.listvacancies__li',$vaclist).removeClass('active-vac');

				$('.hcont',$t).slideDown('300', function(){
					anim = false;
				});
				$t.addClass('active-vac');
			}
		};

		return false;
	});
    function open_city_by_url(url){
        var pos = url.indexOf('#city=');
        if( pos != -1 ){
            var city = url.substring(pos+6, url.length );
            $('div[id="'+city+'"]').click();
            window.scrollTo(0, $('div[id="'+city+'"]').offset().top );
        }
    }
    function open_department_by_url(url)
    {
        var pos = url.indexOf('#department=');
        if( pos != -1 ){
            var city_department = url.substring(pos+12, url.length ).split('_');
            var city = city_department[0];
            var department = city_department[1];
            anim = false;
            $('div[id="'+city+'"]').click();
            anim = false;
            $('a[name="'+city+'_'+department+'"]').click();
            window.scrollTo(0, $('div[id="'+city+'"]').offset().top );
        }
    }
	$('a[name="careers"]').click(function(){
		var url = $(this).attr('href');
		open_city_by_url(url);
	});
	var url = document.location.toString();
	open_city_by_url(url);
    open_department_by_url(url);
};

function contacts() {
	var $map = $('.b-mapviewer'),
		$ar = $('.ar',$map),
		$contacts = $('.b-contacts-list'),
		$sidenavcontacts = $('.subcontacts'),
		timer;
	$('.open',$map).click(function(){
		if($map.hasClass('open-mapviewer')) {
			$map.animate({
				height:61,
				marginBottom:0
			}, 300)
				.removeClass('open-mapviewer');
			$('.middle-hd-contacts').removeClass('contacts-hidden');
			$('.point',$map).removeClass('active-point');
			$('.b-contacts-list').removeClass('active-contacts-list')
			$('.contacts-list__li').removeClass('active-contacts').removeAttr('style');
			$('a',$sidenavcontacts).removeClass('active');
			$ar
				.hide().css({
				left: 0,
				top: 0});

		}
		else {
			$map.animate({
				height:375,
				marginBottom:-60
			}, 300)
				.addClass('open-mapviewer');
			$('.middle-hd-contacts').addClass('contacts-hidden');
		}
		return false;
	});

	$('.point',$map)
		.click(function(){
			var $t = $(this);
			if(!$t.hasClass('active-point')){
				clearTimeout(timer);
				$('.point',$map).removeClass('active-point');
				$t.addClass('active-point');
				var ofspos = $t.position(),
					href= $t.attr('href');
				$ar.show().css({
					left: ofspos.left,
					top: ofspos.top
				});

				$('h2 a',href).trigger('click');

			};
			return false;
		})
		.hover(function(){
			var $t = $(this),
				ofspos = $t.position();
			clearTimeout(timer);
			$ar.stop().show().css({
				left: ofspos.left,
				top: ofspos.top
			});

		}, function(){
			clearTimeout(timer);

			if($('.b-mapviewer .active-point').length) {
				var $t = $('.b-mapviewer .active-point'),
					ofspos = $t.position();

				timer = setTimeout(function(){
					$ar.stop().css({
						left: ofspos.left,
						top: ofspos.top
					});}, 200);

			}
			else {

				timer = setTimeout(function(){
					$ar.stop().css({
						left: 0,
						top: 0
					});
					$ar.hide();
				}, 200);
			}
		});

	$('a',$sidenavcontacts).click(function(){
		if(!$(this).hasClass('active')) {
			var href = $(this).attr('href');
			$('h2 a',href).trigger('click');
		};
		return false;
	});

	$('.b-contacts-list h2 a[name~="contact_link"]').click(function(){
		var $t = $(this).parents('.contacts-list__li');
		if(!$t.hasClass('active-contacts')) {
			var rel = $(this).attr('rel'),
				$t_hg = $t[0].offsetHeight + 130;
			if(!$('.b-mapviewer').hasClass('open-mapviewer')) {
				$('.b-mapviewer .open').trigger('click');
			};

			if(!$contacts.hasClass('active-contacts-list')) {
				$contacts.addClass('active-contacts-list')
			};

			$('a',$sidenavcontacts).removeClass('active');

			$('.b-mapviewer .point').removeClass('active-point');
			$('.'+rel,'.b-mapviewer').addClass('active-point');

			if($('.active-contacts',$contacts).length) {
				var acthgh = $('.active-contacts',$contacts)[0].offsetHeight + 130;
				$('.active-contacts',$contacts).removeClass('active-contacts').stop().animate({
					top:acthgh*(-1)
				}, 600)
			};

			$t
				.addClass('active-contacts')
				.css({
					top:'-'+$t_hg+'px'
				})
				.stop()
				.animate({
					top:0
				}, 600);

			$('a[href=#'+$t.attr('id')+']',$sidenavcontacts).addClass('active');

			var ofspos = $('.'+rel,$map).position();

			$ar.show().css({
				left: ofspos.left,
				top: ofspos.top
			});

		}

		return false;
	});

	var contact_link = $('.subcontacts').parent().find('span');
	contact_link.css('cursor', 'pointer');
	contact_link.click(function(){
		if($map.hasClass('open-mapviewer')) {
			$('.open',$map).click()
		}
	});
};

function randomIntBetween(lower, higher) {
    return parseInt(rand_no = Math.floor((higher - (lower - 1)) * Math.random()) + lower);
}

function video_preview_init(){
    var hide_video_preview = function(){
        $('div[id^="video_preview"]').each(function(){
            $(this).hide();
            var video_id = $(this).find('div.video-js').attr('id');
            var myPlayer = _V_(video_id);
            myPlayer.pause();
        });
    };

    var overlay = $('<div id="overlay"></div>');
    $('body').append(overlay);
    overlay.css({
        'position': 'absolute',
        'top': 0,
        'left': 0,
        'width': '100%',
        'z-index': '1000',
        'display': 'none',
        'background-color' : '#777',
        'opacity' : 0.7,
        'cursor' : 'pointer',
        'height' : $(document).height()
    });
    overlay.click(function(){
        hide_video_preview();
        $(this).hide();
    });

    $('div[id^="video_preview"]').each(function(){
        var obj = $(this);
        obj.remove();
        $('body').append(obj);
        obj.find('a').click(function(){
            hide_video_preview();
            overlay.hide();
        });
        var video_id = obj.find('.video-js').attr('id');
        if(video_id){
            var myPlayer = _V_(video_id);
            myPlayer.addEvent("fullscreenchange", function(){
                if( this.isFullScreen ){
                    obj.find('a').hide();
                }else{
                    obj.find('a').show();
                }
            });
        }
    });

    $('a[href^="#video_preview"]').click(function(){
        var elemnt_id = $(this).attr('href');
        var obj = $('div'+elemnt_id);
        obj.css({
            'z-index': '20000',
            'position': 'absolute',
            'left': $(document).width()*0.5 - obj.width()*0.5
        });
        overlay.show();
        obj.show();
        return false;
    });
}
