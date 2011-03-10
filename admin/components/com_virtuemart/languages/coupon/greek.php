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
	'PHPSHOP_COUPON_EDIT_HEADER' => 'Ενημέρωση Κουπονιού',
	'PHPSHOP_COUPON_CODE_HEADER' => 'Κωδικός',
	'PHPSHOP_COUPON_PERCENT_TOTAL' => 'Τοις εκατό ή σύνολο',
	'PHPSHOP_COUPON_TYPE' => 'Τύπος Κουπονιού',
	'PHPSHOP_COUPON_TYPE_TOOLTIP' => 'Ένα κουπόνι δώρο διαγράφεται αφότου χρησιμοποιήθηκε για την απόρριψη μιας παραγγελίας.Ένα μόνιμο κουπόνι μπορεί να χρησιμοποιηθεί τόσο συχνά όσο ο πελάτης θέλει.',
	'PHPSHOP_COUPON_TYPE_GIFT' => 'Κουπόνι δώρο',
	'PHPSHOP_COUPON_TYPE_PERMANENT' => 'Μόνιμο κουπόνι',
	'PHPSHOP_COUPON_VALUE_HEADER' => 'Αξία',
	'PHPSHOP_COUPON_PERCENT' => 'Τοις εκατό',
	'PHPSHOP_COUPON_TOTAL' => 'Σύνολο'
); $VM_LANG->initModule( 'coupon', $langvars );
?>