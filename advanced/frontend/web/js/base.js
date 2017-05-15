$(function() {
	var window_height = $(window).height();
	var nav_height = $('.top-nav').height();
	var footer_height = $('footer').height();
	$('body').css('min-height', window_height + 'px');

	var min_content_height = window_height - nav_height - footer_height;
	$('#contentDiv').css('min-height', min_content_height + 'px');
})