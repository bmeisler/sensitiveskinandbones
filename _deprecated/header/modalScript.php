 <script>
<!-- implement modal dialog box and mask-->
$(document).ready(function() {	
	//alert("ready!");
	
	//select all the a tag with name equal to modal
	//$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		//e.preventDefault();
		
		//Get the A tag
		//var id = $(this).attr('href');
		
		//alert( $.cookie("skippedLogin") );
		var cookieName = 'skippedLogin';
		var cookieOptions = {expires: 1, path: '/'};
		if ($.cookie("skippedLogin") == "skipped"){
			//alert("cookie already set, delete it (for testing)");
			//$.cookie("skippedLogin", null, cookieOptions);
			//$.cookie(cookieName, "notskipped", cookieOptions);
		}else{
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(1000);	
			$('#mask').fadeTo("slow",0.6);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			$('#dialog').css('top',  winH/2-$('#dialog').height()/2);
			$('#dialog').css('left', winW/2-$('#dialog').width()/2);
		
			//transition effect
			$('#dialog').fadeIn(2000); 
		}
	
	//});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
		
		var cookieName = 'skippedLogin';
		var cookieOptions = {expires: 1, path: '/'};
		$.cookie(cookieName, "skipped", cookieOptions);
		//alert("set cookie from window close");
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
		
		var cookieName = 'skippedLogin';
		var cookieOptions = {expires: 1, path: '/'};
		$.cookie(cookieName, "skipped", cookieOptions);
		//alert("set cookie from mask click");
	});			
	
});

</script>