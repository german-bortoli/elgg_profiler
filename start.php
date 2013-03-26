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
require_once(dirname(__FILE__) . '/vendors/pqp/classes/PhpQuickProfiler.php');
require_once(dirname(__FILE__) . '/classes/ProfilerClass.php');

function elgg_profiler_init() {
    global $PQP;
    $PQP = new PQPExample();
    
    //Page Handler
//    register_page_handler('elgg_profiler', 'elgg_profiler_page_handler');
    elgg_extend_view('footer/analytics', 'elgg_profiler/profiler_footer');
//    elgg_register_css('profiler.css', 'mod/elgg_profiler/vendors/pqp/css/pQp.css');
	
	elgg_register_css('profiler.css', elgg_get_simplecache_url('css', 'profiler'));
	elgg_register_simplecache_view('css/profiler');
}

//function elgg_profiler_page_handler($page) {
//    global $CONFIG;
//    if (isset($page[0])) {
//        switch ($page[0]) {
//            case "admin":
//                !@include_once(dirname(__FILE__) . "/pages/admin_p.php");
//                return false;
//                break;
//        }
//    }
//}

function elgg_profiler_setup() {
    elgg_load_css('profiler.css');
}

elgg_register_event_handler('init', 'system', 'elgg_profiler_init');
elgg_register_event_handler('pagesetup', 'system', 'elgg_profiler_setup');