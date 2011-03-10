<?php
/**
 * @package   Mynxx Template - RocketTheme
 * @version   1.5.7 August 19, 2010
 * @author    RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Rockettheme Mynxx Template uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

$document =& JFactory::getDocument();
$js = (JURI::Root(true)."/modules/mod_rokvirtuemart_categories/js/");

$class = $params->get('moduleclass_sfx', '');

if (!isset($mt12)) $mt12 = "";

if (!defined('ROKVIRTUEMART_CATEGORIES_JS')) {
	$document->addScript($js . 'rokvm_categories'.$mt12.'.js');
    define('ROKVIRTUEMART_CATEGORIES_JS',1);
}

echo "<ul class='rokvm_categories menu $class'>";
echo $category_html;
echo "</ul>";
?>