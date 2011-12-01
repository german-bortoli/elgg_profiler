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

/* lighbtox */ 
return false;
//KTODO: Arreglar cuando se activan varios plugins al mismo tiempo, que el sitio redirecciona continuamente.

?>
<script type="text/javascript">
//<![CDATA[

function elgg_profiler_redirect() {
	var url = '<?php echo $vars['url'].'pg/elgg_profiler/admin/?tab=about' ?>';
	window.location.href = url;
}

$(document).ready(function(){
	elgg_profiler_redirect();
});

//]]>
</script>