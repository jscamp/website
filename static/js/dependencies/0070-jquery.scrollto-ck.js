/*!
 * jQuery.ScrollTo
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 06/05/2009
 *
 * @projectDescription Easy element scrolling using jQuery.
 * http://flesler.blogspot.com/2007/10/jqueryscrollto.html
 * Works with jQuery +1.2.6. Tested on FF 2/3, IE 6/7/8, Opera 9.5/6, Safari 3, Chrome 1 on WinXP.
 *
 * @author Ariel Flesler
 * @version 1.4.2
 *
 * @id jQuery.scrollTo
 * @id jQuery.fn.scrollTo
 * @param {String, Number, DOMElement, jQuery, Object} target Where to scroll the matched elements.
 *	  The different options for target are:
 *		- A number position (will be applied to all axes).
 *		- A string position ('44', '100px', '+=90', etc ) will be applied to all axes
 *		- A jQuery/DOM element ( logically, child of the element to scroll )
 *		- A string selector, that will be relative to the element to scroll ( 'li:eq(2)', etc )
 *		- A hash { top:x, left:y }, x and y can be any kind of number/string like above.
 *		- A percentage of the container's dimension/s, for example: 50% to go to the middle.
 *		- The string 'max' for go-to-end. 
 * @param {Number, Function} duration The OVERALL length of the animation, this argument can be the settings object instead.
 * @param {Object,Function} settings Optional set of settings or the onAfter callback.
 *	 @option {String} axis Which axis must be scrolled, use 'x', 'y', 'xy' or 'yx'.
 *	 @option {Number, Function} duration The OVERALL length of the animation.
 *	 @option {String} easing The easing method for the animation.
 *	 @option {Boolean} margin If true, the margin of the target element will be deducted from the final position.
 *	 @option {Object, Number} offset Add/deduct from the end position. One number for both axes or { top:x, left:y }.
 *	 @option {Object, Number} over Add/deduct the height/width multiplied by 'over', can be { top:x, left:y } when using both axes.
 *	 @option {Boolean} queue If true, and both axis are given, the 2nd axis will only be animated after the first one ends.
 *	 @option {Function} onAfter Function to be called after the scrolling ends. 
 *	 @option {Function} onAfterFirst If queuing is activated, this function will be called after the first scrolling ends.
 * @return {jQuery} Returns the same jQuery object, for chaining.
 *
 * @desc Scroll to a fixed position
 * @example $('div').scrollTo( 340 );
 *
 * @desc Scroll relatively to the actual position
 * @example $('div').scrollTo( '+=340px', { axis:'y' } );
 *
 * @desc Scroll using a selector (relative to the scrolled element)
 * @example $('div').scrollTo( 'p.paragraph:eq(2)', 500, { easing:'swing', queue:true, axis:'xy' } );
 *
 * @desc Scroll to a DOM element (same for jQuery object)
 * @example var second_child = document.getElementById('container').firstChild.nextSibling;
 *			$('#container').scrollTo( second_child, { duration:500, axis:'x', onAfter:function(){
 *				alert('scrolled!!');																   
 *			}});
 *
 * @desc Scroll on both axes, to different values
 * @example $('div').scrollTo( { top: 300, left:'+=200' }, { axis:'xy', offset:-20 } );
 */(function(a){function c(a){return typeof a=="object"?a:{top:a,left:a}}var b=a.scrollTo=function(b,c,d){a(window).scrollTo(b,c,d)};b.defaults={axis:"xy",duration:parseFloat(a.fn.jquery)>=1.3?0:1,limit:!0};b.window=function(b){return a(window)._scrollable()};a.fn._scrollable=function(){return this.map(function(){var b=this,c=!b.nodeName||a.inArray(b.nodeName.toLowerCase(),["iframe","#document","html","body"])!=-1;if(!c)return b;var d=(b.contentWindow||b).document||b.ownerDocument||b;return a.browser.safari||d.compatMode=="BackCompat"?d.body:d.documentElement})};a.fn.scrollTo=function(d,e,f){if(typeof e=="object"){f=e;e=0}typeof f=="function"&&(f={onAfter:f});d=="max"&&(d=9e9);f=a.extend({},b.defaults,f);e=e||f.duration;f.queue=f.queue&&f.axis.length>1;f.queue&&(e/=2);f.offset=c(f.offset);f.over=c(f.over);return this._scrollable().each(function(){function m(a){h.animate(k,e,f.easing,a&&function(){a.call(this,d,f)})}var g=this,h=a(g),i=d,j,k={},l=h.is("html,body");switch(typeof i){case"number":case"string":if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(i)){i=c(i);break}i=a(i,this);case"object":if(i.is||i.style)j=(i=a(i)).offset()}a.each(f.axis.split(""),function(a,c){var d=c=="x"?"Left":"Top",e=d.toLowerCase(),n="scroll"+d,o=g[n],p=b.max(g,c);if(j){k[n]=j[e]+(l?0:o-h.offset()[e]);if(f.margin){k[n]-=parseInt(i.css("margin"+d))||0;k[n]-=parseInt(i.css("border"+d+"Width"))||0}k[n]+=f.offset[e]||0;f.over[e]&&(k[n]+=i[c=="x"?"width":"height"]()*f.over[e])}else{var q=i[e];k[n]=q.slice&&q.slice(-1)=="%"?parseFloat(q)/100*p:q}f.limit&&/^\d+$/.test(k[n])&&(k[n]=k[n]<=0?0:Math.min(k[n],p));if(!a&&f.queue){o!=k[n]&&m(f.onAfterFirst);delete k[n]}});m(f.onAfter)}).end()};b.max=function(b,c){var d=c=="x"?"Width":"Height",e="scroll"+d;if(!a(b).is("html,body"))return b[e]-a(b)[d.toLowerCase()]();var f="client"+d,g=b.ownerDocument.documentElement,h=b.ownerDocument.body;return Math.max(g[e],h[e])-Math.min(g[f],h[f])}})(jQuery);