<?php

    include 'ChromePhp.php';
    $tag = htmlspecialchars_decode($_POST['tagBoxValue']);
    $type = $_POST['formatSelect'];
    $device = $_POST['deviceSelect']; 
    $orientation = $_POST['oriSelect']; 
    
    $CSClientClean = $_POST['csClient'];
    $CSClient = str_replace(' ', '_', $_POST['csClient']);
    $nameIt = $_POST['nameIt'];
    $nameItURL = str_replace(' ', '_', $nameIt);   
    $root = realpath();

    $date = date('m-d-Y h:i:s', $_SERVER['REQUEST_TIME']); 

    //console_log( $_POST['autoplaySelect'] );

    if ( $_POST['autoplaySelect'] == 'autoOn' ) {
        $autoplay = 'autoplay';
    } else {
        $autoplay = '';
    }

    if ( $_POST['creativeSelect'] == 'celtracreative' ) {
        $creativeTag = '<script language=\'javascript\'>
                          window.addEventListener("message", function(event) { 
                            if(event.data.name === "openBrowser") { 
                              window.open(event.data.url); 
                            }
                          });
                        </script>';
        $tag = preg_replace('/\bweb\b/', 'preview', $tag);
    } else {
        $creativeTag = '';
    }    
     

    if (!file_exists('../creative/'.$CSClient.'/'.$nameItURL)) {
        mkdir('../creative/'.$CSClient.'/'.$nameItURL, 0755, true);
    }

    switch( $_POST['oriSelect'] ) {
        case 'oriBoth':
            $oriClass = 'button';
            $rotateCheck = 'oriBoth';
            $buttonText = '<i class="material-icons">screen_rotation</i> Rotate';
        break;
        case 'oriPortrait':
            $oriClass = 'buttonWide';
            $rotateCheck = 'oriPortrait';
            $buttonText = 'Portrait Mode';
        break;
        case 'oriLandscape':
            $oriClass = 'buttonWider';
            $rotateCheck = 'oriLandscape';
            $buttonText = 'Landscape Mode';
        break;
    } 

    switch( $_POST['formatSelect'] ) {
        case 'mobileVPAID':
            $pagetype = 'video';
            $rotateName = 'rotateMobileVideo';
            $initialAdClass = 'mobileFullVidLandscape';
            switch( $_POST['deviceSelect'] ) {
                    case 'iphone':
                        $landscape = 'iphone_landscape_full.png';
                        $portrait = 'iphone_portrait_full.png';
                    break;
                    case 'android':
                        $landscape = 's7_landscape_full.png';
                        $portrait = 's7_portrait_full.png';
                    break;
                    default:
                        //
                }  
        break;
        case 'mobileFull':
            $pagetype = 'iframe';
            $rotateName = 'rotateMobileFull';
            $initialAdClass = 'mobileFullLandscape';
            $background = 'blankMock.png';
            $backgroundIF = 'blankMockIframe.png';
            switch( $_POST['deviceSelect'] ) {
                    case 'iphone':
                        $landscape = 'iphone_landscape_full.png';
                        $portrait = 'iphone_portrait_full.png';
                    break;
                    case 'android':
                        $landscape = 's7_landscape_full.png';
                        $portrait = 's7_portrait_full.png';
                    break;
                    default:
                        //
                }             
        break;
        case 'mobile300':
            $pagetype = 'mobile';
            $rotateName = 'rotateMobile300';
            $initialAdClass = 'mobile300Landscape';
            switch( $_POST['deviceSelect'] ) {
                    case 'iphone':
                        $landscape = 'iphone_landscape_300x250.png';
                        $portrait = 'iphone_portrait_300x250.png';
                    break;
                    case 'android':
                        $landscape = 's7_landscape_300x250.png';
                        $portrait = 's7_portrait_300x250.png';
                    break;
                    default:
                        //
                }             
        break;
        case 'mobile320':
            $pagetype = 'mobile';
            $rotateName = 'rotateMobile320';
            $initialAdClass = 'mobile320Landscape';
            switch( $_POST['deviceSelect'] ) {
                    case 'iphone':
                        $landscape = 'iphone_landscape_320x50.png';
                        $portrait = 'iphone_portrait_320x50.png';
                    break;
                    case 'android':
                        $landscape = 's7_landscape_320x50.png';
                        $portrait = 's7_portrait_320x50.png';
                    break;
                    default:
                        //
                }             
        break;
        case 'mobile300x50':
            $pagetype = 'mobile';
            $rotateName = 'rotateMobile300x50';
            $initialAdClass = 'mobile300x50Landscape';
            switch( $_POST['deviceSelect'] ) {
                    case 'iphone':
                        $landscape = 'iphone_landscape_300x50.png';
                        $portrait = 'iphone_portrait_300x50.png';
                    break;
                    case 'android':
                        $landscape = 's7_landscape_300x50.png';
                        $portrait = 's7_portrait_300x50.png';
                    break;
                    default:
                        //
                }             
        break; 
        case 'celtraFull':
            $pagetype = 'celtraURL';
            $rotateName = 'rotateMobileFull';
            $initialAdClass = 'mobileFullLandscape';
            $background = 'blankMock.png';
            $backgroundIF = 'blankMockIframe.png';
            switch( $_POST['deviceSelect'] ) {
                    case 'iphone':
                        $landscape = 'iphone_landscape_full.png';
                        $portrait = 'iphone_portrait_full.png';
                    break;
                    case 'android':
                        $landscape = 's7_landscape_full.png';
                        $portrait = 's7_portrait_full.png';
                    break;
                    default:
                        //
                }             
        break;
        case 'tabletCeltraFull':
            $pagetype = 'celtraURL';
            $landscape = 'tablet_landscape_blank.png';
            $portrait = 'tablet_portrait_blank.png'; 
            $rotateName = 'rotateTabletFull';
            $initialAdClass = 'tabletFullLandscape';
            $background = 'blankMock.png';
            $backgroundIF = 'blankMockIframe.png';
        break;  
        case 'tabletVPAID':
            $pagetype = 'video';
            $landscape = 'tablet_landscape_blank.png';
            $portrait = 'tablet_portrait_blank.png';
            $rotateName = 'rotateTabletVideo';
            $initialAdClass = 'tabletFullVidLandscape';
        break;
        case 'tabletFull':
            $pagetype = 'iframe';
            $landscape = 'tablet_landscape_blank.png';
            $portrait = 'tablet_portrait_blank.png';
            $rotateName = 'rotateTabletFull';
            $initialAdClass = 'tabletFullLandscape';
            $background = 'blankMock.png';
            $backgroundIF = 'blankMockIframe.png';
        break;
        case 'tablet300':
            $pagetype = 'mobile';
            $landscape = 'tablet_landscape_300x250.png';
            $portrait = 'tablet_portrait_300x250.png';
            $rotateName = 'rotateTablet300';
            $initialAdClass = 'tablet300Landscape';
        break;
        case 'video360VPAID':
            $pagetype = 'videodisplay';
            $background = 'Video360Mock.png';
            $initialAdClass = 'video360';
        break;
        case 'video480VPAID':
            $pagetype = 'videodisplay';
            $background = 'Video480Mock.png';
            $initialAdClass = 'video480';
        break;        
        case 'fullpage':
            $pagetype = 'display';
            $background = 'blankMock.png';
            $initialAdClass = 'fullpage';
        break;
        case 'billboard':
            $pagetype = 'display';
            $background = '970x250Mock.png';
            $initialAdClass = 'billboard';
        break;
        case 'pushdown':
            $pagetype = 'displaypushdown';
            $background = '970x250PushdownBG.png';
            $initialAdClass = 'billboard';
        break;
        case 'dmpu':
            $pagetype = 'display';
            $background = '300x600Mock.png';
            $initialAdClass = 'dmpu';
        break;
        case 'box':
            $pagetype = 'display';
            $background = '300x250Mock.png';
            $initialAdClass = 'box';
        break;
        case 'leader':
            $pagetype = 'display';
            $background = '728x90Mock.png';
            $initialAdClass = 'leader';
        break;
        case 'sky':
            $pagetype = 'display';
            $background = '160x600Mock.png';
            $initialAdClass = 'sky';
        break;
        case 'ctvLG':
            $pagetype = 'ctvIframe';
            $background = 'ctv-lg-tv-300x250.png';
            $backgroundIF = 'ctv-lg-screen-300x250.png';
            $initialIFClass = 'ctvIframe';
            $initialAdClass = 'ctv300x250';
        break;
        case 'ctvGeneric':
            $pagetype = 'ctvIframe';
            $background = 'ctv-generic-tv-300x250.png';
            $backgroundIF = 'ctv-generic-screen-300x250.png';  
            $initialIFClass = 'ctvIframe';          
            $initialAdClass = 'ctv300x250';
        break;
        case 'ctvRokuFullJS':
            $pagetype = 'ctvAppSelect';
            $background = 'roku-appselection-tv.png';
            $background2 = 'roku-popcornflix-screen.png';
            $background3 = 'content.png';
            $initialIFClass = 'ctvIframe';
            $initialAdClass = 'ctvFullScreen';
        break;
        case 'ctvGenericFullJS':
            $pagetype = 'ctvAppSelect';
            $background = 'generic-appselection-tv.png';
            $background2 = 'generic-genericapp-screen.png';
            $background3 = 'content.png';
            $initialIFClass = 'ctvIframe';          
            $initialAdClass = 'ctvFullScreen';
        break;  
        case 'ctvRokuFullVid':
            $pagetype = 'ctvAppSelect';
            $background = 'roku-appselection-tv.png';
            $background2 = 'roku-popcornflix-screen.png';
            $background3 = 'content.png';
            $initialIFClass = 'ctvIframe';
            $initialAdClass = 'ctvFullScreen';
        break;
        case 'ctvGenericFullVid':
            $pagetype = 'ctvAppSelect';
            $background = 'generic-appselection-tv.png';
            $background2 = 'generic-genericapp-screen.png';
            $background3 = 'content.png';
            $initialIFClass = 'ctvIframe';          
            $initialAdClass = 'ctvFullScreen';
        break; 
        case 'ctvRokuFullMp4':
            $pagetype = 'ctvAppSelect';
            $background = 'roku-appselection-tv.png';
            $background2 = 'roku-popcornflix-screen.png';
            $background3 = 'content.png';
            $initialIFClass = 'ctvIframe';
            $initialAdClass = 'ctvFullScreen';
        break;        
        case 'ctvGenericFullMp4':
            $pagetype = 'ctvAppSelect';
            $background = 'generic-appselection-tv.png';
            $background2 = 'generic-genericapp-screen.png';
            $background3 = 'content.png';
            $initialIFClass = 'ctvIframe';          
            $initialAdClass = 'ctvFullScreen';
        break;  
        default:
            //
    }

    $htmlpath = '../creative/'.$CSClient.'/'.$nameItURL.'/index.html';
    $host = 'https://'. $_SERVER['HTTP_HOST'];

