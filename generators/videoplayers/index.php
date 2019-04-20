<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta charset="utf-8">
	<link href="favicon.ico" rel="shortcut icon" />
	<title>BVP Embedded - Glyder/Kicker Generator v0.41</title>
	<meta name="description" content="Ad Tag Page Generator">
	<link href='http://fonts.googleapis.com/css?family=Roboto:700,500,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/fields.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header"><div id="head"></div></div>
	<div id="container">
		<div id="content">
			<h2>BVP Embedded - Glyder/Kicker Player Generator</h2>
			<div id="notice"></div>

			<form action="generate.php" method="POST">
			<div class="setsize">
				<p><input class="highlight" type="text" name="client" placeholder="Client Name"/>
				<span class="italic">* Optional</span><br />
			</div>

			<p>
			<input type="radio" id="vast" name="type" value="vast" checked=true>
			<label for="vast">Paste Vast/Vpaid URL</label>
			<input type="radio" id="adcode" name="type" value="adcode">
			<label for="adcode">Enter Adconductor Adcode</label>
			</p>

			<div class="responsive" id="vasturlcontainer">
				<p><input class="highlight" id="url" type="text" name="url" placeholder="Vast/VPaid URL"/></p>
			</div>
			<div class="setsize" id="adcodecontainer">
				<p><input class="highlight" id="adcodenumber" type="text" name="adcode" maxlength="9" placeholder="Adcode"/></p>
			</div>
			
			<p>
			<input type="radio" id="embedplayer" name="player" value="embed" checked=true>
			<label for="embedplayer">BVP Embedded Player</label>
			<input type="radio" id="sliderplayer" name="player" value="slider">
			<label for="sliderplayer">Glyder/Kicker Player</label>
			</p>

			<div class="" id="embedgraphic">
				<img src="img/embed.jpg" />
			</div>
			<div class="" id="slidergraphic">
				<img src="img/slider.jpg" />
			</div>			

			<p><input id="generate" type="button" value="Generate!"></p>
			
			</form>
		</div>
	</div>
	<div id="footer"></div>
</div>
</body>

</html>