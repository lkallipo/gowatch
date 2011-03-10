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
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX' => 'Προβολή τιμών συμπεριλαμβανομένου φόρου;',
	'PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN' => 'Ρυθμίζει την ένδειξη ακόμη και αν οι πελάτες βλέπουν τις τιμές συμπεριλαμβανομένου ή όχι του φόρου',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL' => 'Χαρακτηριστικό Διεύθυνσης',
	'PHPSHOP_SHOPPER_GROUP_LIST_LBL' => 'Λίστα Ομάδας Αγοραστών',
	'PHPSHOP_SHOPPER_GROUP_LIST_NAME' => 'Όνομα Ομάδας',
	'PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION' => 'Περιγραφή Ομάδας',
	'PHPSHOP_SHOPPER_GROUP_FORM_LBL' => 'Φόρμα Ομάδας Αγοραστών',
	'PHPSHOP_SHOPPER_GROUP_FORM_NAME' => 'Όνομα Ομάδας',
	'PHPSHOP_SHOPPER_GROUP_FORM_DESC' => 'Περιγραφή Ομάδας',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT' => 'Έκπτωση στην Εξ ορισμού ομάδα πελατών (%)',
	'PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP' => 'Θετικό ποσόν Χ σημαίνει:Αν το προϊόν δεν έχει καθορισμένη τιμή για αυτή την ομάδα, η εξ ορισμού τιμή μειώνεται κατά X %. Αρνητικό ποσόν σημαίνει το αντίθετο'
); $VM_LANG->initModule( 'shopper', $langvars );
?>