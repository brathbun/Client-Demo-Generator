$(document).ready(function(){
	$('.highlight').mouseover(function(){
		$(this).css('border', '2px solid #fbe400');
	});
	$('.highlight').mouseout(function(){
		$(this).css('border', '2px solid #000');
	});
	$('.highlight').focusin(function(){
		$(this).css('background-color', '#fbe400').animate( { rows: '9', cols: '85'}, 100);
	});
	$('.highlight').blur(function(){
		$(this).css('background-color','white').animate({ rows: '4', cols: '85' }, 100);
	});
	$('#notify').click(function(){
		var site = $('#site_input').val();
		var letter = $('#letter_input').val();
		var size = $('input:radio[name="videosize"]:checked').val();

		if (site == '' || letter == '') {
			$('#notice').slideDown(function(){
				$('#notice').html('Please fill out both fields!');
			});			
		} else {
			$('#vastTag').focus().val('http://www.burstnet.com/burstmedia/display/s=' + site +'/a=' + letter + '/v=4.0S/sz=' + size + '/NZ/SA/' + Math.floor(Math.random() * 9999999999 + 1) + '/K=videopair/vid=<video id>/vtitle=<URL-encoded video title>/vdesc=<URL-encoded video description>/RETURN-CODE/TXT/').select();
		}
	});
});