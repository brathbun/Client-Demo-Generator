$(document).ready(function(){
	$('.highlight').mouseover(function(){
		$(this).css('border', '2px solid #fbe400');
	});
	$('.highlight').mouseout(function(){
		$(this).css('border', '2px solid #000');
	});
	$('.highlight').focusin(function(){
		$(this).css('background-color', '#fbe400').animate( { rows: '25', cols: '127'}, 100);
	});
	$('.highlight').blur(function(){
		$(this).css('background-color','white').animate({ rows: '25', cols: '127' }, 100);
	});
	$('#notify').click(function(){
		var site = $('#site_input').val();
		var pid = $('#pid_input').val();
		var url = $('#url_input').val();

		if ($('#leaderboard').attr('checked') || $('#box').attr('checked') || $('#widesky').attr('checked') || $('#leadersky').attr('checked') || $('#boxhalf').attr('checked') || $('#wideboxhalf').attr('checked')) {
			var sizes = true;
		} else {
			var sizes = false;
		}

		if (site == '' || pid == '' || url == '') {
			$('#notice').slideDown(function(){
				$('#notice').html('Please fill out all fields!');
			});
		} else {

			if (sizes == true) {

				if ($('#leaderboard').attr('checked')) {
					var leaderboard = 'Leaderboard [728x90]\n\n<script type="text/javascript" language="JavaScript">\nrnum=Math.round(Math.random() * 100000);\nts=String.fromCharCode(60);\nif (window.self != window.top) {nf=\'\'} else {nf=\'NF/\'};\ndocument.write(ts+\'script src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/v=2.3S/sz=728x90A/K=' + pid + '/NZ/\'+rnum+\'/\'+nf+\'RETURN-CODE/JS/">\'+ts+\'/script>\');\n</script><noscript><a href="http://www.burstnet.com/ads/' + site + '-map.cgi/ns/v=2.3S/sz=728x90A/" target="_top">\n<img src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/ns/v=2.3S/sz=728x90A/" border="0" alt="Click Here" /></a>\n</noscript>\n\n\n';

				} else {
					var leaderboard = '';
				}

				if ($('#box').attr('checked')) {
					var box = 'Box [300x250]\n\n<script type="text/javascript" language="JavaScript">\nrnum=Math.round(Math.random() * 100000);\nts=String.fromCharCode(60);\nif (window.self != window.top) {nf=\'\'} else {nf=\'NF/\'};\ndocument.write(ts+\'script src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/v=2.3S/sz=300x250A/K=' + pid + '/NZ/\'+rnum+\'/\'+nf+\'RETURN-CODE/JS/">\'+ts+\'/script>\');\n</script><noscript><a href="http://www.burstnet.com/ads/' + site + '-map.cgi/ns/v=2.3S/sz=300x250A/" target="_top">\n<img src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/ns/v=2.3S/sz=300x250A/" border="0" alt="Click Here" /></a>\n</noscript>\n\n\n';
				} else {
					var box = '';
				}

				if ($('#widesky').attr('checked')) {
					var widesky = 'Widesky [160x600]\n\n<script type="text/javascript" language="JavaScript">\nrnum=Math.round(Math.random() * 100000);\nts=String.fromCharCode(60);\nif (window.self != window.top) {nf=\'\'} else {nf=\'NF/\'};\ndocument.write(ts+\'script src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/v=2.3S/sz=160x600A/K=' + pid + '/NZ/\'+rnum+\'/\'+nf+\'RETURN-CODE/JS/">\'+ts+\'/script>\');\n</script><noscript><a href="http://www.burstnet.com/ads/' + site + '-map.cgi/ns/v=2.3S/sz=160x600A/" target="_top">\n<img src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/ns/v=2.3S/sz=160x600A/" border="0" alt="Click Here" /></a>\n</noscript>\n\n\n';
				} else {
					var widesky = '';
				}

				if ($('#leadersky').attr('checked')) {
					var leadersky = 'Leaderboard/Skybox Combo [728x90/970x66]\n\n<script type="text/javascript" language="JavaScript">\nrnum=Math.round(Math.random() * 100000);\nts=String.fromCharCode(60);\nif (window.self != window.top) {nf=\'\'} else {nf=\'NF/\'};\ndocument.write(ts+\'script src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/v=2.3S/sz=728x90A|970x66A/K=' + pid + '/NZ/\'+rnum+\'/\'+nf+\'RETURN-CODE/JS/">\'+ts+\'/script>\');\n</script><noscript><a href="http://www.burstnet.com/ads/' + site + '-map.cgi/ns/v=2.3S/sz=728x90A|970x66A/" target="_top">\n<img src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/ns/v=2.3S/sz=728x90A|970x66A/" border="0" alt="Click Here" /></a>\n</noscript>\n\n\n';
				} else {
					var leadersky = '';
				}

				if ($('#boxhalf').attr('checked')) {
					var boxhalf = 'Box/Half Page Combo [300x250/300x600]\n\n<script type="text/javascript" language="JavaScript">\nrnum=Math.round(Math.random() * 100000);\nts=String.fromCharCode(60);\nif (window.self != window.top) {nf=\'\'} else {nf=\'NF/\'};\ndocument.write(ts+\'script src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/v=2.3S/sz=300x250A|300x600A/K=' + pid + '/NZ/\'+rnum+\'/\'+nf+\'RETURN-CODE/JS/">\'+ts+\'/script>\');\n</script><noscript><a href="http://www.burstnet.com/ads/' + site + '-map.cgi/ns/v=2.3S/sz=300x250A|300x600A/" target="_top">\n<img src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/ns/v=2.3S/sz=300x250A|300x600A/" border="0" alt="Click Here" /></a>\n</noscript>\n\n\n';
				} else {
					var boxhalf = '';
				}

				if ($('#wideboxhalf').attr('checked')) {
					var wideboxhalf = 'Widesky/Half Page Combo [160x600/300x600]\n\n<script type="text/javascript" language="JavaScript">\nrnum=Math.round(Math.random() * 100000);\nts=String.fromCharCode(60);\nif (window.self != window.top) {nf=\'\'} else {nf=\'NF/\'};\ndocument.write(ts+\'script src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/v=2.3S/sz=160x600A|300x600A/K=' + pid + '/NZ/\'+rnum+\'/\'+nf+\'RETURN-CODE/JS/">\'+ts+\'/script>\');\n</script><noscript><a href="http://www.burstnet.com/ads/' + site + '-map.cgi/ns/v=2.3S/sz=160x600A|300x600A/" target="_top">\n<img src="http://www.burstnet.com/cgi-bin/ads/' + site + '.cgi/ns/v=2.3S/sz=160x600A|300x600A/" border="0" alt="Click Here" /></a>\n</noscript>\n\n\n';
				} else {
					var wideboxhalf = '';
				}

				$('textarea#tags').focus().text('Roadblock Tags for ' + url + ' [' + site + ']:\n\n[PID_Ref#: ' + pid + ']\n\n\n' + leaderboard + leadersky + box + boxhalf + widesky + wideboxhalf).select();
				$('#notice').hide();
			} else {
				$('#notice').slideDown(function(){
					$('#notice').html('Please select a size!').show();
				});
			}
		}

	});

});