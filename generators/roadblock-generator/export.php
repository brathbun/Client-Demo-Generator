<?php

if (!empty($_POST['SiteID']) && !empty($_POST['PID']) && !empty($_POST['URL'])) {

    $site = php_strip_whitespace($_POST['SiteID']);
    $pid = stripslashes($_POST['PID']);
    $url = stripslashes($_POST['URL']);
    echo $tags = $_POST['tags'];

    header('Content-Disposition: attachment; filename="'.$site.'_'.$url.'.txt"');
	header('Content-Type: text/plain'); # Don't use application/force-download - it's not a real MIME type, and the Content-Disposition header is sufficient
	header('Content-Length: ' . strlen($tags));
	header('Connection: close');

} else {
    echo "<p>No point in exporting nothingness!</p>";
}
?>