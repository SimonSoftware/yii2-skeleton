$(document).ready(function(){
	$('.panel-toggle').on('click', function(){
		$('#demo-panel').toggleClass('panel-hide');
	})

	$('#demo-panel ul > li').on('click', function(){
		var color = $(this).attr('data-color');
		$('#skin').attr('href', 'css/skin-'+color+'.min.css');
	})
})