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
            $('#schedule_input_'+val).val("/"+url);
            $('#preview_schedule_input_'+val).attr('src',"/"+url);
        })
        .open();    
}