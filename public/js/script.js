$('.add-item-to-cart').on('click', function () {

    $.ajax({

        url: BASE_URL + 'shop/add-to-cart',
        type: 'GET',
        dataType: 'html',
        data: {
            pid: $(this).data('pid')
        },
        success: function () {
            window.location.reload();
        }

    });

});

$('.update-cart-btn').on('click', function (e) {
    e.preventDefault();

    $.ajax({

        url: BASE_URL + 'shop/update-cart',
        type: 'GET',
        dataType: 'html',
        data: {
            pid: $(this).data('pid'),
            op: $(this).data('op')
        },
        success: function () {
            window.location.reload();
        }

    });

});
