<?php

/**
 * 
 *
 * @package    mod
 * @subpackage pearson
 * @copyright
 * @author 
 * @license
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2016011300;
$plugin->requires  = 2013051408;
$plugin->component = 'mod_pearson';
$module->cron      = 0;
$module->component = 'mod_pearson';
$module->maturity  = MATURITY_STABLE;
$module->release   = '1.0';

$module->dependencies = array(
		'mod_lti' => ANY_VERSION
);

