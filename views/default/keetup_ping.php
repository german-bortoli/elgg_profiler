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
?>
<div  class='keetup_ping'>&nbsp;</div>
<div class="pingContent">
	<div class='ContentWrapper'>
		<h2><?php echo elgg_echo('elgg_profiler:ping:title'); ?></h2>
		<p>
			<?php echo elgg_echo('elgg_profiler:ping:description'); ?>
		</p>
		<form method='post' action='<?php echo $vars['url']?>mod/elgg_profiler/vendors/plugin/ping.php'>
			<p><?php echo elgg_echo('elgg_profiler:ping:description2'); ?> <small>(<?php echo elgg_echo('elgg_profiler:ping:description3'); ?>)</small>.<br /></p>
			<label>
				E-mail:
				<input type="text" name='email_address' value='' />
			</label>
			<div class='clearfloat'></div>
			<div class='ping_buttons'>
				<button type="submit" class="submit_button">
					<?php echo elgg_echo('elgg_profiler:ping'); ?>
				</button>
			</div>
		</form>
	</div>
</div>