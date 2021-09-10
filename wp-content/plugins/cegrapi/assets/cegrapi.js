window.onload = function () {
    $("#adminmenu #toplevel_page_cegrapi ul li.wp-first-item a").html("About");

    function internal(){
        $("#event_url_id").hide();
        $("#event_year_id").show();
        $("#event_color_id").show();
        $("#event_logo_1_id").show();
        $("#event_slide_1_id").show();
        $("#event_slide_2_id").show();
        $("#event_slide_3_id").show();
        $("#event_program_id").show();
        $("#event_sponsor_1_id").show();
        $("#event_sponsor_2_id").show();
        $("#event_sponsor_3_id").show();
        $("#event_sponsor_4_id").show();
        $("#event_sponsor_5_id").show();
        $("#event_sponsor_6_id").show();
        $("#event_maps_id").show();
    }
    function external(){
        $("#event_url_id").show();
        $("#event_year_id").hide();
        $("#event_color_id").hide();
        $("#event_logo_1_id").show();
        $("#event_slide_1_id").hide();
        $("#event_slide_2_id").hide();
        $("#event_slide_3_id").hide();
        $("#event_program_id").hide();
        $("#event_sponsor_1_id").hide();
        $("#event_sponsor_2_id").hide();
        $("#event_sponsor_3_id").hide();
        $("#event_sponsor_4_id").hide();
        $("#event_sponsor_5_id").hide();
        $("#event_sponsor_6_id").hide();
        $("#event_maps_id").hide();
    }

    if($("#vwebsite").val() == "Internal"){
        internal();
    }else if($("#vwebsite").val() == "External"){
        external();
    }

    $("#website .internal").click(()=>{
        internal();
    });

    $("#website .external").click(()=>{
        external();
    });
}

function upload_image(type, val) {

    aw_uploader = wp.media({
        title: 'Custom image',
        library: {
            uploadedTo: wp.media.view.settings.post.id,
            type: 'image'
        },
        button: {
            text: 'Use this image'
        },
        multiple: false
    }).on('select', function () {
        var attachment = aw_uploader.state().get('selection').first().toJSON();
        var url = attachment.url.split('/').splice(3, 6);
        url = url.join('/');
        if (type == 1) {
            $('#portal_input_' + val).val("/" + url);
            $('#preview_portal_input_' + val).attr('src', "/" + url);
        } else if (type == 2) {
            $('#event_slide_' + val).val("/" + url);
            $('#preview_event_slide_' + val).attr('src', "/" + url);
        }
        else if (type == 3) {
            $('#event_sponsor_' + val).val("/" + url);
            $('#preview_event_sponsor_' + val).attr('src', "/" + url);
        }
    })
        .open();
}