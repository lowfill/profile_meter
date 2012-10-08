<?php
/**
 *	Profile Meter Plugin
 *
 *	@package profile meter
 *	@author Liran Tal <liran.tal@gmail.com>
 *	@license GNU General Public License (GPL) version 2
 *	@copyright (c) Liran Tal of Enginx 2009
 *	@link http://www.enginx.com
 */

global $CONFIG;

$percent = $vars["percent"];

?>

<div class="progress-bar" >
    <div id ="sample" class="bar" style="width: <?=$percent?>%"></div>
</div>

&nbsp;
<?php
	echo $percent."% ";
	echo elgg_echo('profile_meter:settings:profile_completeness');
?>
<br/><br/>

