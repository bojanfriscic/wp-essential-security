<?php 

class ChangeLoginErrors 
{
  public function __construct() {
    add_filter('login_errors', array($this, 'change_login_errors'));
  }

  public function change_login_errors() {
    return __('Something went wrong. Please try again!', TEXT_DOMAIN);
  }
}