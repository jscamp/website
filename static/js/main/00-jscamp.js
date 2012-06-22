$("#messageCont").slideDown();

_.delay(function() {
	$("#messageCont").removeClass("flipped");
}, 2000);
_.delay(function() {
	$("#messageCont").find(".back").css({visibility: "visible"});
	$("#messageCont").addClass("flipped");
	$("#top").fadeIn(2000);
}, 6000);

_.delay(function() {
	scrollPos = $(window).scrollTop();
	if(scrollPos == 0)
		$("#scrollinfo").show();
}, 10000);

$(window).scroll(_.once(function() {
	$("#top").fadeIn();
	$("#scrollinfo").fadeOut();
}));


krusovice.tools.fadeIn(document.getElementById("la_oceansound"),500,0.4,50);

_.delay(function() {
	krusovice.tools.fadeOut(document.getElementById("la_oceansound"),9000,0,50);
},500);