if ($pagetype == 'mobile') {

    $htmlpage = fopen($htmlpath, 'w');
    fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$nameIt} - RhythmOne Creative Studio</title>
<meta name=\"description\" content=\"{$nameIt}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
<style>.material-icons{font-size:15px;}</style>
</head>
<body>
<div id=\"wrapper\">
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"container\">
<div id=\"pagetitle\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
<div class=\"center {$oriClass}\" id=\"{$rotateName}\">{$buttonText}</div>
<div id=\"tag\" class=\"{$initialAdClass}\">{$tag}</div>
<div id=\"backdrop\">
<img id=\"imageLandscape\" class=\"show\" src=\"../../../demos/img/{$landscape}\" />
<img id=\"imagePortrait\" class=\"hide\" src=\"../../../demos/img/{$portrait}\" />
<div class=\"buttonWide btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
<input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
<div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
<div class=\"textalign displayNone\"><span>{$date}</span></div>
</div>
</div>
</div>
<div id=\"rotateCheck\" class=\"{$rotateCheck}\"></div>
<script>new ClipboardJS('.btn');</script>
</body>
</html>"
        );

 } else if ( $pagetype == 'display' ) {

    $htmlpage = fopen($htmlpath, 'w');
    fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$nameIt} - RhythmOne Creative Studio</title>
