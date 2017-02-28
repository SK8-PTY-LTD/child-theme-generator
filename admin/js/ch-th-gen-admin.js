jQuery(document).ready(function( $ ) {

	$( "div#remove" ).click(function() {
		$( "div#remove" ).hide();
		$( "div#confirm").show() ;
	});

	$( "div#confirm" ).click(function() {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
		$( "div#confirm" ).hide();
		$( "div#remove").show() ;
	});
	// Facebook
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	// Twitter
	!function(d,s,id){
		var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
		if(!d.getElementById(id)){js=d.createElement(s);
			js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
			fjs.parentNode.insertBefore(js,fjs);
		}}(document, 'script', 'twitter-wjs');
<<<<<<< HEAD
=======
=======
	$( "div#confirm" ).hide();
	$( "div#remove").show() ;
	});

>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
} );
