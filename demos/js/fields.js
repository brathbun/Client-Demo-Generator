$(document).ready(function(){

	$("#unitSelect").change(function() {
	      if ($(this).find("option:selected").attr("id") == "deviceSelect") {
	            $("#phoneSelect").show();
	            $("#phoneSelectLabel").show();
	      } else {
	            $("#phoneSelect").hide();
	            $("#phoneSelectLabel").hide();
	      }

	      if ($(this).find("option:selected").attr("class") == "orientationSelect") {
	            $("#oriSelect").show();
	            $("#oriSelectLabel").show();
	      } else {
	            $("#oriSelect").hide();
	            $("#oriSelectLabel").hide();
	      }

	      if ($(this).find("option:selected").attr("class") == "apSelect") {
	            $("#autoSelect").show();
	            $("#autoplaySelectLabel").show();
	      } else {
	            $("#autoSelect").hide();
	            $("#autoplaySelectLabel").hide();
	      }     

	});

if ( $("#rotateCheck").hasClass("oriBoth") ) {
	
		$('#rotateMobileVideo').click(function(){
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			//$('#tag').toggleClass('mobileFullVidPortrait mobileFullVidLandscape');
		    if ($('#content_video').width() == 590) {
		        $('#tag').toggleClass('mobileFullVidLandscape mobileFullVidPortrait');
		        $('#content_video').css("width", "332");
		        $('#content_video').css("height", "590");
		        if (player)
		           player.ima.getAdsManager().resize(332, 590, google.ima.ViewMode.NORMAL);			
			//if ($('#content_video').attr('width') = "640") {
	        	//$('#content_video').attr('width') = "324";
	        	//$('#content_video').attr('height') = "640";
		    } else {
				$('#tag').toggleClass('mobileFullVidPortrait mobileFullVidLandscape');
		        $('#content_video').css("width", "590");
		        $('#content_video').css("height", "332");
		        if (player)
		           player.ima.getAdsManager().resize(590, 332, google.ima.ViewMode.NORMAL)		    	
		        //$('#content_video').attr('width') = "640";
	        	//$('#content_video').attr('height') = "324";
		    }

		});

		$('#rotateMobileFull').click(function(){
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('mobileFullPortrait mobileFullLandscape');
		});
		
		$('#rotateMobile300').click(function(){
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('mobile300Portrait mobile300Landscape');
		});

		$('#rotateMobile320').click(function(){
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('mobile320Portrait mobile320Landscape');
		});

		$('#rotateMobile300x50').click(function(){
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('mobile300x50Portrait mobile300x50Landscape');
		});	

		$('#rotateTabletVideo').click(function(){
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			
			if ($('#content_video').width() == 698) {
	        	//$('#content_video').attr('width') = "324";
	        	//$('#content_video').attr('height') = "640";
				
				//$('#content_video').css("width", "532");
		        //$('#content_video').css("height", "698");
				$('#tag').toggleClass('tabletFullVidLandscape tabletFullVidPortrait');
				if (player)
		           player.ima.getAdsManager().resize(523, 701, google.ima.ViewMode.NORMAL);
		    } else {
		        //$('#content_video').attr('width') = "640";
	        	//$('#content_video').attr('height') = "324";
				
				//$('#content_video').css("width", "698");
		        //$('#content_video').css("height", "532");
				$('#tag').toggleClass('tabletFullVidPortrait tabletFullVidLandscape');
				if (player)
		           player.ima.getAdsManager().resize(698, 532, google.ima.ViewMode.NORMAL);
		    }

		});

		$('#rotateTabletFull').click(function(){
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('tabletFullPortrait tabletFullLandscape');
		});

		$('#rotateTablet300').click(function(){
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('tablet300Portrait tablet300Landscape');
		});

	} else if ( $("#rotateCheck").hasClass("oriPortrait") ) {
		if ( $('#rotateMobileVideo').length ) {
			
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			
			$('#tag').toggleClass('mobileFullVidPortrait mobileFullVidLandscape');
			
			$('#content_video').css("width", "332");
		    $('#content_video').css("height", "590");
			
			if (player)
		        player.ima.getAdsManager().resize(332, 590, google.ima.ViewMode.NORMAL);
			/*if ($('#content_video').width() == 640) {
	        	//$('#content_video').attr('width') = "324";
	        	//$('#content_video').attr('height') = "640";
				$('#content_video').css("width", "324");
		        $('#content_video').css("height", "640");
				
				$('#content_video').css("width", "332");
		        $('#content_video').css("height", "590");
				if (player)
		           player.ima.getAdsManager().resize(324, 640, google.ima.ViewMode.NORMAL);
		    } else {
		        //$('#content_video').attr('width') = "640";
	        	//$('#content_video').attr('height') = "324";
				$('#content_video').css("width", "640");
		        $('#content_video').css("height", "324");
				if (player)
		           player.ima.getAdsManager().resize(640, 324, google.ima.ViewMode.NORMAL);
		    }*/
		}

		if ( $('#rotateMobileFull').length ) {
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('mobileFullPortrait mobileFullLandscape');
		}
		
		if ( $('#rotateMobile300').length ) {
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('mobile300Portrait mobile300Landscape');
		}

		if ( $('#rotateMobile320').length ) {
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('mobile320Portrait mobile320Landscape');
		}

		if ( $('#rotateMobile300x50').length ) {
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('mobile300x50Portrait mobile300x50Landscape');
		}	

		if ( $('#rotateTabletVideo').length ) {
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('tabletFullVidLandscape tabletFullVidPortrait');
			/*if ($('#content_video').width() == 698) {
	        	//$('#content_video').attr('width') = "324";
	        	//$('#content_video').attr('height') = "640";
				if (player && player.ima)
		           player.ima.getAdsManager().resize(523, 701, google.ima.ViewMode.NORMAL);
		    } else {
		        //$('#content_video').attr('width') = "640";
	        	//$('#content_video').attr('height') = "324";
				if (player && player.ima)
					player.ima.getAdsManager().resize(698, 532, google.ima.ViewMode.NORMAL);
		    }*/
		}

		if ( $('#rotateTabletFull').length ) {
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('tabletFullPortrait tabletFullLandscape');
		}

		if ( $('#rotateTablet300').length ) {
			$('#imageLandscape').toggleClass('hide show');
			$('#imagePortrait').toggleClass('show hide');
			$('#tag').toggleClass('tablet300Portrait tablet300Landscape');
		}

	}

	$("#appSelect").click(function(){
	    $("#appSelect").hide();
	    $("#ctvBackground2").show();
	    $("#mediaSelect").show();
	});

	$("#mediaSelect").click(function(){
		//event.preventDefault();
	    //event.stopImmediatePropagation();
		$("#iframeHolder").show();
	    var url = 'iframe.html';
        //$('#iframeHolder').attr('src', url);
	 	$.ajax({
	        type: "POST", 
	        url : "iframe.html",
	        success : function (data) {  
	            // alert('ok');
	            $('#iframeHolder').attr('src', url);
	        }
	    });
		/*var iframe = document.getElementById('iframeHolder'),
		    iframeWin = iframe.contentWindow || iframe,
		    iframeDoc = iframe.contentDocument || iframeWin.document;

		$(iframeDoc).ready(function (event) {
		    iframeDoc.open();
		    iframeDoc.write('\<script data-acp-tag="li-0d931c3951" src="//cdnacp.rhythmone.com/units/js/li-0d931c3951.js"><\/script>');
		    iframeDoc.close();
		});*/
	});

})

 
