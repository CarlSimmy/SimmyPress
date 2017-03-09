<?php

// Register a custom menu to the theme
function registerMenu() {
  register_nav_menu('custom-menu',__( 'Custom Menu' ));
}
add_action( 'init', 'registerMenu' );

?>
