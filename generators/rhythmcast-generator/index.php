<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="favicon.ico" rel="shortcut icon" />
	<title>RhythmCast Generator v0.72</title>
	<meta name="description" content="Burst Media RhythmCast Tag Generator">
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
			<h2>Burst Media RhythmCast Tag Generator</h2>
			<div id="notice"></div>

			<form action="" id="submit" method="POST">

				<div class="input" id="volumeInput">
					<input class="highlight smallInput" id="volume" type="text" name="volume" value="0" maxlength="3" />
					<div class="label"><div class="labelText">Enter the volume for the player 0 = off, 100 = max</div></div>
				</div>
				<div class="input" id="widthInput">
					<input class="highlight smallInput" id="width" type="text" name="width" value="503" maxlength="4" />
					<div class="label"><div class="labelText">Enter the width of the player (in px)</div></div>
				</div>
				<div class="input" id="heightInput">
					<input class="highlight smallInput" id="height" type="text" name="height" value="350" maxlength="4" />
					<div class="label"><div class="labelText">Enter the height of the player (in px)</div></div>
				</div>
				<div class="radio inputNoLabel">
					<input type="radio" id="autoplayon" name="autoplay" value="1" checked=true>
					<label for="autoplayon">On</label>
					<input type="radio" id="autoplayoff" name="autoplay" value="0">
					<label for="autoplayoff">Off</label>
					<div class="label"><div class="labelText">Autoplay</div></div>
				</div>
				
				<div id="sectionCSS">
					Single Media File Configuration <span class='italic'>* Use this OR Playlist Configuration</span>
					<div class="input" id="mediaidInput">
						<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
						<input class="highlight largeInput" id="mediaid" type="text" name="mediaid" />
						<div class="label"><div class="labelText">Enter the Media URL</div></div>
					</div>
					<div class="input" id="mediaadInput">
						<input class="highlight largeInput" id="mediaad" type="text" name="mediaad" />
						<div class="label"><div class="labelText">Enter the Ad XML URL to play before media file</div></div>
					</div>
				</div>

				<div id="sectionCSS">
					Playlist Configuration <span class='italic'>* Use this OR Media Configuration</span>
					<div class="input" id="playlistxmlInput">
						<input class="highlight largeInput" id="playlistxml" type="text" name="playlistxml" />
						<div class="label"><div class="labelText">Enter the Playlist XML URL</div></div>
					</div>
					<div class="radio inputNoLabel">
						<input type="radio" id="playlistposr" name="playlistpos" value="right" checked=true>
						<label for="playlistposr">Right</label>
						<input type="radio" id="playlistposb" name="playlistpos" value="bottom">
						<label for="playlistposb">Bottom</label>
						<input type="radio" id="playlistposl" name="playlistpos" value="left" disabled>
						<label for="playlistposl">Left</label>
						<input type="radio" id="playlistpost" name="playlistpos" value="top" disabled>
						<label for="playlistpost">Top</label>
						<div class="label"><div class="labelText">Choose the side the Playlist will appear on</div></div>
					</div>
					<div class="radio playlistTitleLabel">
						<input type="radio" id="playlistTitleon" name="playlistTitle" value="1" checked=true>
						<label for="playlistTitleon">On</label>
						<input type="radio" id="playlistTitleoff" name="playlistTitle" value="0">
						<label for="playlistTitleoff">Off</label>
						<div class="label"><div class="labelText">Playlist Title</div></div>
					</div>					
					<div class="input" id="adslot01Input">
						<input class="highlight largeInput" id="adslot01" type="text" name="adslot01" />
						<div class="label"><div class="labelText">Enter the Ad XML URL for Ad #1</div></div>
					</div>
					<div class="input" id="adslot02Input">
						<input class="highlight largeInput" id="adslot02" type="text" name="adslot02" />
						<div class="label"><div class="labelText">Enter the Ad XML URL for Ad #2</div></div>
					</div>
					<div class="input" id="adslot03Input">
						<input class="highlight largeInput" id="adslot03" type="text" name="adslot03" />
						<div class="label"><div class="labelText">Enter the Ad XML URL for Ad #3</div></div>
					</div>
					<div class="input" id="adslot04Input">
						<input class="highlight largeInput" id="adslot04" type="text" name="adslot04" />
						<div class="label"><div class="labelText">Enter the Ad XML URL for Ad #4</div></div>
					</div>
					<div class="input" id="adslot05Input">
						<input class="highlight largeInput" id="adslot05" type="text" name="adslot05" />
						<div class="label"><div class="labelText">Enter the Ad XML URL for Ad #5</div></div>
					</div>
				</div>				

			<div id="sectionCSS">
					Background Configuration <span class='italic'></span>				
					<div class="radio inputNoLabel">
						<input type="radio" id="brimtypei" name="brimtype" value="image" checked=true>
						<label for="brimtypei">Image</label>
						<input type="radio" id="brimtypef" name="brimtype" value="flash">
						<label for="brimtypef">Flash</label>
						<div class="label"><div class="labelText">Chose the type of background</div></div>
					</div>
					<div class="input" id="brimurlInput">
						<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
						<input class="highlight largeInput" id="brimurl" type="text" name="brimurl" placeholder="http://..."/>
						<div class="label"><div class="labelText">Enter the URL to the BG creative <span class='italic'>* Accepts .swf, .jpg, .png, .gif</span></div></div>
					</div>
					<div class="input" id="brimclickInput">
						<input class="highlight largeInput" id="brimclick" type="text" name="brimclick" placeholder="http://..." />
						<div class="label"><div class="labelText">Enter the click-through URL for the BG</div></div>
					</div>

					<div id="sectionCSS">
						Overlay Configuration <span class='italic'>* Use this to add a logo in the top left</span>
						<div class="radio inputNoLabel">
							<input type="radio" id="overlaytypei" name="overlaytype" value="image" checked=true>
							<label for="overlaytypei">Image</label>
							<input type="radio" id="overlaytypef" name="overlaytype" value="flash">
							<label for="overlaytypef">Flash</label>
							<div class="label"><div class="labelText">Chose the type of image to overlay</div></div>
						</div>
						<div class="input" id="brimurlInput">
							<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
							<input class="highlight largeInput" id="overlayurl" type="text" name="overlayurl" placeholder="http://..."/>
							<div class="label"><div class="labelText">Enter URL for overlay graphic</div></div>
						</div>
						<div class="input" id="googletrackInput">
							<input class="highlight smallInput" id="overlaywidth" type="text" name="overlaywidth" maxlength="4" />
							<div class="label"><div class="labelText">Enter width of overlay</div></div>
						</div>						
						<div class="input" id="googletrackInput">
							<input class="highlight smallInput" id="overlayheight" type="text" name="overlayheight" maxlength="4" />
							<div class="label"><div class="labelText">Enter height of overlay</div></div>
						</div>
						<div class="input" id="googletrackInput">
							<input class="highlight smallInput" id="overlayvo" type="text" name="overlayvo" maxlength="5" />
							<div class="label"><div class="labelText">Enter vertical offset of overlay <span class='italic'>* Negative values move graphic up</span></div></div>
						</div>
						<div class="input" id="googletrackInput">
							<input class="highlight smallInput" id="overlayho" type="text" name="overlayho" maxlength="5" />
							<div class="label"><div class="labelText">Enter horizontal offset of overlay <span class='italic'>* Negative values move graphic left</span></div></div>
						</div>
						<div class="input" id="brimurlInput">
							<input class="highlight largeInput" id="overlayclickurl" type="text" name="overlayclickurl" placeholder="http://..."/>
							<div class="label"><div class="labelText">Enter URL overlay click-through</div></div>
						</div>						
					</div>

					<div id="sectionCSS">
						Close Button Configuration <span class='italic'>* Use this to configure a close button on the unit</span>
						<div class="input" id="brimurlInput">
							<div id="uploadbutton"><input class="uploadIframe" id="uploadfile" type="button" value="Upload"><br/></div>
							<input class="highlight largeInput" id="closeurl" type="text" name="closeurl" placeholder="http://..."/>
							<div class="label"><div class="labelText">Enter URL for close button graphic <br><span class='italic'>* Default used if none selected</span></div></div>
						</div>
						<div class="input" id="googletrackInput">
							<input class="highlight smallInput" id="closewidth" type="text" name="closewidth" maxlength="4" />
							<div class="label"><div class="labelText">Enter width of close button</div></div>
						</div>						
						<div class="input" id="googletrackInput">
							<input class="highlight smallInput" id="closeheight" type="text" name="closeheight" maxlength="4" />
							<div class="label"><div class="labelText">Enter height of close button</div></div>
						</div>
						<div class="input" id="googletrackInput">
							<input class="highlight smallInput" id="closevo" type="text" name="closevo" maxlength="5" />
							<div class="label"><div class="labelText">Enter vertical offset of close button <span class='italic'>* Negative values move graphic up</span></div></div>
						</div>
						<div class="input" id="googletrackInput">
							<input class="highlight smallInput" id="closeho" type="text" name="closeho" maxlength="5" />
							<div class="label"><div class="labelText">Enter horizontal offset of close button <span class='italic'>* Negative values move graphic right</span></div></div>
						</div>						
					</div>					
				</div>

				<div id="sectionCSS">
					Social Configuration <span class='italic'>* Use this to configure social options</span>
					<div class="radio inputNoLabel">
						<input type="radio" id="socialSwitchon" name="socialSwitch" value="1" checked=true>
						<label for="socialSwitchon">On</label>
						<input type="radio" id="socialSwitchoff" name="socialSwitch" value="0">
						<label for="socialSwitchoff">Off</label>
						<div class="label"><div class="labelText">Turn Social Media On/Off</div></div>
					</div>						
					<div class="input" id="facebookInput">
						<input class="highlight largeInput" id="facebook" type="text" name="facebook" placeholder="http://facebook..." />
						<div class="label"><div class="labelText">Enter the URL for Facebook</div></div>
					</div>
					<div class="input" id="twitterInput">
						<input class="highlight largeInput" id="twitter" type="text" name="twitter" placeholder="http://twitter..." />
						<div class="label"><div class="labelText">Enter the URL for Twitter</div></div>
					</div>
					<div class="input" id="instagramInput">
						<input class="highlight largeInput" id="instagram" type="text" name="instagram" placeholder="http://instagram..." />
						<div class="label"><div class="labelText">Enter the URL for Instagram</div></div>
					</div>
				</div>

				<div id="sectionCSS">
					Tracking Options <span class='italic'></span>
					<div class="radio inputNoLabel">
						<input type="radio" id="adserveron" name="adserver" value="adconductor" checked=true>
						<label for="adserveron">Adconductor</label>
						<input type="radio" id="adserveroff" name="adserver" value="appnexus" disabled>
						<label for="adserveroff">AppNexus</label>
						<div class="label"><div class="labelText">Choose Adserver</div></div>
					</div>					
					<div class="radio inputNoLabel">
						<input type="radio" id="trackingTypeon" name="trackingType" value="intrusive" checked=true>
						<label for="trackingTypeon">Sub Tracking Layer [4]</label>
						<input type="radio" id="trackingTypeoff" name="trackingType" value="standard">
						<label for="trackingTypeoff">No Sub Tracking Layer [3]</label>
						<div class="label"><div class="labelText">Choose Adconductor tracking type</div></div>
					</div>
					<div class="input" id="pixel01Input">
						<input class="highlight largeInput" id="pixel01" type="text" name="pixel01" value="http://##SERVER##/burstmedia/display/s=##SITE##/a=##SITEAREA##/SZ=0X0SB##VERSIONSTRING####KWSTRING####NETKWSTRING##/##SUBBCPG##/BRC=GLI##BUSTER##"/>
						<div class="label"><div class="labelText">Enter impression tracking pixel 1 <span class='italic'>* Leave as is if using Sub Tracking Layer [4]</span></div></div>
					</div>
					<div class="input" id="pixel02Input">
						<input class="highlight largeInput" id="pixel02" type="text" name="pixel02" />
						<div class="label"><div class="labelText">Enter 3rd party impression tracking pixel</div></div>
					</div>
				</div>

				<!-- Expandable area
				<div class="inputNoLabel">
					<div id="trackingButton"><input id="tracking" type="button" value="Something not invented yet" /></div>
					<div class="label"><div class="labelText">Click to unveil nothing.</div></div>

					<div id="trackingInput">
					</div>

				</div>
				-->

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