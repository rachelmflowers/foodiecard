// Scroll observer
function ScrollPoint(elem) {
    var scrollElem = document.querySelector(elem),
        observerOptions = {
            root: null,
            threshold: 0.25
        };

    if (typeof (scrollElem) != 'undefined' && scrollElem != null) {
        console.log('there is a scroll elem');
        if (scrollElem.hasAttribute("data-scrollMargin")) {
            var scrollMargin = scrollElem.getAttribute('data-scrollMargin');

            observerOptions = {
                root: null,
                rootMargin: scrollMargin
            }
        }

        function observerCallback(entries, observer) {
            entries.forEach(entry => {

                if (entry.intersectionRatio > 0) {
                    if (entries[0].boundingClientRect.y < 100) {
                        scrollElem.classList.add('scroll-past');
                        observer.unobserve(entry.target);
                    }
                } else {
                    scrollElem.classList.remove('scroll-past');
                }
            });

        }

        if (
            "IntersectionObserver" in window &&
            "IntersectionObserverEntry" in window &&
            "intersectionRatio" in window.IntersectionObserverEntry.prototype
        ) {
            let observer = new IntersectionObserver(observerCallback, observerOptions);

            observer.observe(scrollElem);
        }
    }
}

// GOOGLE MAPS
// create a load function to load scripts
const load = async (script) => {
    return new Promise(async ready => {
        for (i = 0; i < document.scripts.length; i++) {
            if (document.scripts[i].src == script) {
                return r()
            }
        }
        let elem = document.createElement('script');
        elem.src = script;
        document.body.appendChild(elem)
        elem.onload = ready;
    })
}

// create google map function
// - default zoom is 15 (street level)
// - default map markers are not shown
// - default: default map UI is not disabled
const gmap = async (elem) => {
    return new Promise(async ready => {
        let latlng = elem.getAttribute('data-mapLatLng').split(',');
        let Lat = parseFloat(latlng[0]);
        let Lng = parseFloat(latlng[1]);
        let location = { lat: Lat, lng: Lng };
        let zoom = elem.hasAttribute("data-mapZoom") ? parseFloat(elem.getAttribute("data-mapZoom")) : 15;
        let mapMarker = elem.hasAttribute("data-mapMarker") ? true : false;
        let disableMapUI = elem.hasAttribute("data-disableMapUI") ? true : false;

        await load('https://maps.googleapis.com/maps/api/js?key=AIzaSyDLBAYbQnUvDYI8eANtjvfSxbJx11SpGts&v=3');

        let map = new google.maps.Map(elem, {
            center: location,
            zoom: zoom,
            disableDefaultUI: disableMapUI
        });

        if (mapMarker) {
            // The marker, positioned at location
            let marker = new google.maps.Marker({ position: location, map: map });
        }

        ready(map)
    })
}

// find maps and load
(async () => {
    let maps = document.querySelectorAll("div[data-controls='gmap']");
    for (var i = 0; i < maps.length; i++) {
        await gmap(maps[i]);
    }
})();


