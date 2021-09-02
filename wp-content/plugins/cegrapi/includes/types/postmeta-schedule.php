<?php

// Data **********************************

function field_box_schedule_date()
{
    add_meta_box('schedule_date_id', 'Date', 'field_schedule_date', 'schedule');
}
add_action('add_meta_boxes', 'field_box_schedule_date');

function field_schedule_date($post)
{
    $value = get_post_meta($post->ID, 'schedule_date', true);
?>
    <input type="date" name="schedule_date" value="<?php echo $value; ?>">
<?php
}

// Conteúdo ********************************

function field_box_schedule_content()
{
    add_meta_box('schedule_content_id', 'Content', 'field_schedule_content', 'schedule');
}
add_action('add_meta_boxes',  'field_box_schedule_content');

function field_schedule_content($post)
{
    $value = get_post_meta($post->ID, 'schedule_content', true);
    wp_editor($value, 'post_meta_box', array('textarea_name' => 'schedule_content'));
}


// SAVE ALL **********************************

function save_postmeta_schedule($post_id)
{
    if (isset($_POST['schedule_date'])) {
        $schedule_date = sanitize_text_field($_POST['schedule_date']);
        update_post_meta($post_id, 'schedule_date', $schedule_date);
    }

    if (isset($_POST['schedule_content'])) {
        $schedule_content = $_POST['schedule_content'];
        update_post_meta($post_id, 'schedule_content', $schedule_content);
    }
}
add_action('save_post', 'save_postmeta_schedule');
