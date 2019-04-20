<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<link href="favicon.ico" rel="shortcut icon" />
<title>Burst Roadblock Tag Generator v.0314</title>
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
	<h2 class="title">Burst Roadblock Tag Generator</h2>
		<p>1) Enter a Burst Adcode. [e.g. ad24319b]</p>
		<p>2) Enter a Site Name w/ no spaces [e.g. "geeksofdoom"].</p>
		<p>3) Enter a PID# or Multiple PID#s.</p>
		<p>4) Select the sizes you wish to generate and go!</p>
		
	<div id="notice"></div>

	<form name="submit" action="export.php" method="post">

		<p>Enter Burst Adcode:<br /><input class="highlight" id="site_input" type="text" name="SiteID" size="8" maxlength="9" onChange="javascript:this.value=this.value.toLowerCase();" /><br />
		<p>Enter Site Name w/ no spaces:<br /><input class="highlight" id="url_input" type="text" name="URL" size="15" maxlength="30" /><br />
		<p>Enter PID String: [Single PID Format: pid_343241] | [Multiple PID Format: pid_343241,pid_334386]<br />
			<input class="highlight" id="pid_input" type="text" name="PID" size="50" onChange="javascript:this.value=this.value.toLowerCase();" /><br /><br />
		<p>Select Sizes: <br />
			<input type="checkbox" id="leaderboard" name="leaderboard" value="leaderboard">728x90
			<input type="checkbox" id="widesky" name="widesky" value="widesky">160x600
			<input type="checkbox" id="box" name="box" value="box">300x250
			<input type="checkbox" id="leadersky" name="leadersky" value="leadersky">728x90 / 970x66
			<input type="checkbox" id="boxhalf" name="boxhalf" value="boxhalf">300x250 / 300x600
			<input type="checkbox" id="wideboxhalf" name="wideboxhalf" value="wideboxhalf">160x600 / 300x600

			<br /><br />

		<input id="notify" type="button" value="Generate!">

		<p>Burst Roadblock Tags:<span class="center"><input id="export" type="submit" value="Export!"></span><br />
		<textarea class="highlight" id="tags" name="tags" rows="2" cols="127"></textarea><br />
	
	</form>

	</div>

</div>
</body>

</html>