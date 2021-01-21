<?php

class DisableLoginByEmail 
{
  public function __constructor() {
    remove_filter('authenticate', 'wp_authenticate_email_password', 20);
  }
}