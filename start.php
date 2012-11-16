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
 *	requires plugin functions
 */
require_once(dirname(__FILE__)."/models/model.php");

/**
 *	profile_meter_plugin_init
 *
 *	performs plugin initialization function calls
*/
function profile_meter_plugin_init() {
	global $CONFIG;

	elgg_extend_view('css', 'profile_meter/css');

	$plugin_show_onprofile = get_plugin_setting('profile_meter_show_onprofile', 'profile_meter');
	if ($plugin_show_onprofile == 1){
		elgg_extend_view('icon/user/default','profile_meter/profile_completeness');
	}
}

// plugin init hook
register_elgg_event_handler('init','system','profile_meter_plugin_init');
