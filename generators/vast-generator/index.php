<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<link href="favicon.ico" rel="shortcut icon" />
<title>Burst VAST Tag Generator v.015</title>
<meta name="description" content="Burst Vast Tag Generator">
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/fields.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="inner">
	<h2 class="title">Burst VAST Tag Generator</h2>
		<p>1) Enter the Burst Site ID#.  This will be a 4 or 5 digit number, e.g. 9728 or 24319.</p>
		<p>2) Enter the Adcode Letter you are targeting your VAST campaign to.  For instance, if you are targeting adcode ad12345c please enter the letter 'c'.</p>
		<p>3) Select either the 0x0V or the 0x0S video size to target.</p>
		
	<div id="notice"></div>

	<p><input class="highlight" id="site_input" type="text" name="SiteID" size="5" maxlength="5" />Enter Burst Site ID#<br /></p>
	<p><input class="highlight" id="letter_input" type="text" name="AdcodeLetter" size="2" maxlength="2" />Enter Adcode Letter<br /></p>

	<p>
	<input type="radio" id="scode" name="videosize" value="0x0S" checked=true>
	<label for="scode">0x0S</label>
	<input type="radio" id="vcode" name="videosize" value="0x0V">
	<label for="vcode">0x0V</label>
	Select the Video Size to Target</p>

	<p><input id="notify" type="button" value="Generate!"></p>

	<br /><input class="highlight" id="vastTag" type="text" name="VASTtag" size="114" placeholder="Tag will Generate Here" /><br />

	</div>

</div>
</body>

</html>