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

	$('#unitSelect').change(function() {
		var unitSelect = $('#unitSelect').val();
		if (unitSelect == 'mobile') {
			$('#mobileHide').css('display', 'none'); 
			$('#generate').attr('value', 'Generate on Mobile Site');			
		} else {
			$('#mobileHide').css('display', 'block');
			$('#generate').attr('value', 'Generate on Display Site');			
		}
	});
	
	//Auto Expand/Collapse Timing Field Hide/Show
	$('input[name=expandtypeproperty]').change(function()  {
        switch ($('input[name=expandtypeproperty]:checked').val()) {
            case 'click':
                $('#expandTimeInput').css('display', 'none'); 
				$('#expandTime').attr('value', ''); break;
            case 'hover':
                $('#expandTimeInput').css('display', 'none');
				$('#expandTime').attr('value', ''); break;
            default:
                $('#expandTimeInput').css('display', 'block');     
        };
	}).change();
	
	$('input[name=collapsetypeproperty]').change(function()  {
        switch ($('input[name=collapsetypeproperty]:checked').val()) {
            case 'click':
                $('#collapseTimeInput').css('display', 'none');
				$('#collapseTime').attr('value', ''); break;
            default:
                $('#collapseTimeInput').css('display', 'block');
        };
	}).change();

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

});