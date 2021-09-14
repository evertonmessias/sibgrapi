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

function field_box_event_slide_0()
{
    add_meta_box('event_slide_0_id', 'Logo', 'field_event_slide_0', 'event');
}
add_action('add_meta_boxes', 'field_box_event_slide_0');

function field_event_slide_0($post)
{
    $value3 = get_post_meta($post->ID, 'event_slide_0', true);
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(2,0);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_slide_0" id="event_slide_0" value="<?php echo $value3; ?>" /></td>
            <td>&emsp;<a href="<?php echo $value3; ?>" target="_blank"><img style="height:30px" id="preview_event_slide_0" alt="preview" title="preview" src="<?php echo $value3; ?>" /></a></td>
        </tr>
    </table>
    <span>(Ideal size: 100x100 px)</span>
<?php
}


// Slide 1 **********************************

function field_box_event_slide_1()
{
    add_meta_box('event_slide_1_id', 'Slide 1', 'field_event_slide_1', 'event');
}
add_action('add_meta_boxes', 'field_box_event_slide_1');

function field_event_slide_1($post)
{?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(2,1);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_slide_1" id="event_slide_1" value="<?php echo get_post_meta($post->ID, 'event_slide_1', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_slide_1', true); ?>" target="_blank"><img style="height:30px" id="preview_event_slide_1" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_slide_1', true); ?>" /></a></td>
        </tr>
        <tr>
            <td>
                <div>Title</div>
            </td>
            <td><input type="text" name="event_slide_1_1" value="<?php echo get_post_meta($post->ID,'event_slide_1_1',true); ?>" /></td>
        </tr>
        <tr>
            <td>
                <div>Text</div>
            </td>
            <td><textarea name="event_slide_1_2"><?php echo get_post_meta($post->ID,'event_slide_1_2',true); ?></textarea></td>
        </tr>
        <tr>
            <td>
                <div>Button (Name,URL)</div>
            </td>
            <td><input type="text" name="event_slide_1_3" value="<?php echo get_post_meta($post->ID,'event_slide_1_3',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br<<span>(<b>Ideal size</b>: 1700x500 px)</span>
    <br><span>(<b>Button</b>; Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Slide 2 **********************************

function field_box_event_slide_2()
{
    add_meta_box('event_slide_2_id', 'Slide 2', 'field_event_slide_2', 'event');
}
add_action('add_meta_boxes', 'field_box_event_slide_2');

function field_event_slide_2($post)
{
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(2,2);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_slide_2" id="event_slide_2" value="<?php echo get_post_meta($post->ID, 'event_slide_2', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_slide_2', true); ?>" target="_blank"><img style="height:30px" id="preview_event_slide_2" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_slide_2', true); ?>" /></a></td>
        </tr>
        <tr>
            <td>
                <div>Title</div>
            </td>
            <td><input type="text" name="event_slide_2_1" value="<?php echo get_post_meta($post->ID,'event_slide_2_1',true); ?>" /></td>
        </tr>
        <tr>
            <td>
                <div>Text</div>
            </td>
            <td><textarea name="event_slide_2_2"><?php echo get_post_meta($post->ID,'event_slide_2_2',true); ?></textarea></td>
        </tr>
        <tr>
            <td>
                <div>Button (Name,URL)</div>
            </td>
            <td><input type="text" name="event_slide_2_3" value="<?php echo get_post_meta($post->ID,'event_slide_2_3',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br<<span>(<b>Ideal size</b>: 1700x500 px)</span>
    <br><span>(<b>Button</b>; Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Slide 3 **********************************

function field_box_event_slide_3()
{
    add_meta_box('event_slide_3_id', 'Slide 3', 'field_event_slide_3', 'event');
}
add_action('add_meta_boxes', 'field_box_event_slide_3');

function field_event_slide_3($post)
{
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(2,3);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_slide_3" id="event_slide_3" value="<?php echo get_post_meta($post->ID, 'event_slide_3', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_slide_3', true); ?>" target="_blank"><img style="height:30px" id="preview_event_slide_3" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_slide_3', true); ?>" /></a></td>
        </tr>
        <tr>
            <td>
                <div>Title</div>
            </td>
            <td><input type="text" name="event_slide_3_1" value="<?php echo get_post_meta($post->ID,'event_slide_3_1',true); ?>" /></td>
        </tr>
        <tr>
            <td>
                <div>Text</div>
            </td>
            <td><textarea name="event_slide_3_2"><?php echo get_post_meta($post->ID,'event_slide_3_2',true); ?></textarea></td>
        </tr>
        <tr>
            <td>
                <div>Button (Name,URL)</div>
            </td>
            <td><input type="text" name="event_slide_3_3" value="<?php echo get_post_meta($post->ID,'event_slide_3_3',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br<<span>(<b>Ideal size</b>: 1700x500 px)</span>
    <br><span>(<b>Button</b>; Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Program ********************************

function field_box_event_program()
{
    add_meta_box('event_program_id', 'Program', 'field_event_program', 'event');
}
add_action('add_meta_boxes',  'field_box_event_program');

function field_event_program($post)
{
    $value7 = get_post_meta($post->ID, 'event_program', true);
    wp_editor($value7, 'post_meta_box', array('textarea_name' => 'event_program'));
}


// Sponsor 1 **********************************

function field_box_event_sponsor_1()
{
    add_meta_box('event_sponsor_1_id', 'Sponsor 1', 'field_event_sponsor_1', 'event');
}
add_action('add_meta_boxes', 'field_box_event_sponsor_1');

function field_event_sponsor_1($post)
{?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(3,1);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_sponsor_1" id="event_sponsor_1" value="<?php echo get_post_meta($post->ID, 'event_sponsor_1', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_sponsor_1', true); ?>" target="_blank"><img style="height:30px" id="preview_event_sponsor_1" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_sponsor_1', true); ?>" /></a></td>
        </tr>        
        <tr>
            <td>
                <div>Name,URL</div>
            </td>
            <td><input type="text" name="event_sponsor_1_1" value="<?php echo get_post_meta($post->ID,'event_sponsor_1_1',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br><span>(Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Sponsor 2 **********************************

function field_box_event_sponsor_2()
{
    add_meta_box('event_sponsor_2_id', 'Sponsor 2', 'field_event_sponsor_2', 'event');
}
add_action('add_meta_boxes', 'field_box_event_sponsor_2');

function field_event_sponsor_2($post)
{
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(3,2);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_sponsor_2" id="event_sponsor_2" value="<?php echo get_post_meta($post->ID, 'event_sponsor_2', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_sponsor_2', true); ?>" target="_blank"><img style="height:30px" id="preview_event_sponsor_2" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_sponsor_2', true); ?>" /></a></td>
        </tr>        
        <tr>
            <td>
                <div>Name,URL</div>
            </td>
            <td><input type="text" name="event_sponsor_2_1" value="<?php echo get_post_meta($post->ID,'event_sponsor_2_1',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br><span>(Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Sponsor 3 **********************************

function field_box_event_sponsor_3()
{
    add_meta_box('event_sponsor_3_id', 'Sponsor 3', 'field_event_sponsor_3', 'event');
}
add_action('add_meta_boxes', 'field_box_event_sponsor_3');

function field_event_sponsor_3($post)
{
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(3,3);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_sponsor_3" id="event_sponsor_3" value="<?php echo get_post_meta($post->ID, 'event_sponsor_3', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_sponsor_3', true); ?>" target="_blank"><img style="height:30px" id="preview_event_sponsor_3" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_sponsor_3', true); ?>" /></a></td>
        </tr>        
        <tr>
            <td>
                <div>Name,URL</div>
            </td>
            <td><input type="text" name="event_sponsor_3_1" value="<?php echo get_post_meta($post->ID,'event_sponsor_3_1',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br><span>(Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Sponsor 4 **********************************

function field_box_event_sponsor_4()
{
    add_meta_box('event_sponsor_4_id', 'Sponsor 4', 'field_event_sponsor_4', 'event');
}
add_action('add_meta_boxes', 'field_box_event_sponsor_4');

function field_event_sponsor_4($post)
{?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(3,4);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_sponsor_4" id="event_sponsor_4" value="<?php echo get_post_meta($post->ID, 'event_sponsor_4', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_sponsor_4', true); ?>" target="_blank"><img style="height:30px" id="preview_event_sponsor_4" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_sponsor_4', true); ?>" /></a></td>
        </tr>        
        <tr>
            <td>
                <div>Name,URL</div>
            </td>
            <td><input type="text" name="event_sponsor_4_1" value="<?php echo get_post_meta($post->ID,'event_sponsor_4_1',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br><span>(Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Sponsor 5 **********************************

function field_box_event_sponsor_5()
{
    add_meta_box('event_sponsor_5_id', 'Sponsor 5', 'field_event_sponsor_5', 'event');
}
add_action('add_meta_boxes', 'field_box_event_sponsor_5');

function field_event_sponsor_5($post)
{
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(3,5);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_sponsor_5" id="event_sponsor_5" value="<?php echo get_post_meta($post->ID, 'event_sponsor_5', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_sponsor_5', true); ?>" target="_blank"><img style="height:30px" id="preview_event_sponsor_5" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_sponsor_5', true); ?>" /></a></td>
        </tr>        
        <tr>
            <td>
                <div>Name,URL</div>
            </td>
            <td><input type="text" name="event_sponsor_5_1" value="<?php echo get_post_meta($post->ID,'event_sponsor_5_1',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br><span>(Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}

// Sponsor 6 **********************************

function field_box_event_sponsor_6()
{
    add_meta_box('event_sponsor_6_id', 'Sponsor 6', 'field_event_sponsor_6', 'event');
}
add_action('add_meta_boxes', 'field_box_event_sponsor_6');

function field_event_sponsor_6($post)
{
?>
    <table class="tevent">
        <tr>
            <td><a href="#" onclick="upload_image(3,6);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
            <td><input type="text" name="event_sponsor_6" id="event_sponsor_6" value="<?php echo get_post_meta($post->ID, 'event_sponsor_6', true); ?>" /></td>
            <td>&emsp;<a href="<?php echo get_post_meta($post->ID, 'event_sponsor_6', true); ?>" target="_blank"><img style="height:30px" id="preview_event_sponsor_6" alt="preview" title="preview" src="<?php echo get_post_meta($post->ID, 'event_sponsor_6', true); ?>" /></a></td>
        </tr>        
        <tr>
            <td>
                <div>Name,URL</div>
            </td>
            <td><input type="text" name="event_sponsor_6_1" value="<?php echo get_post_meta($post->ID,'event_sponsor_6_1',true); ?>" /></td>
        </tr>
    </table>
    <br>
    <br><span>(Use <b>Name,URL</b> separated by commas and no spaces.)</span>
    <br>
<?php
}


// Maps **********************************

function field_box_event_maps()
{
    add_meta_box('event_maps_id', 'Google Maps', 'field_event_maps', 'event');
}
add_action('add_meta_boxes', 'field_box_event_maps');

function field_event_maps($post)
{
    $value8 = get_post_meta($post->ID, 'event_maps', true);
?>
    <input class="ievent" type="text" name="event_maps" value="<?php echo $value8; ?>" />
<?php
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

    if (isset($_POST['event_slide_0'])) {
        $event_slide_0 = $_POST['event_slide_0'];
        update_post_meta($post_id, 'event_slide_0', $event_slide_0);
    }

    if (isset($_POST['event_slide_1'])) {
        $event_slide_1 = $_POST['event_slide_1'];
        update_post_meta($post_id, 'event_slide_1', $event_slide_1);
    }

    if (isset($_POST['event_slide_1_1'])) {
        $event_slide_1_1 = $_POST['event_slide_1_1'];
        update_post_meta($post_id, 'event_slide_1_1', $event_slide_1_1);
    }

    if (isset($_POST['event_slide_1_2'])) {
        $event_slide_1_2 = $_POST['event_slide_1_2'];
        update_post_meta($post_id, 'event_slide_1_2', $event_slide_1_2);
    }

    if (isset($_POST['event_slide_1_3'])) {
        $event_slide_1_3 = $_POST['event_slide_1_3'];
        update_post_meta($post_id, 'event_slide_1_3', $event_slide_1_3);
    }

    if (isset($_POST['event_slide_2'])) {
        $event_slide_2 = $_POST['event_slide_2'];
        update_post_meta($post_id, 'event_slide_2', $event_slide_2);
    }

    if (isset($_POST['event_slide_2_1'])) {
        $event_slide_2_1 = $_POST['event_slide_2_1'];
        update_post_meta($post_id, 'event_slide_2_1', $event_slide_2_1);
    }

    if (isset($_POST['event_slide_2_2'])) {
        $event_slide_2_2 = $_POST['event_slide_2_2'];
        update_post_meta($post_id, 'event_slide_2_2', $event_slide_2_2);
    }

    if (isset($_POST['event_slide_2_3'])) {
        $event_slide_2_3 = $_POST['event_slide_2_3'];
        update_post_meta($post_id, 'event_slide_2_3', $event_slide_2_3);
    }

    if (isset($_POST['event_slide_3'])) {
        $event_slide_3 = $_POST['event_slide_3'];
        update_post_meta($post_id, 'event_slide_3', $event_slide_3);
    }

    if (isset($_POST['event_slide_3_1'])) {
        $event_slide_3_1 = $_POST['event_slide_3_1'];
        update_post_meta($post_id, 'event_slide_3_1', $event_slide_3_1);
    }

    if (isset($_POST['event_slide_3_2'])) {
        $event_slide_3_2 = $_POST['event_slide_3_2'];
        update_post_meta($post_id, 'event_slide_3_2', $event_slide_3_2);
    }

    if (isset($_POST['event_slide_3_3'])) {
        $event_slide_3_3 = $_POST['event_slide_3_3'];
        update_post_meta($post_id, 'event_slide_3_3', $event_slide_3_3);
    }

    if (isset($_POST['event_program'])) {
        $event_program = $_POST['event_program'];
        update_post_meta($post_id, 'event_program', $event_program);
    }

    if (isset($_POST['event_sponsor_1'])) {
        $event_sponsor_1 = $_POST['event_sponsor_1'];
        update_post_meta($post_id, 'event_sponsor_1', $event_sponsor_1);
    }

    if (isset($_POST['event_sponsor_1_1'])) {
        $event_sponsor_1_1 = $_POST['event_sponsor_1_1'];
        update_post_meta($post_id, 'event_sponsor_1_1', $event_sponsor_1_1);
    }    

    if (isset($_POST['event_sponsor_2'])) {
        $event_sponsor_2 = $_POST['event_sponsor_2'];
        update_post_meta($post_id, 'event_sponsor_2', $event_sponsor_2);
    }

    if (isset($_POST['event_sponsor_2_1'])) {
        $event_sponsor_2_1 = $_POST['event_sponsor_2_1'];
        update_post_meta($post_id, 'event_sponsor_2_1', $event_sponsor_2_1);
    } 

    if (isset($_POST['event_sponsor_3'])) {
        $event_sponsor_3 = $_POST['event_sponsor_3'];
        update_post_meta($post_id, 'event_sponsor_3', $event_sponsor_3);
    }

    if (isset($_POST['event_sponsor_3_1'])) {
        $event_sponsor_3_1 = $_POST['event_sponsor_3_1'];
        update_post_meta($post_id, 'event_sponsor_3_1', $event_sponsor_3_1);
    } 
    
    if (isset($_POST['event_sponsor_4'])) {
        $event_sponsor_4 = $_POST['event_sponsor_4'];
        update_post_meta($post_id, 'event_sponsor_4', $event_sponsor_4);
    }

    if (isset($_POST['event_sponsor_4_1'])) {
        $event_sponsor_4_1 = $_POST['event_sponsor_4_1'];
        update_post_meta($post_id, 'event_sponsor_4_1', $event_sponsor_4_1);
    }    

    if (isset($_POST['event_sponsor_5'])) {
        $event_sponsor_5 = $_POST['event_sponsor_5'];
        update_post_meta($post_id, 'event_sponsor_5', $event_sponsor_5);
    }

    if (isset($_POST['event_sponsor_5_1'])) {
        $event_sponsor_5_1 = $_POST['event_sponsor_5_1'];
        update_post_meta($post_id, 'event_sponsor_5_1', $event_sponsor_5_1);
    } 

    if (isset($_POST['event_sponsor_6'])) {
        $event_sponsor_6 = $_POST['event_sponsor_6'];
        update_post_meta($post_id, 'event_sponsor_6', $event_sponsor_6);
    }

    if (isset($_POST['event_sponsor_6_1'])) {
        $event_sponsor_6_1 = $_POST['event_sponsor_6_1'];
        update_post_meta($post_id, 'event_sponsor_6_1', $event_sponsor_6_1);
    }

    if (isset($_POST['event_maps'])) {
        $event_maps = $_POST['event_maps'];
        update_post_meta($post_id, 'event_maps', $event_maps);
    }
}
add_action('save_post', 'save_postmeta_event');
