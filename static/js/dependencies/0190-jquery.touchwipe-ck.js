/**
 * jQuery Plugin to obtain touch gestures from iPhone, iPod Touch and iPad, should also work with Android mobile phones (not tested yet!)
 * Common usage: wipe images (left and right to show the previous or next image)
 * 
 * @author Andreas Waltl, netCU Internetagentur (http://www.netcu.de)
 * @version 1.1.1 (9th December 2010) - fix bug (older IE's had problems)
 * @version 1.1 (1st September 2010) - support wipe up and wipe down
 * @version 1.0 (15th July 2010)
 */(function(a){a.fn.touchwipe=function(b){var c={min_move_x:20,min_move_y:20,wipeLeft:function(){},wipeRight:function(){},wipeUp:function(){},wipeDown:function(){},preventDefaultEvents:!0,wipeOnly_x:!0,wipeOnly_y:!0};b&&a.extend(c,b);this.each(function(){function e(){this.removeEventListener("touchmove",f);a=null;d=!1}function f(f){c.preventDefaultEvents&&f.preventDefault();if(d){var g=f.touches[0].pageX,h=f.touches[0].pageY,i=a-g,j=b-h;if(Math.abs(i)>=c.min_move_x){c.wipeOnly_x&&e();i>0?c.wipeLeft(i):c.wipeRight(i);a=g}else if(Math.abs(j)>=c.min_move_y){c.wipeOnly_y&&e();j>0?c.wipeDown(j):c.wipeUp(j);b=h}}}function g(c){if(c.touches.length==1){a=c.touches[0].pageX;b=c.touches[0].pageY;d=!0;this.addEventListener("touchmove",f,!1)}}var a,b,d=!1;"ontouchstart"in document.documentElement&&this.addEventListener("touchstart",g,!1)});return this}})(jQuery);