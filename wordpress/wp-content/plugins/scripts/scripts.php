<?php
/**
*Plugin Name: Scripts
*Description: Add header footer scripts
**/

function scripts_admin_menu_option(){
	add_menu_page('Header and Footer Scripts', 'Site Scripts', 'manage_options', 'scripts-admin-menu', 'scripts_page', '', 200);
}

add_action('admin_menu', 'scripts_admin_menu_option');

function scripts_page(){

	if(array_key_exists('scripts_update', $_POST)) {
		update_option('header_script', $_POST['headerscript']);
		update_option('footer_script', $_POST['footerscript']);

		?>
		<div id="setting-error-settings-updated" class="updated settings-error notice is-sismissible"><strong>Settings have been saved</strong></div>
		<?php
	}

	$header_scripts = get_option('header_script', 'none');
	$footer_scripts = get_option('footer_script', 'none');
	?>

	<div class="wrap">
		<h2>Header and Footer Scripts</h2>
		<form method="post" action="">
			<label for="headerscript">Header Scripts</label>
			<textarea class="large-text" name="headerscript" id="headerscript"><?php print $header_scripts ?></textarea>
			<label for="footerscript">Header Scripts</label>
			<textarea class="large-text" name="footerscript" id="footerscript">
				<?php print $footer_scripts ?>
			</textarea>
			<input type="submit" name="scripts_update" value="UPDATE SCRIPTS" class="button button-primary">
		</form>
	</div>
	<?php
}

function display_header_scripts(){
	$header_scripts = get_option('header_script', 'none');

	print $header_scripts;
}
add_action('wp_head', 'display_header_scripts');

	function display_footer_scripts(){
		$footer_scripts = get_option('footer_script', 'none');

		print $footer_scripts;
	}
add_action('wp_footer', 'display_footer_scripts');