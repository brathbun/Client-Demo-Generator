<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<link href="favicon.ico" rel="shortcut icon" />
<title>Ad Tag Page Generator v.01</title>
<meta name="description" content="Ad Tag Page Generator">
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/fields.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="inner">
	<h2>Ad Tag Page Generator</h2>
		<h3>For all your test page needs!</h3>
	<div id="notice"></div>
	<form action="generate.php" method="POST">
	<p>Enter Advertiser: <br /><input class="highlight" type="text" name="advertiser" /><br />(Not required. Includes advertiser name in the URL)<br />
	<p>Paste in 728x90 Tag: <br /><textarea class="highlight" name="leader_input" id="leader_input" rows="4" cols="85"></textarea></p>
	<p>Paste in 300x250 Tag: <br /><textarea class="highlight" name="box_input" id="box_input" rows="4" cols="85"></textarea></p>
	<p>Paste in 160x600 Tag: <br /><textarea class="highlight" name="widesky_input" id="widesky_input" rows="4" cols="85"></textarea></p>
	<p>Paste in Other Tag: <br /><textarea class="highlight" name="other_input" id="other_input" rows="4" cols="85"></textarea><br />Use this for any non traditional ad tag testing.  Will be loaded before closing &lt;/body&gt; tag. </p>
	<input id="notify" type="button" value="Generate!">
	</form>


	</div>

</div>
</body>

</html>