(function ($) {

    // Begin FIX function for focusable elements for accessibility
    jQuery.extend(jQuery.expr[':'], {
        focusable: function (el, index, selector) {
            var $element = $(el);
            return $element.is(':input:enabled, a[href], area[href], object, [tabindex]') && !$element.is(':hidden');
        }
    });

    function focusOnElement($element) {
        if (!$element.length) {
            return;
        }
        if (!$element.is(':focusable')) {
            // add tabindex to make focusable and remove again
            $element.attr('tabindex', -1).on('blur focusout', function () {
                $(this).removeAttr('tabindex');
            });
        }
        $element.focus();
    }
    // END fix for focusable elements

    $(document).ready(function () {
        // Begin focusable fix for accessibility
        // if there is a '#' in the URL (someone linking directly to a page with an anchor)
        if (document.location.hash) {
            focusOnElement($(document.location.hash));
        }

        // if the hash has been changed (activation of an in-page link)
        $(window).bind('hashchange', function () {
            var hash = "#" + window.location.hash.replace(/^#/, '');
            focusOnElement($(hash));
        });
        // END focusable fix

        $('[data-toggle="tooltip"]').tooltip();

        // How it works Scroll observer
        new ScrollPoint('#step-1');
        new ScrollPoint('#step-2');


        // CHECKOUT PAGE
        
        $('.showRegistration').on('click', function() {
            $('#loginForm_container').hide();
            $('#registerForm_container').addClass('show');
        });
        
        $('.showLogin').on('click', function() {
            $('#registerForm_container').hide();
            $('#loginForm_container').addClass('show');
        });

        $('.showCheckout').on('click', function() {
            $('#loginForm_container').hide();
            $('#registerForm_container').hide();
            $('#checkout').addClass('show');
        });

        $('.add-card').on('click', function() {
            var newCard = $(this).next('.input-group').clone();
            
            $(newCard).insertBefore(this);
        })

        $('.emailMessage').on('change', function() {
            if ( $(this).is(':checked') ) {
                $(this).parent().next('.messageEmail').addClass('show');
            } else {
                $(this).parent().next('.messageEmail').removeClass('show');
            }
        })

        $('.add-gift').on('click', function() {
            var newGift = $(this).next('.additional-recipient').clone();
            
            $(newGift).insertBefore(this);
        })

        // Selectr custom select boxes
        var restaurantCity = document.getElementById("restaurantCity"),
            restaurantZip = document.getElementById("restaurantZip"),
            shippingState = document.getElementById("shippingState"),
            cusineType = document.getElementById("cusineType");

        if (typeof (restaurantCity) != 'undefined' && restaurantCity != null) {
            new Selectr('#restaurantCity', {
                defaultSelected: true
            });
        }

        if (typeof (restaurantZip) != 'undefined' && restaurantZip != null) {
            new Selectr('#restaurantZip', {
                defaultSelected: true
            });
        }

        // if (typeof (shippingState) != 'undefined' && shippingState != null) {
        //     new Selectr('#shippingState', {
        //         placeholder: "State"
        //     });
        // }

        if (typeof (cusineType) != 'undefined' && cusineType != null) {
            new Selectr('#cusineType', {
                multiple: true,
                defaultSelected: true
            });
        }

        // Flickity Scrollers
        var featArticles = document.getElementById('featuredArticlesSlider'),
            testimonials = document.querySelector('.testimonial-slider'),
            featRestaurants = document.getElementById('featRestSlider'),
            imageSlider = document.getElementById('imageSlider'),
            modalImageSlider = document.getElementById('modalImageSlider');

        if (typeof (featArticles) != 'undefined' && featArticles != null) {
            new Flickity(featArticles, {
                wrapAround: true
            });
        }

        if (typeof (testimonials) != 'undefined' && testimonials != null) {
            new Flickity(testimonials, {
                cellAlign: 'left',
                fade: true,
                autoPlay: true,
                wrapAround: true
            });
        }

        if (typeof (featRestaurants) != 'undefined' && featRestaurants != null) {
            new Flickity(featRestaurants, {
                cellAlign: 'left',
                contain: true,
                groupCells: '80%'
            });
        }

        if (typeof (imageSlider) != 'undefined' && imageSlider != null) {
            new Flickity(imageSlider, {
                cellAlign: 'left',
                autoPlay: 4500,
                pageDots: false,
                wrapAround: true,
            });
        }

        if (typeof (modalImageSlider) != 'undefined' && modalImageSlider != null) {

            var modalSlider = new Flickity(modalImageSlider, {
                cellAlign: 'center',
                imagesLoaded: true,
                percentPosition: false,
                setGallerySize: false,
                pageDots: false,
                contain: true,
            });

            $('#imageSlider').on('click', '.image-container', function() {
                // open modal
                $('#imageSliderModal').modal('show');

                // show correct slide
                var index = $(this).index();
                modalSlider.select( index, true, true )
            });

            $('#imageSliderModal').on( 'shown.bs.modal', function() {
                modalSlider.resize()
            });
        }
    });
})(jQuery);