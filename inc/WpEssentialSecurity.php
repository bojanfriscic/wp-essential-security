<?php

class WpEssentialSecurity
{
  public function __construct() {
    $disable_comments = new DisableComments();
    $remove_version_number = new RemoveVersionNumber();
  }
}
