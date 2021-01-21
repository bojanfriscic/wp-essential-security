<?php

class WpEssentialSecurity
{
  public function __construct() {
    $disable_comments = new DisableComments();
    $remove_version_number = new RemoveVersionNumber();
    $change_login_errors = new ChangeLoginErrors();
    $disable_login_by_email = new DisableLoginByEmail();
    $disable_dashboard_access = new DisableDashboardAccess();
    $disable_rss_feed = new DisableRSSFeed();
  }
}
