window.onload = function(){
    $("#adminmenu #toplevel_page_cegrapi ul li.wp-first-item a").html("About");
}

function upload_image(val){

    aw_uploader = wp.media({
            title: 'Custom image',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            var url = attachment.url.split('/').splice(3,6);            
            url = url.join('/');
            $('#portal_input_'+val).val("/"+url);
            $('#preview_portal_input_'+val).attr('src',"/"+url);
        })
        .open();    
}