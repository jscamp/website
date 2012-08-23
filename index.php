<?php
date_default_timezone_set("Asia/Singapore");

function getSecs() {

	$now = date("U",strtotime("2012-08-16 15:00:00")) - date("U");
	
	return $now;

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

	<title>JSCamp.Asia - Undisclosured</title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=900" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta property="og:title" content="JScamp.Asia - Undisclosured"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://jscamp.asia/"/>
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
		
			<div id="logoanim" class="content">
				<img src="static5/img/jscampasia.jpg" border="0"/>
				<div id="la_logo">
					<div id="la_jscamp">jscamp</div>
					<div id="la_asia">&nbsp;.asia</div>
					<div id="la_undisclosured">UNDISCLOSURED</div>
					<div id="ls_info">Singapore,<br/>29th + 30th November 2012</div>
				</div>
				<div id="la_landscape">
					<div id="la_palm">}</div>
					<div id="la_trunk">/</div>
					<span id="la_beach">~~~</span><span id="la_sea">~~</span>
				</div>
				<!--<div id="counter">
				00:00:00
				</div>
				<div id="ticketsale">
				Registration is open for a corporate rate of 590SGD!
				<br/><a href="http://www.techinasia.com/jscamp-asia-undisclosured-conference-singapore/" target="_blank">Find out more</a>
				</div>//-->

			</div>
			
			<div id="messageCont" class="flipped">
				<div class="front">
					<div id="message">The hands-on JavaScript, web and mobile<br/>
					developer conference for Asia</div>
				</div>
				<div class="back">
					<div id="sponsorsplash">
						with kind support of<br/>
						<a href="http://www.google.com/about/" target="_blank"><img src="static5/img/sponsors/google.png" width="103" /></a>
						<a href="http://www.softlayer.com" target="_blank"><img src="static5/img/sponsors/softlayer.png" width="103" /></a>
						<a href="https://www.paypal.com.sg/" target="_blank"><img src="static5/img/sponsors/paypal.png" width="103" /></a>
						<a href="http://spiffy.sg/" target="_blank"><img src="static5/img/sponsors/microsoft.png" width="103" /></a>
						<a href="http://html.adobe.com/" target="_blank"><img src="static5/img/sponsors/adobe.png" width="103" /></a>
					</div>
				</div>
			</div>
		
			</td>
		</tr>
		</table>
		
		<table class="colors">
		<tr>
			<td>
			</td>
			<td>
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
		<div id="info" class="goto">
			<div class="black">
				<div class="content">
					<h2>
						<span id="js">JS</span>
						+ <span id="asia">Asia</span> = <span id="love">&lt;3</span>
					</h2>
					<h3>
							Finally, a JavaScript conference in Asia.
								With all its awesome!<br/>
								Forget bacon. Here comes chicken rice!<br/><br/>
								<span class="announcement">

									<a href="getticket.php" id="ticketbutton">Register now!</a>		

								</span>
					</h3>
				</div>
			</div>
			<div id="infodesc" class="content">
				<table border="0">
				<tr>
					<td id="facts">
						<h4>The Facts</h4>
						
						<ul>
							<li><a href="JSCamp.Asia 2012.ics"><span class="icon date">DD:MM</span>29th + 30th November 2012</a></li>
							<li><a href="./talks"><span class="icon talks">/*</span>16 talks in 2 tracks</a></li>
							<li><a href="./workshops"><span class="icon workshops">()</span>6 workshops</a></li>
							<li><a href="./sprints"><span class="icon sprints">&gt;&gt;</span>2 day coding sprints</a></li>
							<li><a href="./venue"><span class="icon venue">@</span>NUSS Kent Ridge Guild House</a></li>
							<li><a href="getticket.php"><span class="icon price">$</span>S$590 ticket price</a></li>
						</ul>
						
						<p class="margin">
							You would like to come, but you need to convince your boss?<br/><a href="http://jscamp.asia/Why%20your%20employees%20need%20to%20attend%20JSCamp.pdf">This PDF will help.</a>
						</p>
						<p>
							Drop your E-Mail and we'll inform you when there are news!<br/>
							You can also add our <a href="https://www.google.com/calendar/embed?src=cjVtYXNwN2pkOG5tMDlrMG40bWFuYzZjNDRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&gsessionid=OK" target="_blank">Google Calendar</a>.
						</p>
						<form id="subscribeForm" action="addsubscriber.php" method="get">
							<input type="email" name="email" placeholder="your@email.com"/>
							<input type="submit" value="Keep me updated" />
							<div class="msg"></div>
						</form>
					</td>
					<td id="tweets">
						<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
						new TWTR.Widget({
						  version: 2,
						  type: 'profile',
						  rpp: 4,
						  interval: 30000,
						  width: '280',
						  height: '300',
						  theme: {
						    shell: {
						      background: 'transparent',
						      color: '#ffffff'
						    },
						    tweets: {
						      background: 'transparent',
						      color: '#ffffff',
						      links: '#ffffff'
						    }
						  },
						  features: {
						    scrollbar: false,
						    loop: false,
						    live: true,
						    behavior: 'all'
						  }
						}).render().setUser('jscamp_asia').start();
						</script>
						<span class="facebook">f</span>
						<a href="http://facebook.com/javascriptcamp" target="_blank">Find us on Facebook</a>
					</td>
				</tr>
				</table>
			</div>
		</div>
				
		<div id="sessions" class="goto content">
			<div id="sessionicon">
				<div id="sprints">&gt;&gt;<span>Sprints</span></div>
				<div id="workshops">()<span>Workshops</span></div>
				<div id="talks">/*<span>Talks</span></div>
			</div>
			<div class="sessiondesc current" id="talksdesc">
				<span class="intro">
					<h4>Talks</h4>
					We are so happy to host some of the most amazing people who shape the web everyday and who want to inspire
					and share their experience with you. Over the two days 16 speakers from all over the world will host in-depth sessions
					in 2 tracks.</span>
				<ul class="speakers">
					<li>
						<div class="links">
							<a href="http://twitter.com/ebidel" class="twitter icon" target="_blank" title="@ebidel"></a>
							<a href="https://plus.google.com/115478738847874567952" target="_blank" class="gplus icon" title="+Eric Bidelman">+</a>
						</div>
						<div class="img"><img src="static5/img/speakers/ericbidelman.png" alt="Eric Bidelman" border="0" /></div>
						<div class="name">
							Eric Bidelman
						</div>
						<div class="bio">
							Eric is a Senior Developer Programs Engineer on the <a href="http://www.google.com/chrome" target="_blank">Google Chrome</a> team. He is the author of "Using the HTML5 Filesystem API" and a core contributor to <a href="http://www.html5rocks.com" target="_blank">html5rocks.com</a>. Prior to Google, Eric worked as a software engineer at the University of Michigan where he designed rich web applications and APIs for the university's 19 libraries.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://twitter.com/secoif" class="twitter icon" target="_blank" title="@secoif"></a>
						</div>
						<div class="img"><img src="static5/img/speakers/timoxley.png" alt="Tim Oxley" border="0" /></div>
						<div class="name">
							Tim Oxley
						</div>
						<div class="bio">
							Tim is a JavaScript freelancer from Brisbane, working with the node.js platform and client-side MVC applications. He is passionate about readable, maintainable, organized code though best-practices, refactoring and tests.
							He works alongside Rails developers for international clients and organizes <a href="http://campjs.com">CampJS</a> in Australia.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://twitter.com/drbernhard" class="twitter icon" target="_blank" title="@drbernhard"></a>
						</div>
						<div class="img"><img src="static5/img/speakers/janjongboom.png" alt="Jan Jongboom" border="0" /></div>
						<div class="name">
							Jan Jongboom
						</div>
						<div class="bio">
							Jan Jongboom got in a real life fight when someone declared JavaScript 'just some scripting language'. During the day he channels his JavaScript love as a member of the <a href="http://c9.io" target="_blank">Cloud9 IDE</a> development team,
							making bad jokes about VBScript and dreaming of happy hour. The only native Brit in the company described him in one word: 'cheeky'. You can see him live on stage regularly, with talks about Cloud9, node.js, scaling and mobile development.
						</div>
					</li>

				</ul>
				<ul class="speakers">
					<li>
						<div class="links">
							<a href="http://twitter.com/divya" class="twitter icon" target="_blank" title="@divya"></a>
						</div>
						<div class="img"><img src="static5/img/speakers/divyamanian.png" alt="Divya Manian" border="0" /></div>
						<div class="name">
							Divya Manian
						</div>
						<div class="bio">
							Divya is part of the <a href="http://html.adobe.com/" target="_blank">Adobe Web Platform Team</a>. She
							made the jump from developing device drivers for Motorola phones to
							designing websites and has not looked back since. She takes her duties as
							an Open Web vigilante seriously which has resulted in collaborative
							projects such as <a href="http://html5please.com/" target="_blank">HTML5 Please</a> and <a href="http://html5boilerplate.com/" target="_blank">HTML5 Boilerplate</a>.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://twitter.com/ireneros" class="twitter icon" target="_blank" title="@ireneros"></a>
							<a href="https://plus.google.com/110949345457543290862" class="gplus icon" target="_blank" title="+Irene Ros">+</a>
						</div>
						<div class="img"><img src="static5/img/speakers/ireneros.png" alt="Irene Ros" border="0" /></div>
						<div class="name">
							Irene Ros
						</div>
						<div class="bio">
							Irene is a Senior Developer and Data Visualization Specialist at <a href="http://bocoup.com" target="_blank">Bocoup</a>.
							Most recently Irene has been working with the Guardian Interactive Team in the UK on the <a href="http://misoproject.com" target="_blank">Miso Project</a>,
							an open source toolkit designed to expedite the creation of high-quality interactive storytelling and data visualisation content.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://twitter.com/wonderchook" class="twitter icon" target="_blank" title="@wonderchook"></a>
						</div>
						<div class="img"><img src="static5/img/speakers/katechapman.png" alt="Kate Chapman" border="0" /></div>
						<div class="name">
							Kate Chapman
						</div>
						<div class="bio">
							Kate Chapman is the Executive Director and a founding member of the
							<a href="http://hot.openstreetmap.org/" target="_blank">Humanitarian OpenStreetMap Team (HOT)</a>.  HOT utilizes OpenStreetMap to
							create free geographic data for disaster preparedness, response, and
							recovery. 
							Kate's most recent work has been in Indonesia in partnership with
							<a href="http://www.ausaid.gov.au/Pages/home.aspx" target="_blank">AusAID</a> and the <a href="http://www.bnpb.go.id/website/asp/index.asp" target="_blank">Indonesian National Disaster Management Agency (BNPB)</a>
							to collect infrastructure data. Kate was involved in development of multiple web-GIS applications.
							She acted as Developer Community Lead for <a href="http://geocommons.com/" target="_blank">GeoCommons</a> and served in
							various technical roles at <a href="http://imapdata.com/" target="_blank">iMapData</a>.
						</div>
					</li>
				</ul>
				<ul class="speakers">
					<li>
						<div class="links">
							<a href="http://twitter.com/angustweets" class="twitter icon" target="_blank" title="@angustweets"></a>
						</div>
						<div class="img"><img src="static5/img/speakers/anguscroll.png" alt="Angus Croll" border="0" /></div>
						<div class="name">
							Angus Croll
						</div>
						<div class="bio">
							Angus is a member of the Web Core team at <a href="http://twitter.com" target="_blank">Twitter</a>. He is author of the <a href="http://javascriptweblog.wordpress.com" target="_blank">JavaScript JavaScript blog</a> and an upcoming JavaScript book for No Starch Press. Originally from the UK, Angus now lives in Sausalito, California.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://twitter.com/maccman" class="twitter icon" target="_blank" title="@maccman"></a>
						</div>
						<div class="img"><img src="static5/img/speakers/alexmccaw.png" alt="Alex McCaw" border="0" /></div>
						<div class="name">
							Alex MacCaw
						</div>
						<div class="bio">
							<a href="http://blog.alexmaccaw.com/" target="_blank">Alex</a> is a Ruby and JavaScript developer, O'Reilly author and works for <a href="http://stripe.com" target="_blank">Stripe</a>, a developer focussed online-payment startup from San Francisco.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://twitter.com/michalbe" class="twitter icon" title="@michalbe" target="_blank"></a>
						</div>
						<div class="img"><img src="static5/img/speakers/michalbudzynski.png" alt="Michal Budzynski" border="0" /></div>
						<div class="name">
							Michal Budzynski
						</div>
						<div class="bio">
							Michal is an Open Web Alchemist, working on Boot2Gecko project at Mozilla.
							In his free time he creates many ridiculous experiments like <a href="https://developer.mozilla.org/pl/demos/detail/css-nyan-cat" target="_blank">CSS Nyan Cat</a> or <a href="https://demoparty.mozillalabs.com/gallery/43/al-your-gradient-are-belong-to-us" target="_blank">All your gradient are belong to us</a>.
							He officiates as an HTML5 GameDev trainer in W3C and ran technical workshops and tech-talks in many countries on different continents. He organizes <a href="http://ongamestart.com/" target="_blank">onGameStart</a> in Warsaw, the first HTML5 games conference and safely says that making web a better place is not just his job - it's his lifestyle.
							That's why he founds <a href="http://bly.sk" target="_blank">BLYSK</a>, very first serious web animation tool.
						</div>
					</li>
					<li>
						<div class="name">
							Check back every week
						</div>
						<div class="bio">
							We'll reveal more speakers every week. Be sure to check back and get the updates!<br/><br/>
							Follow us on <a href="http://twitter.com/jscamp_asia" target="_blank">Twitter</a><br/>
							and <a href="http://facebook.com/javascriptcamp" target="_blank">Facebook</a><br/><br/>
							Tell us who you miss on this list in our 
							<a href="http://jscamp.wufoo.com/forms/call-for-speakers" target="_blank">Call for Speakers</a>!
						</div>
					</li>
				</ul>
			</div>
			<div class="sessiondesc" id="workshopsdesc">
				<span class="intro">
					<h4>Workshops</h4>
					Over the time of the conference we want you to get your hands dirty. There's plenty of time, power and Wi-Fi to check out this new library,
					concept or idea you've heard about while the entire community is around. Even better: Professional hosts will explain and guide you in our workshop sessions.
				</span>
				<ul class="speakers">
					<li>
						<div class="links">
							<a href="https://plus.google.com/115478738847874567952" target="_blank" class="gplus icon" title="+Shannon -jj Behrens">+</a>
						</div>
						<div class="img"><img src="static5/img/speakers/jj.png" alt="Shannon &quot;JJ&quot; Behrens" border="0" /></div>
						<div class="name">
							Shannon JJ Behrens
						</div>
						<div class="bio">
							JJ is a developer advocate at Google. His goal is to help people write high-fidelity, high-performance, rich, client-side applications in <a href="http://code.google.com/p/dart/" target="_blank">Dart</a>. He's a well-known member of the Python community. He <a href="http://jjinux.blogspot.com" target="_blank">blogs</a> on topics such as Python, Ruby, Linux, open source software, the Web, and lesser-known programming languages.
						</div>
					</li>
				</ul>
				<ul class="speakers">
					<li>
						<div class="links">
							<a href="http://twitter.com/rstacruz" class="twitter icon" title="@rstacruz" target="_blank"></a>
						</div>
						<div class="img"><img src="static5/img/speakers/ricostacruz.png" alt="Rico Sta. Cruz" border="0" /></div>
						<div class="name">
							Rico Sta. Cruz
						</div>
						<div class="bio">
							<a href="http://www.ricostacruz.com" target="_blank">Rico</a> is a Ruby and JavaScript developer from the Philippines whose passion lies in building great web applications and slick user interfaces.
							He is the co-founder of a small web development team in Manila called <a href="http://nadarei.co" target="_blank">Nadarei</a>, the author of the Backbone.js guide <a href="http://ricostacruz.com/backbone-patterns" target="_blank">Backbone Patterns</a> among other open-source projects that help people build great apps.
						</div>
					</li>
				</ul>
				<ul class="speakers">
					<li>
						<div class="name">
							Soon!
						</div>
						<div class="bio">
							More Workshop hosts and the topics will be announced closer to the conference. Be sure to check back and get the updates!<br/><br/>
							Follow us on <a href="http://twitter.com/jscamp_asia" target="_blank">Twitter</a><br/>
							and <a href="http://facebook.com/javascriptcamp" target="_blank">Facebook</a><br/><br/>
							Suggest your favorite host in our
							<a href="http://jscamp.wufoo.com/forms/call-for-speakers" target="_blank">Call for Speakers</a>!
						</div>
					</li>
				</ul>
			</div>
			<div class="sessiondesc" id="sprintsdesc">
				<span class="intro">
					<h4>Sprints</h4>
					The weekend after the conference we have a very special offer. Interested people can come together in Singapores trendy co-working spaces
					and contribute as a group to open source JavaScript projects. That means a combined 4 days of JavaScript goodness.<br/><br/>
					If you're interested in using our conference to find contributors for your project and have the best people in the region work on it, please apply in our <a href="http://jscamp.wufoo.com/forms/call-for-speakers">Call for Speakers</a>.
				</span>
				<ul class="speakers">
					<li>
						<div class="name">
							Soon!
						</div>
						<div class="bio">
							Sprints will be announced two months before the conference.<br/><br/>
							If you want to host one, please let us know in our
							<a href="http://jscamp.wufoo.com/forms/call-for-speakers" target="_blank">Call for Speakers</a>!<br/><br/>
							Follow us on <a href="http://twitter.com/jscamp_asia" target="_blank">Twitter</a><br/>
							and <a href="http://facebook.com/javascriptcamp" target="_blank">Facebook</a>
						</div>
					</li>
				</ul>
				<ul class="speakers">
					
				</ul>
				<ul class="speakers">
					
				</ul>
			</div>

		</div>
		
		<div id="venue" class="goto">
			<table class="colors">
			<tr>
				<td>
				</td>
				<td>
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
			<div id="venuedesc">
				<div id="venuepicture" class="black">
					<div id="hotspots" class="content">
						<ul id="pins">
							<li style="top: 304px; left: 334px;">
								<div><b>The Entrance hall</b><br/>Make yourself at home. NUSS will serve you snacks, drinks and a delicious lunch buffet here.</div></li>
							<li style="top: 305px; left:208px;">
								<div><b>The Della &amp; Seng Gee Guild Hall</b><br/>This big room will host the keynotes and the first track as well as our workshop introductions.</div></li>
							<li style="top: 245px; left: 229px;">
								<div><b>Cluny/Dalvey/Evans</b><br/>The three rooms on the second floor combined host our second track of talks and workshops.</div></li>
							<li style="top: 121px; left: 324px;">
								<div><b>The Activity Room</b><br/>For workshops we can use this room as a flexible break-out option.</div></li>
							<li style="top: 155px; left: 290px;">
								<div><b>The Sports Bar</b><br/>Parallel to all ongoings we'll offer hang-out space, power and Wifi up on the open 3rd floor for you.</div></li>
							<li style="top: 170px; left: 520px;">
								<div><b>Café on the Ridge</b><br/>If buffet is not enough, the Café offers Western and Asian cuisines inside and on its terrace right next to the pool.<br/><span class="small">This is an NUSS offer and not included in the ticket.</span></div></li>
							<li style="top: 253px; left: 478px;">
								<div><b>The Scholar</b><br/>If you're craving a little extra Asia, The Scholar offers exquisite Chinese cuisine.<br/><span class="small">This is an NUSS offer and not included in the ticket.</span></div></li>
						</ul>
						<div class="hotspot">
						</div>
					</div>
					<h2 class="content">Our Venue</h2>
					<img src="static5/img/venue.png" height="349" border="0" />
				</div>
				<div class="content">
					<table border="0">
					<tr>
						<td>
							<h4>NUSS Kent Ridge Guild House</h4>
							<p>
								In the south of the National University of Singapore nests this modern Alumni Club. Besides flexible
								conference functions it offers its members all kinds of sport facilities, restaurants and bars.
								Some of those will also be available to our guests during the time of JSCamp. Just to make a great event yet a little bit better.
								<br/><br/>
								<b>Address:</b> (<a href="https://maps.google.com/maps?q=NUSS+Kent+Ridge+Guild+House,+Singapore&hl=en&sll=37.0625,-95.677068&sspn=82.939223,80.15625&t=h&hq=kent+ridge+guild+house,&hnear=Singapore&cid=8550792046711281217&z=18&iwloc=A" target="_blank">Map</a>)<br/>
								9 Kent Ridge Drive<br/>
								Singapore 119241
								<br/><br/><br/>
							</p>
							<img src="static5/img/nuss.jpg" border="0" />
						</td>
						<td id="wifi">
							<div id="wifiicon">
								<img src="static5/img/wifi.png" border="0" />
							</div>
							<h4>Wi-Fi, free and open</h4>
							<p>
								We are making a great extra effort to provide an open and free Wi-Fi internet connection capable of feeding several hundred devices.<br/>
								This way you can use all your favorite webservices during our workshops and connect right away with the other amazing
								people you're going to meet.
							</p>
						</td>
					</tr>
					</table>
				</div>
			</div>
		</div>
		
		<div id="sponsors" class="goto content">
			<div id="sessionicon">
				<div class="current">$</div>
			</div>
			<div class="sessiondesc current" id="sponsorsdesc">
				<span class="intro">
					<h4>Sponsors</h4>
					Meet the glorious ones. The ones that make this event happen through their financial and organizational support.</span>
				<ul class="speakers">
					<li>
						<div class="links">
							<a href="http://www.google.com/about/" target="_blank" class="www icon">www</a>
							<a href="http://twitter.com/googleatwork" target="_blank" class="twitter icon" title="@googleatwork"></a>
						</div>
						<div class="img"><a href="http://www.google.com/about/" target="_blank"><img src="static5/img/sponsors/google.png" /></a></div>
						<div class="bio">
							Google just moved into their brand-spanking new office here in Singapore and is a great supporter of the local developer community in South-East Asia.
							At JScamp they'll share insights into some of their newest web developments.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://spiffy.sg/" target="_blank" class="www icon">www</a>
							<a href="http://twitter.com/gospiffy" target="_blank" class="twitter icon" title="@gospiffy"></a>
						</div>
						<div class="img"><a href="http://spiffy.sg/" target="_blank"><img src="static5/img/sponsors/microsoft.png" /></a></div>
						<div class="bio">
							Microsoft's Developer &amp; Platform Evangelism (DPE) group builds a vibrant solutions ecosystem through evangelism, community engagement and technology marketing. The biggest software company in the world has a long history of support for the Southeast Asian developer community. From consumer products to enterprise solutions they power the most popular platforms for developers around the world to work with.
						</div>
					</li>
				</ul>
				<ul class="speakers">
					<li>
						<div class="links">
							<a href="http://www.softlayer.com/" target="_blank" class="www icon">www</a>
							<a href="http://twitter.com/softlayer" class="twitter icon" target="_blank" title="@softlayer"></a>
						</div>
						<div class="img"><a href="http://www.softlayer.com" target="_blank"><img src="static5/img/sponsors/softlayer.png" /></a></div>
						<div class="bio">
							Softlayer just opened a huge datacenter here in Singapore to be able to serve Asia even better with their physical and virtual cloud offers.
							We are happy that they support us in our mission to bring you a great conference.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://html.adobe.com" target="_blank" class="www icon">www</a>
							<a href="http://twitter.com/adobe" class="twitter icon" target="_blank" title="@paypal"></a>
						</div>
						<div class="img"><a href="http://html.adobe.com" target="_blank"><img src="static5/img/sponsors/adobe.png" /></a></div>
						<div class="bio">
							Along with the community, Adobe is developing new web standards and advancing existing ones. Adobe wants to make the web more wonderful by championing features in the W3C and engineering those features directly in open browser engines like Webkit.
						</div>
					</li>
				</ul>
				<ul class="speakers">
					<li>
						<div class="links">
							<a href="http://www.paypal.com.sg" target="_blank" class="www icon">www</a>
							<a href="http://twitter.com/paypal" class="twitter icon" target="_blank" title="@paypal"></a>
						</div>
						<div class="img"><a href="http://www.paypal.com.sg" target="_blank"><img src="static5/img/sponsors/paypal.png" /></a></div>
						<div class="bio">
							PayPal is the safer, easier way to pay and get paid online. The service allows anyone to pay in any way they prefer, including through credit cards, bank accounts, PayPal Smart Connect or account balances, without sharing financial information.
						</div>
					</li>
					<li>
						<div class="links">
							<a href="http://www.adzcentral.com" target="_blank" class="www icon">www</a>
							<a href="http://twitter.com/adzcentral" class="twitter icon" target="_blank" title="@adzcentral"></a>
						</div>
						<div class="img"><a href="http://www.adzcentral.com" target="_blank"><img src="static5/img/supporters/adz.png" /></a></div>
						<div class="bio">
							ADZ is South-East Asia's first online advertisement Demand-Side Platform. Build on top of state-of-the-art Real-Time-Bidding infrastructure ADZ uses huge amounts
							of JavaScript to deliver the best user experience in the industry.
						</div>
					</li>
					<li>
						<div class="name">
							Become a Sponsor
						</div>
						<div class="bio">
							We are eager to make JScamp the web and mobile developer conference of the year and there is much to benefit from as our sponsor. <a href="mailto:sponsors@jscamp.asia">Drop us a mail</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
		
		<div class="clear"></div>
		
		<table class="colors">
		<tr>
			<td>
			</td>
			<td>
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
		<div id="team" class="goto">
			<div class="content">
		
				<div id="logoanim">
					<img src="static5/img/jscampasia.jpg" border="0"/>
					<div id="la_logo">
						<div id="la_jscamp">jscamp</div>
						<div id="la_asia">&nbsp;.asia</div>
						<div id="la_undisclosured">UNDISCLOSURED</div>
						<div id="ls_info">Singapore,<br/>29th + 30th November 2012<br/><br/><br/>A Nerdherd Pte. Ltd. event
							<br/><a href="terms.html" style="font-size: 0.8em; font-family: 'Open Sans'; opacity: 0.5;">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
				
				<div id="teamdesc">
				
					<h4>Wizards, Ninjas, call us however you like</h4>
				
					<p>
						As long as you have a great and inspiring time, we are happy. Please do share your feedback with us.
						This is gonna be your conference! Write us!
					</p>
				
					<ul>
						<li>
							
							<a href="http://twitter.com/serrynaimo" target="_blank"><img src="static5/img/team/thomas.jpg" border="0" /></a>
							<div class="name">
								<a href="http://twitter.com/serrynaimo" target="_blank">Thomas Gorissen</a>
								<a href="http://twitter.com/serrynaimo" target="_blank" class="twitter icon" title="@serrynaimo"></a>
							</div>
							<div class="mail">
								<a href="mailto:thomas@jscamp.asia">thomas@jscamp.asia</a>
							</div>
							
						</li>
						<li>
							
							<a href="http://twitter.com/sayanee_" target="_blank"><img src="static5/img/team/sayanee.jpg" border="0" /></a>
							<div class="name">
								<a href="http://twitter.com/sayanee_" target="_blank">Sayanee Basu</a>
								<a href="http://twitter.com/sayanee_" target="_blank" class="twitter icon" title="@sayanee_"></a>
							</div>
							<div class="mail">
								<a href="mailto:sayanee@jscamp.asia">sayanee@jscamp.asia</a>
							</div>
							
						</li>
						
						<li>
							
							<a href="http://twitter.com/sebdeckers" target="_blank"><img src="static5/img/team/seb.jpg" border="0" /></a>
							<div class="name">
								<a href="http://twitter.com/sebdeckers" target="_blank">Sebastiaan Deckers</a>
								<a href="http://twitter.com/sebdeckers" target="_blank" class="twitter icon" title="@sebdeckers"></a>
							</div>
							<div class="mail">
								<a href="mailto:seb@jscamp.asia">seb@jscamp.asia</a>
							</div>
							
						</li>
					</ul>
					

				</div>
				
			</div>
		
		</div>
		
	</div>

	
	<div id="top">
		
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
				<a href="getticket.php" target="_blank">Register now!</a>
				<a href="http://jscamp.wufoo.com/forms/call-for-speakers" target="_blank">Call for Speakers</a>
			</td>
		</tr>
		</table>
		
	</div>
	
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> -->
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="static5/js/libs/jquery.min.js">\x3C/script>')</script>

	<!-- Setup Adz bootstrapping -->
	<script type="text/javascript">

	</script>

	<!-- scripts concatenated and minified via ant build script-->
	<script type="text/javascript" src="static5/js/dependencies/0002-browsercheck-ck.js"></script>
	<script type="text/javascript" src="static5/js/dependencies/0020-underscore-ck.js"></script>
	<script type="text/javascript" src="static5/js/dependencies/0050-audiofade-ck.js"></script>
	<script type="text/javascript" src="static5/js/dependencies/0070-jquery.scrollto-ck.js"></script>
	<script type="text/javascript" src="static5/js/dependencies/0080-jquery.form-ck.js"></script>
	<script type="text/javascript" src="static5/js/main/04-jscamp-ck.js"></script>
	<!-- end scripts-->
	
	<audio id="la_oceansound" preload="auto" autobuffer="autobuffer" style="display: none"> 
	  <source src="static5/fx/ocean_edge.wav" />
	</audio>

    <!-- Resource strings used in Javascript for localization (and other variables and third-party additions) -->
	<!--<script type="text/javascript" src="static5/js/l10n/en.js"></script> -->
	
	<script type="text/javascript" defer="defer">

	// Google Analytics
	var _gaq=[['_setAccount','UA-31025490-1'],['_setDomainName', 'jscamp.asia'],['_trackPageview'],['_trackPageLoadTime']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
 
	//time to countdown in seconds, and element ID
	javascript_countdown.init(0, 'counter');

	</script>
</body>
</html>
