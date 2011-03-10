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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Όνομα',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Επίθετο',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Όνομα Πατρός',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Επωνυμία Εταιρείας',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Διεύθυνση 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Διεύθυνση 2',
	'PHPSHOP_USER_FORM_CITY' => 'Πόλη',
	'PHPSHOP_USER_FORM_STATE' => 'Περιοχή/Νομός',
	'PHPSHOP_USER_FORM_ZIP' => 'Ταχ.Κωδικός',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Χώρα',
	'PHPSHOP_USER_FORM_PHONE' => 'Τηλέφωνο',
	'PHPSHOP_USER_FORM_PHONE2' => 'Κινητό τηλέφωνο',
	'PHPSHOP_USER_FORM_FAX' => 'Fax',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Ενεργός',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Ρύθμιση Μεθόδων Αποστολής',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Εικόνα',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Ανέβασμα Εικόνας',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Όνομα Καταστήματος',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Επωνυμία Εταιρείας Καταστήματος',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Διεύθυνση 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Διεύθυνση 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Πόλη',
	'PHPSHOP_STORE_FORM_STATE' => 'Περιοχή/Νομός',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Χώρα',
	'PHPSHOP_STORE_FORM_ZIP' => 'Ταχ.Κώδικας',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Νόμισμα',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Επώνυμο',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Όνομα',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Όνομα πατρός',
	'PHPSHOP_STORE_FORM_TITLE' => 'Τίτλος',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Τηλέφωνο 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Τηλέφωνο 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Περιγραφή',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Λίστα Μεθόδων Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Όνομα',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Κωδικός',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Ομάδα Αγοραστών',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Τύπος Μεθόδου Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Φόρμα Τρόπου Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Όνομα Τρόπου Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Ομάδα Αγοραστών',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Έκπτωση',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Κωδικός',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Σειρά εμφάνισης',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Τύπος μεθόδου πληρωμής',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Πιστωτική κάρτα',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Χρησιμοποίησε Επεξεργαστή Πληρωμών',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Χρέωση Τραπεζικού Λογαριασμού',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Μόνο διεύθυνση / Μετρητά με την Παράδοση',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Στατιστικά',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Πελάτες',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'Ενεργά Προϊόντα',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'Ανενεργά Προϊόντα',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Νέες Παραγγελίες',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Νέοι Πελάτες',
	'PHPSHOP_CREDITCARD_NAME' => 'Όνομα Πιστωτικής Κάρτας',
	'PHPSHOP_CREDITCARD_CODE' => 'Πιστωτική Κάρτα – Σύντομος Κωδικός',
	'PHPSHOP_YOUR_STORE' => 'e-magazi.gr',
	'PHPSHOP_CONTROL_PANEL' => 'Πίνακας Ελέγχου',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Εμφάνιση/αλλαγή Κωδικού/Κλειδιού Συναλλαγής',
	'PHPSHOP_TYPE_PASSWORD' => 'Πληκτρολογήστε τον Κωδικό σας',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Παρόν Κλειδί Συναλλαγής',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'Το Κλειδί Συναλλαγής άλλαξε επιτυχώς!',
	'VM_PAYMENT_CLASS_NAME' => 'Όνομα Κατηγορίας Πληρωμής',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
default: ps_payment<br />
		<i>Επιλέξτε ps_payment εάν δεν γνωρίζετε!</i>',
	'VM_PAYMENT_EXTRAINFO' => 'Πληροφορίες Πληρωμής',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Εμφανίζεται στην σελίδα Επιβεβαίωσης Παραγγελίας.Μπορεί να είναι συμβουλές προς τον πελάτη κλπ.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Τύποι Πιστωτικών Καρτών',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'Για να αλλάξετε μια έκπτωση σε χρέωση χρησιμοποιήστε εδώ μια αρνητική τιμή (παράδειγμα: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Μέγιστο ποσό έκπτωσης',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Ελάχιστο ποσό έκπτωσης',
	'VM_PAYMENT_FORM_FORMBASED' => 'Βασισμένο σε φόρμα HTML (π.χ. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Λίστα Modules εξαγωγής παραγγελίας',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Όνομα',	
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Περιγραφή',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'Λίστα δεκτών Νομισμάτων',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'Η λίστα αυτή εμφανίζει τα νομίσματα που δέχεται το κατάστημα σας <strong>Note:</strong> Τα νομίσματα που εμφανίζονται,χρησιμοποιούνται και στο checkout,οπότε αν δεν τα θέλετε,επιλέξτε μόνο το νόμισμα της χώρας σας! (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Μορφή Modules εξαγωγής παραγγελίας',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Όνομα Λίστας Modules εξαγωγής',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Περιγραφή',
	'VM_EXPORT_CLASS_NAME' => 'Όνομα Κατηγορίας εξαγωγής',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Αφήστε το κενό εάν δεν γνωρίζετε!</i>',
	'VM_EXPORT_CONFIG' => 'Πρόσθετες ρυθμίσεις εξαγωγής',
	'VM_EXPORT_CONFIG_TIP' => 'Πρόσθετες ρυθμίσεις εξαγωγής',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Όνομα',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Έκδοση',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Υπεύθυνος',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Μορφή διεύθυνσης Καταστήματος',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'Μπορείτε να χρησιμοποιήσετε τις ακόλουθες θέσεις ',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Μορφή ημερομηνίας Καταστήματος',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Σφάλμα: Το ID της μεθόδου πληρωμής δεν δόθηκε.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Ρύθμιση Module Αποστολής',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Αδυναμία Αντιπροσώπευσης κατηγορίας {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>