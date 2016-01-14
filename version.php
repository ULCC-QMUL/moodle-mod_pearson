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

$plugin->version   = 2016011400;
$plugin->requires  = 2013051408;
$plugin->component = 'mod_pearson';
$plugin->cron      = 0;
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '1.0';

$plugin->dependencies = array(
		'mod_lti' => ANY_VERSION
);

