<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_tripadvisor = new TrustindexPlugin_tripadvisor("tripadvisor", __FILE__, "12.4.7", "WP Tripadvisor Review Widgets", "Tripadvisor");
$trustindex_pm_tripadvisor->uninstall();
?>