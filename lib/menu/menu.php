<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the module helper classes.
if (!class_exists('ModMenuHelper'))
{
	require __DIR__ . '/helper.php';
}

if (!class_exists('SCAdminCssMenu'))
{
	require __DIR__ . '/scmenu.class.php';
}

$lang    = JFactory::getLanguage();
$user    = JFactory::getUser();
$input   = JFactory::getApplication()->input;
$menu    = new SCAdminCSSMenu;
$enabled = $input->getBool('hidemainmenu') ? false : true;

// Render the module layout
require dirname(__FILE__).'/tmpl/default.php';
