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

?>

<p>

<?php

	$showOnProfile = get_plugin_setting('profile_meter_show_onprofile', 'profile_meter');
	if ($showOnProfile == 1) {
		
		$user = page_owner_entity();
		if ($user instanceof ElggUser) {
			$userGUID = $user->getGUID();
			$countUsed = profile_meter_percent($userGUID);
			echo elgg_view('profile_meter/profile_completeness', array("percent" => $countUsed));
		}
	}
	
?>

</p>
