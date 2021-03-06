<?php

$yesnooptions[0] = get_string('no');
$yesnooptions[1] = get_string('yes');

if (!defined('MOODLE_INTERNAL')) die ("You cannot use this script this way");

$settings->add(new admin_setting_heading('extradbparams', get_string('extradbparams', 'block_dashboard'), ''));

$settings->add(new admin_setting_configtext('dashboard_extra_db_host', get_string('dashboard_extra_db_host', 'block_dashboard'), get_string('dashboard_extra_db_host_desc', 'block_dashboard'), @$CFG->dashboard_extra_db_host));
$settings->add(new admin_setting_configtext('dashboard_extra_db_port', get_string('dashboard_extra_db_port', 'block_dashboard'), get_string('dashboard_extra_db_port_desc', 'block_dashboard'), @$CFG->dashboard_extra_db_port));
$settings->add(new admin_setting_configtext('dashboard_extra_db_db', get_string('dashboard_extra_db_db', 'block_dashboard'), get_string('dashboard_extra_db_db_desc', 'block_dashboard'), @$CFG->dashboard_extra_db_db));
$settings->add(new admin_setting_configtext('dashboard_extra_db_user', get_string('dashboard_extra_db_user', 'block_dashboard'), get_string('dashboard_extra_db_user_desc', 'block_dashboard'), @$CFG->dashboard_extra_db_user));
$settings->add(new admin_setting_configtext('dashboard_extra_db_password', get_string('dashboard_extra_db_password', 'block_dashboard'), get_string('dashboard_extra_db_password_desc', 'block_dashboard'), @$CFG->dashboard_extra_db_password));

$settings->add(new admin_setting_heading('securityparams', get_string('securityparams', 'block_dashboard'),''));

$settings->add(new admin_setting_configtext('dashboard_big_result_threshold', get_string('dashboard_big_result_threshold', 'block_dashboard'), get_string('dashboard_big_result_threshold_desc', 'block_dashboard'), @$CFG->dashboard_big_result_threshold));
$settings->add(new admin_setting_configtext('dashboard_enable_isediting_security', get_string('dashboard_enable_isediting_security', 'block_dashboard'), get_string('dashboard_enable_isediting_security_desc', 'block_dashboard'), @$CFG->dashboard_enable_isediting_security));

$settings->add(new admin_setting_heading('datarefresh', get_string('datarefresh', 'block_dashboard'), ''));

$settings->add(new admin_setting_configselect('block_dashboard_cron_enabled', get_string('dashboard_cron_enabled', 'block_dashboard'), get_string('dashboard_cron_enabled_desc', 'block_dashboard'), @$CFG->block_dashboard_cron_enabled, $yesnooptions));
$settings->add(new admin_setting_configtime('block_dashboard_cron_hour', 'block_dashboard_cron_min', get_string('dashboard_cron_hour', 'block_dashboard'), '', array('h' => @$CFG->block_dashboard_cron_hour, 'm' => @$CFG->block_dashboard_cron_min)));

$freq['daily'] = get_string('daily', 'block_dashboard');
$freq['0'] = get_string('sunday', 'block_dashboard');
$freq['1'] = get_string('monday', 'block_dashboard');
$freq['2'] = get_string('tuesday', 'block_dashboard');
$freq['3'] = get_string('wednesday', 'block_dashboard');
$freq['4'] = get_string('thursday', 'block_dashboard');
$freq['5'] = get_string('friday', 'block_dashboard');
$freq['6'] = get_string('saturday', 'block_dashboard');

$settings->add(new admin_setting_configselect('block_dashboard_cron_freq', get_string('dashboard_cron_freq', 'block_dashboard'), get_string('dashboard_cron_freq_desc', 'block_dashboard'), @$CFG->block_dashboard_cron_freq, $freq));

