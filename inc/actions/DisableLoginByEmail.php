<?php

class DisableLoginByEmail 
{
  public function __construct() {
    remove_filter('authenticate', 'wp_authenticate_email_password', 20);
  }
}