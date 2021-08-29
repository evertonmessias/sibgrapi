<?php

// Data **********************************

function campo_box_agenda_date()
{
    add_meta_box('agenda_date_id', 'Data', 'campo_agenda_date', 'agenda');
}
add_action('add_meta_boxes', 'campo_box_agenda_date');

function campo_agenda_date($post)
{
    $value = get_post_meta($post->ID, 'agenda_date', true);
?>
    <input type="date" name="agenda_date" value="<?php echo $value; ?>">
<?php
}

// Conteúdo ********************************

function campo_box_agenda_content()
{
    add_meta_box('agenda_content_id', 'Conteúdo', 'campo_agenda_content', 'agenda');
}
add_action('add_meta_boxes',  'campo_box_agenda_content');

function campo_agenda_content($post)
{
    $value = get_post_meta($post->ID, 'agenda_content', true);
    wp_editor($value, 'post_meta_box', array('textarea_name' => 'agenda_content'));
}


// SAVE ALL **********************************

function save_postmeta_agenda($post_id)
{
    if (isset($_POST['agenda_date'])) {
        $agenda_date = sanitize_text_field($_POST['agenda_date']);
        update_post_meta($post_id, 'agenda_date', $agenda_date);
    }

    if (isset($_POST['agenda_content'])) {
        $agenda_content = $_POST['agenda_content'];
        update_post_meta($post_id, 'agenda_content', $agenda_content);
    }
}
add_action('save_post', 'save_postmeta_agenda');
