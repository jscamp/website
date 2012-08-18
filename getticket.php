<?php

$code = trim(strtoupper(str_replace(" ","",$_GET['code'])));

$discounts = array(

	"LATEBIRD" 			=> 50,
	"HACKERSPACESG" 	=> 50,
	"SMARTSPACESG"		=> 50,
	"THEHUBSG"			=> 50,
	"GIRLSINTECHSG"		=> 50,
	"NUSHACKERS"		=> 50,
	"FISG"				=> 50,
	"JFDIASIA"			=> 50,
	"SPIFFY"			=> 30,
	"VIKI"				=> 30,
	"GOOGLESG"			=> 30,
	"PAYPALSG"			=> 30,
	"PWDOORG"			=> 50,
	"GREENWAVEREALITY"	=> 30,
	"WEBGEEKPH"			=> 50,
	"FIID"				=> 50,
	"ADOBEHTML"			=> 30,
	"TWIA"				=> 30,
	"HELLOASIA"			=> 50,
	"NODEJSSG"			=> 50,
	"STARTUPLOKAL"		=> 50,
	"RIM"				=> 30,
	"BRISJS"			=> 50,
	"MELBJS"			=> 50,
	"SYDJS"				=> 50,
	"BKKJS"				=> 50,
	"TECHPROPULSION"	=> 30

);

$urls = array(

	50 	=> "https://jscamp.wufoo.com/forms/r7x2s9/def/Field638=".$code,
	30 	=> "https://jscamp.wufoo.com/forms/q7x3a1/def/Field638=".$code,
	0 	=> "https://jscamp.wufoo.com/forms/jscamp-full-pass/"

);

$discount = isset($discounts[$code]) ? $discounts[$code] : 0;

if($discount != 0) {
	$url = isset($urls[$discount]) ? $urls[$discount] : $urls[0];
	
	header("location: ".$url);
	exit;
}
?>
<!doctype html>
<!--[if IE 8 ]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->
<head>
<!--

              ,.  _~-.,               .
           ~'`_ \/,_. \_
          / ,"_>@`,__`~.)             |           .
          | |  @@@@'  ",! .           .          '
          |/   ^^@     .!  \          |         /
          `' .^^^     ,'    '         |        .             .
           .^^^   .          \                /          .
          .^^^       '  .     \       |      /       . '
.,.,.     ^^^             ` .   .,+~'`^`'~+,.     , '
&&&&&&,  ,^^^^.  . ._ ..__ _  .'             '. '_ __ ____ __ _ .. .  .
%%%%%%%%%^^^^^^%%&&;_,.-=~'`^`'~=-.,__,.-=~'`^`'~=-.,__,.-=~'`^`'~=-.,
&&&&&%%%%%%%%%%%%%%%%%%&&;,.-=~'`^`'~=-.,__,.-=~'`^`'~=-.,__,.-=~'`^`'~=
%%%%%&&&&&&&&&&&%%%%&&&_,.;^`'~=-.,__,.-=~'`^`'~=-.,__,.-=~'`^`'~=-.,__,
%%%%%%%%%&&&&&&&&&-=~'`^`'~=-.,__,.-=~'`^`'~=-.,__,.-===-^'~=-.,__,.-=~'
##mjy#####*"'
_,.-=~'`^`'~=-.,__,.-=~'`^`'~=-.,__,.-=~'`^`'~=-.,.-=~'`^`'~=-.,__,.-=~'

~`'^`'~=-.,__,.-=~'`^`'~=-.,__,.-=~'`^`'~=-.,__,.-=~'`^`'~=-.,__,.-=~'`^


//-->
	<meta charset="utf-8">

	<title>JSCamp.Asia 2012 Registration</title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=900" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta property="og:title" content="JScamp.Asia 2012 Registration"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://jscamp.asia/getticket.php"/>
	<meta property="og:image" content="http://jscamp.asia/asset/jscampasia.jpg"/>
	<meta property="og:site_name" content="JSCamp.Asia"/>
	<meta property="og:description" content="The hands-on JavaScript web and mobile developer conference for Asia. Singapore, 29th + 30th November 2012"/>
	<meta name="title" content="JSCamp.Asia - Undisclosured"/>
	<meta name="description" content="The hands-on JavaScript web and mobile developer conference for Asia. Singapore, 29th + 30th November 2012"/>
	
	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

	<!-- CSS: implied media="all" -->
	<link rel="stylesheet" href="static5/css/style4.css" />
	
	<!-- All JavaScript at the bottom except shims -->
	<!--[if lte IE 8 ]><script src="static5/js/libs/es5.js"></script><![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Doppio+One|Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>
	<div id="bg"></div>

	<div id="body">
		<table id="home" class="goto">
		<tr>
			<td>
			<form action="getticket.php" method="get">
			<div id="discountcode" class="content">
				<?php if($code) { ?>
					<span>Sorry! &quot;<?php echo $code ?>&quot; isn't valid.<br/>You want to try again?</span>
				<?php } else { ?>
					<span>Wohoo! Let's sign up!<br/>Do you have a discount code?</span><br/>
				<?php } ?>
				<div class="form">
				<input type="text" name="code" id="code" autofocus="autofocus" value="" placeholder="Discount code" />
				<input type="submit" value="Let's go" />
				</div><br/><br/><br/><br/><br/>
				<a href="https://jscamp.wufoo.com/forms/jscamp-full-pass/">No, I don't have a discount code</a><br/><br/>
				<a href="http://jscamp.asia/">Back to jscamp.asia</a>
			</div>
			</form>
		
			</td>
		</tr>
		</table>
	</div>
	
	<div id="top" style="display: block">
		
		<table class="colors">
		<tr>
			<td>
				<span class="jscamp">jscamp</span><span class="asia">.asia</span>
			</td>
			<td>
				2012
			</td>
			<td>
			
			</td>
			<td>
			
			</td>
			<td>
			
			</td>
			<td>

			</td>
		</tr>
		</table>
		
	</div>
	
	<!-- end scripts-->

	<script type="text/javascript" defer="defer">

	// Google Analytics
	var _gaq=[['_setAccount','UA-31025490-1'],['_setDomainName', 'jscamp.asia'],['_trackPageview'],['_trackPageLoadTime']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));


	</script>
</body>
</html>

