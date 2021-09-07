<?php

// Website **********************************

function campo_box_website()
{
	add_meta_box('website_id', 'Website', 'field_event_website', 'event');
}
add_action('add_meta_boxes', 'campo_box_website');
function field_event_website($post)
{
	$valuex = get_post_meta($post->ID, 'website', true);
       
?><div id="website">
        <input type="hidden" id="vwebsite" value="<?php echo $valuex; ?>">    		
		<p>Check if the <b>Event</b> will have an internal or external website.</p>
		<label><input class="internal" type="radio" name="website" <?php if ($valuex == "Internal") echo "checked"; ?> value="Internal">
			&ensp;Internal</label><br>
		<label><input class="external" type="radio" name="website" <?php if ($valuex == "External") echo "checked"; ?> value="External">
		    &ensp;External</label><br>		
	</div>
<?php }


// URL (external) **********************************

function field_box_event_url()
{
    add_meta_box('event_url_id', 'URL (for event with external website)', 'field_event_url', 'event');
}
add_action('add_meta_boxes', 'field_box_event_url');

function field_event_url($post)
{
    $value0 = get_post_meta($post->ID, 'event_url', true);
?>
    <input class="ievent" type="text" name="event_url" value="<?php echo $value0; ?>">
<?php
}


// Date **********************************

function field_box_event_year()
{
    add_meta_box('event_year_id', 'Year', 'field_event_year', 'event');
}
add_action('add_meta_boxes', 'field_box_event_year');

function field_event_year($post)
{
    $value1 = get_post_meta($post->ID, 'event_year', true);
?>
    <input type="number" min="2000" max="2100" step="1" name="event_year" value="<?php echo $value1; ?>">
<?php
}

// Color **********************************

function field_box_event_color()
{
    add_meta_box('event_color_id', 'Theme Color', 'field_event_color', 'event');
}
add_action('add_meta_boxes', 'field_box_event_color');

function field_event_color($post)
{
    $value2 = get_post_meta($post->ID, 'event_color', true);
?>
    <input type="color" name="event_color" value="<?php echo $value2; ?>" />
<?php
}

// Logo **********************************

function field_box_event_logo_1()
{
    add_meta_box('event_logo_1_id', 'Logo', 'field_event_logo_1', 'event');
}
add_action('add_meta_boxes', 'field_box_event_logo_1');

function field_event_logo_1($post)
{
    $value3 = get_post_meta($post->ID, 'event_logo_1', true);
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(2,1);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_logo_1" id="event_logo_1" value="<?php echo $value3; ?>" /></td>
            <td>&emsp;<a href="<?php echo $value3; ?>" target="_blank"><img style="height:30px" id="preview_event_logo_1" alt="preview" title="preview" src="<?php echo $value3; ?>" /></a></td>
        </tr>
    </table>
    <span>(Ideal size: 100x100 px)</span>
<?php
}


// Slide 1 **********************************

function field_box_event_logo_2()
{
    add_meta_box('event_logo_2_id', 'Slide 1', 'field_event_logo_2', 'event');
}
add_action('add_meta_boxes', 'field_box_event_logo_2');

