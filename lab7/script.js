$("#get_info").on("click", function() {
    var address = $("#address").val();
    $.ajax({
        url: 'YandexApi.php',
        type: 'POST',
        cache: false,
        data: {'address': address},
        dataType: 'html',
        beforeSend: function () {
            $("#get_info").prop('disabled', true);
        },
        success: function(response) {
            var result = $.parseJSON(response);
            $("#res").html(
                "Страна: " + result.address.country + '<br>' +
                "Субъект: " + result.address.province + '<br>' +
                "Город: " + result.address.locality + '<br>' +
                "Улица: " + result.address.street + '<br>' +
                "Дом: " + result.address.house + '<br>' +
                "Координаты: " + result.coords + '<br>' +
                "Метро: " + result.metro
            );
            $("#get_info").prop('disabled', false);
        }
    })
})