$(document).ready(function(){
	$('.highlight').mouseover(function(){
		$(this).css('border', '2px solid #FFB760');
	});
	$('.highlight').mouseout(function(){
		$(this).css('border', '2px solid #000');
	});
	$('.highlight').focusin(function(){
		$(this).css('background-color', '#FFB760').animate( { rows: '9', cols: '85'}, 100);
	});
	$('.highlight').blur(function(){
		$(this).css('background-color','white').animate({ rows: '4', cols: '85' }, 100);
	});
	$('#notify').click(function(){
		var leader = $('#leader_input').val();
		var box = $('#box_input').val();
		var widesky = $('#widesky_input').val();
		var other = $('#other_input').val();
		if (leader != '' || box != '' || widesky != '' || other != '') {
			$(this).parent().submit(); //Initiates a submit on the form around the element
		} else {
			$('#notice').slideDown(function(){
				$('#notice').html('Please fill out one field');
			});
		}

	});
});