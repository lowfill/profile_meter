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

<?php

	$plugin_progressbar_color = get_plugin_setting('profile_meter_progressbar_color', 'profile_meter');
	if (!$plugin_progressbar_color)
		$plugin_progressbar_color = "#6699CC";
		
?>

/*Container*/
.progress-bar {
    border: 1px solid #56577A;
    /*width of the progress bar container*/
    width: 190px;
    margin: 5px;
    padding: 1px;
    background: #fff;
    /* float: left; */
	text-align:left;
	direction:ltr;
}

/*Progress Bar*/
.bar {
    height: 15px;
    font-size: 11px;
    /* indent the text off the screen as we don’t want to see the text anymore.*/
    text-indent:10px;
	text-align:left;
	direction:rtl;
	width: 0%;
	//background: #BF5852;
	//background: #339900;
	//background: #0099CC;
	background: <?=$plugin_progressbar_color?>;
}

