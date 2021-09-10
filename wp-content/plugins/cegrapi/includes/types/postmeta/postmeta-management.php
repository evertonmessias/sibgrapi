<?php

// Content **********************************

function field_box_management_caption()
{
    add_meta_box('management_caption_id', 'Caption', 'field_management_caption', 'management');
}
add_action('add_meta_boxes', 'field_box_management_caption');

function field_management_caption($post)
{
?>
    <div class="management">
        <p>Role</p>
        <p><input type="text" name="management_caption_role" value="<?php echo get_post_meta($post->ID, 'management_caption_role', true); ?>"></p>
        <p>URL</p>
        <p><input type="text" name="management_caption_url" value="<?php echo get_post_meta($post->ID, 'management_caption_url', true); ?>"></p>
        <p>Local</p>
        <p><input type="text" name="management_caption_local" value="<?php echo get_post_meta($post->ID, 'management_caption_local', true); ?>"></p>
    </div>
<?php
}

// SAVE ALL **********************************

function save_postmeta_management($post_id)
{

    if (isset($_POST['management_caption_role'])) {
        $management_caption_role = $_POST['management_caption_role'];
        update_post_meta($post_id, 'management_caption_role', $management_caption_role);
    }

    if (isset($_POST['management_caption_url'])) {
        $management_caption_url = $_POST['management_caption_url'];
        update_post_meta($post_id, 'management_caption_url', $management_caption_url);
    }

    if (isset($_POST['management_caption_local'])) {
        $management_caption_local = $_POST['management_caption_local'];
        update_post_meta($post_id, 'management_caption_local', $management_caption_local);
    }
}
add_action('save_post', 'save_postmeta_management');
