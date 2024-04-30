$(function() {
    $('.form-update-data').on('submit', function(e) {

        e.preventDefault();

        let $data;

        if ($(this).attr('data-method') == 'serialize') {
            $data = $(this).serialize();
        } else {
            $data = $(this).serializeArray();
        }

        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $data,
            dataType: 'json',
            success: function(result) {
                if (result.error !== undefined) {
                    cosyAlert(result.error, 'error', { autoHideTime: 2000 });
                } else {
                    cosyAlert('Saved!', 'success', { autoHideTime: 2000 });
                }
            },
            error: function(result) {
                result = JSON.parse(result.responseText);
                cosyAlert(parseError(result), 'error', { autoHideTime: 2000 });
            }

        });
    });
});



function parseError(response) {
    const errorMessage = response.message;
    const errors = response.errors;

    let string = ``;
    // Loop through each error field
    for (const field in errors) {
        const fieldErrors = errors[field];

        // Loop through each error message for the field
        for (const error of fieldErrors) {
            if (error != '') {
                string = string + `<p style="color:white;"> - ${error} </p>`;
            }
        }
    }

    return string;
}