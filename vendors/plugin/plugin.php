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

global $ASKQUESTION_elgg_profiler;

function elgg_profiler_initializateplugin() {
	$ASKQUESTION_elgg_profiler = false;
	
	//Print the plugin version
	elgg_extend_view('metatags', 'elgg_profiler/version');

	if (isadminloggedin()) {
		if (!datalist_get('elgg_profiler_qfp')) {
			elgg_extend_view('page_elements/header_contents', 'elgg_profiler/admin/question/content');
		}
		elgg_extend_view('settings/elgg_profiler/edit', 'elgg_profiler/admin/question/doit');
	}
}

function elgg_profiler_qfp() {
	global $ASKQUESTION_elgg_profiler;
	$ASKQUESTION_elgg_profiler = true;
}
    
    function elgg_profiler_get_version($humanreadable = false){
    if (include(dirname(dirname(dirname(__FILE__))) . "/version.php")) {
		return (!$humanreadable) ? $version : $release;
	}
	return FALSE;
    }
    
//Generate url for accept action on elgg 1.7
if(!is_callable('url_compatible_mode')) {
    function url_compatible_mode($hook = '?') {
    	$now = time();
		$query[] = "__elgg_ts=" . $now;
		$query[] = "__elgg_token=" . generate_action_token($now);
		$query_string = implode("&", $query);
		return $hook . $query_string;
    }
}