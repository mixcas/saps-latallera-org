<?php
// Register Sidebars
function add_sidebars() {

  $args = array(
    'id'            => 'main_sidebar',
    'name'            => 'Barra Principal',
  );
  register_sidebar( $args );

}
add_action( 'widgets_init', 'add_sidebars' );
?>
