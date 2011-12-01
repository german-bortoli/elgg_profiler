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

/* admin tabs */
$plugin_name = $vars['plugin_name'];
$admin_areas = $vars['admin_areas'];
$current_area = $vars['current_area'];
	
?>
<div class="contentWrapper">
<?php 
if ($admin_areas) {
?>
	<div id="elgg_horizontal_tabbed_nav">
		<ul>
<?php 
			foreach($admin_areas as $area) {
				$url = "{$vars['url']}pg/$plugin_name/admin?tab=$area";
				$class = ($current_area == $area) ? 'class="selected"' : '';  
?>		
				<li <?php echo $class; ?>>
					<a href="<?php echo $url ?>"><?php echo elgg_echo("$plugin_name:admin:$area"); ?></a>
				</li>
<?php 
}
?>			
		</ul>
	</div>
<?php
	}
	//Content
	echo $vars['body'];
?>
</div>