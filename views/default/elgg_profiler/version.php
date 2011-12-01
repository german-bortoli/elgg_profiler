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

$version = elgg_profiler_get_version();
$release = elgg_profiler_get_version(true);
?>	

<meta name="elgg_profiler_release" content="<?php echo $release; ?>" />
<meta name="elgg_profiler_version" content="<?php echo $version; ?>" />