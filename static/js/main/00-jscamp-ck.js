$("#messageCont").slideDown();_.delay(function(){$("#messageCont").removeClass("flipped")},2e3);_.delay(function(){$("#messageCont").find(".back").css({visibility:"visible"});$("#messageCont").addClass("flipped")},5e3);_.delay(function(){$("#top").fadeIn(1e3);var e=$(window).scrollTop();e==0&&$("#homepage").animate({height:"680px"},800)},7e3);var highlightTalks=_.once(function(){$("#talks").addClass("current")}),scrollStart=_.once(function(){$("#top").fadeIn();$("#homepage").animate({height:"680px"},800)});$(window).scroll(function(){var e=$(window).scrollTop(),t=$(window).height(),n=$("#sessions").position().top-100,r=340,i=$("#venue").position().top-115;if(e+t/3*2>=n){$("#sessionicon").addClass("moved");_.delay(highlightTalks,1e3)}var s=e-n,o=i-r;$("#sessionicon").css({top:s>0?e<o?s:o-n:0});scrollStart()});$("#sessionicon div").click(function(){var e=$(this).css("top"),t=$("#sessionicon div.current").css("top");$("#sessionicon div.current").removeClass("current").css({top:e});$(this).addClass("current").css({top:t});$("#sessions .sessiondesc").removeClass("current");$("#"+$(this).attr("id")+"desc").addClass("current");$.scrollTo($("#sessions").position().top-100,{duration:300})});krusovice.tools.fadeIn(document.getElementById("la_oceansound"),500,.4,50);_.delay(function(){krusovice.tools.fadeOut(document.getElementById("la_oceansound"),9e3,0,50)},500);