$(function() {
    $(".form-create-gather").on("submit", function(e) {
        e.preventDefault();

        const data = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            type: "post",
            data: data,
            contentType: false, // Let jQuery handle the content type
            processData: false, // Don't process the data
            dataType: "json",
            success: function(result) {
                if (result.error !== undefined) {
                    cosyAlert(result.error, "error", { autoHideTime: 2000 });
                } else {
                    window.location.href = "/cabinet";
                }
            },
            error: function(result) {
                result = JSON.parse(result.responseText);
                cosyAlert(parseError(result), "error", { autoHideTime: 2000 });
            },
        });
    });

    $(".form_get_gathers").on("submit", function(e) {
        e.preventDefault();

        const data = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            type: "post",
            data: data,
            contentType: false, // Let jQuery handle the content type
            processData: false, // Don't process the data
            dataType: "json",
            success: function(responce) {
                displayGathers(responce.gathers, responce.recordHashTags);
            },
            error: function(responce) {
                console.log(responce);
            },
        });
    });

    $(".gather_filters li.option").on("click", function(e) {
        e.preventDefault();
        $(".gather_filters li.option").removeClass("filter_selected");
        $(this).addClass("filter_selected");

        $("#gather_filter_input").val(
            $(this).attr("filter_name") + ";" + $(this).attr("value")
        );

        $(".form_get_gathers").trigger("submit");
    });

    $("#home_filters_input").on("change", function(e) {
        e.preventDefault();

        $("#gather_filter_input").val(
            $(this).attr("filter_name") + ";" + $(this).attr("value")
        );
        $(".form_get_gathers").trigger("submit");
    });

    make_input_city_autocomplete();
    $(".gather_filters li.option").first().trigger("click");
});

function displayGathers(gathers, recordHashTags) {
    $(".home-gathers").html("");

    for (var key in gathers) {
        var gather = gathers[key];

        let img_div = "";
        if (gather["image_path"] != null) {
            img_div = `<div class="gather_img" style="background-image: url(${gather["image_path"]}"></div>`;
        } else {
            img_div = "";
        }

        let hashTags = " ";
        recordHashTags[gather["gather_id"]].forEach((element) => {
            hashTags += " " + element + " ";
        });

        const gather_html = $(`
                <div class="gathersblock">
                <div class="hashtags">${hashTags}</div>
                ${img_div}
                <div class="gathername gather_div_text">${gather["title"]}</div>
                <div class="gathergoal gather_div_text">Мета збору: ${gather["goal_amount"]} грн<br></div>
                <div class="gathergoal gather_div_text">${gather["description"]}</div>
                <a data-w-id="feec79e7-73e0-3571-3973-1ae56652380f" href="/gather/${gather["gather_id"]}" class="more-about-gather w-inline-block">
                <div class="gather-reveal"></div>
                <div class="gather-text">Більше про збір</div>
            </a>
            </div>
        `);

        $(".home-gathers").append(gather_html);
    }
}