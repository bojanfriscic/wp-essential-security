<?php

class DisableDashboardAccess 
{
  public function __construct() {
    add_action('admin_init', array($this, 'my_disable_dashboard_access'));
  }

  public function my_disable_dashboard_access() {
    if(!current_user_can('manage_options') && $_SERVER['DOING_AJAX'] != '/wp-admin/admin-ajax.php') {
      wp_redirect(esc_url(home_url('/')));
      exit;
    }
  }
}