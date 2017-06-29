$r = jQuery.noConflict();

$r(function(){
	$r("#fakeloader").fakeLoader({
		timeToHide : 1200,
		spinner    : "spinner7",
		bgColor    : "#161616"
	});
});
