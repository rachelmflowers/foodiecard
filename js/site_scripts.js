
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
        testimonials = document.querySelector('.testimonial-slider');

    if (typeof(featArticles) != 'undefined' && featArticles != null) {
        new Flickity( featArticles, {
            wrapAround: true
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
});