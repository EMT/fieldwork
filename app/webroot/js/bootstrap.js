


function redirectTo(url) {
	window.location = url;
}

var page_shown = false;
function showPage() {
	if (!page_shown) {
		page_shown = true;
		$('body').fadeIn(500);
	}
}


function fadeIn(el) {
	fixSvgHeight(el);
	$(el).fadeIn(100);
}

function fixSvgHeight(el) {
	$(el).css({position: 'absolute', top: '-999em', display: 'block'});
	var w = $(el).width(),
		h = $(el).width(),
		ratio = w / h;
	$(el).css({position: 'relative', top: 'auto', display: 'none', width: (w / ratio) + 'px'});
}


window.onpageshow = function(event) {
    if (event.persisted) {
        window.location.reload() 
    }
};


$(document).ready(function() {


	//	Replace SVG in non-supporting browsers
	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function() {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}
	
	
/*
	$(window).on('scroll', function(e) {
		if ($(window).scrollTop() > $('h1.logo').offset().top + ($('h1.logo').outerHeight() / 2) + $('h1.logo').height()) {
			$('header .marque').fadeIn(500);
		}
		else {
			$('header .marque').fadeOut(500);
		}
	});
*/

	showPage();
	
	
	
	var siteURL = "http://" + top.location.host.toString();
	$('a.fade-transition').on('click', function(e) {
		e.preventDefault();
		var loc = $(this).attr('href');
		$('body').fadeOut(500, function() {
			redirectTo(loc);
		});
	});
	
	
	//	Home page machine parts
	if ($('#machine').length) {
		var arr = [1, 2, 3, 4, 5, 6/* , 7, 8, 9, 10, 11, 12 */],
			rand_arr = [],
			ext = (Modernizr.svg) ? 'svg' : 'png';
		for (var i in arr) {
			rand_arr.splice(Math.floor(Math.random() * (1 + rand_arr.length)), 0, arr[i]);
		}
		var doc_width = $(document).width(),
			how_many_parts = 3;
		if (doc_width > 500) {
			how_many_parts = 4;
		}
		if (doc_width > 600) {
			how_many_parts = 6;
		}
		for (i = 0; i < how_many_parts; i ++) {
			$('<img src="/img/machine/fw-machine-' + rand_arr[i] + '.' + ext + '" style="display: none;" onload="fadeIn(this);" alt="" />').appendTo('#machine');
/* 			$('<img src="/img/machine/fw-machine-' + rand_arr[i] + '.' + ext + '" alt="" />').appendTo('#machine'); */
		}
/*
		var arr = [1, 2],
			rand_arr = [],
			positions = [
				{left: '14.5%', top: '10%'},
				{left: '60%', top: '22%'}
			];
		for (var i in arr) {
			rand_arr.splice(Math.floor(Math.random() * (1 + rand_arr.length)), 0, arr[i]);
		}
		for (i = 0; i < 2; i ++) {
			$('<img class="floating" src="/img/machine/machine-f-' + rand_arr[i] + '.png" alt="" />').css(positions[i]).appendTo('#machine');
		}
*/
	}



	
	//	Set slider items (only if pushstate is supported)
	
	var urls = $('#content-wrapper').data('urls');
	if (urls) {
		for (var i = 0, len = urls.length; i < len; i ++) {
			slider.items.push({
				url: urls[i],
				content: null,
				index: i
			});
			if ($('.content-item').attr('id') === 'item-' + urls[i]) {
				slider.current_item = i;
			}
		}
		$('.content-item').addClass('active');
		
		$('#slider-nav').on('click', '#slider-prev', function(e) {
			e.preventDefault();
			var url = $(this).attr('href');
			if (stateHandler.supported()) {
				$.when(slider.loadItem(url)).done(function() {
					stateHandler.push(url, 
						$('#item-' + url + ' h1').text() + ' – Fieldwork', 
						slider.findItemByUrl(url).index);
					slider.previousItem();
				});
			}
			else {
				location.href = url;
			}
		});
		
		$('#slider-nav').on('click', '#slider-next', function(e) {
			e.preventDefault();
			var url = $(this).attr('href');
			if (stateHandler.supported()) {
				$.when(slider.loadItem(url)).done(function() {
					stateHandler.push(url, 
						$('#item-' + url + ' h1').text() + ' – Fieldwork', 
						slider.findItemByUrl(url).index);
					slider.nextItem();
				});
			}
			else {
				location.href = url;
			}
		});
	}
	
	// Set state handlers for content slider
	if (stateHandler.supported()) {
		stateHandler.replace(document.title, slider.current_item);
		stateHandler.onPop(function(event) {
			if (event.state.item_index) {
				slider.gotoItem(event.state.item_index);
			}
		});
	}
	
	
	
	
	$('#open-search').on('click', function(e) {
		e.preventDefault();
		var anim = function() {
			if ($('#search-box').height() === 0) {
				var h = $('#search-box').css({
					position: 'absolute',
					top: '-999em',
					height: 'auto'
				}).height();
				$('#search-box').css({
					position: 'relative',
					top: 'auto',
					height: '0'
				});
				$('body').addClass('search-open');
				$('#search-box').animate({height: h}, 400, 'easeOutExpo', function() {
					$('#search-box .search').focus();
				});
			}
			else {
				$('#search-box').animate({height: 0}, 400, 'easeInExpo', function() {
					$('body').removeClass('search-open');
				});
			}
		};
		if ($(window).scrollTop() > 0) {
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: 0}, 300, 'easeInExpo').promise().done(anim);
		}
		else {
			anim();
		}	
	});
	
	
	var content_h = $('#main').height();
	$('#open-index').on('click', function(e) {
		e.preventDefault();
		var anim = function() {
			if ($('#index').css('display') === 'none') {
				var index_h = $('#index').css({
					top: '-999em',
					bottom: 'auto',
					height: 'auto',
					display: 'block'
				}).height() + $('header').height();
				$('#index').css({
					top: 0,
					bottom: $('#footer').outerHeight() - 1,
					display: 'none'
				});
				var viewport_h = $(window).height();
				var h = Math.max(index_h, viewport_h) - ($('#main').outerHeight(true) - $('#main').height());
				content_h = $('#main').height();
				$('#main').css({height: h});
				$('body').addClass('index-open');
				$('#index').fadeIn(400);
			}
			else {
				$('body').removeClass('index-open');
				$('#index').fadeOut(400, function() {
					$('#main').css({height: content_h});
				});
			}
		};
		if ($(window).scrollTop() > 0) {
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: 0}, 300, 'easeInExpo').promise().done(anim);
		}
		else {
			anim();
		}
	});
	
	
	if ($('#flickr').length) {
		flickr();
	}
	
	if ($('#latest-tweet').length) {
		latestTweet('madebyfieldwork');
	}
	
	if (typeof google !== 'undefined') {
		initializeMap();
	}
	
	
});


