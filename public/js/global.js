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
                    fireNotif(result.error, 'error', 2000);
                }else{
                    fireNotif('Saved!','success', 2000);
                }
            },
            error: function(result) {
                if (result.error !== undefined) {
                    fireNotif(result.error, 'error', 2000);
                }else{
                    fireNotif('Error!', 'error', 2000);
                }
            }

        });
    });
});
