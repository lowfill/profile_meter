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


$profile_meter_fields = $vars['entity']->profile_meter_fields;
if (!$profile_meter_fields)
	$profile_meter_fields = '';

$profile_meter_progressbar_color = $vars['entity']->profile_meter_progressbar_color;
if (!$profile_meter_progressbar_color)
	$profile_meter_progressbar_color = '#6699CC';

$profile_meter_show_onprofile = $vars['entity']->profile_meter_show_onprofile;
if (!$profile_meter_show_onprofile)
	$profile_meter_show_onprofile['Yes'] = '1';

?>

<p>
	<?php echo elgg_echo('profile_meter:settings:enter_fields_to_count'); ?>
	
	<?php
		echo elgg_view('input/text', array(
			'internalname' => 'params[profile_meter_fields]',
			'value' => $profile_meter_fields,
		));
	?>
	
	<br/><br/>


	<?php echo elgg_echo('profile_meter:settings:color'); ?>
	
	<?php
		echo elgg_view('input/text', array(
			'internalname' => 'params[profile_meter_progressbar_color]',
			'value' => $profile_meter_progressbar_color,
		));
	?>
	
	<br/><br/>


	<?php
		echo elgg_view('input/pulldown', array(
			'internalname' => 'params[profile_meter_show_onprofile]',
			'options_values' => array(
				'1' => elgg_echo('Yes'),
				'0' => elgg_echo('No'),
			),
			'value' => $profile_meter_show_onprofile
		));
	?>

	<?php echo elgg_echo('profile_meter:settings:show_onprofile'); ?>
	
	<br/><br/>
</p>



<p>

<?php
	$fieldsArray = explode(",", $profile_meter_fields);
	echo'number of fields for complete profile:';
	
	if (count($fieldsArray) >= 1) {
		echo count($fieldsArray);
		echo "<br/><br/>";

		echo "fields used:<br/>";
		echo "<ul>";
		foreach($fieldsArray as $fieldName) {
			echo "<li>".$fieldName."</li>";
		}
		echo "</ul>";
		
	} else {
		echo "0 <br/><br/>";
	}
?>

</p>
