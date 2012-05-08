
_.delay(function() {
	$("#restofwebsite").fadeIn(2000, function(){
	  $(document).scroll(function(){
	    if ($(window).scrollTop() > 240) {
          return $("nav").addClass("fixed")
  	  }
  	});
	});
	$("#sponsors").fadeIn(2000);
}, 2000);

krusovice.tools.fadeIn(document.getElementById("la_oceansound"),500,0.4,50);

_.delay(function() {
	krusovice.tools.fadeOut(document.getElementById("la_oceansound"),9000,0,50);
},500);