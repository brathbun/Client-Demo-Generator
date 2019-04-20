$(document).ready(function(){

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

	$('#vast').click(function() {
		$('#vasturlcontainer').css('display', 'block');
		$('#adcodecontainer').css('display', 'none');
	});
	$('#adcode').click(function() {
		$('#vasturlcontainer').css('display', 'none');
		$('#adcodecontainer').css('display', 'block');
	});

	$('#embedplayer').click(function() {
		$('#embedgraphic').css('display', 'block');
		$('#slidergraphic').css('display', 'none');
	});
	$('#sliderplayer').click(function() {
		$('#embedgraphic').css('display', 'none');
		$('#slidergraphic').css('display', 'block');
	});	

	$('#generate').click(function(){
		var type = $('input:radio[name="type"]:checked').val();
		var player = $('input:radio[name="player"]:checked').val();

		if (type == 'vast' || type == 'adcode') {
			if (type == 'vast') {

				if ($('#url').val() == '') {
					$('#notice').slideDown(function(){
						$('#notice').html('Please enter a Vast or Vpaid URL.');
					});					

				} else {
					if (player == 'embed' || player == 'slider') {
						$(this).parent().parent().submit();
					} else {
						$('#notice').slideDown(function(){
							$('#notice').html('Please select either the Embedded or Sliding Player.');
						});
					}
				}
			}

			if (type == 'adcode') {

				if ($('#adcodenumber').val() == '') {
					$('#notice').slideDown(function(){
						$('#notice').html('Please enter an adcode.');
					});					

				} else {
					if (player == 'embed' || player == 'slider') {
						$(this).parent().parent().submit();
					} else {
						$('#notice').slideDown(function(){
							$('#notice').html('Please select either the Embedded or Sliding Player.');
						});
					}
				}
			}			

		} else {
			$('#notice').slideDown(function(){
				$('#notice').html('Please select either VAST or Adcode.');
			});
		}
	});
});