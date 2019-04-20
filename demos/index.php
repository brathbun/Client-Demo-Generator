<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="favicon.ico" rel="shortcut icon" />
	<title>RhythmOne Universal Demo Generator v2.02</title>
	<meta name="description" content="RhythmOne Universal Demo Generator">
	<meta name="author" content="Ben Rathbun">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
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
			<h2>Universal Demo Generator</h2>
			<div id="notice"></div>

			<form name="myform" action="generate.php" id="generate" method="POST">

				<div class="input">
					<p><textarea class="highlight" name="tagBoxValue" id="tagBox" rows="7" cols="70" placeholder="Paste your ad tag in here..." ></textarea></p>
				</div>

				<div class="input">
					<select class="highlight" id="unitSelect" name="formatSelect">
						<option disabled>Mobile Templates</option>
						<option id="deviceSelect" class="orientationSelect apSelect" value="mobileVPAID">Mobile (VPAID)</option>
						<option id="deviceSelect" class="orientationSelect" value="mobileFull">Mobile Fullpage (JavaScript)</option>
						<option id="deviceSelect" class="orientationSelect" value="mobile300">Mobile 300x250 (JavaScript)</option>
						<option id="deviceSelect" class="orientationSelect" value="mobile320">Mobile 320x50 (JavaScript)</option>
						<option id="deviceSelect" class="orientationSelect" value="mobile300x50">Mobile 300x50 (JavaScript)</option>
						<option id="deviceSelect" class="orientationSelect" value="celtraFull">Celtra Iframe URL</option>
						<option disabled>CTV Templates</option>
						<option value="ctvLG">LG 300x250 FIU (JavaScript)</option>
						<option value="ctvGeneric">Generic 300x250 FIU (JavaScript)</option>
						<option value="ctvRokuFullJS">Roku Select Full Screen (JavaScript)</option>
						<option value="ctvGenericFullJS">Generic Select Full Screen (JavaScript)</option>
						<option class="apSelect" value="ctvRokuFullVid">Roku Select Full Screen (VPAID)</option>
						<option class="apSelect" value="ctvGenericFullVid">Generic Select Full Screen (VPAID)</option>						
						<option class="apSelect" value="ctvRokuFullMp4">Roku Select Full Screen (MP4)</option>
						<option class="apSelect" value="ctvGenericFullMp4">Generic Select Full Screen (MP4)</option>							
						<option disabled>Desktop Templates</option>
						<option class="apSelect" value="video360VPAID">16:9 Video (VPAID)</option>
						<option class="apSelect" value="video480VPAID">4:3 Video (VPAID)</option>
						<option value="fullpage">Fullpage (JavaScript)</option>
						<option value="billboard">970x250 (JavaScript)</option>
						<option value="pushdown">970x250 Pushdown (JavaScript)</option>
						<option value="dmpu">300x600 (JavaScript)</option>
						<option value="box">300x250 (JavaScript)</option>
						<option value="leader">728x90 (JavaScript)</option>
						<option value="sky">160x600 (JavaScript)</option>						
						<option disabled>Tablet Templates</option>
						<option class="orientationSelect apSelect" value="tabletVPAID">Tablet (VPAID)</option>
						<option class="orientationSelect" value="tabletFull">Tablet Fullpage (JavaScript)</option>
						<option class="orientationSelect" value="tablet300">Tablet 300x250 (JavaScript)</option>
						<option class="orientationSelect" value="tabletCeltraFull">Celtra Iframe URL</option>						
					</select>
					<span class="">Select Ad Format</span>
				</div>
				<div class="input">
					<select class="highlight" id="phoneSelect" name="deviceSelect">
						<option value="iphone">iPhone</option>
						<option value="android">Android</option>
					</select>
					<span id="phoneSelectLabel">Select Phone</span>				
				</div>
				<div class="input">
					<select class="highlight" id="oriSelect" name="oriSelect">
						<option value="oriBoth">Both</option>
						<option value="oriPortrait">Portrait Only</option>
						<option value="oriLandscape">Landscape Only</option>
					</select>
					<span id="oriSelectLabel">Select Orientation</span>				
				</div>
				<div class="input">
					<select class="highlight" id="autoSelect" name="autoplaySelect">
						<option value="autoOn">Autoplay On</option>
						<option value="autoOff">AutoPlay Off</option>
					</select>
					<span id="autoplaySelectLabel">Select Autoplay</span>
				</div>
				<div class="input">
					<select class="highlight" id="cmpelect" name="creativeSelect">
						<option value="r1creative">RhythmOne</option>
						<option value="celtracreative">Celtra</option>
					</select>
					<span id="autoplaySelectLabel">Creative Tag</span>
				</div>					
				<div class="input">
					<input class="highlight" type="text" name="csClient" id="csAgencyBox" placeholder="CS# or Client Name"/>
					<span class="">CS# or Client Name</span><br />
				</div>
				<div class="input">
					<input class="highlight" type="text" name="nameIt" id="nameBox" placeholder="Demo Name"/>
					<span class="">Demo Name</span><br />
				</div>
			
				<div class="button" onclick="submitForm('generate.php')" id="generate"><i class="material-icons">loop</i> Make It!</div>
				<input type="hidden" name="urlExistsCheck" value="0" />
			</form>
		</div>
	</div>
</div>
<!--<div id="footer"></div>-->
<script>
    function submitForm(action)
    {
        document.getElementById('generate').action = action;
        console.log(document.location.hostname);
        switch (document.location.hostname)
		{
	        case 'cs.rhythmone.com':
				var protocol = 'https://cs.rhythmone.com';
				break;
	        case 'localhost' :
          		var protocol = 'https://localhost/github/creative-studio';
          		break;
	        default :  // set whatever you want
	        	var protocol = 'https://cs.rhythmone.com';
		}
		
		if (!$('#tagBox').val()) {
			// Check if there is a tag or URL
			$('#notice').slideDown(function(){
				$('#notice').html('Need a tag...Seriously...');
			});	

		} else if (!$('#nameBox').val()) {
			// Check is name field has a value
			$('#notice').slideDown(function(){
				$('#notice').html('Umm...need a name...For Real...');
			});	

		} else {
			// Check for duplicate folder name
			console.log(protocol);
			var tempURL = protocol + '/creative/' + $('#csAgencyBox').val() + '/' + $('#nameBox').val();
			//console.log(tempURL);
			tempURL = tempURL.replace(/ /g,"_");
			console.log(tempURL);
			$.ajax({
                type: "GET",
                url: tempURL,
            }).done(function (result) {
	           	var confirm = window.confirm("The URL for this already exists. Overwrite?");
	            if (confirm == true) {
	            	document.myform.urlExistsCheck.value = '1';
				    document.getElementById("generate").submit();
				}				
            }).fail(function () {
            	//console.log('failed');
                document.getElementById("generate").submit();
             });
			
		}


    }
</script>

</body>

</html>