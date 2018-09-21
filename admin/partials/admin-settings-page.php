<?php

add_action( 'admin_menu', 'td_cle_create_admin_settings_menu' );
function td_cle_create_admin_settings_menu() {
    $hook = add_submenu_page(
        'options-general.php',
        '[AMA] - Settings',
        '[AMA] - Settings',
        'manage_options',
        'td_cle_settings',
        'td_CLE_Create_Admin_Settings_Page'
    );
}

function td_AMA_Create_Admin_Settings_Page() {
	?>
	<style>
	</style>
  <div id="affiliatewp-multisite-autocreate-settings-wrap" class="wrap">
    <form>
      settings go here
    </form>
  </div>

  <?php
}