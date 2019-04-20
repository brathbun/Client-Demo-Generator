<?php

    //$client = stripslashes($_POST['client']);
    $type = stripslashes($_POST['type']);
    $player = stripslashes($_POST['player']);
    $url = stripslashes($_POST['url']);
    $adcode = stripslashes($_POST['adcode']);
    $page_title = "Vast/Vpaid Test Page";
   
    $random = rand(100000, 9999999);
    $filepath= 'vast/test_'.$random.'.html';
    

    if (!empty($_POST['client'])) {
        $client = $_POST['client'];
        $page_title .= ' for '.$client;
        $filepath = str_replace('vast/','vast/'.urlencode($client).'_',$filepath);
    }

    if ($type == 'vast'){
        $typeoutput = 'This page is using the following Vast/Vpaid URL: <span style="color:#999;font-style: italic;"><br/>'.$url.'</span>';
        $pid = '\'##ADCODE##\'';
        $tag = '\'' . $url . '\'';
    } else {
        $typeoutput = '<h3>Running through adcode <span style="color:#999;font-style: italic;">'.$adcode.'</span></h3>';
        $pid = '\'' . $adcode . '\'';
        $tag = '\'\'';
    }    

    if ($player == 'embed'){
        $middlecontent = '

            <script>
            // Burst Media Labs - Video Player
            // Copyright 2014

            var BMVP_setup = {  
                \'vid\': \'389015876\',
                \'pid\': '.$pid.',
                \'width\': 600, 
                \'height\': 350,
                \'autoplay\': true,
                \'vol\': 50,
                \'playlist_xml\': \'\',
                \'tag\': '.$tag.'
            }
            document.write(\'<scr\'+\'ipt type="text/javascript" src="http://bvp.burstmedia.com/player.js?24"></scr\'+\'ipt>\');
            </script>

        ';
        $fillerwords = '';
        $slidercontent = '';
    } else {
        $middlecontent = '';
        $fillerwords = '<p>Lobortis, sociis. Quis ipsum erat facilisi nunc fringilla dolor nonummy. Neque quam tincidunt, fringilla sit nibh parturient dictum, malesuada velit lacus sagittis sodales semper praesent nostra sagittis cubilia. Pede tempor ante, viverra senectus convallis ullamcorper. Viverra, fermentum nec aliquam in proin id consectetuer mus sollicitudin. Blandit. Elit egestas id lorem quam rutrum Metus tristique rutrum nostra primis laoreet egestas vel aliquet non sagittis, netus suscipit vehicula vehicula metus euismod. Integer tellus hymenaeos duis justo viverra ultrices duis pharetra semper libero nullam dictum, duis scelerisque arcu duis sem aliquet. Justo augue quis congue integer sodales sollicitudin. Bibendum. Dignissim, ut pede auctor dictumst tortor. Magna eleifend per sociosqu auctor hymenaeos lacinia ligula ut donec nisl mauris scelerisque sed faucibus. Luctus bibendum. Tellus inceptos elementum magna iaculis aliquet rhoncus amet pharetra hymenaeos euismod odio cum maecenas metus magna adipiscing. Pretium orci ut tortor ornare nonummy etiam aliquet nascetur leo viverra viverra inceptos lacus. Mollis odio. Volutpat sollicitudin auctor cum tempor penatibus nisl felis praesent hendrerit litora. Morbi est est, varius luctus magna donec ante ultrices ac. Varius. Posuere turpis congue senectus venenatis nisl volutpat felis nisl suscipit rhoncus pharetra malesuada natoque sem magnis tellus conubia justo arcu porta suspendisse vel placerat feugiat lorem habitant. Nam dictum turpis suspendisse lectus ante lacinia phasellus bibendum Accumsan parturient lectus, vitae amet curabitur nonummy luctus pulvinar pulvinar duis venenatis class aliquet, magnis ligula facilisis praesent accumsan ultrices etiam sit ante varius ac. Tortor Vestibulum suscipit habitasse tincidunt sagittis nam venenatis amet leo bibendum posuere curabitur urna. At nonummy habitasse, malesuada volutpat dictum. Semper et porta sollicitudin semper. Mi tempor hendrerit faucibus laoreet netus cubilia quis maecenas sit enim magnis turpis hac potenti rhoncus tincidunt.</p>';
        $slidercontent = '

            <script>
            // Burst Media Labs - Slider Player
            // Copyright 2014

            var BMSK_setup = {
                \'vol\': 0,
                \'pid\': '.$pid.',
                \'width\': 600, 
                \'height\': 350,
                \'tag\': '.$tag.'  
            }
            document.write(\'<scr\'+\'ipt type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></scr\'+\'ipt>\');
            document.write(\'<scr\'+\'ipt type="text/javascript" src="http://static-cdn.labs.burstnet.com/ads/js/burst.labs.videoslider.js?24"></scr\'+\'ipt>\');            
            </script>

        ';
    }    
 
    $htmlpage = fopen($filepath, 'w');
    fwrite($htmlpage, "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<title>{$page_title}</title>
<link href=\"favicon.ico\" rel=\"shortcut icon\" />
<link href=\"http://fonts.googleapis.com/css?family=Roboto:700,500,300italic\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"../vast/css/style.css\">
</head>
<body>

<div id=\"wrapper\">
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"container\">
<div id=\"content\">

<h2>{$page_title}</h2>

{$typeoutput}

<div id=\"uppercontent\">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div id=\"middlecontent\">
    {$middlecontent}
</div>
<div id=\"fillercontent\">
    {$fillerwords}
</div>
<div id=\"lowercontent\">
    <p>Mi diam tempor. Tempus platea varius nam dolor ad sociis. Gravida euismod magnis nibh fermentum curabitur. Class nullam class non vel nascetur parturient nostra at faucibus ad velit malesuada risus sapien, dictum turpis. Aptent iaculis bibendum consectetuer sociosqu nascetur non arcu suscipit penatibus natoque tempor eros aenean, consequat sit ridiculus inceptos sollicitudin quam ultrices, class mollis quam venenatis. Elementum scelerisque pretium lectus justo Sociosqu ante donec vel aliquam orci condimentum nullam tempus, habitasse, montes sociis ultricies enim curabitur tellus habitasse maecenas congue.</p>
</div>

</div>
</div>

</div>
{$slidercontent}
</body>
</html>"

);
    fclose($htmlpage);
    ob_start();
    header('X-XSS-Protection: 0');
    header('Location: ' . $filepath);
    ob_end_flush();

?>