<meta name=\"description\" content=\"{$nameIt}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
<style>.material-icons{font-size:15px;}</style>
</head>
<body>
<div id=\"wrapper\">
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"container\">
<div id=\"pagetitleDisplay\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
<div id=\"tag\" class=\"{$initialAdClass}\">{$tag}</div>
<div id=\"backdropDisplay\">
<img id=\"displayBackground\" src=\"../../../demos/img/{$background}\" />
<div class=\"buttonWideDisplay btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
<input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
<div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
<div class=\"textalign displayNone\"><span>{$date}</span></div>
</div>
</div>
</div>
<script>new ClipboardJS('.btn');</script>
</body>
</html>"
        );

 } else if ( $pagetype == 'displaypushdown' ) {

    $htmlpage = fopen($htmlpath, 'w');
    fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$nameIt} - RhythmOne Creative Studio</title>
<meta name=\"description\" content=\"{$nameIt}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
<style>.material-icons{font-size:15px;}</style>
</head>
<body>
<div id=\"wrapper\">
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"container\">
<div id=\"pagetitleDisplay\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
<div id=\"tag\" class=\"{$initialAdClass}\">{$tag}
<div id=\"pushdownBackground\" class=\"pushdownBackground\">
<img id=\"pushdownImage\" src=\"../../img/970x250Pushdown.png\" />
<div class=\"buttonWideDisplay btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
</div>
</div>
<div id=\"backdropDisplay\">
<img id=\"displayBackground\" src=\"../../../demos/img/{$background}\" />
<input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
<div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
<div class=\"textalign displayNone\"><span>{$date}</span></div>
</div>
</div>
</div>
<script>new ClipboardJS('.btn');</script>
</body>
</html>"
        );

 } else if ( $pagetype == 'video' ) {
    $htmlpage = fopen($htmlpath, 'w');
    fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$nameIt} - RhythmOne Creative Studio</title>
