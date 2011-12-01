<?php
/**
* elgg_profiler
*
* @author German Bortoli & Diego Gallardo
* @link http://community.elgg.org/pg/profile/pedroprez
* @copyright (c) Keetup 2010
* @link http://www.keetup.com/
* @license GNU General Public License (GPL) version 2
*/

// Get the Elgg engine
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . "/engine/start.php");
set_context('admin');
admin_gatekeeper();

$have_settings = elgg_view("settings/elgg_profiler/edit");

$admin_areas = array(
	'about',
);

if ($have_settings) {
	$admin_areas = array_merge(array('settings'), $admin_areas);
}

$default_tab_value = 'about';

$tab = get_input('tab', $default_tab_value);
$op = get_input('op', 'list');

if (!in_array($tab, $admin_areas)) {
	$tab = $default_tab_value;
}

ob_start();
@include_once(dirname(dirname(__FILE__)) . "/admin/$tab.php");
$body .= ob_get_contents(); 
ob_end_clean();

$body = elgg_view("elgg_profiler/admin/layout", array(
	'plugin_name' => elgg_profiler,
	'admin_areas' => $admin_areas,
	'current_area' => $tab,
	'body' => $body,
));

$title = elgg_echo("elgg_profiler:admin");
$body = elgg_view_layout('two_column_left_sidebar', '', elgg_view_title($title) . $body);
page_draw($title, $body);