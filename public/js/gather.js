$(function() {
    $('.form-create-gather').on('submit', function(e) {

        e.preventDefault();

        const data = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: data,
            contentType: false, // Let jQuery handle the content type
            processData: false, // Don't process the data
            dataType: 'json',
            success: function(result) {
                if (result.error !== undefined) {
                    cosyAlert(result.error, 'error', { autoHideTime: 2000 });
                } else {
                    window.location.href = '/cabinet';
                }
            },
            error: function(result) {
                result = JSON.parse(result.responseText);
                cosyAlert(parseError(result), 'error', { autoHideTime: 2000 });
            }

        });
    });
});