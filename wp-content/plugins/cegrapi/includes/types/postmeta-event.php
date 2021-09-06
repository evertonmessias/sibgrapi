<?php

// Data **********************************

function field_box_event_year()
{
    add_meta_box('event_year_id', 'year', 'field_event_year', 'event');
}
add_action('add_meta_boxes', 'field_box_event_year');

function field_event_year($post)
{
    $value = get_post_meta($post->ID, 'event_year', true);
?>
    <input type="number" name="event_year" value="<?php echo $value; ?>">
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
    if (isset($_POST['event_year'])) {
        $event_year = $_POST['event_year'];
        update_post_meta($post_id, 'event_year', $event_year);
    }

    if (isset($_POST['event_content'])) {
        $event_content = $_POST['event_content'];
        update_post_meta($post_id, 'event_content', $event_content);
    }
}
add_action('save_post', 'save_postmeta_event');