var slider = {
	
	items: [],
	current_item: 0,
	
	nextItem: function() {
		slider.current_item ++;
		slider.gotoItem(slider.current_item);
	},
	
	previousItem: function() {
		slider.current_item --;
		slider.gotoItem(slider.current_item);
	},
	
	gotoItem: function(item_index) {
		slider.current_item = item_index;
		var $item = $('#item-' + slider.items[slider.current_item].url);
		$('#content-wrapper').animate(
			{marginLeft: ($('.content-item').index($item) * -100) + '%'}, 
			400, 
			'easeInOutExpo',
			function() {
				if ($(window).scrollTop() > $('.content-item h1').offset().top + ($('.content-item h1').outerHeight() / 2)) {

					$("html:not(:animated),body:not(:animated)").animate({scrollTop: 0}, 400, 'easeInOutExpo', function() {
						$('#main').height($('#item-' + slider.items[slider.current_item].url).height());
					});
				}
				else {
					$('#main').height($('#item-' + slider.items[slider.current_item].url).height());
				}
				$('#content-wrapper').delay(400).css({height: $item.outerHeight()});
				$('.content-item').removeClass('active');
				$item.addClass('active');
				// Change slider navigation state
				if (slider.current_item < 1) {
					$('#slider-prev').fadeOut(200, function() {$(this).remove(); });
				}
				else {
					if (!$('#slider-prev').length) {
						$('#slider-nav').prepend('<a href="" class="slider-nav" id="slider-prev">Previous</a>');
					}
					$('#slider-prev').attr('href', slider.items[slider.current_item - 1].url);
				}
				if (slider.current_item === slider.items.length - 1) {
					$('#slider-next').fadeOut(200, function() {$(this).remove(); });
				}
				else {
					if (!$('#slider-next').length) {
						$('#slider-nav').append('<a href="" class="slider-nav" id="slider-next">Next</a>');
					}
					$('#slider-next').attr('href', slider.items[slider.current_item + 1].url);
				}
				
			});
	},
	
	loadItem: function(url) {
		return $.when(slider._loadItem(url)).done(function(result) {
			slider.addItem(url, result);
		});
	},
	
	_loadItem: function(url) {
		var item = slider.findItemByUrl(url);
		if (item) {
			return (item.content) ? item : $.get(url + '.part');
		}
		return false;
	},
	
	findItemByUrl: function(url) {
		for (var i = 0, len = slider.items.length; i < len; i ++) {
			if (slider.items[i].url === url) {
				return slider.items[i];
			}
		}
		return null;
	},
	
	addItem: function(url, content) {
		var item = slider.findItemByUrl(url);
		if (item) {
			item.content = content;
		}
		else {
			var item = {
				url: url,
				content: content,
				index: slider.items.length
			}
			slider.items.push(item);
		}
		//	append item
		if (!$('#item-' + item.url).length) {
			var $prevItem = slider.findPreviousItemByUrl(url);
			if (!$prevItem) {
				$('#content-wrapper').prepend(item.content);
			}
			else {
				$prevItem.after(item.content);
			}
			var $contentItems = $('#slider .content-item');
			var $currentItem = $('#slider .active');
			$('#content-wrapper').css({
				width: ($contentItems.length * 100) + '%',
				marginLeft: ($contentItems.index($currentItem) * -100) + '%'
			});
			$contentItems.css({float: 'left', width: (100 / $contentItems.length) + '%'}); 
		}
		return item;
	},
	
	findPreviousItemByUrl: function(url) {
		var item_found = false;
		for (var i = slider.items.length - 1; i >= 0; i --) {
			if (item_found && $('#item-' + slider.items[i].url).length) {
				return $('#item-' + slider.items[i].url);
			}
			if (slider.items[i].url === url) {
				item_found = true;
			}
		}
		return null;
	}
	
};



