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

require_once(dirname(__FILE__) . '/vendors/plugin/plugin.php');
require_once(dirname(__FILE__) . '/vendors/pqp/classes/PhpQuickProfiler.php');
require_once(dirname(__FILE__). '/classes/ProfilerClass.php');

function elgg_profiler_init() {
	//Initializate the plugin
	elgg_profiler_initializateplugin();
			
	//Page Handler
	register_page_handler('elgg_profiler','elgg_profiler_page_handler');
	$pqp = new PQPExample();
$pqp->init();
}

function elgg_profiler_page_handler($page) {
	global $CONFIG;
	if (isset($page[0])) {
		switch($page[0]) {
			case "admin":
				!@include_once(dirname(__FILE__) . "/pages/admin_p.php");
				return false;
          		break;
		}
	}
}

function elgg_profiler_setup() {
	global $CONFIG;
	if (get_context()=='admin') {
    	add_submenu_item(elgg_echo("elgg_profiler:admin"), $CONFIG->wwwroot . "pg/elgg_profiler/admin" );
	}
}

register_elgg_event_handler('init','system','elgg_profiler_init');
register_elgg_event_handler('pagesetup','system','elgg_profiler_setup');