<meta name=\"description\" content=\"{$nameIt}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/node_modules/video.js/dist/video-js.min.css\" />
<link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/node_modules/videojs-contrib-ads/dist/videojs.ads.css\" />
<link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/dist/videojs.ima.css\" />
<script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
<style>.material-icons{font-size:15px;}</style>
</head>
<body>
<div id=\"wrapper\">
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"container\">
<div id=\"pagetitle\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
<div class=\"center {$oriClass}\" id=\"{$rotateName}\">{$buttonText}</div>
<div id=\"tag\" class=\"{$initialAdClass}\">
<video id=\"content_video\" class=\"video-js vjs-default-skin\" controls preload=\"auto\" {$autoplay} muted>
<source src=\"https://cdnacp.rhythmone.com/assets/rhythmone-samplecontent-dbc5d3103d49fe49ac5d4adca2a62665.mp4\" type=\"video/mp4\" />
</video>
<!-- Load dependent scripts -->
<script src=\"//googleads.github.io/videojs-ima/node_modules/video.js/dist/video.min.js\"></script>
<script src=\"//imasdk.googleapis.com/js/sdkloader/ima3.js\"></script>
<script src=\"//googleads.github.io/videojs-ima/node_modules/videojs-contrib-ads/dist/videojs.ads.min.js\"></script>
<script src=\"//googleads.github.io/videojs-ima/dist/videojs.ima.js\"></script>
</div>
<div id=\"backdrop\">
<img id=\"imageLandscape\" class=\"show\" src=\"../../../demos/img/{$landscape}\" />
<img id=\"imagePortrait\" class=\"hide\" src=\"../../../demos/img/{$portrait}\" />
<div class=\"buttonWide btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
<input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
<div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
<div class=\"textalign displayNone\"><span>{$date}</span></div>
</div>
</div>
</div>
<div id=\"rotateCheck\" class=\"{$rotateCheck}\"></div>
<script>
var player = videojs('content_video');
var options = {
  id: 'content_video',
  adTagUrl: '{$tag}'
};
player.ima(options);
new ClipboardJS('.btn');
</script>
</body>
</html>"

        );

 } else if ( $pagetype == 'videodisplay' ) {
    $htmlpage = fopen($htmlpath, 'w');
    fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$nameIt} - RhythmOne Creative Studio</title>
