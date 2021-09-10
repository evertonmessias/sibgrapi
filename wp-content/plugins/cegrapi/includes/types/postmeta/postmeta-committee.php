<?php

// Content **********************************

function field_box_committee_caption()
{
    add_meta_box('committee_caption_id', 'Caption', 'field_committee_caption', 'committee');
}
add_action('add_meta_boxes', 'field_box_committee_caption');

function field_committee_caption($post)
{
?>
    <div class="committee">
        <p>Role</p>
        <p><input type="text" name="committee_caption_role" value="<?php echo get_post_meta($post->ID, 'committee_caption_role', true); ?>"></p>
        <p>URL</p>
        <p><input type="text" name="committee_caption_url" value="<?php echo get_post_meta($post->ID, 'committee_caption_url', true); ?>"></p>
        <p>Local</p>
        <p><input type="text" name="committee_caption_local" value="<?php echo get_post_meta($post->ID, 'committee_caption_local', true); ?>"></p>
    </div>
<?php
}

// SAVE ALL **********************************

function save_postmeta_committee($post_id)
{

    if (isset($_POST['committee_caption_role'])) {
        $committee_caption_role = $_POST['committee_caption_role'];
        update_post_meta($post_id, 'committee_caption_role', $committee_caption_role);
    }

    if (isset($_POST['committee_caption_url'])) {
        $committee_caption_url = $_POST['committee_caption_url'];
        update_post_meta($post_id, 'committee_caption_url', $committee_caption_url);
    }

    if (isset($_POST['committee_caption_local'])) {
        $committee_caption_local = $_POST['committee_caption_local'];
        update_post_meta($post_id, 'committee_caption_local', $committee_caption_local);
    }
}
add_action('save_post', 'save_postmeta_committee');
