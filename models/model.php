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


/**
 * profile_meter_percent()
 * returns a numeric representation of the percentage of the profile completeness
 *
 * @param	$user_guid				the guid of the user to check
 * @return	$count					percent of profile completeness
 */
function profile_meter_percent($user_guid) {
	
	$user = get_user($user_guid);
	
	$plugin_fieldnames_setting = get_plugin_setting('profile_meter_fields', 'profile_meter');
	$fieldNames = explode(",", $plugin_fieldnames_setting);
	
	$countTotal = count($fieldNames);
	$countUsed = 0;
	foreach($fieldNames as $fieldName) {
	
		// clean field name string of spaces or anything else
		$field = trim($fieldName); 
		if ($user->$field != "")
			$countUsed++;
	}
	
	return profile_meter_getPercent($countUsed, $countTotal);
}




/**
 * profile_meter_getPercent()
 * given a total count and a count used parameters, returns the numeric
 * representation of the percent used, rounded up as integer.
 *
 * @param	integer				countUsed
 * @param	integer				countTotal
 * @return	integer				percent of countused/counttotal
 */
function profile_meter_getPercent($countUsed, $countTotal) {
	
	$percent = 0;
	
	if ($countTotal == 0)
		return $percent;
	
	$percent = (int) ($countUsed / $countTotal * 100);
	
	if ($percent == 100)
		$percent = 100;
	
	return $percent;
	
}
