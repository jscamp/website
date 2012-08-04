$("#messageCont").slideDown();

_.delay(function() {
	$("#messageCont").removeClass("flipped");
}, 2000);
_.delay(function() {
	$("#messageCont").find(".back").css({visibility: "visible"});
	$("#messageCont").addClass("flipped");
	_.delay(function() {
		$("#messageCont .front").css({visibility: "hidden"});
	},0);
}, 5000);

_.delay(function() {
	$("#top").fadeIn(1000);
	var scrollPos = $(window).scrollTop();
	if(scrollPos == 0) {
		$("#home").animate({height: "680px"}, 800);
		$.scrollTo(670, {duration: 800});
	}
}, 7000);

var highlightTalks = _.once(function() {
	$("#talks").addClass("current");
});

var showTweets = _.once(function() {
	var d = 200;
	$("#tweets .twtr-tweet").each(function() {
		var t = this;
		_.delay(function() {
			$(t).animate({opacity: 1},400);
		},(d+=150));
	});
});

var dropPins = _.once(function() {
	$("#pins li").each(function() {
		var top = parseInt($(this).css("top"));
		var t = this;
		_.delay(function() {
			$(t).animate({opacity: 1, top: (top+50)},400);
		},(top-150));
	});
});


var scrollStart = _.once(function() {
	var res = $(window).width();
	if(res <= 900)
		$("#top").css({position: "absolute"});
		
	$("#top").fadeIn();
	$("#home").animate({height: "680px"}, 800);
});

$(window).scroll(function() {

	var scrollTop = $(window).scrollTop(),
		wHeight = $(window).height(),
		sTop = $("#sessions").position().top - 100,
		sHeight = 340,
		vTop = $("#venue").position().top - 115;
		tTop = $("#tweets").position().top - 100;
		
	if(scrollTop + wHeight/2 >= sTop) {
		$("#sessionicon").addClass("moved");
		_.delay(highlightTalks,1000);
	}
	if(scrollTop + wHeight/2 >= tTop) {
		showTweets();
	}
	if(scrollTop + wHeight/10 >= vTop) {
		dropPins();
	}
	
	var pos = scrollTop - sTop,
		eHeight = vTop - sHeight;
	$("#sessionicon").css({top: (pos > 0 ? (scrollTop < eHeight ? pos : eHeight - sTop) : 0)});	

	scrollStart();

});

$("#sessions #sessionicon div").click(function() {
	var nTop = $(this).css("top");
	var cTop = $("#sessions #sessionicon div.current").css("top");
	$("#sessions #sessionicon div.current").removeClass("current").css({top: nTop});
	$(this).addClass("current").css({top: cTop});
	
	$("#sessions .sessiondesc").removeClass("current");
	$("#" + $(this).attr("id") + "desc").addClass("current")
	$.scrollTo($("#sessions").position().top - 100, {duration:300});
});

$("#subscribeForm").ajaxForm({
	url: "./addsubscriber.php",
	dataType: "html",
	beforeSubmit: function() {
		$("#subscribeForm .msg").slideUp();
		$("#subscribeForm").removeClass("failure success").addClass("load");
	},
	success: function(r) {
		if(r.substr(0,6) != "Thanks") {
			$("#subscribeForm").removeClass("load").addClass("failure");
			$("#subscribeForm .msg").text(r.substr(0,r.indexOf('<br/>'))).fadeIn(250);
		}
		else {
			$("#subscribeForm").removeClass("load").addClass("success");
			$("#subscribeForm .msg").text("Thanks! :)").fadeIn(250);
			_.delay(function() {
				$("#subscribeForm .msg").slideUp();
				$("#subscribeForm input[name='email']").val("");
			},2000);
		}
	},
	error: function(r, s) {
		$("#subscribeForm").removeClass("load").addClass("failure");
		$("#subscribeForm .msg").text("Something went utterly wrong...").fadeIn(250);
	}
});

$("#subscribeForm .msg").click(function() {
	$("#subscribeForm .msg").slideUp();
});

$("#pins li").hover(function() {
	$("#hotspots .hotspot").html($(this).find("div").html());
},function() {
	$("#hotspots .hotspot").html("");
})


function routeTo(href) {
	var goto = (href.indexOf("http") == 0) ? href.substr(19).toLowerCase() : href;
	var offset = goto == "sponsors" || goto == "info" ? 0 : 110;
	if($("#" + goto).length)
		$("#home").css({height: "680px"});
	if(goto == "talks" || goto == "sprints" || goto == "workshops") {
		$("#"+goto).click();
	}
	else {
		var to = $("#" + goto);
		if($(to).hasClass("goto")) {
			$.scrollTo($(to).position().top + offset, {duration:500});
		}
	}
}

window.onpopstate = function(event) {
	if(event.state) { // chrome pops on load as well, but this is empty
		routeTo(event.state);
	}
}

$(document).ready(function () {
	krusovice.tools.fadeIn(document.getElementById("la_oceansound"),500,0.4,50);
	
	_.delay(function() {
		krusovice.tools.fadeOut(document.getElementById("la_oceansound"),9000,0,50);
	},500);

	$("a").click(function(event) {
		var target = $(event.target).is("a") ? $(event.target) : $(event.target).closest("a");
		var href = $(target).attr("href");
		if(href.substr(0,2) == "./") {
			href = href.substr(2);
			event.preventDefault();
			var html = $(target).html();
			if(history.pushState)
				history.pushState(href, html, href);
			routeTo(href);
			return false;
		}
	});
	
	routeTo(window.location.href);
});