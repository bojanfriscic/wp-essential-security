<?php

class DisableRESTAPI
{
  public function __construct() {
    add_filter('rest_authentication_errors', array($this, 'disable_api_endpoints'));
  }

  function disable_api_endpoints() {
    if(!is_user_logged_in()) {
        return new WP_Error(
          'rest_cannot_access',
          __('Access Denied!', TEXT_DOMAIN),
          array('status' => rest_authorization_required_code())
        );
    }
    return $access;
  }
}