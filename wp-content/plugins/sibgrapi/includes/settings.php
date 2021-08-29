<?php
//Configuração *************************************************
function agenda_page_html()
{ ?>
	<div class="settings-sibgrapi">
		<h1 class="title">Configurações do Evento</h1>
		<hr>
		<form method="post" action="options.php">
			<?php settings_fields('agenda_option_grupo'); ?>

			<label>
				<h3 class="title">Ano: </h3><input type="number" min="2020" max="2050" step="1" id="agenda_input_1" name="agenda_input_1" value="<?php echo get_option('agenda_input_1'); ?>" />
			</label>

			<br><br>
			<hr>

			<?php
			$image2 = get_option('agenda_input_2'); ?>
			<h3 class="title">Logo:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(2);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="agenda_input_2" id="agenda_input_2" value="<?php echo $image2; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image2; ?>" target="_blank"><img style="height:30px" id="preview_agenda_input_2" alt="preview" title="preview" src="<?php echo $image2; ?>" /></a></td>
				</tr>
			</table>
			<span>(Tamanho ideal 100x100 px)</span>

			<br><br>
			<hr>

			<?php
			$image3 = get_option('agenda_input_3'); ?>
			<h3 class="title">Banner:</h3>
			<table>
				<tr>
					<td><a href="#" onclick="upload_image(3);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="agenda_input_3" id="agenda_input_3" value="<?php echo $image3; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image3; ?>" target="_blank"><img style="height:30px" id="preview_agenda_input_3" alt="preview" title="preview" src="<?php echo $image3; ?>" /></a></td>
				</tr>
			</table>
			<span>(Tamanho ideal 1700x500 px)</span>

			<br><br>
			<hr>

			<label>
				<h3 class="title">Telefone: </h3><input type="text" id="agenda_input_4" name="agenda_input_4" value="<?php echo get_option('agenda_input_4'); ?>" />
			</label>
			<br><span>(+00 00 00000-0000)</span>

			<br><br>
			<hr>

			<label>
				<h3 class="title">E-Mail: </h3><input type="email" id="agenda_input_5" name="agenda_input_5" value="<?php echo get_option('agenda_input_5'); ?>" />
			</label>
			<br><span>(apenas um)</span>

			<br><br>
			<hr>

			<h3 class="title">Social:</h3>
			<label>
				<h3>Social 1: </h3>
				<input type="text" id="agenda_input_27" name="agenda_input_27" value="<?php echo get_option('agenda_input_27'); ?>" />
			</label><br>
			<label>
				<h3>Social 2: </h3>
				<input type="text" id="agenda_input_28" name="agenda_input_28" value="<?php echo get_option('agenda_input_28'); ?>" />
			</label><br>
			<label>
				<h3>Social 3: </h3>
				<input type="text" id="agenda_input_29" name="agenda_input_29" value="<?php echo get_option('agenda_input_29'); ?>" />
			</label><br>
			<br><span>(Use <b>Ícone,URL,Título</b> separados por vírgulas e sem espaços. Escolha o ícone <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/icons-boxicons.html" target="_blank">Aqui</a>)</span>

			<br><br>
			<hr>

			<label>
				<h3 class="title">Google Maps: </h3><input type="text" id="agenda_input_6" name="agenda_input_6" value="<?php echo get_option('agenda_input_6'); ?>" />
			</label>
			<br><span>(somente a url em HTTPS)</span>

			<br><br>
			<hr>

			<h3 class="title">Menu Blocos:</h3>
			<label>
				<h3>Bloco 1: </h3><input type="text" id="agenda_input_7" name="agenda_input_7" value="<?php echo get_option('agenda_input_7'); ?>" />
			</label><br>
			<label>
				<h3>Bloco 2: </h3><input type="text" id="agenda_input_8" name="agenda_input_8" value="<?php echo get_option('agenda_input_8'); ?>" />
			</label><br>
			<label>
				<h3>Bloco 3: </h3><input type="text" id="agenda_input_9" name="agenda_input_9" value="<?php echo get_option('agenda_input_9'); ?>" />
			</label><br>
			<label>
				<h3>Bloco 4: </h3><input type="text" id="agenda_input_10" name="agenda_input_10" value="<?php echo get_option('agenda_input_10'); ?>" />
			</label><br>
			<br><span>(Use <b>Ícone,URL,Título</b> separados por vírgulas e sem espaços. Escolha o ícone <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/icons-boxicons.html" target="_blank">Aqui</a>)</span>

			<br><br>
			<hr>

			<h3 class="title">Blocos Contadores:</h3>
			<label>
				<h3>Bloco 1: </h3><input type="text" id="agenda_input_23" name="agenda_input_23" value="<?php echo get_option('agenda_input_23'); ?>" />
			</label><br>
			<label>
				<h3>Bloco 2: </h3><input type="text" id="agenda_input_24" name="agenda_input_24" value="<?php echo get_option('agenda_input_24'); ?>" />
			</label><br>
			<label>
				<h3>Bloco 3: </h3><input type="text" id="agenda_input_25" name="agenda_input_25" value="<?php echo get_option('agenda_input_25'); ?>" />
			</label><br>
			<label>
				<h3>Bloco 4: </h3><input type="text" id="agenda_input_26" name="agenda_input_26" value="<?php echo get_option('agenda_input_26'); ?>" />
			</label><br>
			<br><span>(Use <b>Ícone,Valor,Título</b> separados por vírgulas e sem espaços. Escolha o ícone <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/icons-boxicons.html" target="_blank">Aqui</a>)</span>

			<br><br>
			<hr>

			<h3 class="title">Organização:</h3>
			<?php
			$image11 = get_option('agenda_input_11'); ?>
			<h3>Logo 1:</h3>
			<table>			
				<tr>
					<td><a href="#" onclick="upload_image(11);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="agenda_input_11" id="agenda_input_11" value="<?php echo $image11; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image11; ?>" target="_blank"><img style="height:30px" id="preview_agenda_input_11" alt="preview" title="preview" src="<?php echo $image11; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Nome , URL:</div>
					</td>
					<td><input type="text" id="agenda_input_12" name="agenda_input_12" value="<?php echo get_option('agenda_input_12'); ?>" /></td>
					<td></td>
				</tr>
			</table><br>

			<?php
			$image13 = get_option('agenda_input_13'); ?>
			<h3>Logo 2:</h3>
			<table>				
				<tr>
					<td><a href="#" onclick="upload_image(13);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="agenda_input_13" id="agenda_input_13" value="<?php echo $image13; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image13; ?>" target="_blank"><img style="height:30px" id="preview_agenda_input_13" alt="preview" title="preview" src="<?php echo $image13; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Nome , URL:</div>
					</td>
					<td><input type="text" id="agenda_input_14" name="agenda_input_14" value="<?php echo get_option('agenda_input_14'); ?>" /></td>
					<td></td>
				</tr>
			</table><br>

			<?php
			$image15 = get_option('agenda_input_15'); ?>
			<h3>Logo 3:</h3>
			<table>				
				<tr>
					<td><a href="#" onclick="upload_image(15);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="agenda_input_15" id="agenda_input_15" value="<?php echo $image15; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image15; ?>" target="_blank"><img style="height:30px" id="preview_agenda_input_15" alt="preview" title="preview" src="<?php echo $image15; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Nome , URL:</div>
					</td>
					<td><input type="text" id="agenda_input_16" name="agenda_input_16" value="<?php echo get_option('agenda_input_16'); ?>" /></td>
					<td></td>
				</tr>
			</table><br>

			<?php
			$image17 = get_option('agenda_input_17'); ?>
			<h3>Logo 4:</h3>
			<table>				
				<tr>
					<td><a href="#" onclick="upload_image(17);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="agenda_input_17" id="agenda_input_17" value="<?php echo $image17; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image17; ?>" target="_blank"><img style="height:30px" id="preview_agenda_input_17" alt="preview" title="preview" src="<?php echo $image17; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Nome , URL:</div>
					</td>
					<td><input type="text" id="agenda_input_18" name="agenda_input_18" value="<?php echo get_option('agenda_input_18'); ?>" /></td>
					<td></td>
				</tr>
			</table><br>

			<?php
			$image19 = get_option('agenda_input_19'); ?>
			<h3>Logo 5:</h3>
			<table>				
				<tr>
					<td><a href="#" onclick="upload_image(19);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="agenda_input_19" id="agenda_input_19" value="<?php echo $image19; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image19; ?>" target="_blank"><img style="height:30px" id="preview_agenda_input_19" alt="preview" title="preview" src="<?php echo $image19; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Nome , URL:</div>
					</td>
					<td><input type="text" id="agenda_input_20" name="agenda_input_20" value="<?php echo get_option('agenda_input_20'); ?>" /></td>
					<td></td>
				</tr>
			</table><br>

			<?php
			$image21 = get_option('agenda_input_21'); ?>
			<h3>Logo 6:</h3>
			<table>				
				<tr>
					<td><a href="#" onclick="upload_image(21);" class="button button-secondary"><?php _e('Upload Image'); ?></a></td>
					<td><input type="text" name="agenda_input_21" id="agenda_input_21" value="<?php echo $image21; ?>" /></td>
					<td>&emsp;<a href="<?php echo $image21; ?>" target="_blank"><img style="height:30px" id="preview_agenda_input_21" alt="preview" title="preview" src="<?php echo $image21; ?>" /></a></td>
				</tr>
				<tr>
					<td>
						<div>Nome , URL:</div>
					</td>
					<td><input type="text" id="agenda_input_22" name="agenda_input_22" value="<?php echo get_option('agenda_input_22'); ?>" /></td>
					<td></td>
				</tr>
			</table><br>
			<br><span>(Use <b>Nome,URL</b> separados por vírgulas e sem espaços.)</span>
			
			<br><br>
			<hr>

			<h2 class="title">Comitê</h2>
			<?php
			$value_editor = get_option('agenda_input_30');
			wp_editor($value_editor, 'post_meta_box', array('textarea_name' => 'agenda_input_30'));
			?>

			<br><br>

			<?php submit_button(); ?>
		</form>
	</div>
<?php
}

function agenda_options_page()
{
	add_submenu_page('edit.php?post_type=agenda', 'Configurações', 'Configurações', 'manage_options', 'agenda_page', 'agenda_page_html');
}
add_action('admin_menu', 'agenda_options_page');



//************************ campos


function agenda_settings1()
{
	add_option('agenda_input_1');
	register_setting('agenda_option_grupo', 'agenda_input_1');
}
add_action('admin_init', 'agenda_settings1');

function agenda_settings2()
{
	add_option('agenda_input_2');
	register_setting('agenda_option_grupo', 'agenda_input_2');
}
add_action('admin_init', 'agenda_settings2');

function agenda_settings3()
{
	add_option('agenda_input_3');
	register_setting('agenda_option_grupo', 'agenda_input_3');
}
add_action('admin_init', 'agenda_settings3');

function agenda_settings4()
{
	add_option('agenda_input_4');
	register_setting('agenda_option_grupo', 'agenda_input_4');
}
add_action('admin_init', 'agenda_settings4');

function agenda_settings5()
{
	add_option('agenda_input_5');
	register_setting('agenda_option_grupo', 'agenda_input_5');
}
add_action('admin_init', 'agenda_settings5');

function agenda_settings6()
{
	add_option('agenda_input_6');
	register_setting('agenda_option_grupo', 'agenda_input_6');
}
add_action('admin_init', 'agenda_settings6');

function agenda_settings7()
{
	add_option('agenda_input_7');
	register_setting('agenda_option_grupo', 'agenda_input_7');
}
add_action('admin_init', 'agenda_settings7');

function agenda_settings8()
{
	add_option('agenda_input_8');
	register_setting('agenda_option_grupo', 'agenda_input_8');
}
add_action('admin_init', 'agenda_settings8');

function agenda_settings9()
{
	add_option('agenda_input_9');
	register_setting('agenda_option_grupo', 'agenda_input_9');
}
add_action('admin_init', 'agenda_settings9');

function agenda_settings10()
{
	add_option('agenda_input_10');
	register_setting('agenda_option_grupo', 'agenda_input_10');
}
add_action('admin_init', 'agenda_settings10');

function agenda_settings11()
{
	add_option('agenda_input_11');
	register_setting('agenda_option_grupo', 'agenda_input_11');
}
add_action('admin_init', 'agenda_settings11');

function agenda_settings12()
{
	add_option('agenda_input_12');
	register_setting('agenda_option_grupo', 'agenda_input_12');
}
add_action('admin_init', 'agenda_settings12');

function agenda_settings13()
{
	add_option('agenda_input_13');
	register_setting('agenda_option_grupo', 'agenda_input_13');
}
add_action('admin_init', 'agenda_settings13');

function agenda_settings14()
{
	add_option('agenda_input_14');
	register_setting('agenda_option_grupo', 'agenda_input_14');
}
add_action('admin_init', 'agenda_settings14');

function agenda_settings15()
{
	add_option('agenda_input_15');
	register_setting('agenda_option_grupo', 'agenda_input_15');
}
add_action('admin_init', 'agenda_settings15');

function agenda_settings16()
{
	add_option('agenda_input_16');
	register_setting('agenda_option_grupo', 'agenda_input_16');
}
add_action('admin_init', 'agenda_settings16');

function agenda_settings17()
{
	add_option('agenda_input_17');
	register_setting('agenda_option_grupo', 'agenda_input_17');
}
add_action('admin_init', 'agenda_settings17');

function agenda_settings18()
{
	add_option('agenda_input_18');
	register_setting('agenda_option_grupo', 'agenda_input_18');
}
add_action('admin_init', 'agenda_settings18');

function agenda_settings19()
{
	add_option('agenda_input_19');
	register_setting('agenda_option_grupo', 'agenda_input_19');
}
add_action('admin_init', 'agenda_settings19');

function agenda_settings20()
{
	add_option('agenda_input_20');
	register_setting('agenda_option_grupo', 'agenda_input_20');
}
add_action('admin_init', 'agenda_settings20');

function agenda_settings21()
{
	add_option('agenda_input_21');
	register_setting('agenda_option_grupo', 'agenda_input_21');
}
add_action('admin_init', 'agenda_settings21');

function agenda_settings22()
{
	add_option('agenda_input_22');
	register_setting('agenda_option_grupo', 'agenda_input_22');
}
add_action('admin_init', 'agenda_settings22');

function agenda_settings23()
{
	add_option('agenda_input_23');
	register_setting('agenda_option_grupo', 'agenda_input_23');
}
add_action('admin_init', 'agenda_settings23');

function agenda_settings24()
{
	add_option('agenda_input_24');
	register_setting('agenda_option_grupo', 'agenda_input_24');
}
add_action('admin_init', 'agenda_settings24');

function agenda_settings25()
{
	add_option('agenda_input_25');
	register_setting('agenda_option_grupo', 'agenda_input_25');
}
add_action('admin_init', 'agenda_settings25');

function agenda_settings26()
{
	add_option('agenda_input_26');
	register_setting('agenda_option_grupo', 'agenda_input_26');
}
add_action('admin_init', 'agenda_settings26');

function agenda_settings27()
{
	add_option('agenda_input_27');
	register_setting('agenda_option_grupo', 'agenda_input_27');
}
add_action('admin_init', 'agenda_settings27');

function agenda_settings28()
{
	add_option('agenda_input_28');
	register_setting('agenda_option_grupo', 'agenda_input_28');
}
add_action('admin_init', 'agenda_settings28');

function agenda_settings29()
{
	add_option('agenda_input_29');
	register_setting('agenda_option_grupo', 'agenda_input_29');
}
add_action('admin_init', 'agenda_settings29');

function agenda_settings30()
{
	add_option('agenda_input_30');
	register_setting('agenda_option_grupo', 'agenda_input_30');
}
add_action('admin_init', 'agenda_settings30');
