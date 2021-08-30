$("#numb_1").on("click", function() {
    var str = $("#string").val();

    $.ajax({
        url: 'Number_1.php',
        type: 'GET',
        cache: false,
        data: { 'str': str },
        dataType: 'html',
        success: function(data) {
            $("#res_numb_1").text(data);
        }
    })
})

$("#numb_2").on("click", function() {
    $.ajax({
        url: 'Number_2.php',
        type: 'POST',
        cache: false,
        data: { },
        dataType: 'html',
        success: function(data) {
            $("#res_numb_2").html(data);
        }
    })
})