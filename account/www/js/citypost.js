    $(document).ready(function () {

        jQuery('.carousel').carousel({
            interval: 7000
        })

        /*
         * As there's no way to add, or remove, classes in CSS, we'll have to do it throug JQ:
         *  1) Align to the right the LAST 'dropdown-menu' of each menu for not x-OVERFLOWING the viewport. That's easy; just class it 'pull-right'.
         *  2) When we go to mobile/small viewport, or starting with, the menu 'navbar-collapse' has to get back left floating again:
         */

        if (!$('.navbar-toggle').is(':visible')) pull_LastDropdown('right');
        //Also on resizing, besides borning:
        $(window).resize(function () {
            if ($('.navbar-toggle').is(':visible')) { //only on mobiles viewport
                pull_LastDropdown('left');
            } else { //get back alignement
                pull_LastDropdown('right');
            }
        });

        function pull_LastDropdown(whereTo) {
            var otherDirection = 'left';
            if (whereTo == 'left') otherDirection = 'right';
            $('#navbar-second').find('.navbar-collapse ul:last')
                .addClass('pull-' + whereTo)
                .removeClass('pull-' + otherDirection);
        }

        /*
         * Chrome -webkit has a problem with margins and paddings - it's reportesd all over.
         *
         * The '#navbar-second .navbar-collapse', who's width is exactly the sum of each 'dropdown-toggle' width, works fine in all browsers, except on some Chrome versions.
         * On Chrome, the bar width seems to short and last element colapse below the bar.
         * So, we have to give it a hand, testing if it's a Chrome browser. Even this test is not 100% accurate...
         * Anyway if the bug doesn't shows up, and browser acts regular, the degradate is a 4px "waist", on the right of the far right (the (1+4+1)th one) 'dropdown-toggle' button.
         * So, if it's Chrome, we increment '#navbar-second .navbar-collapse' by 4px.
         * Thanks, once again, for http://stackoverflow.com/a/13348618/2816279
         *
         * Please note that:
         *  * IE11 now returns undefined again for window.chrome
         *  * new Opera 30 outputs true for window.chrome
         *  * new IE Edge outputs to true now for window.chrome
         *
         */
        adjustChrome_menuWidth();
        //Check it also on resizing, besides borning:
        $(window).resize(function () {
            adjustChrome_menuWidth();
        });

        function adjustChrome_menuWidth() {
            var isChromium = window.chrome,
                vendorName = window.navigator.vendor,
                isOpera = window.navigator.userAgent.indexOf("OPR") > -1,
                isIEedge = window.navigator.userAgent.indexOf("Edge") > -1;

            if (isChromium !== null && isChromium !== undefined && vendorName === "Google Inc." && isOpera == false && isIEedge == false) {
                //Just for Chromes:
                var $navbarColapse = $('#navbar-second').find('.navbar-collapse');
                if ($('.navbar-toggle').is(':visible')) { //now adjust it for mobiles (as it is done, via CSS for all browsers)
                    $navbarColapse.css({
                        width: '100%',
                        'margin-left': 0,
                        'padding-left': 20,
                        'padding-right': 20
                    })
                } else { //remember onResize possibility... We have to get everything back.
                    $navbarColapse.css({
                        margin: '0 auto',
                        'padding-left': 0,
                        'padding-right': 0
                    });
                }
            } else {
                // Not Google chrome! CSS will do the adjustments.
            }

            return false;
        };

        //To hover on dropdown menu's:
        $('.dropdown').mouseenter(function () {
            if (!$('.navbar-toggle').is(':visible')) { // disable for mobile view
                if (!$(this).hasClass('open')) { // Keeps it open when hover it again
                    $('.dropdown-toggle', this)
                        .trigger('click');
                }
            }
        });
        /*****************************************************************************************************
         * Should be notice it's a design decision in Bootstrap to do NOT open the dropdowns on HOVER event...
         ******************************************************************************************************/

    });