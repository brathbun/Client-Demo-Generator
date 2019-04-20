<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="favicon.ico" rel="shortcut icon" />
	<title>Launchpad Generator v0.79</title>
	<meta name="description" content="Burst Media Launchpad Tag Generator">
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
			<h2>Burst Media Launchpad Tag Generator</h2>
			<div id="notice"></div>

			<form action="" id="submit" method="POST">

				<div class="radio input">
					<input type="radio" id="prodenv" name="env" value="production" checked=true>
					<label for="prodenv">Production</label>
					<input type="radio" id="demoenv" name="env" value="demo">
					<label for="demoenv">Demo</label>
					<div class="label"><div class="labelText">Select Environment</div></div>
				</div>

				<div class="radio input">
					<input type="radio" id="colstart" name="startstate" value="col" checked=true>
					<label for="colstart">Collapsed</label>
					<input type="radio" id="expstart" name="startstate" value="exp">
					<label for="expstart">Expanded</label>
					<div class="label"><div class="labelText">Select starting state</div></div>
				</div>

				<div class="radio input">
					<input type="radio" id="yesclose" name="closecol" value="yes" checked=true>
					<label for="yesclose">Yes</label>
					<input type="radio" id="noclose" name="closecol" value="no">
					<label for="noclose">No</label>
					<div class="label"><div class="labelText">Ability to close unit from Collapsed state?</div></div>
				</div>	

				<div class="inputNoLabel">
					<div id="trackingButton"><input id="collapsedParms" type="button" value="Collapsed Creative Parameters" /></div>
					<div class="label"><div class="labelText">Click to show Collapsed Creative Parameters.</div></div>

					<div id="collapsedParmsInput">

						<div class="radio input">
							<input type="radio" id="cflashtype" name="cType" value="flash" checked=true>
							<label for="cflashtype">Flash</label>
							<input type="radio" id="cimagetype" name="cType" value="image">
							<label for="cimagetype">Image</label>
							<input type="radio" id="ciframetype" name="cType" value="iframe">
							<label for="ciframetype">Iframe</label>			
							<div class="label"><div class="labelText">Select type of Creative</div></div>
						</div>						

						<div class="input" id="colwidth">
							<input class="highlight smallInput" id="cwidth" type="text" name="cwidth" placeholder="970" maxlength="4" />
							<div class="label"><div class="labelText">Enter the width of your collapsed creative (in px)</div></div>
						</div>
						<div class="input" id="colheight">
							<input class="highlight smallInput" id="cheight" type="text" name="cheight" placeholder="100" maxlength="4" />
							<div class="label"><div class="labelText">Enter the height of your collpased creative (in px)</div></div>
						</div>						
						<div class="input" id="colCreative">
							<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
							<input class="highlight largeInput" id="cCreative" type="text" name="cCreative" placeholder="http://..."/>
							<div class="label"><div class="labelText">Enter the URL to the collapsed state creative <span class='italic'>* Accepts .swf, .jpg, .png, .gif</span></div></div>
						</div>
						<div class="input" id="bgColorInput">
							<input class="highlight smallInput" id="cbgColor" type="text" name="cbgColor" placeholder="#F1F1F1" />
							<div class="label"><div class="labelText">Enter #HEX or enter URL param: url(http://domain.com/image.png). <span class='italic'>*Blank for transparent</span></div></div>
						</div>
						<div class="radio input">
							<input type="radio" id="cbottom" name="cpos1" value="bottom" checked=true>
							<label for="cbottom">Bottom</label>
							<input type="radio" id="cvcenter" name="cpos1" value="center">
							<label for="cvcenter">Center</label>								
							<input type="radio" id="ctop" name="cpos1" value="top">
							<label for="ctop">Top</label>			
							<div class="label"><div class="labelText">Select Vertical Position</div></div>
						</div>
						<div class="radio input">
							<input type="radio" id="cleft" name="cpos2" value="left">
							<label for="cleft">Left</label>
							<input type="radio" id="chcenter" name="cpos2" value="center" checked=true>
							<label for="chcenter">Center</label>
							<input type="radio" id="cright" name="cpos2" value="right">
							<label for="cright">Right</label>
							<div class="label"><div class="labelText">Select Horizontal Position</div></div>
						</div>						
						<div class="radio input">
							<input type="radio" id="cslideani" name="canimation" value="slide" checked=true>
							<label for="cslideani">Slide</label>
							<input type="radio" id="cfadeani" name="canimation" value="fade">
							<label for="cfadeani">Fade</label>
							<div class="label"><div class="labelText">Select Launch Animation</div></div>
						</div>
						<div class="input" id="cPadding">
							<input class="highlight smallInput" id="cvpad" type="text" name="cvpad" value="0" placeholder="0" maxlength="4" />
							<input class="highlight smallInput" id="chpad" type="text" name="chpad" value="0" placeholder="0" maxlength="4" />
							<div class="label"><div class="labelText">Vertical | Horizontal Offset <span class='italic'>*negative and positive values in px accepted</span></div></div>
						</div>
						<div class="input" id="colTime">
							<input class="highlight smallInput" id="lTime" type="text" name="lTime" placeholder="1000"/>
							<div class="label"><div class="labelText">Enter time to expand in milliseconds <span class='italic'>* 1000 = 1 second</span></div></div>
						</div>
					
					</div>

				</div>

				<div class="inputNoLabel">
					<div id="trackingButton"><input id="launchParms" type="button" value="Launch Creative Parameters" /></div>
					<div class="label"><div class="labelText">Click to show Launch Creative Parameters.</div></div>

					<div id="launchParmsInput">

						<div class="radio input">
							<input type="radio" id="lflashtype" name="lType" value="flash" checked=true>
							<label for="lflashtype">Flash</label>
							<input type="radio" id="limagetype" name="lType" value="image">
							<label for="limagetype">Image</label>
							<input type="radio" id="liframetype" name="lType" value="iframe">
							<label for="liframetype">Iframe</label>			
							<div class="label"><div class="labelText">Select type of Creative</div></div>
						</div>						

						<div class="input" id="launchwidth">
							<input class="highlight smallInput" id="lwidth" type="text" name="lwidth" placeholder="970" maxlength="4" />
							<div class="label"><div class="labelText">Enter the width of your launch creative (in px)</div></div>
						</div>
						<div class="input" id="launchheight">
							<input class="highlight smallInput" id="lheight" type="text" name="lheight" placeholder="100" maxlength="4" />
							<div class="label"><div class="labelText">Enter the height of your launch creative (in px)</div></div>
						</div>				
						<div class="input" id="launchCreative">
							<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
							<input class="highlight largeInput" id="lCreative" type="text" name="lCreative" placeholder="http://..."/>
							<div class="label"><div class="labelText">Enter the URL to the launch state creative <span class='italic'>* Accepts .swf, .jpg, .png, .gif</span></div></div>
						</div>
						<div class="input" id="bgColorInput">
							<input class="highlight smallInput" id="lbgColor" type="text" name="lbgColor" placeholder="#F1F1F1" />
							<div class="label"><div class="labelText">Enter #HEX or enter URL param: url(http://domain.com/image.png). <span class='italic'>*Blank for transparent</span></div></div>
						</div>
						<div class="radio input">
							<input type="radio" id="lbottom" name="lpos1" value="bottom" checked=true>
							<label for="lbottom">Bottom</label>
							<input type="radio" id="lvcenter" name="lpos1" value="center">
							<label for="lvcenter">Center</label>								
							<input type="radio" id="ltop" name="lpos1" value="top">
							<label for="ltop">Top</label>			
							<div class="label"><div class="labelText">Select Vertical Position</div></div>
						</div>
						<div class="radio input">
							<input type="radio" id="lleft" name="lpos2" value="left">
							<label for="lleft">Left</label>
							<input type="radio" id="lhcenter" name="lpos2" value="center" checked=true>
							<label for="lhcenter">Center</label>
							<input type="radio" id="lright" name="lpos2" value="right">
							<label for="lright">Right</label>
							<div class="label"><div class="labelText">Select Horizontal Position</div></div>
						</div>
						<div class="radio input">
							<input type="radio" id="lslideani" name="lanimation" value="slide" checked=true>
							<label for="lslideani">Slide</label>
							<input type="radio" id="lfadeani" name="lanimation" value="fade">
							<label for="lfadeani">Fade</label>
							<div class="label"><div class="labelText">Select Collapse Animation</div></div>
						</div>
						<div class="radio input">
							<input type="radio" id="leftslide" name="slidefrom" value="left">
							<label for="leftslide">Left</label>
							<input type="radio" id="rightslide" name="slidefrom" value="right">
							<label for="rightslide">Right</label>
							<input type="radio" id="topslide" name="slidefrom" value="top">
							<label for="topslide">Top</label>
							<input type="radio" id="bottomslide" name="slidefrom" value="bottom" checked=true>
							<label for="bottomslide">Bottom</label>
							<input type="radio" id="tlslide" name="slidefrom" value="top left">
							<label for="tlslide">Top Left</label>
							<input type="radio" id="trslide" name="slidefrom" value="top right">
							<label for="trslide">Top Right</label>
							<input type="radio" id="blslide" name="slidefrom" value="bottom left">
							<label for="blslide">Bottom Left</label>
							<input type="radio" id="brslide" name="slidefrom" value="bottom right">
							<label for="brslide">Bottom Right</label>
							<div class="label"><div class="labelText">Select Slide From Animation <span class='italic'>*center/center position only</span></div></div>
						</div>						
						<div class="input" id="cPadding">
							<input class="highlight smallInput" id="lvpad" type="text" name="lvpad" value="0" placeholder="0" maxlength="4" />
							<input class="highlight smallInput" id="lhpad" type="text" name="lhpad" value="0" placeholder="0" maxlength="4" />
							<div class="label"><div class="labelText">Vertical | Horizontal Offset <span class='italic'>*negative and positive values in px accepted</span></div></div>
						</div>
						<div class="input" id="launchTime">
							<input class="highlight smallInput" id="cTime" type="text" name="cTime" placeholder="1000"/>
							<div class="label"><div class="labelText">Enter time to collpase in milliseconds <span class='italic'>* 1000 = 1 second</span></div></div>
						</div>						
					
					</div>

				</div>				

				<div class="inputNoLabel">
					<div id="trackingButton"><input id="tracking" type="button" value="Tracking and Events" /></div>
					<div class="label"><div class="labelText">Click to show Tracking and Event Parameters.</div></div>

					<div id="trackingInput">
						
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
						<!-- VAST Tracking Macros End -->

						<!-- Expansion, Collapse, Full View Tracking Start -->
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
						<!-- Expansion, Collapse, Full View Tracking End -->

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