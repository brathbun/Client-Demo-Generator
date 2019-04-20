<?php

    $tag = htmlspecialchars_decode($_POST['tagBoxValue']);
    $type = $_POST['adsizeSelect'];
    $demosite = stripslashes($_POST['demosite']);

    //Random AlphaNumeric String
    $length = rand(4,6);
    $random = substr(md5(rand(0, 1000000)), 0, $length);

    $filepath= 'go/demo_'.$random.'.html';
    
    if (!empty($_POST['client'])) {
        $client = $_POST['client'];
        $page_title .= $client . ' Demo';
        $filepath = str_replace('go/','go/'.urlencode($client).'_',$filepath);
        $page_title = str_replace('_',' ',$page_title);
    } else {
        $page_title = '';
    }

    switch ($demosite) {
        case 'momiqsite':
            $sitebg = 'momiq_testpage_backdrop.jpg';
            $sitebgcolor = '#F3FCFF';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:212px;right:-121px;margin-top: -90px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:871px;right:-620px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:1514px;right:-701px;margin-top: -600px;}';
            }            
            break;
        case 'ellasite':
            $sitebg = 'ella_testpage_backdrop.jpg';
            $sitebgcolor = '#fff';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:210px;right:-121px;margin-top: -90px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:474px;right:-665px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:1615px;right:-747px;margin-top: -600px;}';
            }               
            break;
        case 'giantsite':
            $sitebg = 'giantrealm_testpage_backdrop.jpg';
            $sitebgcolor = '#333';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:187px;right:-121px;margin-top: -90px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:462px;right:-661px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:1565px;right:-743px;margin-top: -600px;}';
            }              
            break;
        case 'biblesite':
            $sitebg = 'ladbible_testpage_backdrop.jpg';
            $sitebgcolor = '#e3e7e6';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:151px;right:-122px;margin-top: -90px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:778px;right:-656px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:1703px;right:-726px;margin-top: -600px;}';
            }            
            break;
        case 'femalefirstsite':
            $sitebg = 'femalefirst_testpage_backdrop.jpg';
            $sitebgcolor = '#efefef';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:93px;right:-121px;margin-top: -90px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:470px;right:-646px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:1564px;right:-732px;margin-top: -600px;}';
            }               
            break;  
        case 'greatchefsite':
            $sitebg = 'greatchefs_testpage_backdrop.jpg';
            $sitebgcolor = '#fff';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:117px;right:-215px;margin-top: -90px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:954px;right:-651px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:1572px;right:-721px;margin-top: -600px;}';
            }              
            break;  
        case 'djmagsite':
            $sitebg = 'djmag_testpage_backdrop.jpg';
            $sitebgcolor = '#000';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:108px;right:-136px;margin-top: -90px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:369px;right:-663px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:980px;right:-802px;margin-top: -600px;}';
            }            
            break;  
        case 'westlondonsite':
            $sitebg = 'westlondon_testpage_backdrop.jpg';
            $sitebgcolor = '#fff';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:130px;right:-223px;margin-top: -90px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:536px;right:-661px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:1535px;right:-747px;margin-top: -600px;}';
            }            
            break;
        case 'nocigarsite':
            $sitebg = 'nocigar_testpage_backdrop.jpg';
            $sitebgcolor = '#fff';
            if ($type == 'leader') {
                $adsize = '#adtag{width:728px;height:90px;position:relative;top:0px;right:-130px;}';
            } elseif ($type == 'box') {
                $adsize = '#adtag{width:300px;height:250px;position:relative;top:462px;right:-652px;margin-top: -250px;}';
            } elseif ($type == 'sky') {
                $adsize = '#adtag{width:160px;height:600px;position:relative;top:814px;right:-972px;margin-top: -600px;}';
            }              
            break;                                  
    }

    if ($type != 'mobile') {

        $htmlpage = fopen($filepath, 'w');
        fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$page_title} - RhythmOne.com</title>
<meta name=\"description\" content=\"{$page_title}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"favicon.ico\" rel=\"shortcut icon\" />
<link href=\"http://fonts.googleapis.com/css?family=Roboto:700,500,300italic\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"../go/css/style.css\">
<style>body{background:{$sitebgcolor};}$adsize</style>
</head>
<body>

<div id=\"wrapper\">
<div id=\"container\">
<div id=\"content\">
<div id=\"adtag\">{$tag}</div>
<div id=\"maincontent\">
<img src=\"../img/{$sitebg}\" />
</div>

<div id=\"pagetitle\">{$page_title}</div>

</div>
</div>
</div>
</body>
</html>"

);
    
        fclose($htmlpage);
        ob_start();
        header('X-XSS-Protection: 0');
        header('Location: ' . $filepath);
        ob_end_flush();

    } else {

        $filepathIF = str_replace('.html','_iframe.html',$filepath);

        $htmlpageIF = fopen($filepathIF, 'w');
        fwrite($htmlpageIF, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$page_title} - RhythmOne.com</title>
<meta name=\"description\" content=\"{$page_title}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"favicon.ico\" rel=\"shortcut icon\" />
<link href=\"http://fonts.googleapis.com/css?family=Roboto:700,500,300italic\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"../go/css/mobile.css\">
<style>body{background:{$sitebgcolor};}</style>
</head>
<body>

<div id=\"wrapper\">
<div id=\"containerIF\">
<div id=\"adtag\">{$tag}</div>
</div>
</div>

</body>
</html>"

);

        fclose($htmlpageIF);

        $filepathIF = str_replace('go/','',$filepathIF);

        $htmlpage = fopen($filepath, 'w');
        fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$page_title} - RhythmOne.com</title>
<meta name=\"description\" content=\"{$page_title}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"favicon.ico\" rel=\"shortcut icon\" />
<link href=\"http://fonts.googleapis.com/css?family=Roboto:700,500,300italic\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"../go/css/mobile.css\">
<style>body{background:{$sitebgcolor};}</style>
</head>
<body>

<div id=\"wrapper\">
<div id=\"container\">
<div id=\"content\">
<div id=\"maincontent\">
<div id=\"phone\">
<img src=\"../img/phone.png\" />
<div id=\"phonescreen\">
<iframe style=\"background-color:transparent;border:none;width:100%;height:100%;top:0px;left:0px;\" src=\"{$filepathIF}\"></iframe>
</div>
</div>
</div>

<div id=\"pagetitle\">{$page_title}</div>

</div>
</div>
</div>
</body>
</html>"

);

    fclose($htmlpage);
    ob_start();
    header('X-XSS-Protection: 0');
    header('Location: ' . $filepath);
    ob_end_flush();

    }



?>