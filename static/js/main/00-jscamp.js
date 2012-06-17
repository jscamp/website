scrollPos = 0;
scrolling = false;

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

scrolled = _.once(function() {
	$("#top").fadeIn();
	$("#scrollinfo").fadeOut();
});

$(window).scroll(function(e) {
	var wasScrolling = scrolling;
	scrolling = true;
	var newScrollPos = $(window).scrollTop();
	console.log(newScrollPos);
	var wHeight = $(window).height();
	var up = newScrollPos < scrollPos;
	var locked = newScrollPos % wHeight == 0;

	if(!wasScrolling && !locked) {
		var scrollto = (parseInt(newScrollPos / wHeight) + !up) * wHeight;
		$('html,body').animate({scrollTop: scrollto}, 300);
	}
	else if(locked)
		scrolling = false;
		
	if(newScrollPos > 0)
		scrolled();
		
	scrollPos = newScrollPos;
})


krusovice.tools.fadeIn(document.getElementById("la_oceansound"),500,0.4,50);

_.delay(function() {
	krusovice.tools.fadeOut(document.getElementById("la_oceansound"),9000,0,50);
},500);
