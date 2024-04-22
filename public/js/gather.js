$(function() {
    $(document).ready(function() {
        $('form').on('submit', function(e) {

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
                success: function(result) {
                    fireNotif('Saved!', 'success', 2000);
                },
                error: function(result) {
                    fireNotif('Error!', 'error', 2000);
                }

            });
        });

    });
});