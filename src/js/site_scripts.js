// Scroll observer
function ScrollPoint(elem) {
    var scrollElem = document.querySelector(elem),
        observerOptions = {
            root: null,
            threshold: 0.25
        };
        
    if (typeof(scrollElescrollElem) != 'undefined' &&scrollElem != null) {
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

$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    // Selectr custom select boxes
    var restaurantCity = document.getElementById("restaurantCity"),
        restaurantZip = document.getElementById("restaurantZip"),
        shippingState = document.getElementById("shippingState"),
        cusineType = document.getElementById("shippingState");

    if (typeof(restaurantCity) != 'undefined' && restaurantCity != null) {
        new Selectr('#restaurantCity', {
            defaultSelected: true
        });
    }

    if (typeof(restaurantZip) != 'undefined' && restaurantZip != null) {
        new Selectr('#restaurantZip', {
            defaultSelected: true
        });
    }

    if (typeof(restaurantCity) != 'undefined' && restaurantCity != null) {
        new Selectr('#shippingState', {
            placeholder: "State"
        });
    }

    if (typeof(cuisineType) != 'undefined' && cuisineType != null) {
        new Selectr('#cuisineType', {
            multiple: true,
            defaultSelected: true
        });
    }

    // Flickity Scrollers
    var featArticles = document.getElementById('featuredArticlesSlider'),
        testimonials = document.querySelector('.testimonial-slider'),
        featRestaurants = document.getElementById('featRestSlider');

    if (typeof(featArticles) != 'undefined' && featArticles != null) {
        new Flickity( featArticles, {
            wrapAround: true
        });
    }

    if (typeof(featRestaurants) != 'undefined' && featRestaurants != null) {
        new Flickity( featRestaurants, {
            cellAlign: 'left',
            contain: true,
            groupCells: '80%'
        });
    }

    if (typeof(testimonials) != 'undefined' && testimonials != null) {
        new Flickity( testimonials, {
            cellAlign: 'left',
            fade: true,
            autoPlay: 3000,
            wrapAround: true
        });
    }

    // How it works Scroll observer
    new ScrollPoint('#step-1');
    new ScrollPoint('#step-2');
});