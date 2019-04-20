<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="favicon.ico" rel="shortcut icon" />
	<title>PageShifter Generator v0.95</title>
	<meta name="description" content="Burst Media PageShifter Tag Generator">
	<meta name="author" content="Ben Rathbun">
	<link href='http://fonts.googleapis.com/css?family=Roboto:700,500,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colorbox.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/fields.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script> 
</head>
<body>
<div id="wrapper">
	<div id="header"><div id="head"></div></div>
	<div id="container">
		<div id="content">
			<h2>Burst Media PageShifter Tag Generator</h2>
			<div id="notice"></div>

			<form action="" id="submit" method="POST">

				<div class="radio input">
					<input type="radio" id="pushdownunit" name="unit" value="pushdown" checked=true>
					<label for="pushdownunit">Pushdown/Billboard/Tophat</label>	
					<input type="radio" id="tophatunit" name="unit" value="pagewrap">
					<label for="tophatunit">Pagewrap</label>
					<div class="label"><div class="labelText">Select Unit</div></div>
				</div>

				<div class="radio input">
					<input type="radio" id="nomulti" name="multitool" value="none" checked=true>
					<label for="nomulti">None</label>						
					<input type="radio" id="skinmulti" name="multitool" value="skin">
					<label for="skinmulti">Skin</label>	
					<input type="radio" id="ffmulti" name="multitool" value="fixedfooter" disabled>
					<label for="ffmulti">Fixed Footer</label>
					<div class="label"><div class="labelText">Select Multitool Integration</div></div>
				</div>

				<div class="input" id="multiInput">
					<input class="highlight smallInput" id="multiID" type="text" name="multiID" placeholder="id#" maxlength="4" />
					<div class="label"><div class="labelText">Enter the Multitool ID Number (e.g. 213)</div></div>
				</div>

				<div class="radio input">
					<input type="radio" id="envprod" name="environment" value="production" checked=true>
					<label for="envprod">Production</label>
					<input type="radio" id="envdemo" name="environment" value="demo">
					<label for="envdemo">Demo</label>				
					<div class="label"><div class="labelText">Environment</div></div>
				</div>				

				<div class="radio input">
					<input type="radio" id="fadeani" name="animation" value="fade" checked=true>
					<label for="fadeani">Fade</label>
					<input type="radio" id="slideani" name="animation" value="slide">
					<label for="slideani">Slide</label>			
					<div class="label"><div class="labelText">Select Animation</div></div>
				</div>

				<div class="radio input">
					<input type="radio" id="flashtype" name="typeproperty" value="flash" checked=true>
					<label for="flashtype">Flash</label>
					<input type="radio" id="imagetype" name="typeproperty" value="image">
					<label for="imagetype">Image</label>				
					<div class="label"><div class="labelText">Select Creative Type</div></div>
				</div>

				<div class="input" id="widthInput">
					<input class="highlight smallInput" id="width" type="text" name="width" placeholder="970" maxlength="4" />
					<div class="label"><div class="labelText">Enter the width of your main creative (in px)</div></div>
				</div>
				<div class="input" id="colHeightInput">
					<input class="highlight smallInput" id="colheight" type="text" name="colheight" placeholder="66" maxlength="4" />
					<div class="label"><div class="labelText">Enter the height of the collapsed state of your main creative (in px)</div></div>
				</div>
				<div class="input" id="expHeightInput">
					<input class="highlight smallInput" id="expheight" type="text" name="expheight" placeholder="418" maxlength="4" />
					<div class="label"><div class="labelText">Enter the height of the expanded state of your main creative (in px)</div></div>
				</div>

				<div class="input" id="colCreativeInput">
					<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
					<input class="highlight largeInput" id="colCreative" type="text" name="colCreative" placeholder="http://..."/>
					<div class="label"><div class="labelText">Enter the URL to the collapsed state creative <span class='italic'>* Accepts .swf, .jpg, .png, .gif</span></div></div>
				</div>
				<div class="input" id="expCreativeInput">
					<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
					<input class="highlight largeInput" id="expCreative" type="text" name="expCreative" placeholder="http://..."/>
					<div class="label"><div class="labelText">Enter the URL to the expand state creative <span class='italic'>* Accepts .swf, .jpg, .png, .gif</span></div></div>
				</div>
				<div class="input" id="bgCreativeInput">
					<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
					<input class="highlight largeInput" id="bgCreative" type="text" name="bgCreative" placeholder="http://..."/>
					<div class="label"><div class="labelText">Enter the URL to the background creative <span class='italic'>* Accepts .swf, .jpg, .png, .gif</span></div></div>
				</div>

				<div class="input" id="bgColorInput">
					<input class="highlight smallInput" id="bgColor" type="text" name="bgColor" placeholder="#F1F1F1" maxlength="7" />
					<div class="label"><div class="labelText">Enter the HEX hash value for the background color. <span class='italic'>*Leave blank for no background color</span></div></div>
				</div>				

				<div class="radio inputNoLabel">
					<input type="radio" id="clickexpand" name="expandtypeproperty" value="click" checked=true>
					<label for="clickexpand">Click</label>
					<input type="radio" id="hoverexpand" name="expandtypeproperty" value="hover" class="required">
					<label for="hoverexpand">Hover</label>
					<input type="radio" id="autoexpand" name="expandtypeproperty" value="auto">
					<label for="autoexpand">Auto</label>					
					<div class="label"><div class="labelText">Select the type of Expansion.</div></div>

					<div class="input" id="expandTimeInput">
						<input class="highlight smallInput" id="expandTime" type="text" name="expandTime" placeholder="0"/>
						<div class="label"><div class="labelText">Enter the delay (in seconds) <span class='italic'>*Enter 0 for no delay.</span></div></div>
					</div>
				</div>

				<div class="radio inputNoLabel">
					<input type="radio" id="clickcollapse" name="collapsetypeproperty" value="click" checked=true>
					<label for="clickcollapse">Click</label>
					<input type="radio" id="autocollapse" name="collapsetypeproperty" value="auto">
					<label for="autocollapse">Auto</label>					
					<div class="label"><div class="labelText">Select the type of Collapse.</div></div>

					<div class="input" id="collapseTimeInput">
						<input class="highlight smallInput" id="collapseTime" type="text" name="collapseTime" placeholder="0"/>
						<div class="label"><div class="labelText">Enter the delay (in seconds) <span class='italic'>*Enter 0 for no delay. Default will be 7s with no interaction & 30s with interaction or hoverout.</span></div></div>
					</div>
				</div>

				<div class="inputNoLabel">
					<div id="trackingButton"><input id="tracking" type="button" value="Tracking and Events" /></div>
					<div class="label"><div class="labelText">Click to show Tracking and Event Parameters.</div></div>

					<div id="trackingInput">
						
						<div class="input">
						<input class="highlight largeInput" id="expandTrack" type="text" name="expandTrack" value="##EVENT_ex##" placeholder="##EVENT_ex##"/>
						<div class="label"><div class="labelText">'Creative Expansion' tracking macro.</div></div>
						</div>

						<div class="input">
						<input class="highlight largeInput" id="collapseTrack" type="text" name="collapseTrack" value="##EVENT_cp##" placeholder="##EVENT_cp##"/>
						<div class="label"><div class="labelText">'Creative Collapse' tracking macro.</div></div>
						</div>

						<div class="input">
						<input class="highlight largeInput" id="fullTrack" type="text" name="fullTrack" value="##EVENT_fv##" placeholder="##EVENT_fv##"/>
						<div class="label"><div class="labelText">'Full View' tracking macro.</div></div>
						</div>

						<div class="input">
						<input class="highlight largeInput" id="facebook" type="text" name="facebook" value="##EVENT_fb##/REDIRURL=FACEBOOK_URL_HERE" placeholder="##EVENT_fb##/REDIRURL=FACEBOOK_URL_HERE"/>
						<div class="label"><div class="labelText">'Facebook' tracking macro. <span class='italic'>*Leave ##EVENT_fb##/REDIRURL= at the beginning.</span></div></div>
						</div>

						<div class="input">
						<input class="highlight largeInput" id="twitter" type="text" name="twitter" value="##EVENT_ts##/REDIRURL=TWITTER_URL_HERE" placeholder="##EVENT_ts##/REDIRURL=TWITTER_URL_HERE"/>
						<div class="label"><div class="labelText">'Twitter' tracking macro <span class='italic'>*Leave ##EVENT_ts##/REDIRURL= at the beginning.</span></div></div>
						</div>

						<div class="input">
						<input class="highlight largeInput" id="pinterest" type="text" name="pinterest" value="##EVENT_ps##/REDIRURL=PINTEREST_URL_HERE" placeholder="##EVENT_ps##/REDIRURL=PINTEREST_URL_HERE"/>
						<div class="label"><div class="labelText">'Pinterest' tracking macro <span class='italic'>*Leave ##EVENT_ps##/REDIRURL= at the beginning.</span></div></div>
						</div>

						<div class="input">
						<input class="highlight largeInput" id="instagram" type="text" name="instagram" value="##EVENT_ig##/REDIRURL=INSTAGRAM_URL_HERE" placeholder="##EVENT_ig##/REDIRURL=INSTAGRAM_URL_HERE"/>
						<div class="label"><div class="labelText">'Instagram' tracking macro <span class='italic'>*Leave ##EVENT_ig##/REDIRURL= at the beginning.</span></div></div>
						</div>

						<div class="input">
						<input class="highlight largeInput" id="tumbler" type="text" name="tumbler" value="##EVENT_tm##/REDIRURL=TUMBLR_URL_HERE" placeholder="##EVENT_tm##/REDIRURL=TUMBLR_URL_HERE"/>
						<div class="label"><div class="labelText">'Tumbler' tracking macro <span class='italic'>*Leave ##EVENT_tm##/REDIRURL= at the beginning.</span></div></div>
						</div>

						<div class="input">
						<input class="highlight largeInput" id="impression" type="text" name="impression" value="3RD_PARTY_IMPRESSION_TRACKER_GOES_HERE##BUSTER##" placeholder="3RD_PARTY_IMPRESSION_TRACKER_GOES_HERE##BUSTER##"/>
						<div class="label"><div class="labelText">3rd party impression tracker <span class='italic'>*Leave ##BUSTER## at the end.</span></div></div>						
						</div>

						<div class="input">
						<input class="highlight largeInput" id="skinClickTrack" type="text" name="skinClickTrack" value="##EVENT_sk##/REDIRURL=SKIN_CLICK_TRACKER_GOES_HERE" placeholder="##EVENT_sk##/REDIRURL=SKIN_CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Skin click tracker <span class='italic'>*Remove ##EVENT_sk##/REDIRURL= outside AdConductor</span></div></div>						
						</div>

						<!-- Click Tracking Macros 1-10 Start -->
						<div class="input">
						<input class="highlight largeInput" id="clickTrackOne" type="text" name="clickTrackOne" value="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #1 <span class='italic'>*Remove ##REDIRECT##/REDIRURL= outside AdConductor.</span></div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackTwo" type="text" name="clickTrackTwo" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #2</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackThree" type="text" name="clickTrackThree" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #3</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackFour" type="text" name="clickTrackFour" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #4</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackFive" type="text" name="clickTrackFive" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #5</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackSix" type="text" name="clickTrackSix" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #6</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackSeven" type="text" name="clickTrackSeven" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #7</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackEight" type="text" name="clickTrackEight"  placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #8</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackNine" type="text" name="clickTrackNine" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #9</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="clickTrackTen" type="text" name="clickTrackTen" placeholder="##REDIRECT##/REDIRURL=CLICK_TRACKER_GOES_HERE"/>
						<div class="label"><div class="labelText">Click tracker #10</div></div>						
						</div>
						<!-- Click Tracking Macros 1-10 End -->

						<!-- Interaction Tracking Macros 1-4 Start -->
						<div class="input">
						<input class="highlight largeInput" id="interaction1" type="text" name="interaction1" placeholder="##EVENT_i1##"/>
						<div class="label"><div class="labelText">Interaction One</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="interaction2" type="text" name="interaction2" placeholder="##EVENT_i2##"/>
						<div class="label"><div class="labelText">Interaction Two</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="interaction3" type="text" name="interaction3" placeholder="##EVENT_i3##"/>
						<div class="label"><div class="labelText">Interaction Three</div></div>						
						</div>
						<div class="input">
						<input class="highlight largeInput" id="interaction4" type="text" name="interaction4" placeholder="##EVENT_i4##"/>
						<div class="label"><div class="labelText">Interaction Four</div></div>						
						</div>
						<!-- Interaction Tracking Macros 1-4 End -->

						<!-- VAST Tracking Macros Start -->
						<div class="input">
						<input class="highlight largeInput" id="vastStart" type="text" name="vastStart" value="##EVENT_st##" placeholder="##EVENT_st##"/>
						<div class="label"><div class="labelText">VAST 'Start' tracking macro</div></div>
						</div>
						<div class="input">
						<input class="highlight largeInput" id="vastFirstQuartile" type="text" name="vastFirstQuartile" value="##EVENT_fq##" placeholder="##EVENT_fq##"/>
						<div class="label"><div class="labelText">VAST 'First Quartile' tracking macro</div></div>
						</div>
						<div class="input">
						<input class="highlight largeInput" id="vastMidPoint" type="text" name="vastMidPoint" value="##EVENT_mp##" placeholder="##EVENT_mp##"/>
						<div class="label"><div class="labelText">VAST 'Mid-Point' tracking macro</div></div>
						</div>						
						<div class="input">
						<input class="highlight largeInput" id="vastThirdQuartile" type="text" name="vastThirdQuartile" value="##EVENT_tq##" placeholder="##EVENT_tq##"/>
						<div class="label"><div class="labelText">VAST 'Third Quartile' tracking macro</div></div>
						</div>
						<div class="input">
						<input class="highlight largeInput" id="vastComplete" type="text" name="vastComplete" value="##EVENT_co##" placeholder="##EVENT_co##"/>
						<div class="label"><div class="labelText">VAST 'Completion' tracking macro</div></div>
						</div>

					</div>

				</div>

				<div class="input">
					<input id="generateTag" type="button" value="Generate Tag :)" >
					<p><textarea class="highlight" name="tagBoxValue" id="tagBox" rows="7" cols="70" placeholder="Your tag will spawn here..." ></textarea></p>
				</div>
			
				<div class="input clientName">
					<input id="exportTag" onclick="submitForm('export.php')" type="button" value="Export Tag :P" >
					<input class="highlight" type="text" name="client" placeholder="Client Name"/>
					<span class="italic">* Optional</span><br />
				</div>				

				<h3>Select your site below and generate a test page using the tag above.</h3>

				<p>
				<input type="radio" id="momiq" name="demosite" value="momiqsite" checked=true>
				<label for="momiq">MomIQ</label>
				<input type="radio" id="elladaily" name="demosite" value="ellasite">
				<label for="elladaily">EllaDaily</label>
				<input type="radio" id="giantrealm" name="demosite" value="giantsite">
				<label for="giantrealm">GiantRealm</label>
				<input type="radio" id="theladbible" name="demosite" value="biblesite">
				<label for="theladbible">TheLadBible</label>

				<input type="radio" id="femalefirst" name="demosite" value="femalefirstsite">
				<label for="femalefirst">FemaleFirst</label><br />
				<input type="radio" id="greatbritishchefs" name="demosite" value="greatchefsite">
				<label for="greatbritishchefs">GreatBritishChefs</label>
				<input type="radio" id="djmag" name="demosite" value="djmagsite">
				<label for="djmag">DJMag</label>
				<input type="radio" id="westlondonmum" name="demosite" value="westlondonsite">
				<label for="westlondonmum">WestLondonmum</label>
				<input type="radio" id="nocigar" name="demosite" value="nocigarsite">
				<label for="nocigar">NoCigar</label>

				</p>

				<div class="" id="momiqgraphic">
					<img src="img/momiq_thumb.jpg" />
				</div>
				<div class="" id="ellagraphic">
					<img src="img/ella_thumb.jpg" />
				</div>
				<div class="" id="grgraphic">
					<img src="img/giantrealm_thumb.jpg" />
				</div>
				<div class="" id="biblegraphic">
					<img src="img/ladbible_thumb.jpg" />
				</div>
				<div class="" id="femalefirstgraphic">
					<img src="img/femalefirst_thumb.jpg" />
				</div>
				<div class="" id="greatchefsgraphic">
					<img src="img/greatchefs_thumb.jpg" />
				</div>
				<div class="" id="djmaggraphic">
					<img src="img/djmag_thumb.jpg" />
				</div>
				<div class="" id="westlondongraphic">
					<img src="img/westlondon_thumb.jpg" />
				</div>
				<div class="" id="nocigargraphic">
					<img src="img/nocigar_thumb.jpg" />
				</div>				

				<p><input onclick="submitForm('generate.php')" id="generate" type="button" value="Generate on MomIQ.tv"></p>

			</form>
		</div>
	</div>

	<div id="uploadWindow"></div>

</div>

<script>
    function submitForm(action)
    {
        document.getElementById('submit').action = action;
		if ($('#tagBox').val()){
			document.getElementById('submit').submit();
		}
    }
</script>

</body>

</html>