<?php

/* Data **********************************

function field_box_registration_year()
{
    add_meta_box('registration_year_id', 'Year', 'field_registration_year', 'registration');
}
add_action('add_meta_boxes', 'field_box_registration_year');

function field_registration_year($post)
{
    $value = get_post_meta($post->ID, 'registration_year', true);
?>
    <input type="number" min="2000" max="2100" step="1" name="registration_year" value="<?php echo $value; ?>">
<?php
}*/

// Conteúdo ********************************

function field_box_registration_content()
{
    add_meta_box('registration_content_id', 'Content', 'field_registration_content', 'registration');
}
add_action('add_meta_boxes',  'field_box_registration_content');

function field_registration_content($post)
{
    $value = get_post_meta($post->ID, 'registration_content', true);
    wp_editor($value, 'post_meta_box', array('textarea_name' => 'registration_content'));
}


// SAVE ALL **********************************

function save_postmeta_registration($post_id)
{
    /*if (isset($_POST['registration_year'])) {
        $registration_year = sanitize_text_field($_POST['registration_year']);
        update_post_meta($post_id, 'registration_year', $registration_year);
    }*/

    if (isset($_POST['registration_content'])) {
        $registration_content = $_POST['registration_content'];
        update_post_meta($post_id, 'registration_content', $registration_content);
    }
}
add_action('save_post', 'save_postmeta_registration');
