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


    $('.form_get_gathers').on('submit', function(e) {

        e.preventDefault();

        const data = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: data,
            contentType: false, // Let jQuery handle the content type
            processData: false, // Don't process the data
            dataType: 'json',
            success: function(responce) {
                displayGathers(responce);
            },
            error: function(responce) {
                console.log(responce);
            }

        });
    });


    $('.gather_filters li.option').on('click', function(e) {
        e.preventDefault();
        $('.gather_filters li.option').removeClass('filter_selected');
        $(this).addClass('filter_selected');

        $('#gather_filter_input').val($(this).attr('filter_name') + ';' + $(this).attr('value'));

        $('.form_get_gathers').trigger('submit');
    });


    $('#home_filters_input').on('change', function(e) {
        e.preventDefault();

        $('#gather_filter_input').val($(this).attr('filter_name') + ';' + $(this).attr('value'));
        $('.form_get_gathers').trigger('submit');
    });


    make_input_city_autocomplete();
    $('.gather_filters li.option').first().trigger('click');


});


function displayGathers(gathers) {
    $('.home-gathers').html('');

    for (var key in gathers) {
        var gather = gathers[key];


        let img_div = '';
        if (gather['image_path'] != null) {
            img_div = `<div class="gather_img" style="background-image: url(${gather['image_path']}"></div>`;
        } else {
            img_div = '';
        }


        const gather_html = $(`
                <div class="gathersblock">
                <div class="hashtags">#Їжа #mono-банка #Закритий</div>
                ${img_div}
                <div class="gathername">${gather['title']}</div>
                <div class="gathergoal">Мета збору: ${gather['goal_amount']} грн<br></div>
                <div class="gathergoal">${gather['description']}</div>
                <a data-w-id="32091814-7894-c01d-8689-89eac397c784" style="background-color:rgb(230,230,230)" href="/gather/${gather['gather_id']}" class="moreaboutgather w-inline-block">
                <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="top-line"></div>
                <div class="button3-text-2">Більше про збір</div>
                <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="bottom-line"></div>
                <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="left-line"></div>
                <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="right-line"></div>
                </a>
            </div>
        `);


        $('.home-gathers').append(gather_html);
    }
}