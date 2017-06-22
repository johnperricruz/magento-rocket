$r = jQuery.noConflict();

$r(function(){
	//console.log('Onload Event');
	bootstrapMenu();
	increment();
	mobileMenu('#menu');
});

function bootstrapMenu(){

}  
function increment(){
	var min = $r('button.btn.btn-default.min');
	var add = $r('button.btn.btn-default.add');
	var qty = $r('#qty');
	try{
		min.click(function(){
			if(qty.val() > 0){
				qty.val(parseInt(qty.val()) - 1);
			}
		});
		add.click(function(){
			qty.val(parseInt(qty.val()) + 1);
		});
	}catch(e){
		console.log(e);
	}
}  
function mobileMenu(_select){
	try{
		$r(_select).mmenu({
			extensions				: [ 'effect-slide-menu', 'shadow-page', 'shadow-panels' ],
			keyboardNavigation 		: true,
			screenReader 			: true,
			counters				: true,
			navbar 	: {
				title	: 'Advanced menu'
			},
			navbars	: [
				{
					position	: 'top',
					content		: [ 'searchfield' ]
				}, {
					position	: 'top',
					content		: [
						'prev',
						'title',
						'close'
					]
				}, {
					position	: 'bottom',
					content		: [
						'<a href="/" >Your Magento 2.0 Store</a>'
					]
				}
			]
		});	 
		console.log('Menu Clicked');
	}catch(e){
		console.log(e);
	}
}