<meta name=\"description\" content=\"{$nameIt}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/node_modules/video.js/dist/video-js.min.css\" />
<link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/node_modules/videojs-contrib-ads/dist/videojs.ads.css\" />
<link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/dist/videojs.ima.css\" />
<script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
<style>.material-icons{font-size:15px;}</style>
</head>
<body>
<div id=\"wrapper\">
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"container\">
<div id=\"pagetitleDisplay\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
<div id=\"tag\" class=\"{$initialAdClass}\">
<video id=\"content_video\" class=\"video-js vjs-default-skin\" controls preload=\"auto\" {$autoplay} muted>
<source src=\"https://cdnacp.rhythmone.com/assets/rhythmone-samplecontent-dbc5d3103d49fe49ac5d4adca2a62665.mp4\" type=\"video/mp4\" />
</video>
<!-- Load dependent scripts -->
<script src=\"//googleads.github.io/videojs-ima/node_modules/video.js/dist/video.min.js\"></script>
<script src=\"//imasdk.googleapis.com/js/sdkloader/ima3.js\"></script>
<script src=\"//googleads.github.io/videojs-ima/node_modules/videojs-contrib-ads/dist/videojs.ads.min.js\"></script>
<script src=\"//googleads.github.io/videojs-ima/dist/videojs.ima.js\"></script>
</div>
<div id=\"backdrop\">
<img id=\"displayBackground\" src=\"../../../demos/img/{$background}\" />
<div class=\"buttonWideDisplay btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
<input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
<div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
<div class=\"textalign displayNone\"><span>{$date}</span></div>
</div>
</div>
</div>
<script>
var player = videojs('content_video');
var options = {
  id: 'content_video',
  adTagUrl: '{$tag}'
};
player.ima(options);
new ClipboardJS('.btn');
</script>
</body>
</html>"

        );

 } else if ( $pagetype == 'iframe' ) {

        $htmlpathIF = '../creative/'.$CSClient.'/'.$nameItURL.'/iframe.html';
        $htmlpageIF = fopen($htmlpathIF, 'w');
        fwrite($htmlpageIF, "<!DOCTYPE html>
        <html>
        <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{$nameIt} Iframe - RhythmOne.com</title>
        <link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
        <link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
        <style>.material-icons{font-size:15px;}</style>
        </head>
        <body>
        {$creativeTag}
        {$tag}
        </body>
        </html>"
        );
        fclose($htmlpageIF);

        $htmlpage = fopen($htmlpath, 'w');
        fwrite($htmlpage, "<!DOCTYPE html>
    <html>
    <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{$nameIt} - RhythmOne Creative Studio</title>
    <meta name=\"description\" content=\"{$nameIt}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
    <link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
    <script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
    <style>.material-icons{font-size:15px;}</style>
    </head>
    <body>
    <div id=\"wrapper\">
    <div id=\"header\"><div id=\"head\"></div></div>
    <div id=\"container\">
    <div id=\"pagetitle\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
    <div class=\"center {$oriClass}\" id=\"{$rotateName}\">{$buttonText}</div>
    <div id=\"tag\" class=\"{$initialAdClass}\">
    <iframe class=\"iframe\" src=\"iframe.html\" scrolling=\"no\"></iframe>
    </div>
    <div id=\"backdrop\">
    <img id=\"imageLandscape\" class=\"show\" src=\"../../../demos/img/{$landscape}\" />
    <img id=\"imagePortrait\" class=\"hide\" src=\"../../../demos/img/{$portrait}\" />
    <div class=\"buttonWide btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
    <input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
    <div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
    <div class=\"textalign displayNone\"><span>{$date}</span></div>
    </div>
    </div>
    </div>
    <div id=\"rotateCheck\" class=\"{$rotateCheck}\"></div>
    <script>new ClipboardJS('.btn');</script>
    </body>
    </html>"
            );

 } else if ( $pagetype == 'celtraURL' ) {


        $htmlpathIF = '../creative/'.$CSClient.'/'.$nameItURL.'/iframe.html';
        $htmlpageIF = fopen($htmlpathIF, 'w');
        fwrite($htmlpageIF, "<!DOCTYPE html>
        <html>
        <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{$nameIt} Iframe - RhythmOne.com</title>
        <link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
        <link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
        <style>.material-icons{font-size:15px;}</style>
        </head>
        <body>
        {$tag}
        </body>
        </html>"

        );

        fclose($htmlpageIF);

        $htmlpage = fopen($htmlpath, 'w');
        fwrite($htmlpage, "<!DOCTYPE html>
    <html>
    <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{$nameIt} - RhythmOne Creative Studio</title>
    <meta name=\"description\" content=\"{$nameIt}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
    <link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
    <script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
    <style>.material-icons{font-size:15px;}</style>
    </head>
    <body>
    <div id=\"wrapper\">
    <div id=\"header\"><div id=\"head\"></div></div>
    <div id=\"container\">
    <div id=\"pagetitle\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
    <div class=\"center {$oriClass}\" id=\"{$rotateName}\">{$buttonText}</div>
    <div id=\"tag\" class=\"{$initialAdClass}\">
    <iframe class=\"iframe\" src=\"{$tag}\" scrolling=\"no\"></iframe>
    </div>
    <div id=\"backdrop\">
    <img id=\"imageLandscape\" class=\"show\" src=\"../../../demos/img/{$landscape}\" />
    <img id=\"imagePortrait\" class=\"hide\" src=\"../../../demos/img/{$portrait}\" />
    <div class=\"buttonWide btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
    <input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
    <div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
    <div class=\"textalign displayNone\"><span>{$date}</span></div>
    </div>
    </div>
    </div>
    <div id=\"rotateCheck\" class=\"{$rotateCheck}\"></div>
    <script>new ClipboardJS('.btn');</script>
    </body>
    </html>"
            );

 } else if ( $pagetype == 'ctvAppSelect' ) {

        $htmlpathIF = '../creative/'.$CSClient.'/'.$nameItURL.'/iframe.html';
        $htmlpageIF = fopen($htmlpathIF, 'w');

        if ($_POST['formatSelect'] == 'ctvRokuFullJS' || $_POST['formatSelect'] == 'ctvGenericFullJS') {

            fwrite($htmlpageIF, "<!DOCTYPE html>
            <html>
            <head>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <title>{$nameIt} - RhythmOne.com</title>
            <meta name=\"description\" content=\"{$nameIt}\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
            <link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
            <style>.material-icons{font-size:15px;}</style>
            </head>
            <body>

            <div id=\"wrapper\">
            <div id=\"tag\" class=\"{$initialAdClass}\">{$tag}</div>
            <div id=\"backdropDisplay\">
            <img id=\"ctvBackground\" src=\"../../../demos/img/{$background3}\" />
            </div>
            </div>

            </body>
            </html>"

            );
        
        } else if ($_POST['formatSelect'] == 'ctvRokuFullVid' || $_POST['formatSelect'] == 'ctvGenericFullVid') {

            fwrite($htmlpageIF, "<!DOCTYPE html>
            <html>
            <head>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <title>{$nameIt} - RhythmOne.com</title>
            <meta name=\"description\" content=\"{$nameIt}\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
            <link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
            <link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/node_modules/video.js/dist/video-js.min.css\" />
            <link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/node_modules/videojs-contrib-ads/dist/videojs.ads.css\" />
            <link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/dist/videojs.ima.css\" />
            <style>.material-icons{font-size:15px;}</style>
            </head>
            <body>

            <div id=\"wrapper\">
            <div id=\"tag\" class=\"{$initialAdClass}\">
            <video id=\"content_video\" class=\"video-js vjs-default-skin\" controls preload=\"auto\" {$autoplay}>
            <source src=\"https://cdnacp.rhythmone.com/assets/rhythmone-samplecontent-dbc5d3103d49fe49ac5d4adca2a62665.mp4\" type=\"video/mp4\" />
            </video>
            <!-- Load dependent scripts -->
            <script src=\"//googleads.github.io/videojs-ima/node_modules/video.js/dist/video.min.js\"></script>
            <script src=\"//imasdk.googleapis.com/js/sdkloader/ima3.js\"></script>
            <script src=\"//googleads.github.io/videojs-ima/node_modules/videojs-contrib-ads/dist/videojs.ads.min.js\"></script>
            <script src=\"//googleads.github.io/videojs-ima/dist/videojs.ima.js\"></script>
            </div>            
            <div id=\"backdropDisplay\">
            <img id=\"ctvBackground\" src=\"../../../demos/img/{$background3}\" />
            </div>
            </div>
            <script>
            var player = videojs('content_video');
            var options = {
              id: 'content_video',
              adTagUrl: '{$tag}'
            };
            player.ima(options);
            </script>
            </body>
            </html>"

            );
        
        } else if ($_POST['formatSelect'] == 'ctvRokuFullMp4' || $_POST['formatSelect'] == 'ctvGenericFullMp4'){

            fwrite($htmlpageIF, "<!DOCTYPE html>
            <html>
            <head>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <title>{$nameIt} - RhythmOne.com</title>
            <meta name=\"description\" content=\"{$nameIt}\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
            <link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
            <link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/node_modules/video.js/dist/video-js.min.css\" />
            <link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/node_modules/videojs-contrib-ads/dist/videojs.ads.css\" />
            <link rel=\"stylesheet\" href=\"//googleads.github.io/videojs-ima/dist/videojs.ima.css\" />
            <style>.material-icons{font-size:15px;}</style>
            </head>
            <body>

            <div id=\"wrapper\">
            <div id=\"tag\" class=\"{$initialAdClass}\">
            <video id=\"content_video\" class=\"video-js vjs-default-skin\" controls preload=\"auto\" {$autoplay}>
            <source src=\"{$tag}\" type=\"video/mp4\" />
            </video>
            <!-- Load dependent scripts -->
            <script src=\"//googleads.github.io/videojs-ima/node_modules/video.js/dist/video.min.js\"></script>
            <script src=\"//imasdk.googleapis.com/js/sdkloader/ima3.js\"></script>
            <script src=\"//googleads.github.io/videojs-ima/node_modules/videojs-contrib-ads/dist/videojs.ads.min.js\"></script>
            <script src=\"//googleads.github.io/videojs-ima/dist/videojs.ima.js\"></script>
            </div>            
            <div id=\"backdropDisplay\">
            <img id=\"ctvBackground\" src=\"../../../demos/img/{$background3}\" />
            </div>
            </div>
            <script>
            var player = videojs('content_video');
            var options = {
              id: 'content_video',
              adTagUrl: ''
            };
            player.ima(options);
            </script>
            </body>
            </html>"

            );

        }

    fclose($htmlpageIF);

    $htmlpage = fopen($htmlpath, 'w');
    fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$nameIt} - RhythmOne Creative Studio</title>
