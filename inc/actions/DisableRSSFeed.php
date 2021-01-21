<?php

class DisableRSSFeed 
{
  public function __construct() {
    add_action('do_feed', array($this, 'disable_rss_feed'), 1);
    add_action('do_feed_rdf', array($this, 'disable_rss_feed'), 1);
    add_action('do_feed_rss', array($this, 'disable_rss_feed'), 1);
    add_action('do_feed_rss2', array($this, 'disable_rss_feed'), 1);
    add_action('do_feed_atom', array($this, 'disable_rss_feed'), 1);
  }

  public function disable_rss_feed() {
    wp_die(__('Sorry, no RSS feed is available.', TEXT_DOMAIN));
  }
}