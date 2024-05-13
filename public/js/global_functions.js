function make_input_city_autocomplete() {
    $.ajax({
        url: '/getCities',
        type: 'get',
        dataType: 'json',
        success: function(responce) {
            $(".city_input").autocomplete({
                source: responce
            });
        },
        error: function(result) {
            console.log('cities error');
        }

    });
}