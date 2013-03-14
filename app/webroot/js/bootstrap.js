

	

$(function(){
	
	
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


	$('body').fadeIn(500);
	
	var siteURL = "http://" + top.location.host.toString();
	$('a.fade-transition').on('click', function(e) {
		e.preventDefault();
		var loc = $(this).attr('href');
		$('body').fadeOut(500, function() {
			window.location = loc;
		});
	});


	var $contentItems = $('#content-slider-inner .content-item');
	//var item_width = $contentItems.width();
	var $sliderInner = $('#content-slider-inner');
	$sliderInner.width(($contentItems.length * 100) + '%').css({overflow: 'hidden'});
	$contentItems.css({float: 'left', width: (100 / $contentItems.length) + '%'}); 
	
	if ($contentItems.length > 1) {
		$('<a href="#" class="slider-nav" id="slider-prev">Previous</a><a href="" class="slider-nav" id="slider-next">Next</a>').appendTo('body');
		
		$('#slider-prev').on('click', function(e) {
			e.preventDefault();
			slider.previousItem();
		});
		
		$('#slider-next').on('click', function(e) {
			e.preventDefault();
			slider.nextItem();
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
				}).height();
				$('#index').css({
					top: 0,
					height: '100%',
					display: 'none'
				});
				var viewport_h = $(window).height() - $('header').height();
				var h = Math.max(index_h, viewport_h);
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
	
	
});


var slider = {
	
	current_item: 0,
	
	nextItem: function() {
		var itemCount = $('#content-slider-inner .content-item').length;
		slider.current_item ++;
		if (slider.current_item >= itemCount) {
			slider.current_item = 0;
		}
		slider.gotoItem(slider.current_item);
	},
	
	previousItem: function() {
		var itemCount = $('#content-slider-inner .content-item').length;
		slider.current_item --;
		if (slider.current_item < 0) {
			slider.current_item = itemCount - 1;
		}
		slider.gotoItem(slider.current_item);
	},
	
	gotoItem: function(item) {
		slider.current_item = item;
		$('#content-slider-inner').animate(
			{marginLeft: (slider.current_item * -100) + '%'}, 
			400, 
			'easeInOutExpo',
			function() {
				if ($(window).scrollTop() > $('.content-item h1').offset().top + ($('.content-item h1').outerHeight() / 2)) {

					$("html:not(:animated),body:not(:animated)").animate({scrollTop: 0}, 400, 'easeInOutExpo');
				}
			});
	},
	
	loadItem: function(url, insert) {
		var current = slider.current_item;
		
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



