<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : greek.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) e-magazi.gr 2009 - All rights reserved.
* @translator diastasi
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'UTF-8',
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Χώρα',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Αντιστοίχιση σε Ζώνη',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Αντιστοίχιση Ζωνών',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Όνομα Ζώνης',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Περιγραφή Ζώνης',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Κόστος Ζώνης ανά Είδος',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Όριο Κόστους Ζώνης',
	'PHPSHOP_ZONE_LIST_LBL' => 'Λίστα Ζωνών',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Όνομα Ζώνης',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Περιγραφή Ζώνης',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Κόστος Ζώνης ανά Είδος',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Όριο Κόστους Ζώνης',
	'VM_ZONE_ASSIGN_PERITEM' => 'Ανά αντικείμενο',
	'VM_ZONE_ASSIGN_LIMIT' => 'Όριο',
	'VM_ZONE_EDITZONE' => 'Επεξεργασία Ζώνης'
); $VM_LANG->initModule( 'zone', $langvars );
?>