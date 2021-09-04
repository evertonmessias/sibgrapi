<?php
//Settings *************************************************
function schedule_page_html()
{ ?>
	<div class="settings-sibgrapi">
		<h1 class="title">Home Page Settings</h1>
		<hr>
		<form method="post" action="options.php">
			<?php settings_fields('schedule_option_grupo'); ?>

			<!-- Year ********************************** -->
			<label>
				<h3 class="title">Year: </h3><input type="number" min="2020" max="2050" step="1" id="schedule_input_1" name="schedule_input_1" value="<?php echo get_option('schedule_input_1'); ?>" />
			</label>

			<br><br><!-- Colors *************************************** -->
			<hr>

			<label>
				<h3 class="title">Theme Color: </h3><input type="color" id="schedule_input_3" name="schedule_input_3" value="<?php echo get_option('schedule_input_3'); ?>" />
			</label>

			<br><br><!-- Slides *************************************** -->
			<hr>

			<h3 class="title">Slides:</h3>

			<?php
			$image111 = get_option('schedule_input_111'); ?>
			<h3>Slide 1:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(111);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_111" id="schedule_input_111" value="<?php echo $image111; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image111; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_111" alt="preview" title="preview" src="<?php echo $image111; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Title</div>
					</td>
					<td><input type="text" id="schedule_input_112" name="schedule_input_112" value="<?php echo get_option('schedule_input_112'); ?>" /></td>
				</tr>
				<tr>
					<td>
						<div>Text</div>
					</td>
					<td><textarea id="schedule_input_113" name="schedule_input_113"><?php echo get_option('schedule_input_113'); ?></textarea></td>
				</tr>
				<tr>
					<td>
						<div>Button (Name,URL)</div>
					</td>
					<td><input type="text" id="schedule_input_114" name="schedule_input_114" value="<?php echo get_option('schedule_input_114'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image115 = get_option('schedule_input_115'); ?>
			<h3>Slide 2:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(115);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_115" id="schedule_input_115" value="<?php echo $image115; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image115; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_115" alt="preview" title="preview" src="<?php echo $image115; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Title</div>
					</td>
					<td><input type="text" id="schedule_input_116" name="schedule_input_116" value="<?php echo get_option('schedule_input_116'); ?>" /></td>
				</tr>
				<tr>
					<td>
						<div>Text</div>
					</td>
					<td><textarea id="schedule_input_117" name="schedule_input_117"><?php echo get_option('schedule_input_117'); ?></textarea></td>
				</tr>
				<tr>
					<td>
						<div>Button (Name,URL)</div>
					</td>
					<td><input type="text" id="schedule_input_118" name="schedule_input_118" value="<?php echo get_option('schedule_input_118'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image119 = get_option('schedule_input_119'); ?>
			<h3>Slide 3:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(119);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_119" id="schedule_input_119" value="<?php echo $image119; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image119; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_119" alt="preview" title="preview" src="<?php echo $image119; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Title</div>
					</td>
					<td><input type="text" id="schedule_input_120" name="schedule_input_120" value="<?php echo get_option('schedule_input_120'); ?>" /></td>
				</tr>
				<tr>
					<td>
						<div>Text</div>
					</td>
					<td><textarea id="schedule_input_121" name="schedule_input_121"><?php echo get_option('schedule_input_121'); ?></textarea></td>
				</tr>
				<tr>
					<td>
						<div>Button (Name,URL)</div>
					</td>
					<td><input type="text" id="schedule_input_122" name="schedule_input_122" value="<?php echo get_option('schedule_input_122'); ?>" /></td>
				</tr>
			</table><br>

			<br><span>(<b>Slide</b>; Ideal size: 1700x500 px)</span>
			<br><span>(<b>Button</b>; Use <b>Name,URL</b> separated by commas and no spaces.)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<?php
			$image2 = get_option('schedule_input_2'); ?>
			<h3 class="title">Logo:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(2);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_2" id="schedule_input_2" value="<?php echo $image2; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image2; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_2" alt="preview" title="preview" src="<?php echo $image2; ?>" /></a></td>
				</tr>
			</table>
			<span>(Ideal size: 100x100 px)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<label>
				<h3 class="title">Fone: </h3><input type="text" id="schedule_input_4" name="schedule_input_4" value="<?php echo get_option('schedule_input_4'); ?>" />
			</label>
			<br><span>(+00 00 00000-0000)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<label>
				<h3 class="title">EMail: </h3><input type="email" id="schedule_input_5" name="schedule_input_5" value="<?php echo get_option('schedule_input_5'); ?>" />
			</label>
			<br><span>(only one)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<h3 class="title">Social:</h3>
			<label>
				<h3>Social 1: </h3>
				<input type="text" id="schedule_input_27" name="schedule_input_27" value="<?php echo get_option('schedule_input_27'); ?>" />
			</label><br>
			<label>
				<h3>Social 2: </h3>
				<input type="text" id="schedule_input_28" name="schedule_input_28" value="<?php echo get_option('schedule_input_28'); ?>" />
			</label><br>
			<label>
				<h3>Social 3: </h3>
				<input type="text" id="schedule_input_29" name="schedule_input_29" value="<?php echo get_option('schedule_input_29'); ?>" />
			</label><br>
			<br><span>(Use <b>Icon,URL,Title</b> separated by commas and no spaces. Choose Icon <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/icons-boxicons.html" target="_blank">Here</a>)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<label>
				<h3 class="title">Google Maps: </h3><input type="text" id="schedule_input_6" name="schedule_input_6" value="<?php echo get_option('schedule_input_6'); ?>" />
			</label>
			<br><span>(Only the url in HTTPS)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<h3 class="title">Block Menu:</h3>
			<label>
				<h3>Block 1: </h3><input type="text" id="schedule_input_7" name="schedule_input_7" value="<?php echo get_option('schedule_input_7'); ?>" />
			</label><br>
			<label>
				<h3>Block 2: </h3><input type="text" id="schedule_input_8" name="schedule_input_8" value="<?php echo get_option('schedule_input_8'); ?>" />
			</label><br>
			<label>
				<h3>Block 3: </h3><input type="text" id="schedule_input_9" name="schedule_input_9" value="<?php echo get_option('schedule_input_9'); ?>" />
			</label><br>
			<label>
				<h3>Block 4: </h3><input type="text" id="schedule_input_10" name="schedule_input_10" value="<?php echo get_option('schedule_input_10'); ?>" />
			</label><br>
			<br><span>(Use <b>Icon,URL,Title</b> separated by commas and no spaces. Choose Icon <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/icons-boxicons.html" target="_blank">Here</a>)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<h3 class="title">Counter Blocks:</h3>
			<label>
				<h3>Block 1: </h3><input type="text" id="schedule_input_23" name="schedule_input_23" value="<?php echo get_option('schedule_input_23'); ?>" />
			</label><br>
			<label>
				<h3>Block 2: </h3><input type="text" id="schedule_input_24" name="schedule_input_24" value="<?php echo get_option('schedule_input_24'); ?>" />
			</label><br>
			<label>
				<h3>Block 3: </h3><input type="text" id="schedule_input_25" name="schedule_input_25" value="<?php echo get_option('schedule_input_25'); ?>" />
			</label><br>
			<label>
				<h3>Block 4: </h3><input type="text" id="schedule_input_26" name="schedule_input_26" value="<?php echo get_option('schedule_input_26'); ?>" />
			</label><br>
			<br><span>(Use <b>Icon,Value,Title</b> separated by commas and no spaces. Choose Icon <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/icons-boxicons.html" target="_blank">Here</a>)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<h3 class="title">Sponsor:</h3>
			<?php
			$image11 = get_option('schedule_input_11'); ?>
			<h3>Logo 1:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(11);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_11" id="schedule_input_11" value="<?php echo $image11; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image11; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_11" alt="preview" title="preview" src="<?php echo $image11; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Name , URL:</div>
					</td>
					<td><input type="text" id="schedule_input_12" name="schedule_input_12" value="<?php echo get_option('schedule_input_12'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image13 = get_option('schedule_input_13'); ?>
			<h3>Logo 2:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(13);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_13" id="schedule_input_13" value="<?php echo $image13; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image13; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_13" alt="preview" title="preview" src="<?php echo $image13; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Name , URL:</div>
					</td>
					<td><input type="text" id="schedule_input_14" name="schedule_input_14" value="<?php echo get_option('schedule_input_14'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image15 = get_option('schedule_input_15'); ?>
			<h3>Logo 3:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(15);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_15" id="schedule_input_15" value="<?php echo $image15; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image15; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_15" alt="preview" title="preview" src="<?php echo $image15; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Name , URL:</div>
					</td>
					<td><input type="text" id="schedule_input_16" name="schedule_input_16" value="<?php echo get_option('schedule_input_16'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image17 = get_option('schedule_input_17'); ?>
			<h3>Logo 4:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(17);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_17" id="schedule_input_17" value="<?php echo $image17; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image17; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_17" alt="preview" title="preview" src="<?php echo $image17; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Name , URL:</div>
					</td>
					<td><input type="text" id="schedule_input_18" name="schedule_input_18" value="<?php echo get_option('schedule_input_18'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image19 = get_option('schedule_input_19'); ?>
			<h3>Logo 5:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(19);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_19" id="schedule_input_19" value="<?php echo $image19; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image19; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_19" alt="preview" title="preview" src="<?php echo $image19; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Name , URL:</div>
					</td>
					<td><input type="text" id="schedule_input_20" name="schedule_input_20" value="<?php echo get_option('schedule_input_20'); ?>" /></td>
				</tr>
			</table><br>

			<?php
			$image21 = get_option('schedule_input_21'); ?>
			<h3>Logo 6:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(21);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="schedule_input_21" id="schedule_input_21" value="<?php echo $image21; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image21; ?>" target="_blank"><img style="height:30px" id="preview_schedule_input_21" alt="preview" title="preview" src="<?php echo $image21; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Name , URL:</div>
					</td>
					<td><input type="text" id="schedule_input_22" name="schedule_input_22" value="<?php echo get_option('schedule_input_22'); ?>" /></td>
				</tr>
			</table><br>
			<br><span>(Use <b>Name,URL</b> separated by commas and no spaces.)</span>

			<br><br><!-- *************************************** -->
			<hr>

			<h2 class="title">Committee</h2>
			<?php
			$value_editor = get_option('schedule_input_30');
			wp_editor($value_editor, 'post_meta_box', array('textarea_name' => 'schedule_input_30'));
			?>

			<br><br><!-- *************************************** -->

			<?php submit_button(); ?>
		</form>
	</div>
<?php
}

function schedule_options_page()
{
	add_submenu_page('cegrapi', 'Settings', 'Settings', 'edit_posts', 'schedule_page', 'schedule_page_html');
}
add_action('admin_menu', 'schedule_options_page');



//************************ campos


function schedule_settings1()
{
	add_option('schedule_input_1');
	register_setting('schedule_option_grupo', 'schedule_input_1');
}
add_action('admin_init', 'schedule_settings1');

function schedule_settings111()
{
	add_option('schedule_input_111');
	register_setting('schedule_option_grupo', 'schedule_input_111');
}
add_action('admin_init', 'schedule_settings111');

function schedule_settings112()
{
	add_option('schedule_input_112');
	register_setting('schedule_option_grupo', 'schedule_input_112');
}
add_action('admin_init', 'schedule_settings112');

function schedule_settings113()
{
	add_option('schedule_input_113');
	register_setting('schedule_option_grupo', 'schedule_input_113');
}
add_action('admin_init', 'schedule_settings113');

function schedule_settings114()
{
	add_option('schedule_input_114');
	register_setting('schedule_option_grupo', 'schedule_input_114');
}
add_action('admin_init', 'schedule_settings114');

function schedule_settings115()
{
	add_option('schedule_input_115');
	register_setting('schedule_option_grupo', 'schedule_input_115');
}
add_action('admin_init', 'schedule_settings115');

function schedule_settings116()
{
	add_option('schedule_input_116');
	register_setting('schedule_option_grupo', 'schedule_input_116');
}
add_action('admin_init', 'schedule_settings116');

function schedule_settings117()
{
	add_option('schedule_input_117');
	register_setting('schedule_option_grupo', 'schedule_input_117');
}
add_action('admin_init', 'schedule_settings117');

function schedule_settings118()
{
	add_option('schedule_input_118');
	register_setting('schedule_option_grupo', 'schedule_input_118');
}
add_action('admin_init', 'schedule_settings118');

function schedule_settings119()
{
	add_option('schedule_input_119');
	register_setting('schedule_option_grupo', 'schedule_input_119');
}
add_action('admin_init', 'schedule_settings119');

function schedule_settings120()
{
	add_option('schedule_input_120');
	register_setting('schedule_option_grupo', 'schedule_input_120');
}
add_action('admin_init', 'schedule_settings120');

function schedule_settings121()
{
	add_option('schedule_input_121');
	register_setting('schedule_option_grupo', 'schedule_input_121');
}
add_action('admin_init', 'schedule_settings121');

function schedule_settings122()
{
	add_option('schedule_input_122');
	register_setting('schedule_option_grupo', 'schedule_input_122');
}
add_action('admin_init', 'schedule_settings122');

function schedule_settings2()
{
	add_option('schedule_input_2');
	register_setting('schedule_option_grupo', 'schedule_input_2');
}
add_action('admin_init', 'schedule_settings2');

function schedule_settings3()
{
	add_option('schedule_input_3');
	register_setting('schedule_option_grupo', 'schedule_input_3');
}
add_action('admin_init', 'schedule_settings3');

function schedule_settings4()
{
	add_option('schedule_input_4');
	register_setting('schedule_option_grupo', 'schedule_input_4');
}
add_action('admin_init', 'schedule_settings4');

function schedule_settings5()
{
	add_option('schedule_input_5');
	register_setting('schedule_option_grupo', 'schedule_input_5');
}
add_action('admin_init', 'schedule_settings5');

function schedule_settings6()
{
	add_option('schedule_input_6');
	register_setting('schedule_option_grupo', 'schedule_input_6');
}
add_action('admin_init', 'schedule_settings6');

function schedule_settings7()
{
	add_option('schedule_input_7');
	register_setting('schedule_option_grupo', 'schedule_input_7');
}
add_action('admin_init', 'schedule_settings7');

function schedule_settings8()
{
	add_option('schedule_input_8');
	register_setting('schedule_option_grupo', 'schedule_input_8');
}
add_action('admin_init', 'schedule_settings8');

function schedule_settings9()
{
	add_option('schedule_input_9');
	register_setting('schedule_option_grupo', 'schedule_input_9');
}
add_action('admin_init', 'schedule_settings9');

function schedule_settings10()
{
	add_option('schedule_input_10');
	register_setting('schedule_option_grupo', 'schedule_input_10');
}
add_action('admin_init', 'schedule_settings10');

function schedule_settings11()
{
	add_option('schedule_input_11');
	register_setting('schedule_option_grupo', 'schedule_input_11');
}
add_action('admin_init', 'schedule_settings11');

function schedule_settings12()
{
	add_option('schedule_input_12');
	register_setting('schedule_option_grupo', 'schedule_input_12');
}
add_action('admin_init', 'schedule_settings12');

function schedule_settings13()
{
	add_option('schedule_input_13');
	register_setting('schedule_option_grupo', 'schedule_input_13');
}
add_action('admin_init', 'schedule_settings13');

function schedule_settings14()
{
	add_option('schedule_input_14');
	register_setting('schedule_option_grupo', 'schedule_input_14');
}
add_action('admin_init', 'schedule_settings14');

function schedule_settings15()
{
	add_option('schedule_input_15');
	register_setting('schedule_option_grupo', 'schedule_input_15');
}
add_action('admin_init', 'schedule_settings15');

function schedule_settings16()
{
	add_option('schedule_input_16');
	register_setting('schedule_option_grupo', 'schedule_input_16');
}
add_action('admin_init', 'schedule_settings16');

function schedule_settings17()
{
	add_option('schedule_input_17');
	register_setting('schedule_option_grupo', 'schedule_input_17');
}
add_action('admin_init', 'schedule_settings17');

function schedule_settings18()
{
	add_option('schedule_input_18');
	register_setting('schedule_option_grupo', 'schedule_input_18');
}
add_action('admin_init', 'schedule_settings18');

function schedule_settings19()
{
	add_option('schedule_input_19');
	register_setting('schedule_option_grupo', 'schedule_input_19');
}
add_action('admin_init', 'schedule_settings19');

function schedule_settings20()
{
	add_option('schedule_input_20');
	register_setting('schedule_option_grupo', 'schedule_input_20');
}
add_action('admin_init', 'schedule_settings20');

function schedule_settings21()
{
	add_option('schedule_input_21');
	register_setting('schedule_option_grupo', 'schedule_input_21');
}
add_action('admin_init', 'schedule_settings21');

function schedule_settings22()
{
	add_option('schedule_input_22');
	register_setting('schedule_option_grupo', 'schedule_input_22');
}
add_action('admin_init', 'schedule_settings22');

function schedule_settings23()
{
	add_option('schedule_input_23');
	register_setting('schedule_option_grupo', 'schedule_input_23');
}
add_action('admin_init', 'schedule_settings23');

function schedule_settings24()
{
	add_option('schedule_input_24');
	register_setting('schedule_option_grupo', 'schedule_input_24');
}
add_action('admin_init', 'schedule_settings24');

function schedule_settings25()
{
	add_option('schedule_input_25');
	register_setting('schedule_option_grupo', 'schedule_input_25');
}
add_action('admin_init', 'schedule_settings25');

function schedule_settings26()
{
	add_option('schedule_input_26');
	register_setting('schedule_option_grupo', 'schedule_input_26');
}
add_action('admin_init', 'schedule_settings26');

function schedule_settings27()
{
	add_option('schedule_input_27');
	register_setting('schedule_option_grupo', 'schedule_input_27');
}
add_action('admin_init', 'schedule_settings27');

function schedule_settings28()
{
	add_option('schedule_input_28');
	register_setting('schedule_option_grupo', 'schedule_input_28');
}
add_action('admin_init', 'schedule_settings28');

function schedule_settings29()
{
	add_option('schedule_input_29');
	register_setting('schedule_option_grupo', 'schedule_input_29');
}
add_action('admin_init', 'schedule_settings29');

function schedule_settings30()
{
	add_option('schedule_input_30');
	register_setting('schedule_option_grupo', 'schedule_input_30');
}
add_action('admin_init', 'schedule_settings30');
