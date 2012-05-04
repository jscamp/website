
_.delay(function() {
	$("#restofwebsite").fadeIn(2000);
	$("#sponsors").fadeIn(2000);
}, 2000);

krusovice.tools.fadeIn(document.getElementById("la_oceansound"),500,0.4,50);

_.delay(function() {
	krusovice.tools.fadeOut(document.getElementById("la_oceansound"),9000,0,50);
},500);