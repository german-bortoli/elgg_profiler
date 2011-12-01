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
$plugin = find_plugin_settings('elgg_profiler');
$form_body = elgg_view('settings/elgg_profiler/edit', array('entity' => $plugin));
$form_body .= "<p>" . elgg_view('input/hidden', array('internalname' => 'plugin', 'value' => 'elgg_profiler')) . elgg_view('input/submit', array('value' => elgg_echo('save'))) . "</p>";

$content = elgg_view('input/form', array('action' => "{$CONFIG->url}action/plugins/settings/save", 'body' => $form_body));
$content = "<div class='contentWrapper'>$content</div>";

echo $content;