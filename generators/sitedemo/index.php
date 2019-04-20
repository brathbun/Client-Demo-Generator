<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="favicon.ico" rel="shortcut icon" />
	<title>RhythmOne Site Demo Page Generator v1.03</title>
	<meta name="description" content="RhythmOne Test Page Generator">
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
			<h2>RhythmOne Demo Creator</h2>
			<div id="notice"></div>

			<form action="" id="submit" method="POST">

				<div class="input">
					<p><textarea class="highlight" name="tagBoxValue" id="tagBox" rows="7" cols="70" placeholder="Paste your ad tag in here..." ></textarea></p>
				</div>

				<div class="input">
					<select class="highlight" id="unitSelect" name="adsizeSelect">
						<option value="layer">Layer</option>
						<option value="leader">728x90</option>
						<option value="box">300x250</option>
						<option value="sky">160x600</option>
						<option value="mobile">Mobile</option>
					</select>
					<span class="italic">Select the type of Ad</span><br />
				</div>					

			
				<div class="input clientName">
					<input class="highlight" type="text" name="client" placeholder="Client Name"/>
					<span class="italic">Add client name *Optional</span><br />
				</div>				

				<div id="mobileHide">

				<h3>Select the site you wish to display your ad on.</h3>

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
				<label for="femalefirst">FemaleFirst</label>
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

				<!-- End Mobile Hide -->
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
		} else {
			$('#notice').slideDown(function(){
				$('#notice').html('Please paste in an ad tag! Seriously...');
			});			
		}
    }
</script>

</body>

</html>