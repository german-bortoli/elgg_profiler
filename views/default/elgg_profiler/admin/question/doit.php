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
run_function_once("elgg_profiler_qfp");
if ($ASKQUESTION_elgg_profiler) {
	echo elgg_view('elgg_profiler/admin/question/wrapper');
}