var stateHandler = {

	supported: function() {
		return (typeof history.pushState === 'function');
	},
	
	replace: function(title, item_index) {
		history.replaceState({
			title: title,
			item_index: item_index,
			slug: location.pathname.replace('/', '')
		}, null, null);
	},
	
	push: function(slug, title, item_index) {
		history.pushState({
			title: title,
			item_index: item_index,
			slug: slug
		}, null, slug);
		document.title = title;
	},
	
	onPop: function(callback) {
		window.onpopstate = function(event) {
			if (event.state == null) {
				return;
			}
			document.title = event.state.title;
			callback(event);
		};
	}
	
}




// Google Map
function initializeMap() {
	var latlng = new google.maps.LatLng(53.482035,-2.234324);
	var settings = {
		zoom: 17,
		center: latlng,
		scrollwheel: true,
		navigationControl: false,
		scaleControl: false,
		streetViewControl: false,
		draggable: true, 
		mapTypeControl: false,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: false,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById('map'), settings);
	
	
	  
	var image = new google.maps.MarkerImage(
	  'img/fw-map-marker.png',
	  new google.maps.Size(26,30),
	  new google.maps.Point(0,0),
	  new google.maps.Point(13,15)
	);
	
	var path = "M13.115,0L0,7.572v15.144l13.115,7.571l13.115-7.571V7.572L13.115,0z M11.91,21.143H9.517V9.145h2.393V21.143z M16.634,16.149h-3.575v-2.138h3.575V16.149z M16.634,11.282h-3.575V9.145h3.575V11.282z"
	var vector = {
	  path: google.maps.SymbolPath.CIRCLE,
	  fillColor: "#E8384C",
	  scale: 1,
	  strokeWeight: 0
	};
		

	
	var marker = new google.maps.Marker({
	  draggable: true,
	  raiseOnDrag: false,
	  icon: image,
	  map: map,
	  position: latlng
	});
	
	
	var map_styles = [
	  {
	    featureType: "all",
	    stylers: [
	      { saturation: -100 }
	    ]
	  }
	];
	
	map.setOptions({styles: map_styles});
	
}



//	Flickr API

function flickr() {
	var url = 'http://api.flickr.com/services/feeds/groups_pool.gne?id=2172335@N24&lang=en-us&format=json&jsoncallback=?';
	$.getJSON(url, function(data) {
		$('<a href="' + data.items[0].link + '"><img src="' + data.items[0].media.m.replace('_m.jpg', '_z.jpg') + '" alt="' + data.items[0].media + '" /><div class="home-grid-details"><h3>' + data.items[0].title + '</h3></div></a>').appendTo('#flickr');
	});
}


//	Twitter

function latestTweet(username) {
	var url = 'https://api.twitter.com/1/statuses/user_timeline/' + username + '.json?count=10&include_rts=1&callback=?';
	$.getJSON(url, function(data) {
		var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig; 
		$('#latest-tweet .tweet').html(data[0].text.replace(exp, "<a href='$1'>$1</a>"));
		$('#latest-tweet .twitter-handle').html('<a href="http://twitter.com/' + data[0].user.screen_name + '">@' + data[0].user.screen_name + '</a>');
		showReply(data[0]);
	});
}
function showReply(tweet) {
	if (tweet.in_reply_to_status_id_str) {
		var url = 'https://api.twitter.com/1/statuses/show.json?id=' + tweet.in_reply_to_status_id_str + '&callback=?';
		$.getJSON(url, function(data) {
console.log(data);
			var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig; 
			$('#latest-tweet .irt').html(data.text.replace(exp, "<a href='$1'>$1</a>"));
			$('#latest-tweet .irt-handle').html('<a href="http://twitter.com/' + data.user.screen_name + '">@' + data.user.screen_name + '</a>');
			$('#latest-tweet .in-reply-to').slideDown(300);
		});
	}
}




/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright Ã‚Â© 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});



