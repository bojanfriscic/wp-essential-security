<?php 

class RemoveVersionNumber 
{
  public function __construct() {
    remove_action('wp_head', 'wp_generator');
    add_filter('the_generator', '__return_empty_string');

    add_filter('style_loader_src', array($this, 'remove_script_version'), 999);
    add_filter('script_loader_src', array($this, 'remove_script_version'), 999);
  }

  // Remove version number from styles and scripts
  public function remove_script_version($src) {
    if(strpos($src, '?ver=') || strpos($src, 'ver=')) $src = remove_query_arg( 'ver', $src );
    return $src;
  }
}