<meta name=\"description\" content=\"{$nameIt}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
<style>.material-icons{font-size:15px;}</style>
</head>
<body>
<div id=\"wrapper\">
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"container1280\">
<div id=\"pagetitleDisplay\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
<div id=\"backdropDisplay\">
<img id=\"ctvBackground\" src=\"../../../demos/img/{$background}\" />
<div id=\"appSelect\"></div>
<img id=\"ctvBackground2\" src=\"../../../demos/img/{$background2}\" />
<div id=\"mediaSelect\"></div>
<iframe id=\"iframeHolder\" class=\"{$initialIFClass}\" src=\"about:blank\" scrolling=\"no\"></iframe>
<div class=\"buttonWideDisplay btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
<input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
<div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
<div class=\"textalign displayNone\"><span>{$date}</span></div>
</div>
</div>
</div>
<script>new ClipboardJS('.btn');</script>
</body>
</html>"
        );

} else if ( $pagetype == 'ctvIframe' ) {

        $htmlpathIF = '../creative/'.$CSClient.'/'.$nameItURL.'/iframe.html';
        $htmlpageIF = fopen($htmlpathIF, 'w');
        fwrite($htmlpageIF, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$nameIt} - RhythmOne.com</title>
<meta name=\"description\" content=\"{$nameIt}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<style>.material-icons{font-size:15px;}</style>
</head>
<body>

<div id=\"wrapper\">
<div id=\"tag\" class=\"{$initialAdClass}\">{$tag}</div>
<div id=\"backdropDisplay\">
<img id=\"ctvBackground\" src=\"../../../demos/img/{$backgroundIF}\" />
</div>
</div>

</body>
</html>"

);

    fclose($htmlpageIF);

    $htmlpage = fopen($htmlpath, 'w');
    fwrite($htmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$nameIt} - RhythmOne Creative Studio</title>