function field_event_logo_2($post)
{
    $value4 = get_post_meta($post->ID, 'event_logo_2', true);
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(2,2);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_logo_2" id="event_logo_2" value="<?php echo $value4; ?>" /></td>
            <td>&emsp;<a href="<?php echo $value4; ?>" target="_blank"><img style="height:30px" id="preview_event_logo_2" alt="preview" title="preview" src="<?php echo $value4; ?>" /></a></td>
        </tr>
        <tr>
            <td>
                <div>Title</div>
            </td>
            <td><input type="text" name="event_logo_2_1" value="<?php echo get_post_meta($post->ID,'event_logo_2_1',true); ?>" /></td>
        </tr>
        <tr>
            <td>
                <div>Text</div>
            </td>
            <td><textarea name="event_logo_2_2"><?php echo get_post_meta($post->ID,'event_logo_2_2',true); ?></textarea></td>
        </tr>
        <tr>
            <td>
                <div>Button (Name,URL)</div>
            </td>
            <td><input type="text" name="event_logo_2_3" value="<?php echo get_post_meta($post->ID,'event_logo_2_3',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br<<span>(<b>Ideal size</b>: 1700x500 px)</span>
    <br><span>(<b>Button</b>; Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Slide 2 **********************************

function field_box_event_logo_3()
{
    add_meta_box('event_logo_3_id', 'Slide 2', 'field_event_logo_3', 'event');
}
add_action('add_meta_boxes', 'field_box_event_logo_3');

function field_event_logo_3($post)
{
    $value5 = get_post_meta($post->ID, 'event_logo_3', true);
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(2,3);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_logo_3" id="event_logo_3" value="<?php echo $value5; ?>" /></td>
            <td>&emsp;<a href="<?php echo $value5; ?>" target="_blank"><img style="height:30px" id="preview_event_logo_3" alt="preview" title="preview" src="<?php echo $value5; ?>" /></a></td>
        </tr>
        <tr>
            <td>
                <div>Title</div>
            </td>
            <td><input type="text" name="event_logo_3_1" value="<?php echo get_post_meta($post->ID,'event_logo_3_1',true); ?>" /></td>
        </tr>
        <tr>
            <td>
                <div>Text</div>
            </td>
            <td><textarea name="event_logo_3_2"><?php echo get_post_meta($post->ID,'event_logo_3_2',true); ?></textarea></td>
        </tr>
        <tr>
            <td>
                <div>Button (Name,URL)</div>
            </td>
            <td><input type="text" name="event_logo_3_3" value="<?php echo get_post_meta($post->ID,'event_logo_3_3',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br<<span>(<b>Ideal size</b>: 1700x500 px)</span>
    <br><span>(<b>Button</b>; Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Slide 3 **********************************

function field_box_event_logo_4()
{
    add_meta_box('event_logo_4_id', 'Slide 3', 'field_event_logo_4', 'event');
}
add_action('add_meta_boxes', 'field_box_event_logo_4');

function field_event_logo_4($post)
{
    $value6 = get_post_meta($post->ID, 'event_logo_4', true);
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(2,4);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_logo_4" id="event_logo_4" value="<?php echo $value6; ?>" /></td>
            <td>&emsp;<a href="<?php echo $value6; ?>" target="_blank"><img style="height:40px" id="preview_event_logo_4" alt="preview" title="preview" src="<?php echo $value6; ?>" /></a></td>
        </tr>
        <tr>
            <td>
                <div>Title</div>
            </td>
            <td><input type="text" name="event_logo_4_1" value="<?php echo get_post_meta($post->ID,'event_logo_4_1',true); ?>" /></td>
        </tr>
        <tr>
            <td>
                <div>Text</div>
            </td>
            <td><textarea name="event_logo_4_2"><?php echo get_post_meta($post->ID,'event_logo_4_2',true); ?></textarea></td>
        </tr>
        <tr>
            <td>
                <div>Button (Name,URL)</div>
            </td>
            <td><input type="text" name="event_logo_4_3" value="<?php echo get_post_meta($post->ID,'event_logo_4_3',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br<<span>(<b>Ideal size</b>: 1700x500 px)</span>
    <br><span>(<b>Button</b>; Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Content ********************************

function field_box_event_content()
{
    add_meta_box('event_content_id', 'Committee', 'field_event_content', 'event');
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
    if (isset($_POST['website'])) {
        $website = $_POST['website'];
        update_post_meta($post_id, 'website', $website);
    }

    if (isset($_POST['event_url'])) {
        $event_url = $_POST['event_url'];
        update_post_meta($post_id, 'event_url', $event_url);
    }

    if (isset($_POST['event_year'])) {
        $event_year = $_POST['event_year'];
        update_post_meta($post_id, 'event_year', $event_year);
    }

    if (isset($_POST['event_color'])) {
        $event_color = $_POST['event_color'];
        update_post_meta($post_id, 'event_color', $event_color);
    }

    if (isset($_POST['event_logo_1'])) {
        $event_logo_1 = $_POST['event_logo_1'];
        update_post_meta($post_id, 'event_logo_1', $event_logo_1);
    }

    if (isset($_POST['event_logo_2'])) {
        $event_logo_2 = $_POST['event_logo_2'];
        update_post_meta($post_id, 'event_logo_2', $event_logo_2);
    }

    if (isset($_POST['event_logo_2_1'])) {
        $event_logo_2_1 = $_POST['event_logo_2_1'];
        update_post_meta($post_id, 'event_logo_2_1', $event_logo_2_1);
    }

    if (isset($_POST['event_logo_2_2'])) {
        $event_logo_2_2 = $_POST['event_logo_2_2'];
        update_post_meta($post_id, 'event_logo_2_2', $event_logo_2_2);
    }

    if (isset($_POST['event_logo_2_3'])) {
        $event_logo_2_3 = $_POST['event_logo_2_3'];
        update_post_meta($post_id, 'event_logo_2_3', $event_logo_2_3);
    }

    if (isset($_POST['event_logo_3'])) {
        $event_logo_3 = $_POST['event_logo_3'];
        update_post_meta($post_id, 'event_logo_3', $event_logo_3);
    }

    if (isset($_POST['event_logo_3_1'])) {
        $event_logo_3_1 = $_POST['event_logo_3_1'];
        update_post_meta($post_id, 'event_logo_3_1', $event_logo_3_1);
    }

    if (isset($_POST['event_logo_3_2'])) {
        $event_logo_3_2 = $_POST['event_logo_3_2'];
        update_post_meta($post_id, 'event_logo_3_2', $event_logo_3_2);
    }

    if (isset($_POST['event_logo_3_3'])) {
        $event_logo_3_3 = $_POST['event_logo_3_3'];
        update_post_meta($post_id, 'event_logo_3_3', $event_logo_3_3);
    }

    if (isset($_POST['event_logo_4'])) {
        $event_logo_4 = $_POST['event_logo_4'];
        update_post_meta($post_id, 'event_logo_4', $event_logo_4);
    }

    if (isset($_POST['event_logo_4_1'])) {
        $event_logo_4_1 = $_POST['event_logo_4_1'];
        update_post_meta($post_id, 'event_logo_4_1', $event_logo_4_1);
    }

    if (isset($_POST['event_logo_4_2'])) {
        $event_logo_4_2 = $_POST['event_logo_4_2'];
        update_post_meta($post_id, 'event_logo_4_2', $event_logo_4_2);
    }

    if (isset($_POST['event_logo_4_3'])) {
        $event_logo_4_3 = $_POST['event_logo_4_3'];
        update_post_meta($post_id, 'event_logo_4_3', $event_logo_4_3);
    }

    if (isset($_POST['event_content'])) {
        $event_content = $_POST['event_content'];
        update_post_meta($post_id, 'event_content', $event_content);
    }
}
add_action('save_post', 'save_postmeta_event');
