/**
 * newpost.js
 *
 * Highligts newpost button if there are some.
 */
( function() {
	var nav = document.getElementById( 'brd-wrap' );
	var button = document.getElementById( 'more_button' );
	button.onclick = function() {
		if ( -1 != button.className.indexOf( 'toggled-on' ) ) {
			button.className = button.className.replace( ' toggled-on', '' );
			nav.className = nav.className.replace( ' toggled-on', '' );
		} else {
			button.className += ' toggled-on';
			nav.className += ' toggled-on';
		}
	};
} )();
