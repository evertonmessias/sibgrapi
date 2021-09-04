<?php

// Data **********************************

function field_box_event_date()
{
    add_meta_box('event_date_id', 'Date', 'field_event_date', 'event');
}
add_action('add_meta_boxes', 'field_box_event_date');

function field_event_date($post)
{
    $value = get_post_meta($post->ID, 'event_date', true);
?>
    <input type="date" name="event_date" value="<?php echo $value; ?>">
<?php
}

// Conteúdo ********************************

function field_box_event_content()
{
    add_meta_box('event_content_id', 'Content', 'field_event_content', 'event');
}
add_action('add_meta_boxes',  'field_box_event_content');

function field_event_content($post)
{
    $value = get_post_meta($post->ID, 'event_content', true);
    wp_editor($value, 'post_meta_box', array('textarea_name' => 'event_content'));
}


// SAVE ALL **********************************

function save_postmeta_event($post_id)
{
    if (isset($_POST['event_date'])) {
        $event_date = sanitize_text_field($_POST['event_date']);
        update_post_meta($post_id, 'event_date', $event_date);
    }

    if (isset($_POST['event_content'])) {
        $event_content = $_POST['event_content'];
        update_post_meta($post_id, 'event_content', $event_content);
    }
}
add_action('save_post', 'save_postmeta_event');
