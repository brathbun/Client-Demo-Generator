$(document).ready(function(){

	//Handle field highlighting and effects
	$('.highlight').mouseover(function(){
		$(this).css('border', '1px solid #f8e70d');
	});
	$('.highlight').mouseout(function(){
		$(this).css('border', '1px solid #bbb');
	});
	$('.highlight').focusin(function(){
		$(this).css('background-color', '#ddd');
	});
	$('.highlight').blur(function(){
		$(this).css('background-color','white');
	});

	//Animating the field labels
	$('.input').focusin(function() {
		jQuery(this).children('.label').animate({'margin-left': '-15px' }, 200, 'easeOutBack', function() {
			jQuery(this).children('.labelText').animate({'padding-left': '12px' }, 200, 'easeOutBack');
	 	});
	});
	$('.input').focusout(function() {
		jQuery(this).children('.label').animate({'margin-left': '5px' }, 300, 'easeInOutBack', function() {
			jQuery(this).children('.labelText').animate({'padding-left': '10px'}, 300, 'easeOutBack');
		});
	});

	//Auto Expand/Collapse Timing Field Hide/Show
	$('input[name=collapsetypeproperty]').change(function()  {
        switch ($('input[name=collapsetypeproperty]:checked').val()) {
            case 'click':
                $('#collapseTimeInput').css('display', 'none');
				$('#collapseTime').attr('value', ''); break;
            default:
                $('#collapseTimeInput').css('display', 'block');
        };
	}).change();

	//Toggle Tracking Parameters
	$('#tracking').click(function() {
		$('#trackingInput').toggle();
	});

	//Test Page Graphic Handling
	$('#momiq').click(function() {
		$('#momiqgraphic').css('display', 'block');
		$('#ellagraphic').css('display', 'none');
		$('#grgraphic').css('display', 'none');
		$('#biblegraphic').css('display', 'none');
		$('#femalefirstgraphic').css('display', 'none');
		$('#greatchefsgraphic').css('display', 'none');
		$('#djmaggraphic').css('display', 'none');
		$('#westlondongraphic').css('display', 'none');
		$('#nocigargraphic').css('display', 'none');	
		$('#generate').attr('value', 'Generate on MomIQ.tv');
	});
	$('#elladaily').click(function() {
		$('#momiqgraphic').css('display', 'none');
		$('#ellagraphic').css('display', 'block');
		$('#grgraphic').css('display', 'none');
		$('#biblegraphic').css('display', 'none');
		$('#femalefirstgraphic').css('display', 'none');
		$('#greatchefsgraphic').css('display', 'none');
		$('#djmaggraphic').css('display', 'none');
		$('#westlondongraphic').css('display', 'none');
		$('#nocigargraphic').css('display', 'none');
		$('#generate').attr('value', 'Generate on EllaDaily.com');
	});
	$('#giantrealm').click(function() {
		$('#momiqgraphic').css('display', 'none');
		$('#ellagraphic').css('display', 'none');
		$('#grgraphic').css('display', 'block');
		$('#biblegraphic').css('display', 'none');
		$('#femalefirstgraphic').css('display', 'none');
		$('#greatchefsgraphic').css('display', 'none');
		$('#djmaggraphic').css('display', 'none');
		$('#westlondongraphic').css('display', 'none');	
		$('#nocigargraphic').css('display', 'none');		
		$('#generate').attr('value', 'Generate on GiantRealm.com');
	});	
	$('#theladbible').click(function() {
		$('#momiqgraphic').css('display', 'none');
		$('#ellagraphic').css('display', 'none');
		$('#grgraphic').css('display', 'none');
		$('#biblegraphic').css('display', 'block');
		$('#femalefirstgraphic').css('display', 'none');
		$('#greatchefsgraphic').css('display', 'none');
		$('#djmaggraphic').css('display', 'none');
		$('#westlondongraphic').css('display', 'none');
		$('#nocigargraphic').css('display', 'none');		
		$('#generate').attr('value', 'Generate on TheLadBible.com');
	});
	$('#femalefirst').click(function() {
		$('#momiqgraphic').css('display', 'none');
		$('#ellagraphic').css('display', 'none');
		$('#grgraphic').css('display', 'none');
		$('#biblegraphic').css('display', 'none');
		$('#femalefirstgraphic').css('display', 'block');
		$('#greatchefsgraphic').css('display', 'none');
		$('#djmaggraphic').css('display', 'none');
		$('#westlondongraphic').css('display', 'none');
		$('#nocigargraphic').css('display', 'none');			
		$('#generate').attr('value', 'Generate on Femalefirst.co.uk');
	});
	$('#greatbritishchefs').click(function() {
		$('#momiqgraphic').css('display', 'none');
		$('#ellagraphic').css('display', 'none');
		$('#grgraphic').css('display', 'none');
		$('#biblegraphic').css('display', 'none');
		$('#femalefirstgraphic').css('display', 'none');
		$('#greatchefsgraphic').css('display', 'block');
		$('#djmaggraphic').css('display', 'none');
		$('#westlondongraphic').css('display', 'none');
		$('#nocigargraphic').css('display', 'none');
		$('#generate').attr('value', 'Generate on Greatbritishchefs.co.uk');
	});
	$('#djmag').click(function() {
		$('#momiqgraphic').css('display', 'none');
		$('#ellagraphic').css('display', 'none');
		$('#grgraphic').css('display', 'none');
		$('#biblegraphic').css('display', 'none');
		$('#femalefirstgraphic').css('display', 'none');
		$('#greatchefsgraphic').css('display', 'none');
		$('#djmaggraphic').css('display', 'block');
		$('#westlondongraphic').css('display', 'none');
		$('#nocigargraphic').css('display', 'none');
		$('#generate').attr('value', 'Generate on DJMag.co.uk ');
	});	
	$('#westlondonmum').click(function() {
		$('#momiqgraphic').css('display', 'none');
		$('#ellagraphic').css('display', 'none');
		$('#grgraphic').css('display', 'none');
		$('#biblegraphic').css('display', 'none');
		$('#femalefirstgraphic').css('display', 'none');
		$('#greatchefsgraphic').css('display', 'none');
		$('#djmaggraphic').css('display', 'none');
		$('#westlondongraphic').css('display', 'block');
		$('#nocigargraphic').css('display', 'none');
		$('#generate').attr('value', 'Generate on Westlondonmum.com');
	});
	$('#nocigar').click(function() {
		$('#momiqgraphic').css('display', 'none');
		$('#ellagraphic').css('display', 'none');
		$('#grgraphic').css('display', 'none');
		$('#biblegraphic').css('display', 'none');
		$('#femalefirstgraphic').css('display', 'none');
		$('#greatchefsgraphic').css('display', 'none');
		$('#djmaggraphic').css('display', 'none');
		$('#westlondongraphic').css('display', 'none');
		$('#nocigargraphic').css('display', 'block');		
		$('#generate').attr('value', 'Generate on Nocigarmagazine.com');
	});	

	//Lightbox Jquery
	$('.uploadIframe').colorbox({href:'http://upload.app2.labs.burstnet.com', iframe:true, width:'780px', height:'300px'});

	//Generate Tag 
	$('#generateTag').click(function(){

		var volume = $('#volume').val();
		var width = $('#width').val();
		var height = $('#height').val();
		var autoplay = $('input:radio[name="autoplay"]:checked').val();

		var mediaid = $('#mediaid').val();
		var mediaad = $('#mediaad').val();

		var playlistxml = $('#playlistxml').val();
		var playlistpos = $('input:radio[name="playlistpos"]:checked').val();
		var playlistauto = $('input:radio[name="playlistauto"]:checked').val();
		var playlistTitle = $('input:radio[name="playlistTitle"]:checked').val();
		var adslot01 = $('#adslot01').val();
		var adslot02 = $('#adslot02').val();
		var adslot03 = $('#adslot03').val();
		var adslot04 = $('#adslot04').val();
		var adslot05 = $('#adslot05').val();

		var brimtype = $('input:radio[name="brimtype"]:checked').val();
		var brimurl = $('#brimurl').val();
		var brimclick = $('#brimclick').val();
		var overlaytype = $('input:radio[name="overlaytype"]:checked').val();
		var overlayurl = $('#overlayurl').val();
		var overlaywidth = $('#overlaywidth').val();
		var overlayheight = $('#overlayheight').val();
		var overlayvo = $('#overlayvo').val();
		var overlayho = $('#overlayho').val();
		var overlayclickurl = $('#overlayclickurl').val();

		var closeurl = $('#closeurl').val();
		var closewidth = $('#closewidth').val();
		var closeheight = $('#closeheight').val();
		var closevo = $('#closevo').val();
		var closeho = $('#closeho').val();

		var socialSwitch = $('input:radio[name="socialSwitch"]:checked').val();
		var facebook = $('#facebook').val();			
		var twitter = $('#twitter').val();
		var instagram = $('#instagram').val();

		var adserver = $('input:radio[name="adserver"]:checked').val();
		var trackingType = $('input:radio[name="trackingType"]:checked').val();
		var pixel01 = $('#pixel01').val();
		var pixel02 = $('#pixel02').val();

		var tag = '<script> \n'  +
'// Burst Media RhythmCast \n' +
'// Copyright 2015 \n' +
'\n' +
'var BMSK_setup = { \n' +
'	vol: '+volume+', \n' +
'	width: '+width+', \n' +
'	height: '+height+', \n' +
'	autoplay: '+autoplay+', \n' +
'	media: { \n' +      // Takes Media URL and Ad Vast URL or XML   // Single Video Option
'    	url: \''+mediaid+'\', \n' +    // Video file location
'    	ad: \''+mediaad+'\' \n' +   // XML Location for ads
'    }, \n' +
'    playlist : { \n' +     // Used if Media is not used.   Multiple Video Option (Playlist)
'    	url: \''+playlistxml+'\', \n' +   // XML URL to Playlist
'    	dock: { \n' +
'    		position: \''+playlistpos+'\', \n' +  // Right/Bottom Left/Top not active yet
'    		thumbnail: { \n' +
'    			title: '+playlistTitle+' \n' +  // 0 for no, 1 for yes - show Thumbnail title
'    		} \n' +
'    	}, \n' +
'    	adslot : { \n' +   // Add to tag if ad support is requested for playlists, number will match video number
'			0: \''+adslot01+'\', \n' +
'			1: \''+adslot02+'\', \n' +
'			2: \''+adslot03+'\', \n' +
'			3: \''+adslot04+'\', \n' +
'			4: \''+adslot05+'\' \n' +
'		} \n' +
'    }, \n' +
'    style: { \n' +
'    	type: \''+brimtype+'\', \n' +  // Image
'    	background: \''+brimurl+'\', \n' +  //URL
'    	href: \''+brimclick+'\', \n' +  //Clickout
'    	overlay: { \n' +   //Turn on Overlay Options - Additional graphic for branding
'    		type: \''+overlaytype+'\', \n' +  // image
'    		background: \''+overlayurl+'\', \n' +  //URL
'    		width: '+overlaywidth+', \n' +
'    		height: '+overlayheight+', \n' +
'    		top: '+overlayvo+', \n' +  //Offsets  Only Top and Left
'    		left: '+overlayho+', \n' +
'    		href: \''+overlayclickurl+'\' \n' +  //Clickout
'    	}, \n' +
'    	close: { \n' +  //Option to Modifyedit close button (On by default)
'    		background: \''+closeurl+'\', \n' +
'    		width: '+closewidth+', \n' +
'    		height: '+closeheight+', \n' +
'    		top: '+closevo+', \n' +
'    		right: '+closeho+' \n' +
'    	} \n' +
'    }, \n' +
'    social: { \n' +   //Optional additional social features
'    	active: '+socialSwitch+', \n' +  // o off, 1 on
'    	facebook: { \n' +
'    		background: \'//glider.dev.ads.burstnet.com/assets/img/fb.png\', \n' +
'    		href: \''+facebook+'\' \n' +
'    	}, \n' +
'    	twitter: { \n' +
'    		background: \'//glider.dev.ads.burstnet.com/assets/img/tw.png\', \n' +
'    		href: \''+twitter+'\' \n' +
'    	}, \n' +
'    	instagram: { \n' +
'    		background: \'//glider.dev.ads.burstnet.com/assets/img/insta.png\', \n' +
'    		href: \''+instagram+'\' \n' +
'    	} \n' +
'    } \n' +
'		}; \n' +
'		var BMSK_tracking = { \n' +
'		    adserver: \''+adserver+'\', \n' +
'		    campaign: { \n' +
'		    	type: \''+trackingType+'\' \n' +   // intrusive = Option 4, standard = Option 3
'		    }, \n' +
'		    macro: { \n' +
'			    server: \'##SERVER##\', \n' +
'			    site: \'##SITE##\', \n' +
'			    sitearea: \'##SITEAREA##\', \n' +
'			    campaign_id: \'##CAMPAIGN_ID##\', \n' +
'			    size: \'##SIZE##\', \n' +
'			    package_id: \'##PACKAGE_ID##\', \n' +
'			    gif_id: \'##GIF_ID##\', \n' +
'			    version_string: \'##VERSIONSTRING##\', \n' +
'			    kw_string: \'##KWSTRING##\', \n' +
'			    netkw_string: \'##NETKWSTRING##\', \n' +
'			    subbcpg: \'##SUBBCPG##\' \n' +
'			},\n' +
'			pixel: {\n' +
'				0: \''+pixel01+'\',\n' +
'				1: \''+pixel02+'\'\n' +   //Add using if Option 4
'			}\n' +
'		};\n' +
'\n' +		 
'	for(var pixel in BMSK_tracking.pixel) {\n' +
'	    if(BMSK_tracking.pixel.hasOwnProperty(pixel))\n' +  
'		var i = new Image();\n' +
'		i.src = BMSK_tracking.pixel[pixel];\n' +
'	}\n' +
'\n' +
'var BMSK_head = document.getElementsByTagName(\'head\')[0]; \n' +
'var BMSK_script = document.createElement(\'script\'); \n' +
'BMSK_script.type = \'text/javascript\'; \n' +
'BMSK_script.async = true; \n' +
'BMSK_script.src = \'//cast.ads.burstnet.com/script.js\'; \n' +
'BMSK_head.appendChild(BMSK_script); \n' +
'</script>';

		$('#tagBox').focus().val(tag).select();
		
	});

	$('#exportTag').click(function(){
		if (!$('#tagBox').val()){
			$('#notice').slideDown(function(){
				$('#notice').html('No point in exporting nothingness!');
			});
		} else {
			$(this).parent().submit();
		}
	});

});