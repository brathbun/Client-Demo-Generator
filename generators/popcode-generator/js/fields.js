$(document).ready(function(){
	$('.highlight').mouseover(function(){
		$(this).css('border', '2px solid #fbe400');
	});
	$('.highlight').mouseout(function(){
		$(this).css('border', '2px solid #000');
	});
	$('.highlight').focusin(function(){
		$(this).css('background-color', '#fbe400').animate( { rows: '5', cols: '112'}, 50);
	});
	$('.highlight').blur(function(){
		$(this).css('background-color','white').animate({ rows: '5', cols: '112' }, 50);
	});
	$('#notify').click(function(){
		var site = $('#site_input').val();
		
		if (site == '') {
			$('#notice').slideDown(function(){
				$('#notice').html('Please enter an adcode!');
			});			
		} else {
			$('textarea#vastTag').focus().text('<div>\n<script src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/sz=0X0MN/v=1.1Y/NF/RANDOM_NUMBER/RETURN-CODE/JS/">\n</script>\n</div>').select();  //Inserts values of space
		}

	});

});