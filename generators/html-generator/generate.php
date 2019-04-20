<?php
if (!empty($_POST['leader_input']) || !empty($_POST['box_input']) || !empty($_POST['widesky_input']) || !empty($_POST['other_input'])) {
 
    $leader = stripslashes($_POST['leader_input']);
    $box = stripslashes($_POST['box_input']);
    $widesky = stripslashes($_POST['widesky_input']);
    $other = stripslashes($_POST['other_input']);
    $page_title = "Test Page";
   
    $random = rand(1000000, 99999999);
    $filepath= 'pages/testpage_'.$random.'.html';
 
    if (!empty($_POST['advertiser'])) {
        $advertiser = $_POST['advertiser'];
        $page_title .= ' for '.$advertiser;
        $filepath = str_replace('pages/','pages/'.urlencode($advertiser).'_',$filepath);
    }
 
    $htmlpage = fopen($filepath, 'w');
    fwrite($htmlpage, "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<title>{$page_title}</title>
<link href=\"http://fonts.googleapis.com/css?family=Carrois+Gothic\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"../pages/css/style.css\">
</head>
<body>
<div id=\"wrapper\"><div id=\"inner\">
<h2>{$page_title}</h2>
<h3>728x90:</h3><br />
<div id=\"leader\">{$leader}</div>
<h3>300x250:</h3><br />
<div id=\"box\">{$box}</div>
<h3>160x600:</h3><br />
<div id=\"widesky\">{$widesky}</div>
<h3>Other:</h3><br />
<div id=\"other\">{$other}</div>
</div>
</div>
</body>
</html>");
    fclose($htmlpage);
    ob_start();
    header('X-XSS-Protection: 0');
    header('Location: ' . $filepath);
    ob_end_flush();
} else {
    echo "<p>No point in generating unless you have a tag!</p>";
}
?>