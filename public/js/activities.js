$(function() {
    $(".form-create-activities").on("submit", function(e) {
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


    $(".form_get_activities").on("submit", function(e) {
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
                displayactivities(responce.activities, responce.recordHashTags);
            },
            error: function(responce) {
                console.log(responce);
            },
        });
    });

    $(".activities_filters li.option").on("click", function(e) {
        e.preventDefault();
        $(".activities_filters li.option").removeClass("filter_selected");
        $(this).addClass("filter_selected");

        $("#activities_filter_input").val(
            $(this).attr("filter_name") + ";" + $(this).attr("value")
        );

        $(".form_get_activities").trigger("submit");
    });

    $("#home_filters_input").on("change", function(e) {
        e.preventDefault();

        $("#activities_filter_input").val(
            $(this).attr("filter_name") + ";" + $(this).attr("value")
        );
        $(".form_get_activities").trigger("submit");
    });

    make_input_city_autocomplete();
    $(".activities_filters li.option").first().trigger("click");


});


function displayactivities(activities, recordHashTags) {
    $(".home-activities").html("");

    for (var key in activities) {
        var activity = activities[key];

        let img_url = "";
        if (activity["image_path"] != null) {
            img_url = activity["image_path"];
        } else {
            img_url = "";
        }

        let hashTags = " ";


        if (recordHashTags[activity["activity_id"]] != undefined && recordHashTags[activity["activity_id"]] != null) {
            recordHashTags[activity["activity_id"]].forEach((element) => {
                hashTags += " " + element + " ";
            });
        }

        if (activity['status'] == 'active') {
            var status_styles = 'background-color: #00c938;';
        } else {
            var status_styles = 'background-color: #c5cf01;';
        }


        const activity_html = $(`
        <div class="initiationsblock">
        
    
        <div class="gather_img" style="background-image: url(${img_url}">
        <div class="cityhashtag">${hashTags}</div>
        <div class="status" style="${status_styles}">     ${activity['status']}     </div>
        </div>
      
        <div class="initiationname">${activity['title']}</div>
        <div class="initiationdescription">Короткий опис:<br> <div class="gather_div_text">${activity['description']}</div></div>
       
        <div class="dividerlineininitiations">---------------------------------------------------------</div>
        <img src="images/location.png" loading="lazy" width="28" sizes="28px" alt=""
             srcset="images/location-p-500.png 500w, images/location-p-800.png 800w, images/location.png 980w"
             class="location-image"><img src="images/data.png" loading="lazy" width="26" height="Auto" alt=""
                                         srcset="images/data-p-500.png 500w, images/data-p-800.png 800w, images/data.png 938w"
                                         sizes="(max-width: 767px) 26px, (max-width: 991px) 3vw, 26px"
                                         class="dataimage"><img src="images/time.png" loading="lazy" width="30"
                                                                alt="" class="timeimage">
        <div class="text-block-6">${activity['time']}</div>
        <div class="datatext">${activity['publish_date']}</div>
      
  
        <a data-w-id="7337f46b-09df-2e59-77f4-9167de95c0e4" style="background-color:rgb(230,230,230)"
           href="/activity/${activity["activity_id"]}" class="moreaboutinitiation w-inline-block">
            <div
                style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="top-line"></div>
            <div class="button3-text-2">Більше про ініціативу</div>
            <div
                style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="bottom-line"></div>
            <div
                style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="left-line"></div>
            <div
                style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="right-line"></div>
        </a>
        <div class="locationtext">Локація<br>${activity['address']}</div>

    </div>
        `);

        $(".home-activities").append(activity_html);
    }
}