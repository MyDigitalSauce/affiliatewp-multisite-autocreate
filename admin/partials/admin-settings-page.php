<?php

add_action( 'admin_menu', 'td_cle_create_admin_settings_menu' );
function td_cle_create_admin_settings_menu() {
    $hook = add_submenu_page(
        'options-general.php',
        'CLE - Settings',
        'CLE - Settings',
        'manage_options',
        'td_cle_settings',
        'td_CLE_Create_Admin_Settings_Page'
    );
}

function td_CLE_Create_Admin_Settings_Page() {
	?>
	<style>
	#cle-settings-wrap form {
	  border: 1px solid #000; padding: 15px;
	  margin-bottom: 15px;
	}
  #cle-settings-wrap button[type="submit"] {
    margin-top: 1em;
  }
	</style>
  <div id="affiliatewp-multisite-autocreate-settings-wrap" class="wrap">
    <form>
      settings go here
    </form>
  </div>

  <?php
}