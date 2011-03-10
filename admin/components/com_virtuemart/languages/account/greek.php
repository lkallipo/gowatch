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
	'PHPSHOP_ACC_CUSTOMER_ACCOUNT' => 'Λογαριασμός Πελάτη:',
	'PHPSHOP_ACC_UPD_BILL' => 'Εδώ μπορείτε να ενημερώσετε τις πληροφορίες χρέωσης.',
	'PHPSHOP_ACC_UPD_SHIP' => 'Εδώ μπορείτε να προσθέσετε και να τροποποιήσετε τις διευθύνσεις αποστολής.',
	'PHPSHOP_ACC_ACCOUNT_INFO' => 'Πληροφορίες Λογαριασμού',
	'PHPSHOP_ACC_SHIP_INFO' => 'Πληροφορίες Αποστολής',
	'PHPSHOP_DOWNLOADS_CLICK' => 'Κάντε κλικ στο όνομα προϊόντος για να μεταφέρετε το αρχείο.',
	'PHPSHOP_DOWNLOADS_EXPIRED' => 'Φτάσατε το ανώτατο όριο μεταφοράς ή η περίοδος μεταφοράς έληξε.'
); $VM_LANG->initModule( 'account', $langvars );
?>