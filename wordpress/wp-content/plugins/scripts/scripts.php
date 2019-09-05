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
	?>
<div class="wrap">
	<h2>Header and Footer Scripts</h2>
</div>
<?php
}