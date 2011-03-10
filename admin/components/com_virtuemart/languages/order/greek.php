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
	'PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL' => 'Ιστοσικό πληρωμών',
	'PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL' => 'Αξία αποστολής',
	'PHPSHOP_ORDER_STATUS_LIST_CODE' => 'Κωδικώς κατάστασης παραγγελίας',
	'PHPSHOP_ORDER_STATUS_LIST_NAME' => 'Όνομα κατάστασης παραγγελίας',
	'PHPSHOP_ORDER_STATUS_FORM_LBL' => 'Κατάσταση παραγγελίας',
	'PHPSHOP_ORDER_STATUS_FORM_CODE' => 'Κωδικός κατάστασης παραγγελίας',
	'PHPSHOP_ORDER_STATUS_FORM_NAME' => 'Όνομα κατάστασης παραγγελίας',
	'PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER' => 'Εμφάνιση παραγγελίας',
	'PHPSHOP_COMMENT' => 'Σχόλιο',
	'PHPSHOP_ORDER_LIST_NOTIFY' => 'Ενημέρωση πελάτη;',
	'PHPSHOP_ORDER_LIST_NOTIFY_ERR' => 'Αλλάξτε τη κατάσταση παραγγελίας πρώτα!',
	'PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT' => 'Να ενσωματωθεί το σχόλιο;',
	'PHPSHOP_ORDER_HISTORY_DATE_ADDED' => 'Ημερομηνία προσθήκης',
	'PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED' => 'Ενημερώθηκε ο πελάτης;',
	'PHPSHOP_ORDER_STATUS_CHANGE' => 'Αλλαγή κατάστασης παραγγελίας',
	'PHPSHOP_ORDER_LIST_PRINT_LABEL' => 'Εκτύπωση ετικέτας',
	'PHPSHOP_ORDER_LIST_VOID_LABEL' => 'Κενή ετικέτα',
	'PHPSHOP_ORDER_LIST_TRACK' => 'Διαδρομή',
	'VM_DOWNLOAD_STATS' => 'Στατιστικά των downloads',
	'VM_DOWNLOAD_NOTHING_LEFT' => 'Υπολειπόμενα Downloads 0',
	'VM_DOWNLOAD_REENABLE' => 'Επανεργοποίηση Download',
	'VM_DOWNLOAD_REMAINING_DOWNLOADS' => 'Υπολειπόμενα Downloads',
	'VM_DOWNLOAD_RESEND_ID' => 'Στείλετε εκ νέου download ID',
	'VM_EXPIRY' => 'Λήξη',
	'VM_UPDATE_STATUS' => 'ΕΝΗΜΕΡΩΣΗ',
	'VM_ORDER_LABEL_ORDERID_NOTVALID' => 'Παρακαλώ παρέχετε ένα έγκυρο,αριθμητικό,ID παραγγελίας,οχι "{order_id}"',
	'VM_ORDER_LABEL_NOTFOUND' => 'Εγγραφή  παραγγελίας δεν βρέθηκε στη βάση δεδομένων.',
	'VM_ORDER_LABEL_NEVERGENERATED' => 'Η ετικέτα δεν έχει παραχθεί ακόμα',
	'VM_ORDER_LABEL_CLASSCANNOT' => 'Η κατηγορία {ship_class} δεν μπορεί να λάβει τις εικόνες ετικετών',
	'VM_ORDER_LABEL_SHIPPINGLABEL_LBL' => 'Ετικέτα αποστολής',
	'VM_ORDER_LABEL_SIGNATURENEVER' => 'Η υπογραφή δεν ανακτήθηκε',
	'VM_ORDER_LABEL_TRACK_TITLE' => 'Διαδρομή',
	'VM_ORDER_LABEL_VOID_TITLE' => 'Κενή ετικέτα',
	'VM_ORDER_LABEL_VOIDED_MSG' => 'Η ετικέτα για την απόδειξη {tracking_number} έχει αποβληθεί.',
	'VM_ORDER_PRINT_PO_IPADDRESS' => 'IP-ADDRESS',
	'VM_ORDER_STATUS_ICON_ALT' => 'Εικονίδιο κατάστασης',
	'VM_ORDER_PAYMENT_CCV_CODE' => 'Κώδικας CVV',
	'VM_ORDER_NOTFOUND' => 'Η παραγγελία δεν βρέθηκε. Ίσως έχει διαγραφεί'
	'PHPSHOP_ORDER_EDIT_ACTIONS' => 'Ενέργειες',
	'PHPSHOP_ORDER_EDIT' => 'Αλλαγή λεπτομέρειας παραγγελίας',
	'PHPSHOP_ORDER_EDIT_ADD' => 'Προσθήκη',
	'PHPSHOP_ORDER_EDIT_ADD_PRODUCT' => 'Προσθήκη προϊόντος',
	'PHPSHOP_ORDER_EDIT_EDIT_ORDER' => 'Αλλαγή παραγγελίας',
	'PHPSHOP_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Η ποσότητα πρέπει να είναι μεγαλύτερη από 0.',
	'PHPSHOP_ORDER_EDIT_PRODUCT_ADDED' => 'Το προϊόν προστέθηκε στην παραγγελία',
	'PHPSHOP_ORDER_EDIT_PRODUCT_DELETED' => 'Το προϊόν αφαιρέθηκε από την παραγγελία',
	'PHPSHOP_ORDER_EDIT_QUANTITY_UPDATED' => 'Η ποσότητα ενημερώθηκε',
	'PHPSHOP_ORDER_EDIT_RETURN_PARENTS' => 'πίσω στο γονικό προϊόν',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT' => 'Επιλογή προϊόντος',
	'PHPSHOP_ORDER_CHANGE_UPD_BILL' => 'Αλλαγή διεύθυνση χρέωσης',
	'PHPSHOP_ORDER_CHANGE_UPD_SHIP' => 'Αλλαγή διεύθυνσης αποστολής',
	'PHPSHOP_ORDER_EDIT_SOMETHING_HAS_CHANGED' => ' αλλάχθηκε',
	'PHPSHOP_ORDER_EDIT_CHOOSE_PRODUCT_BY_SKU' => 'Επιλογή SKU'
); $VM_LANG->initModule( 'order', $langvars );
?>