<?php

if (!empty($_POST['tagBoxValue'])) {
    echo $tag = htmlspecialchars_decode($_POST['tagBoxValue']);
    
    if (!empty($_POST['client'])) {
        $client = $_POST['client'].'-';
    }

    header('Content-Disposition: attachment; filename="'.$client.'rhythmcast-tags.txt"');
	header('Content-Type: text/plain'); # Don't use application/force-download - it's not a real MIME type, and the Content-Disposition header is sufficient
	header('Content-Length: ' . strlen($tag));
	header('Connection: close');

} else {
    echo "Nothing to Export!";
}
?>