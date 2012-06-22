$("#messageCont").slideDown();

_.delay(function() {
	$("#messageCont").removeClass("flipped");
}, 2000);
_.delay(function() {
	$("#messageCont").find(".back").css({visibility: "visible"});
	$("#messageCont").addClass("flipped");
}, 6000);

_.delay(function() {
	$("#top").fadeIn(1000);
	var scrollPos = $(window).scrollTop();
	if(scrollPos == 0)
		$("#homepage").animate({height: "680px"}, 800);
}, 8000);

var highlightTalks = _.once(function() {
	$("#talks").addClass("current");
});

var scrollStart = _.once(function() {
	$("#top").fadeIn();
	$("#homepage").animate({height: "680px"}, 800);
});

$(window).scroll(function() {

	var scrollTop = $(window).scrollTop(),
		wHeight = $(window).height(),
		sTop = $("#sessions").position().top - 100,
		sHeight = 340,
		vTop = $("#venue").position().top - 115;
		
	if(scrollTop + wHeight/2 >= sTop) {
		$("#sessionicon").addClass("moved");
		_.delay(highlightTalks,1000);
	}
	
	var pos = scrollTop - sTop,
		eHeight = vTop - sHeight;
	$("#sessionicon").css({top: (pos > 0 ? (scrollTop < eHeight ? pos : eHeight - sTop) : 0)});	

	scrollStart();

});

$("#sessionicon div").click(function() {
	var nTop = $(this).css("top");
	var cTop = $("#sessionicon div.current").css("top");
	$("#sessionicon div.current").removeClass("current").css({top: nTop});
	$(this).addClass("current").css({top: cTop});
	
	$("#sessions .sessiondesc").removeClass("current");
	$("#" + $(this).attr("id") + "desc").addClass("current")
	$.scrollTo($("#sessions").position().top - 100);
});


krusovice.tools.fadeIn(document.getElementById("la_oceansound"),500,0.4,50);

_.delay(function() {
	krusovice.tools.fadeOut(document.getElementById("la_oceansound"),9000,0,50);
},500);
