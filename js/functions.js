/**
 * Created by Dananjaya Maha Malage on 1/16/2018.
 */


/**
 *
 * Scroll reveal example
 *
    jQuery(function() {
        window.sr = ScrollReveal();
        sr.reveal('.come-class');
    });
 *
 */


/**
 *
 * owl carousel example
 *
    jQuery(function() {
        var owl1 = jQuery('.owl1');
        owl1.owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            autoplayTimeout:6000,
            autoplayHoverPause:true,
            autoHeight:true,
            nav:true,
            smartSpeed:900,
            navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
        });
    });
 *
 */

/**
 *
 * Smooth scroll
 *
    jQuery(function() {
        smoothScroll.init();
    });
 *
 */

/**
 *
 * Pre loader
 *
    jQuery(document).ready(function(){
        //pre load animation
        //paste this code under the head tag or in a separate js file.
        // Wait for window load
        jQuery(window).on('load', function() {
            // Animate loader off screen
            jQuery(".se-pre-con").fadeOut("slow");
        });
    });
 *
 */

jQuery("body").bind('mousewheel', function(e) {
    jQuery("#preLoader").css('height', '0');
    jQuery("#preLoaderButton").addClass('hide');
});

jQuery("#preLoaderButton").click(function(){
    jQuery("#preLoader").css('height', '0');
    jQuery("#preLoaderButton").addClass('hide');
});
/*
function openNav() {
    jQuery("#bitSidenav").css('width', '250px');
    jQuery("#bitMain").css('marginLeft', '250px');
    jQuery('body').css('backgroundColor', 'rgba(0,0,0,0.4)');
}

function closeNav() {
    jQuery("#bitSidenav").css('width', '0');
    jQuery("#bitMain").css('marginLeft', '0');
    jQuery('body').css('backgroundColor', '#ffffff');
}

*/
var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('menu'),
    'padding': 256,
    'tolerance': 70
});

document.querySelector('.toggle-button').addEventListener('click', function() {
    slideout.toggle();
});



/**
 *  thousond seperator
 *
 */

(function($, undefined) {

    "use strict";

    // When ready.
    $(function() {

        var $form = $( ".buy-bitcoin-lkr" );
        var $input = $form.find( "#lkrValue" );

        $input.on( "keyup", function( event ) {


            // When user select text in the document, also abort.
            var selection = window.getSelection().toString();
            if ( selection !== '' ) {
                return;
            }

            // When the arrow keys are pressed, abort.
            if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                return;
            }


            var $this = $( this );

            // Get the value.
            var input = $this.val();

            var input = input.replace(/[\D\s\._\-]+/g, "");
            input = input ? parseInt( input, 10 ) : 0;

            $this.val( function() {
                return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
            } );
        } );

        /**
         * ==================================
         * When Form Submitted
         * ==================================
         */
        $form.on( "submit", function( event ) {

            var $this = $( this );
            var arr = $this.serializeArray();

            for (var i = 0; i < arr.length; i++) {
                arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
            };

            console.log( arr );

            event.preventDefault();
        });

    });
})(jQuery);


/**
 *  match-height
 *
 **/
/*
jQuery(function() {
    jQuery('.buy-bitcoin-widget-height').matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });
});
*/