<meta name=\"description\" content=\"{$nameIt}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"../../../demos/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"../../../demos/js/fields.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
<style>.material-icons{font-size:15px;}</style>
</head>
<body>
<div id=\"wrapper\">
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"container1280\">
<div id=\"pagetitleDisplay\"><h2>Creative demo page for <span class=\"fontlight\">{$nameIt}</span></h2></div>
<div id=\"backdropDisplay\">
<iframe class=\"{$initialIFClass}\" src=\"iframe.html\" scrolling=\"no\"></iframe>
<img id=\"ctvBackground\" src=\"../../../demos/img/{$background}\" />
<div class=\"buttonWideDisplay btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
<input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/{$nameItURL}/\">
<div class=\"textalign\"><h4>View all demos for <span class=\"fontlight\"><a href=\"../index.html\">{$CSClientClean}</a></span></h4></div>
<div class=\"textalign displayNone\"><span>{$date}</span></div>
</div>
</div>
</div>
<script>new ClipboardJS('.btn');</script>
</body>
</html>"
        );
} else {
    console_log( 'Page type not set' );
}

fclose($htmlpage);

// Start CS/Client Group List Code

    $hubhtmlpath = '../creative/'.$CSClient.'/index.html';

    if (!file_exists('../creative/'.$CSClient.'/index.html') ) {

        //mkdir('../creative/'.$CSClient.'/index.html', 0755, true);
        $hubhtmlpage = fopen($hubhtmlpath, 'w');
        fwrite($hubhtmlpage, "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{$CSClient} Demo List - RhythmOne.com</title>
<meta name=\"description\" content=\"{$CSClient}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link href=\"../../demos/favicon.ico\" rel=\"shortcut icon\" />
<link rel=\"stylesheet\" href=\"../../demos/css/style.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"../../demos/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"../../demos/js/fields.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js\"></script>
<style>.material-icons{font-size:15px;}</style>
</head>
<body>
<div id=\"header\"><div id=\"head\"></div></div>
<div id=\"wrapper\">
<div id=\"linkHub\">
<div id=\"pagetitle\"><h2>Creative demos for <span class=\"fontlight\">{$CSClientClean}</span></h2></div>
<div class=\"textalign\"><h4><span class=\"fontlight\"><a href=\"./{$nameItURL}\">{$nameIt} </a></span></h4></div><br />
<div class=\"buttonWide btn center\" id=\"copyURL\" data-clipboard-target=\"#copyInput\"><i class=\"material-icons\">bookmarks</i> Copy URL</div>
<input id=\"copyInput\" value=\"{$host}/creative/{$CSClient}/index.html\">
<div class=\"textalign displayNone\"><span>{$date}</span></div>
</div>
</div>
<script>new ClipboardJS('.btn');</script>
</body>
</html>"
        );

        fclose($hubhtmlpage);

    } else {

        
        $hubhtmlpage = file_get_contents($hubhtmlpath);
        ChromePhp::log($hubhtmlpage);


        if ( $_POST['urlExistsCheck'] == '1') {
            console_log( 'Already Exists' );
            $newhtml = str_replace("<br />", "<br />", $hubhtmlpage);
        } else {
            $newhtml = str_replace("<br />", "<div class=\"textalign\"><h4><span class=\"fontlight\"><a href=\"./{$nameItURL}\">{$nameIt} </a></span></h4></div><br />", $hubhtmlpage);
        }

        //console_log( $array );
        ChromePhp::log($newhtml);
        $htmlrewrite = fopen($hubhtmlpath, 'w');
        fwrite($htmlrewrite,$newhtml);
        fclose($htmlrewrite);

    }

    ob_start();
    header('X-XSS-Protection: 0');
    header('Location: ../creative/' . $CSClient.'/'.$nameItURL );
    ob_end_flush();

// Standalone Functions
function console_log( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

?>