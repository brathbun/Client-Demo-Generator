<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<link href="favicon.ico" rel="shortcut icon" />
<title>Burst Pop Tag Generator v.021</title>
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
	<h2 class="title">Burst Pop Tag Generator</h2>
		<p>Enter the Burst Adcode you wish to generate a pop tag for. [e.g. ad24319a]</p>
		
	<div id="notice"></div>

	<p>Enter Burst Adcode: <br /><input class="highlight" id="site_input" type="text" name="SiteID" size="8" maxlength="9" /><br />


	<input id="notify" type="button" value="Generate!">

	<p>Burst Pop Tag:<br /><textarea class="highlight" id="vastTag" cols="112" rows="1" name="VASTtag"></textarea>
	</div>

</div>
</body>

</html>