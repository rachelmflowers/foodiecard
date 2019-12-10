
$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    new Selectr('#restaurantCity', {
        defaultSelected: true
    });
    new Selectr('#restaurantZip', {
        defaultSelected: true
    });
    new Selectr('#shippingState', {
        placeholder: "State"
    });

    new Selectr('.js-selectr-multiple', {
        multiple: true,
        defaultSelected: true
    });
});