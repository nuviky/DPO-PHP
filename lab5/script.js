$("#secure").on("click", function() {
    var id = $("#secure_input").val();

    $.ajax({
        url: 'Secure.php',
        type: 'POST',
        cache: false,
        data: { 'id': id },
        dataType: 'html',
        success: function(data) {
            $("#secure_data").html(data);
        }
    })
})

$("#unsecure").on("click", function() {
    var id = $("#unsecure_input").val();

    $.ajax({
        url: 'Unsecure.php',
        type: 'POST',
        cache: false,
        data: { 'id': id },
        dataType: 'html',
        success: function(data) {
            $("#unsecure_data").html(data);
        }
    })
})