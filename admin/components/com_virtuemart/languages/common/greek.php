<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
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
	'PHPSHOP_ERROR' => 'ΣΦΑΛΜΑ',
	'PHPSHOP_CATEGORY' => 'Κατηγορία',
	'PHPSHOP_CATEGORIES' => 'Κατηγορίες',
	'PHPSHOP_ADMIN' => 'Διαχείριση',
	'PHPSHOP_PRODUCT' => 'Προϊόν',
	'PHPSHOP_LIST' => 'Εμφάνιση',
	'PHPSHOP_ALL' => 'Ολων',
	'PHPSHOP_LIST_ALL_PRODUCTS' => 'Εμφάνισε όλα τα Προϊόντα',
	'PHPSHOP_VIEW' => 'Επισκόπιση',
	'PHPSHOP_SHOW' => 'Εμφάνιση',
	'PHPSHOP_ADD' => 'Προσθήκη',
	'PHPSHOP_UPDATE' => 'Ενημέρωση',
	'PHPSHOP_DELETE' => 'Διαγραφή',
	'PHPSHOP_SELECT' => 'Επιλογή',
	'PHPSHOP_SUBMIT' => 'Υποβολή',
	'PHPSHOP_LATEST' => 'Τελευταία Προϊόντα',
	'PHPSHOP_CART_TITLE' => 'Καλάθι',
	'PHPSHOP_CHECKOUT_TITLE' => 'Ταμείο',
	'PHPSHOP_SEARCH_TITLE' => 'Αναζήτηση',
	'PHPSHOP_ACCOUNT_TITLE' => 'Συντήρηση Λογαριασμού',
	'PHPSHOP_PRODUCTS_LBL' => 'Προϊόντα',
	'PHPSHOP_PRODUCT_LBL' => 'Προϊόν',
	'PHPSHOP_SEARCH_LBL' => 'Αναζήτηση',
	'PHPSHOP_PRODUCT_SEARCH_LBL' => 'Αναζήτηση Προϊόντων',
	'PHPSHOP_PRODUCT_NAME_TITLE' => 'Όνομα Προϊόντος',
	'PHPSHOP_PRODUCT_DESC_TITLE' => 'Περιγραφή Προϊόντος',
	'PHPSHOP_CART_SHOW' => 'Εμφάνιση Καλαθιού',
	'PHPSHOP_CART_ADD_TO' => 'Προσθήκη στο καλάθι',
	'PHPSHOP_CART_NAME' => 'Όνομα',
	'PHPSHOP_CART_SKU' => 'Κωδικός - SKU',
	'PHPSHOP_CART_PRICE' => 'Τιμή',
	'PHPSHOP_CART_QUANTITY' => 'Ποσότητα',
	'PHPSHOP_CART_QUANTITY_EXCEEDED' => 'Η επιλεγμένη ποσότητα υπερβαίνει τη διαθέσιμη ποσότητα.',
	'PHPSHOP_CART_SUBTOTAL' => 'Μερικό Σύνολο',
	'PHPSHOP_ADD_SHIPTO_1' => 'Προσθήκη νέου',
	'PHPSHOP_ADD_SHIPTO_2' => 'Διεύθυνση αποστολής',
	'PHPSHOP_NO_SEARCH_RESULT' => 'Η αναζήτηση σας δεν είχε κανένα αποτέλεσμα.<BR>',
	'PHPSHOP_DELETE_MSG' => 'Είστε βέβαιοι για τη διαγραφή της εγγραφής αυτής;',
	'PHPSHOP_MOD_NOT_REG' => 'Το module δεν έχει καταγραφεί.',
	'PHPSHOP_MOD_ISNO_REG' => 'Δεν είναι ένα έγκυρο module του phpShop.',
	'PHPSHOP_MOD_NO_AUTH' => 'Δεν έχετε δικαίωμα πρόσβασης στο τμήμα που ζητήσατε.',
	'PHPSHOP_PAGE_404_1' => 'Η σελίδα δεν υπάρχει',
	'PHPSHOP_PAGE_404_2' => 'Το όνομα αρχείου που δώσατε δεν υπάρχει.Ήταν αδύνατη η εύρεση του αρχείου:',
	'PHPSHOP_PAGE_403' => 'Ανεπαρκή δικαιώματα πρόσβασης',
	'PHPSHOP_FUNC_NO_EXEC' => 'Δεν έχετε δικαίωμα εκτέλεσης ',
	'PHPSHOP_FUNC_NOT_REG' => 'Η συνάρτηση δεν είναι καταγεγραμμένη',
	'PHPSHOP_FUNC_ISNO_REG' => ' Δεν είναι έγκυρη MOS_com_phpShop συνάρτηση.',
	'PHPSHOP_ADMIN_MOD' => 'Διαχειριστής',
	'PHPSHOP_USER_LIST_MNU' => 'Εμφάνιση Χρηστών',
	'PHPSHOP_USER_FORM_BILLTO_LBL' => 'Στοιχεία Χρέωσης',
	'PHPSHOP_USER_FORM_SHIPTO_LBL' => 'Διεύθυνση Αποστολής',
	'PHPSHOP_USER_FORM_ADD_SHIPTO_LBL' => 'ΠΡΟΣΘΗΚΗ ΔΙΕΥΘΥΝΣΗΣ',
	'PHPSHOP_USER_FORM_ADDRESS_LABEL' => 'Οικία/Εταιρία',
	'PHPSHOP_USER_FORM_TITLE' => 'Τίτλος',
	'PHPSHOP_MODULE_LIST_MNU' => 'Εμφάνιση Modules',
	'PHPSHOP_MODULE_FORM_MNU' => 'Προσθήκη Module',
	'PHPSHOP_FUNCTION_LIST_MNU' => 'Εμφάνιση Λειτουργιών',
	'PHPSHOP_FUNCTION_FORM_MNU' => 'Προσθήκη Λειτουργίας',
	'PHPSHOP_CURRENCY_LIST_MNU' => 'Εμφάνιση Νομισμάτων',
	'PHPSHOP_CURRENCY_LIST_ADD' => 'Προσθήκη Νομίσματος',
	'PHPSHOP_COUNTRY_LIST_MNU' => 'Εμφάνιση Χωρών',
	'PHPSHOP_COUNTRY_LIST_ADD' => 'Προσθήκη Χώρας',
	'PHPSHOP_ADDRESS' => 'Διεύθυνση',
	'PHPSHOP_EMPTY_CART' => 'Το Καλάθι σας είναι άδειο.',
	'PHPSHOP_ISSHIP_LIST_CARRIER_LBL' => 'Μέθοδοι Αποστολής',
	'PHPSHOP_ORDER_MOD' => 'Παραγγελίες',
	'PHPSHOP_ORDER_CONFIRM_MNU' => 'Επιβεβαίωση παραγγελίας',
	'PHPSHOP_ORDER_LIST_MNU' => 'Εμφάνιση Παραγγελιών',
	'PHPSHOP_ORDER_LIST_LBL' => 'Λίστα Παραγγελιών',
	'PHPSHOP_ORDER_LIST_ID' => 'Αριθμός Παραγγελίας',
	'PHPSHOP_ORDER_LIST_CDATE' => 'Ημερομηνία Παραγγελίας',
	'PHPSHOP_ORDER_LIST_MDATE' => 'Τελευταία Αλλαγή',
	'PHPSHOP_ORDER_LIST_STATUS' => 'Κατάσταση',
	'PHPSHOP_ORDER_LIST_TOTAL' => 'Μερικό Σύνολο',
	'PHPSHOP_ORDER_ITEM' => 'Είδη Παραγγελίας',
	'PHPSHOP_ORDER_PRINT_PO_LBL' => 'Εντολή Αγοράς',
	'PHPSHOP_ORDER_PRINT_PO_NUMBER' => 'Αριθμός Παραγγελίας',
	'PHPSHOP_ORDER_PRINT_PO_DATE' => 'Ημερομηνία Παραγγελίας',
	'PHPSHOP_ORDER_PRINT_PO_STATUS' => 'Κατάσταση Παραγγελίας',
	'PHPSHOP_ORDER_PRINT_CUST_INFO_LBL' => 'Πληροφορίες Πελάτη',
	'PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL' => 'Πληροφορίες Χρέωσης',
	'PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL' => 'Πληροφορίες Αποστολής',
	'PHPSHOP_ORDER_PRINT_BILL_TO_LBL' => 'Σε χρέωση',
	'PHPSHOP_ORDER_PRINT_SHIP_TO_LBL' => 'Αποστολή προς',
	'PHPSHOP_ORDER_PRINT_NAME' => 'Όνομα',
	'PHPSHOP_ORDER_PRINT_COMPANY' => 'Εταιρεία',
	'PHPSHOP_ORDER_PRINT_ADDRESS_1' => 'Διεύθυνση 1',
	'PHPSHOP_ORDER_PRINT_ADDRESS_2' => 'Διεύθυνση 2',
	'PHPSHOP_ORDER_PRINT_CITY' => 'Πόλη',
	'PHPSHOP_ORDER_PRINT_STATE' => 'Περιοχή/Νομός',
	'PHPSHOP_ORDER_PRINT_ZIP' => 'Ταχ. Κωδικός',
	'PHPSHOP_ORDER_PRINT_COUNTRY' => 'Χώρα',
	'PHPSHOP_ORDER_PRINT_PHONE' => 'Τηλ.',
	'PHPSHOP_ORDER_PRINT_FAX' => 'Fax',
	'PHPSHOP_ORDER_PRINT_EMAIL' => 'E-mail',
	'PHPSHOP_ORDER_PRINT_ITEMS_LBL' => 'Στοιχεία παραγγελίας',
	'PHPSHOP_ORDER_PRINT_QUANTITY' => 'Ποσότητα',
	'PHPSHOP_ORDER_PRINT_QTY' => 'Ποσ.',
	'PHPSHOP_ORDER_PRINT_SKU' => 'Κωδ. Προϊόντος (SKU)',
	'PHPSHOP_ORDER_PRINT_PRICE' => 'Τιμή',
	'PHPSHOP_ORDER_PRINT_TOTAL' => 'Σύνολο',
	'PHPSHOP_ORDER_PRINT_SUBTOTAL' => 'Μερικό Σύνολο',
	'PHPSHOP_ORDER_PRINT_TOTAL_TAX' => 'Σύνολο Φόρου',
	'PHPSHOP_ORDER_PRINT_SHIPPING' => 'Έξοδα Αποστολής και Συσκευασίας',
	'PHPSHOP_ORDER_PRINT_SHIPPING_TAX' => 'Φόρος Αποστολής',
	'PHPSHOP_ORDER_PRINT_PAYMENT_LBL' => 'Τρόπος Πληρωμής',
	'PHPSHOP_ORDER_PRINT_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
	'PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER' => 'Αριθμός Λογαριασμού',
	'PHPSHOP_ORDER_PRINT_EXPIRE_DATE' => 'Ημερ/νια Λήξης',
	'PHPSHOP_ORDER_PRINT_SHIPPING_LBL' => 'Στοιχεία Αποστολής',
	'PHPSHOP_ORDER_PRINT_PAYINFO_LBL' => 'Στοιχεία Πληρωμής',
	'PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL' => 'Μεταφορική',
	'PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL' => 'Μέθοδος Αποστολής',
	'PHPSHOP_ORDER_STATUS_LIST_MNU' => 'Εμφάνιση Καταστάσεων Παραγγελίας',
	'PHPSHOP_ORDER_STATUS_FORM_MNU' => 'Προσθήκη Κατάστασης Παραγγελίας',
	'PHPSHOP_PRODUCT_MOD' => 'Προϊόντα',
	'PHPSHOP_PRODUCT_INVENTORY_MNU' => 'Εμφάνιση Αποθήκης',
	'PHPSHOP_PRODUCT_INVENTORY_PRICE' => 'Τιμή',
	'PHPSHOP_PRODUCT_LIST_MNU' => 'Εμφάνιση Προϊόντων',
	'PHPSHOP_PRODUCT_LIST_LBL' => 'Λίστα Προϊόντων',
	'PHPSHOP_PRODUCT_LIST_NAME' => 'Όνομα Προϊόντος',
	'PHPSHOP_PRODUCT_LIST_SKU' => 'Κωδικός - SKU',
	'PHPSHOP_PRODUCT_FORM_MNU' => 'Προσθήκη Προϊόντος',
	'PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU' => 'Προσθήκη Είδους',
	'PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU' => 'Πρόσθεσε κι άλλο Είδος',
	'PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL' => 'Νέο Είδος',
	'PHPSHOP_PRODUCT_FORM_RETURN_LBL' => 'Επιστροφή στο Γονικό Προϊόν',
	'PHPSHOP_PRODUCT_FORM_VENDOR' => 'Προμηθευτής',
	'PHPSHOP_PRODUCT_FORM_URL' => 'URL',
	'PHPSHOP_PRODUCT_FORM_PRICE_GROSS' => 'Τιμή προϊόντος (Μεικτό)',
	'PHPSHOP_PRODUCT_FORM_PRICE_NET' => 'Τιμή προϊόντος (Καθαρό)',
	'PHPSHOP_PRODUCT_FORM_DESCRIPTION' => 'Περιγραφή Σελίδας Προϊόντος',
	'PHPSHOP_PRODUCT_FORM_S_DESC' => 'Σύντομη Περιγραφή',
	'PHPSHOP_PRODUCT_FORM_IN_STOCK' => 'Διαθέσιμα',
	'PHPSHOP_PRODUCT_FORM_WEIGHT' => 'Βάρος',
	'PHPSHOP_PRODUCT_FORM_THUMB_IMAGE' => 'Μικρή Εικόνα',
	'PHPSHOP_PRODUCT_FORM_UNIT' => 'Μονάδα',
	'PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT' => 'Τεμάχιο',
	'PHPSHOP_PRODUCT_CSV_UPLOAD' => 'Χρήση αρχείου CSV',
	'PHPSHOP_PRODUCT_FOLDERS' => 'Φάκελοι Προϊόντων',
	'PHPSHOP_CATEGORY_LIST_MNU' => 'Εμφάνιση Κατηγοριών',
	'PHPSHOP_CATEGORY_LIST_LBL' => 'Δένδρο Κατηγοριών',
	'PHPSHOP_CATEGORY_FORM_MNU' => 'Προσθήκη Κατηγορίας',
	'PHPSHOP_ATTRIBUTE_LIST_MNU' => 'Εμφάνιση Χαρακτηριστικών',
	'PHPSHOP_ATTRIBUTE_FORM_MNU' => 'Προσθήκη Χαρακτηριστικού',
	'PHPSHOP_PRICE_LIST_MNU' => 'Εμφάνιση Κατηγοριών',
	'PHPSHOP_PRICE_FORM_MNU' => 'Προσθήκη Τιμής',
	'PHPSHOP_REPORTBASIC_MOD' => 'Αναφορές',
	'PHPSHOP_SHOP_MOD' => 'Κατάστημα',
	'PHPSHOP_PRODUCT_PRICE_TITLE' => 'Τιμή',
	'PHPSHOP_SHOPPER_MOD' => 'Αγοραστής',
	'PHPSHOP_SHOPPER_LIST_USERNAME' => 'Όνομα χρήστη',
	'PHPSHOP_SHOPPER_LIST_NAME' => 'Ονοματεπώνυμο',
	'PHPSHOP_SHOPPER_LIST_GROUP' => 'Ομάδα',
	'PHPSHOP_SHOPPER_FORM_LBL' => 'Στοιχεία Αγοραστή',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL' => 'Πληροφορίες',
	'PHPSHOP_SHOPPER_FORM_SHIPTO_LBL' => 'Στοιχεία Αποστολής',
	'PHPSHOP_SHOPPER_FORM_FIRST_NAME' => 'Όνομα',
	'PHPSHOP_SHOPPER_FORM_LAST_NAME' => 'Επώνυμο',
	'PHPSHOP_SHOPPER_FORM_MIDDLE_NAME' => 'Όνομα Πατρός',
	'PHPSHOP_SHOPPER_FORM_TITLE' => 'Τίτλος',
	'PHPSHOP_SHOPPER_FORM_PASSWORD_1' => 'Κωδικός',
	'PHPSHOP_SHOPPER_FORM_PASSWORD_2' => 'Επιβεβαίωση Κωδικού',
	'PHPSHOP_SHOPPER_FORM_GROUP' => 'Ομάδα Αγοραστή',
	'PHPSHOP_SHOPPER_FORM_COMPANY_NAME' => 'Επωνυμία Εταιρείας',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_1' => 'Διεύθυνση 1',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_2' => 'Διεύθυνση 2',
	'PHPSHOP_SHOPPER_FORM_CITY' => 'Πόλη',
	'PHPSHOP_SHOPPER_FORM_STATE' => 'Περιοχή/ Νομός',
	'PHPSHOP_SHOPPER_FORM_ZIP' => 'Ταχ.Κωδικός',
	'PHPSHOP_SHOPPER_FORM_COUNTRY' => 'Χώρα',
	'PHPSHOP_SHOPPER_FORM_PHONE' => 'Τηλέφωνο',
	'PHPSHOP_SHOPPER_FORM_PHONE2' => 'Κινητό τηλέφωνο',
	'PHPSHOP_SHOPPER_FORM_FAX' => 'Fax',
	'PHPSHOP_SHOPPER_FORM_EMAIL' => 'E-mail',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1' => 'Ναι',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2' => 'Όχι',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1' => 'AAA',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2' => 'BBB',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3' => 'CCC',
	'PHPSHOP_SHOPPER_GROUP_LIST_MNU' => 'Εμφάνιση Ομάδων Αγοραστών',
	'PHPSHOP_SHOPPER_GROUP_FORM_MNU' => 'Προσθήκη Ομάδας Αγοραστών',
	'PHPSHOP_STORE_MOD' => 'Κατάστημα',
	'PHPSHOP_STORE_FORM_MNU' => 'Επεξεργασία Καταστήματος',
	'PHPSHOP_STORE_FORM_LBL' => 'Πληροφορίες Καταστήματος',
	'PHPSHOP_STORE_FORM_CONTACT_LBL' => 'Στοιχεία Επικοινωνίας',
	'PHPSHOP_STORE_FORM_PHONE' => 'Τηλέφωνο',
	'PHPSHOP_STORE_FORM_FAX' => 'Fax',
	'PHPSHOP_STORE_FORM_EMAIL' => 'E-mail',
	'PHPSHOP_PAYMENT' => 'Πληρωμή',
	'PHPSHOP_PAYMENT_METHOD_LIST_MNU' => 'Εμφάνιση Μεθόδων Πληρωμής',
	'PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT' => 'Έκπτωση',
	'PHPSHOP_PAYMENT_METHOD_FORM_MNU' => 'Προσθήκη Τρόπου Πληρωμής',
	'PHPSHOP_TAX_MOD' => 'Φόροι',
	'PHPSHOP_TAX_LIST_MNU' => 'Εμφάνιση Συντελεστών Φόρων',
	'PHPSHOP_TAX_LIST_RATE' => 'Συντελεστής Φόρου',
	'PHPSHOP_TAX_FORM_MNU' => 'Προσθήκη Συντελεστή Φόρου',
	'PHPSHOP_VENDOR_MOD' => 'Προμηθευτής',
	'PHPSHOP_VENDOR_LIST_MNU' => 'Εμφάνιση Προμηθευτών',
	'PHPSHOP_VENDOR_LIST_VENDOR_NAME' => 'Επωνυμία Προμηθευτή',
	'PHPSHOP_VENDOR_FORM_MNU' => 'Προσθήκη Προμηθευτή',
	'PHPSHOP_VENDOR_FORM_INFO_LBL' => 'Στοιχεία Προμηθευτή',
	'PHPSHOP_VENDOR_CAT_LIST_MNU' => 'Εμφάνιση Κατηγοριών Προμηθευτών',
	'PHPSHOP_VENDOR_CAT_FORM_MNU' => 'Προσθήκη Κατηγορίας Προμηθευτών',
	'PHPSHOP_MANUFACTURER_MOD' => 'Κατασκευαστής',
	'PHPSHOP_MANUFACTURER_LIST_MNU' => 'Εμφάνισε Κατασκευαστές',
	'PHPSHOP_MANUFACTURER_LIST_ADMIN' => 'Διαχειριστής',
	'PHPSHOP_MANUFACTURER_FORM_MNU' => 'Πρόσθεσε Κατασκευαστή',
	'PHPSHOP_MANUFACTURER_FORM_INFO_LBL' => 'Πληροφορίες Κατασκευαστή',
	'PHPSHOP_MANUFACTURER_FORM_DESCRIPTION' => 'Περιγραφή',
	'PHPSHOP_MANUFACTURER_CAT_LIST_MNU' => 'Εμφάνισε Κατηγορίες Κατασκευαστή',
	'PHPSHOP_MANUFACTURER_CAT_FORM_MNU' => 'Πρόσθεσε Κατηγορία Κατασκευαστή',
	'PHPSHOP_HELP_MOD' => 'Βοήθεια',
	'PHPSHOP_CART_ACTION' => 'Τεμάχια',
	'PHPSHOP_CART_UPDATE' => 'Ενημέρωση Ποσότητας στο Καλάθι',
	'PHPSHOP_CART_DELETE' => 'Διαγραφή Προϊόντος από το Καλάθι',
	'PHPSHOP_PRODUCT_CALL' => 'Καλέστε για Τιμή', 
	'PHPSHOP_CART_TAX' => 'Φόρος',
	'PHPSHOP_CART_TOTAL' => 'Σύνολο',
	'PHPSHOP_CHECKOUT_CONF_PHONE' => 'Τηλέφωνο',
	'PHPSHOP_CHECKOUT_CONF_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO' => 'Πληροφορίες Πληρωμής',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD' => 'Όνομα Κατόχου',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM' => 'Αριθμός Πιστωτικής Κάρτας',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE' => 'Ημερ/νια Λήξης',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER' => 'Ολοκλήρωση Παραγγελίας',
	'PHPSHOP_ZONE_MOD' => 'Ζώνες Αποστολής',
	'PHPSHOP_ZONE_LIST_MNU' => 'Εμφάνιση Ζωνών',
	'PHPSHOP_ZONE_FORM_MNU' => 'Προσθήκη Ζώνης',
	'PHPSHOP_ZONE_ASSIGN_MNU' => 'Αντιστοίχιση Ζωνών',
	'PHPSHOP_ZONE_ASSIGN_CURRENT_LBL' => 'Τρέχουσα ζώνη',
	'PHPSHOP_STORE_FORM_TOS' => 'Όροι Εξυπηρέτησης',
	'PHPSHOP_AGREE_TO_TOS' => 'Παρακαλώ διαβάστε τους Όρους Εξυπηρέτησης.',
	'PHPSHOP_I_AGREE_TO_TOS' => 'Συμφωνώ με τους Όρους Εξυπηρέτησης.',
	'PHPSHOP_RETURN_LOGIN' => 'Είστε παλαιός πελάτης;Παρακαλώ εισάγετε τα στοιχεία σας.',
	'PHPSHOP_NEW_CUSTOMER' => 'Είστε νέος πελάτης;Παρακαλώ εισάγετε τα στοιχεία σας.',
	'PHPSHOP_ACC_ORDER_INFO' => 'Πληροφορίες παραγγελίας',
	'PHPSHOP_ACC_NO_ORDERS' => 'Δεν υπάρχουν παραγγελίες για εμφάνιση',
	'PHPSHOP_ACC_BILL_DEF' => 'Ίδια με την Διεύθυνση Χρέωσης',
	'PHPSHOP_SHIPTO_TEXT' => 'Μπορείτε να προσθέσετε διευθύνσεις αποστολής στον λογαριασμό σας.Παρακαλούμε επιλέξετε ένα κατάλληλο υποκοριστικό ή κωδικό για την διεύθυνση αποστολής που θα επιλέξετε παρακάτω.',
	'PHPSHOP_CONFIG' => 'Ρυθμίσεις',
	'PHPSHOP_USERS' => 'Χρήστες',
	'PHPSHOP_SHIPPING_MOD' => 'Μεταφορικές',
	'PHPSHOP_CARRIER_LIST_MNU' => 'Μεταφορέας',
	'PHPSHOP_RATE_LIST_MNU' => 'Κόστος Μεταφορικών',
	'PHPSHOP_CARRIER_FORM_MNU' => 'Δημιουργία Μεταφορέα',
	'PHPSHOP_RATE_FORM_MNU' => 'Δημιουργήστε Κόστος Μεταφορικών',
	'PHPSHOP_RATE_FORM_VALUE' => 'Μεταφορικά',
	'PHPSHOP_RATE_FORM_VAT_ID' => 'ΦΠΑ',
	'PHPSHOP_ERR_MSG_CARRIER_EXIST' => 'ΣΦΑΛΜΑ: Ο Κωδικός του Μεταφορέα υπάρχει ήδη.',
	'PHPSHOP_ERR_MSG_CARRIER_ID_REQ' => 'ΣΦΑΛΜΑ: Επιλέξτε ένα Μεταφορέα.',
	'PHPSHOP_ERR_MSG_CARRIER_INUSE' => 'ΣΦΑΛΜΑ: Υπάρχει τουλάχιστον ένα κόστος μεταφορικών,διαγράψετε τα κόστη πριν διαγράψετε τον μεταφορέα',
	'PHPSHOP_ERR_MSG_CARRIER_NOTFOUND' => 'ΣΦΑΛΜΑ: Δεν μπορώ να βρω Μεταφορέα με αυτόν τον Κωδικό.',
	'PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ' => 'ΣΦΑΛΜΑ: Επιλέξτε ένα Μεταφορέα.',
	'PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV' => 'ΣΦΑΛΜΑ: Δεν μπορώ να βρω Μεταφορέα με αυτόν τον Κωδικό.',
	'PHPSHOP_ERR_MSG_RATE_NAME_REQ' => 'ΣΦΑΛΜΑ: Απαιτείται μία περιγραφή του κόστους.',
	'PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV' => 'ΣΦΑΛΜΑ: Η χώρα προορισμού δεν είναι έγκυρη.Περισσότερες από μία χώρες μπορούν να χωρίζονται με το ";".',
	'PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ' => 'ΣΦΑΛΜΑ: Δεν έχετε συμπληρώσει το ελάχιστο βάρος',
	'PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ' => 'ΣΦΑΛΜΑ: Δεν έχετε συμπληρώσει το μέγιστο βάρος',
	'PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV' => 'ΣΦΑΛΜΑ: Το ελάχιστο βάρος πρέπει να είναι μικρότερο από το μέγιστο βάρος',
	'PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ' => 'ΣΦΑΛΜΑ: Απαιτείται να συμπληρώσετε το κόστος μεταφορικών',
	'PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV' => 'ΣΦΑΛΜΑ: Επιλέξτε νόμισμα',
	'PHPSHOP_INFO_MSG_CARRIER' => 'Μεταφορέας',
	'PHPSHOP_INFO_MSG_SHIPPING_METHOD' => 'Κόστος Μεταφορικών',
	'PHPSHOP_INFO_MSG_SHIPPING_PRICE' => 'Τιμή',
	'PHPSHOP_INFO_MSG_VAT_ZERO_LBL' => '0 (-κανένα-)',
	'PHPSHOP_CHECKOUT_MSG_4' => 'ΠΑΡΑΚΑΛΩ ΕΠΙΛΕΞΤΕ ΜΕΘΟΔΟ ΠΛΗΡΩΜΗΣ',
	'PHPSHOP_CHECKOUT_ERR_NO_SHIP' => 'ΠΑΡΑΚΑΛΩ ΕΠΙΛΕΞΤΕ ΜΕΘΟΔΟ ΑΠΟΣΤΟΛΗΣ.',
	'PHPSHOP_CHECKOUT_ERR_OTHER_SHIP' => 'ΠΑΡΑΚΑΛΩ ΕΠΙΛΕΞΤΕ ΜΙΑ ΑΛΛΗ ΜΕΘΟΔΟ ΑΠΟΣΤΟΛΗΣ.',
	'PHPSHOP_CHECKOUT_ERR_NO_PAYM' => 'ΠΑΡΑΚΑΛΩ ΕΠΙΛΕΞΤΕ ΜΕΘΟΔΟ ΠΛΗΡΩΜΗΣ.',
	'PHPSHOP_CHECKOUT_ERR_NO_CCNR' => 'Παρακαλούμε εισάγετε τον Αριθμό της Πιστωτικής Κάρτας.',
	'PHPSHOP_CHECKOUT_ERR_NO_CCDATE' => 'Ο Αριθμός της Πιστωτικής Κάρτας δεν είναι έγκυρος.',
	'PHPSHOP_CHECKOUT_ERR_NO_CCMON' => 'Παρακαλούμε εισάγετε τον Μήνα Λήξης της Πιστωτικής Κάρτας.',
	'PHPSHOP_CHECKOUT_ERR_NO_CCYEAR' => 'Παρακαλούμε εισάγετε το Έτος Λήξης της Πιστωτικής Κάρτας',
	'PHPSHOP_CHECKOUT_ERR_CCDATE_INV' => 'Η Ημερομηνία Λήξης δεν είναι έγκυρη.',
	'PHPSHOP_CHECKOUT_ERR_NO_SHIPTO' => 'Παρακαλούμε επιλέξτε μία Διεύθυνση Αποστολής.',
	'PHPSHOP_CHECKOUT_ERR_CCNUM_INV' => 'Μη έγκυρος Αριθμός Λογαριασμού.',
	'PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND' => 'ΣΦΑΛΜΑ: Δεν βρέθηκε το Επιλεγμένο Κόστος Μεταφορικών!',
	'PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND' => 'ΣΦΑΛΜΑ: Δεν βρέθηκε η Διεύθυνση Αποστολής!',
	'PHPSHOP_CHECKOUT_ERR_NO_CCDATA' => 'ΣΦΑΛΜΑ: Δεν υπάρχουν στοιχεία Πιστωτικής Κάρτας',
	'PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND' => 'ΣΦΑΛΜΑ: Δεν βρέθηκε ο αριθμός της Πιστωτικής Κάρτας!',
	'PHPSHOP_CHECKOUT_ERR_TEST' => 'Ο αριθμός που χρησιμοποιήσατε είναι μόνο για δοκιμές!',
	'PHPSHOP_CHECKOUT_ERR_NO_USER_DATA' => 'Ο Κωδικός Χρήστη (user_id) δεν βρέθηκε στη βάση δεδομένων!',
	'PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME' => 'Δεν συμπληρώσατε το όνομα του κατόχου του τραπεζικού λογαριασμού.',
	'PHPSHOP_CHECKOUT_ERR_NO_IBAN' => 'Δεν συμπληρώσατε τον αριθμό IBAN του λογαριασμού σας.',
	'PHPSHOP_CHECKOUT_ERR_NO_BA_NUM' => 'Δεν συμπληρώσατε τον αριθμό του τραπεζικού σας λογαριασμού.',
	'PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT' => 'Δεν συμπληρώσατε τον αριθμό ταξιμόμησης της τράπεζάς σας.',
	'PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME' => 'Δεν συμπληρώσατε το όνομα της Τράπεζας.',
	'PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP' => 'Το CheckOut χρειάζεται ένα έγκυρο βήμα!',
	'PHPSHOP_CHECKOUT_MSG_LOG' => 'Οι πληροφορίες για την πληρωμή κατεγράφησαν για περαιτέρω επεξεργασία.<BR>',
	'PHPSHOP_CHECKOUT_ERR_MIN_POV' => 'Δεν έχει καλυφθεί το ελάχιστο ποσό παραγγελίας.',
	'PHPSHOP_CHECKOUT_ERR_MIN_POV2' => 'Το ελάχιστο ποσό παραγγελίας είναι:',
	'PHPSHOP_CHECKOUT_PAYMENT_CC' => 'Πληρωμή με Πιστωτική Κάρτα',
	'PHPSHOP_CHECKOUT_PAYMENT_OTHER' => 'Αλλες Μέθοδοι Πληρωμής',
	'PHPSHOP_STORE_FORM_MPOV' => 'Ελάχιστο ποσό παραγγελίας για το κατάστημά σας',
	'PHPSHOP_ACCOUNT_BANK_TITLE' => 'Πληροφορίες Τραπεζικού Λογαριασμού',
	'PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR' => 'Αριθμός Λογαριασμού',
	'PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE' => 'Αριθμός ταξινόμησης',
	'PHPSHOP_ACCOUNT_LBL_BANK_NAME' => 'Όνομα Τράπεζας',
	'PHPSHOP_ACCOUNT_LBL_BANK_IBAN' => 'IBAN',
	'PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER' => 'Όνομα Κατόχου',
	'PHPSHOP_SPECIAL_PRODUCTS' => 'Ειδικά προϊόντα',
	'PHPSHOP_CHECKOUT_CUSTOMER_NOTE' => 'Παρακαλούμε αφήστε σημείωση,αν θέλετε,σχετικά με την παραγγελία σας',
	'PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE' => 'Σημείωση Πελάτη',
	'PHPSHOP_INCLUDING_TAX' => '(με ΦΠΑ $tax %)',
	'PHPSHOP_PLEASE_SEL_ITEM' => 'Παρακαλώ επιλέξτε ένα είδος',
	'PHPSHOP_DOWNLOADS_TITLE' => 'Περιοχή Download',
	'PHPSHOP_DOWNLOADS_ERR_EXP' => 'Συγγνώμη, αλλά έχει παρέλθει ο χρόνος που μπορείτε να κάνετε Download',
	'PHPSHOP_DOWNLOADS_ERR_MAX' => 'Συγγνώμη, αλλά έχετε καλύψει το μέγιστο αριθμό downloads',
	'PHPSHOP_DOWNLOADS_ERR_INV' => 'Μη έγκυρος κωδικός Download!',
	'PHPSHOP_DOWNLOADS_ERR_SEND' => 'Δεν μπορώ να στείλω μήνυμα στο ',
	'PHPSHOP_DOWNLOADS_SEND_MSG' => 'Το μήνυμα εστάλη στο ',
	'PHPSHOP_DOWNLOADS_SEND_SUBJ' => 'Πληροφορίες Download',
	'PHPSHOP_DOWNLOADS_SEND_MSG_1' => 'Τα αρχεία που παραγγείλατε είναι έτοιμα για κατέβασμα',
	'PHPSHOP_DOWNLOADS_SEND_MSG_2' => 'Παρακαλώ γράψτε τα παρακάτω Download-ID(s) στην περιοχή Downloads: ',
	'PHPSHOP_DOWNLOADS_SEND_MSG_3' => 'Ο μέγιστος αριθμός των μεταφορών για κάθε αρχείο είναι: ',
	'PHPSHOP_DOWNLOADS_SEND_MSG_4' => 'Download μέχρι {expire} ημέρες μετά το πρώτο download',
	'PHPSHOP_DOWNLOADS_SEND_MSG_5' => 'Ερωτήσεις - Προβλήματα;',
	'PHPSHOP_DOWNLOADS_SEND_MSG_6' => 'Πληροφορίες Download ανά ',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1' => 'Ευχαριστούμε που αγοράσατε από εμάς.Ακολουθούν οι πληροφορίες για την παραγγελία σας.',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2' => 'Ευχαριστούμε για την υποστήριξή σας.',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3' => 'Ερωτήσεις - Προβλήματα;',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4' => 'Ελήφθη η ακόλουθη παραγγελία.',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5' => 'Δείτε την παραγγελία χρησιμοποιώντας τον δεσμό που ακολουθεί.',
	'PHPSHOP_CART_ERROR_NO_NEGATIVE' => 'Δεν επιτρέπονται αρνητικές ποσότητες.',
	'PHPSHOP_CART_ERROR_NO_VALID_QUANTITY' => 'Παρακαλώ εισάγετε μία έγκυρη ποσότητα για αυτό το είδος.',
	'PHPSHOP_CART_SELECT_ITEM' => 'Παρακαλώ επιλέξτε ένα ειδικό είδος από τη σελίδα λεπτομερειών!',
	'PHPSHOP_REGISTRATION_FORM_NONE' => 'Κενό',
	'PHPSHOP_REGISTRATION_FORM_MR' => 'Κος.',
	'PHPSHOP_REGISTRATION_FORM_MRS' => 'Κα.',
	'PHPSHOP_REGISTRATION_FORM_DR' => 'Δρ.',
	'PHPSHOP_REGISTRATION_FORM_PROF' => 'Καθηγ.',
	'PHPSHOP_DEFAULT' => 'Εξ\' Ορισμού',
	'PHPSHOP_AFFILIATE_LIST_MNU' => 'Εμφάνιση Υιοθετημένων',
	'PHPSHOP_DELIVERY_TIME' => 'Συνηθως αποστέλεται σε',
	'PHPSHOP_MORE_CATEGORIES' => 'Περισσότερες κατηγορίες',
	'PHPSHOP_AVAILABILITY' => 'Διαθεσιμότητα',
	'PHPSHOP_CURRENTLY_NOT_AVAILABLE' => 'Το προϊόν αυτό δεν είναι άμεσα διαθέσιμα.',
	'PHPSHOP_PRODUCT_AVAILABLE_AGAIN' => 'Θα είναι ξανά διαθέσιμο στις: ',
	'PHPSHOP_STATISTIC_SUMMARY' => 'Περίληψη',
	'PHPSHOP_STATISTIC_SUM' => 'Αθροισμα',
	'PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW' => 'Εκτύπωση',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD' => 'Επιλέξτε τη μέθοδο που το κατάστημα σας θα αποστέλει τα προϊόντα.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS' => 'Εργαλείο υπολογισμού μεταφορικών UPS ',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE' => 'Κωδικός πρόσβασης UPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN' => 'Ο κωδικός πρόσβασης σας για την UPS ',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID' => 'UPS χρήστης',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN' => 'Το όνομα χρήστη που πήρατε από την UPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD' => 'UPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN' => 'Ο κωδικός για τον λογαριασμό σας στην UPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER' => 'Προέκταση InterShipper.Επιλέξτε μόνο εάν έχετε λογαριασμό στην Intershipper.com ',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD' => 'InterShipper ',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN' => 'Ο κωδικός για τον λογαριασμό σας στην intershipper.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL' => 'InterShipper e-mail',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN' => 'Το e-mail που έχετε δηλώσει για τον λογαριασμό σας στην intershipper.',
	'PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL' => 'E-mail πληρωμής PayPal:',
	'PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN' => 'Το επαγγελματικό σας e-mail για αγορές μέσω Paypal.Χρησιμοποιείται και για λήψη_email.',
	'PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS' => 'Κατάσταση παραγγελίας για επιτυχείς συναλλαγές',
	'PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN' => 'Επιλέξτε την κατάσταση παραγγελίας στην οποία η πραγματική παραγγελία τίθεται,εάν το PayPal IPN ήταν επιτυχές.Εάν η χρησιμοποίηση μεταφορτώνει τις επιλογές πώλησης: 
  επιλέξτε την κατάσταση που επιτρέπει το download (κατόπιν ο πελάτης ειδοποιείται αμέσως για download μέσω e-mail).',
	'PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED' => 'Κατάσταση παραγγελίας για αποτυχημένες συναλλαγές',
	'PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN' => 'Κατάσταση παραγγελίας για αποτυχημένες συναλλαγές PayPal.',
	'PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME' => 'Όνομα χρήστη PayMate:',
	'PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN' => 'Ο λογαριασμός χρήστη PayMate.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET' => 'Ενεργοποίηση πληρωμής με Authorize.net;',
	'PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN' => 'Τσεκάρετε για χρήση Authorize.net με το phpShop.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE' => 'Test mode;',
	'PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN' => 'Επιλέξτε \' Ναι \' για έλεγχο. Επιλέξτε \' Όχι \' για κανονικές συναλλαγές.',
	'PHPSHOP_ADMIN_CFG_YES' => 'Ναι',
	'PHPSHOP_ADMIN_CFG_NO' => 'Οχι',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME' => 'ID Εισόδου στο Authorize.net',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN' => 'ID Εισόδου στο Authorize.net',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY' => 'Κλειδί συναλλαγής Authorize.net',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN' => 'Κλειδί συναλλαγής Authorize.net',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE' => 'Τύπος επικύρωσης',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN' => 'Τύπος επικύρωσης.',
	'PHPSHOP_ADVANCED_SEARCH' => 'Σύνθετη Αναζήτηση',
	'PHPSHOP_ORDERBY' => 'Ταξινόμηση κατά',
	'PHPSHOP_CUSTOMER_RATING' => 'ΑΞΙΟΛΟΓΗΣΗ ΠΕΛΑΤΩΝ',
	'PHPSHOP_TOTAL_VOTES' => 'Συνολικές ψήφοι',
	'PHPSHOP_CAST_VOTE' => 'Παρακαλούμε δώστε την ψήφο σας',
	'PHPSHOP_RATE_BUTTON' => 'Βαθμολογήστε',
	'PHPSHOP_RATE_NOM' => 'Βαθμολογία',
	'PHPSHOP_REVIEWS' => 'Κριτικές Πελατών',
	'PHPSHOP_NO_REVIEWS' => 'Δεν υπάρχουν κριτικές γι\' αυτό το προϊόν.',
	'PHPSHOP_WRITE_FIRST_REVIEW' => 'Γίνετε ο πρώτος που θα γράψει μία κριτική...',
	'PHPSHOP_REVIEW_LOGIN' => 'Παρακαλούμε κάντε εισαγωγή για να γράψετε μία κριτική.',
	'PHPSHOP_REVIEW_ERR_RATE' => 'Παρακαλούμε βαθμολογήστε το προϊόν για να ολοκληρώσετε την κριτική σας!',
	'PHPSHOP_REVIEW_ERR_COMMENT1' => 'Παρακαλούμε γράψτε μερικούς ακόμη χαρακτήρες για την κριτική σας.Ελάχιστος επιτρεπόμενος αριθμός χαρακτήρων: %s',
	'PHPSHOP_REVIEW_ERR_COMMENT2' => 'Παρακαλούμε μειώστε το μήκος της κριτικής σας.Μέγιστος επιτρεπόμενος αριθμός χαρακτήρων: %s',
	'PHPSHOP_WRITE_REVIEW' => 'Γράψτε μία κριτική γι\' αυτό το προϊόν!',
	'PHPSHOP_REVIEW_RATE' => 'Πρώτα: Βαθμολογήστε το προϊόν.Παρακαλούμε επιλέξτε μία βαθμολογία μεταξύ 0 (χαμηλή) και 5 αστεριών (υψηλή).',
	'PHPSHOP_REVIEW_COMMENT' => 'Παρακαλώ γράψτε τώρα μία σύντομη κριτική...(ελάχιστο %s, μέγιστο %s χαρακτήρες) ',
	'PHPSHOP_REVIEW_COUNT' => 'Χαρακτήρες που έχουν γραφεί: ',
	'PHPSHOP_REVIEW_SUBMIT' => 'Υποβολή Κριτικής',
	'PHPSHOP_REVIEW_ALREADYDONE' => 'Έχετε ήδη γράψει κριτική γι\' αυτό το προϊόν.Ευχαριστούμε.',
	'PHPSHOP_REVIEW_THANKYOU' => 'Ευχαριστούμε για την κριτική σας.',
	'PHPSHOP_CREDITCARD_FORM_LBL' => 'Προσθήκη/επεξεργασία πιστωτικής κάρτας',
	'PHPSHOP_CREDITCARD_LIST_LBL' => 'Λίστα πιστωτικών καρτών',
	'PHPSHOP_UDATE_ADDRESS' => 'Ενημέρωση διεύθυνσης',
	'PHPSHOP_ORDER_LINK' => 'Δείτε την σύνοψη της παραγγελίας σας.',
	'PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1' => 'Η κατάσταση παραγγελίας No. {order_id} έχει αλλάξει.',
	'PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2' => 'Η νέα κατάσταση παραγγελίας είναι:',
	'PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3' => 'Για να δείτε τα στοιχεία παραγγελίας,κάντε κλικ ή αντιγράψτε το link στον browser',
	'PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ' => 'Αλλαγή κατάστασης παραγγελίας: Η παραγγελία {order_id}',
	'PHPSHOP_PRODUCT_DISCOUNT_LBL' => 'Έκπτωση προϊόντος',
	'PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL' => 'Λίστα εκπτώσεων προϊόντων',
	'PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT' => 'Προσθήκη/αλλαγή έκπτωσης',
	'PHPSHOP_PRODUCT_DISCOUNT_AMOUNT' => 'Ποσό έκπτωσης',
	'PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP' => 'Εισάγετε το Ποσό έκπτωσης',
	'PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE' => 'Τύπος έκπτωσης',
	'PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT' => 'Ποσοστό επί τοις εκατό',
	'PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL' => 'Σύνολο',
	'PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP' => 'Το ποσόν είναι ποσοστό ή σύνολο;',
	'PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP' => 'Χρησιμοποιήστε τη φόρμα για εισαγωγή εκπτώσεων!',
	'PHPSHOP_PRODUCT_DISCOUNT_VATID_TIP' => 'Επιλέξτε τον ΦΠΑ που θα υπολογιστεί για την έκπτωση.',
	'PHPSHOP_PRODUCT_DISCOUNT_SAVE' => 'Κερδίζετε',
	'PHPSHOP_FLYPAGE_ENLARGE_IMAGE' => 'Εμφάνιση Μεγάλης Εικόνας',
	'PHPSHOP_CURRENCY_DISPLAY' => 'Τρόπος εμφάνισης νομίσματος',
	'PHPSHOP_CURRENCY_SYMBOL' => 'Νομισματικό σύμβολο',
	'PHPSHOP_CURRENCY_SYMBOL_TOOLTIP' => 'Μπορείτε να χρησιμοποιήσετε HTML σύμβολα εδώ όπως ( €,£,¥,...)',
	'PHPSHOP_CURRENCY_DECIMALS' => 'Δεκαδικά',
	'PHPSHOP_CURRENCY_DECIMALS_TOOLTIP' => 'Αριθμός εμφανιζόμενων δεκαδικών (μπορεί να είναι 0)<br><b>Στρογγυλοποιεί εάν υπάρχουν διαφορές δεκαδικών</b>',
	'PHPSHOP_CURRENCY_DECIMALSYMBOL' => 'Δεκαδικό σύμβολο',
	'PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP' => 'Χαρακτήρας Δεκαδικού συμβόλου',
	'PHPSHOP_CURRENCY_THOUSANDS' => 'Διαχωριστής  χιλιάδων',
	'PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP' => 'Χαρακτήρας διαχωρισμού χιλιάδων (μπορεί να είναι κενό)',
	'PHPSHOP_CURRENCY_POSITIVE_DISPLAY' => 'Θετικό πρόσημο',
	'PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP' => 'Τρόπος εμφάνισης θετικών τιμών.<br>(Symb σημαίνει σύμβολο)',
	'PHPSHOP_CURRENCY_NEGATIVE_DISPLAY' => 'Αρνητικό πρόσημο',
	'PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP' => 'Τρόπος εμφάνισης αρνητικών τιμών.<br>(Symb σημαίνει σύμβολο)',
	'PHPSHOP_MORE_IMAGES' => 'Δες περισσότερες εικόνες',
	'PHPSHOP_FILEMANAGER' => 'Διαχειριστής αρχείων',
	'PHPSHOP_FILEMANAGER_ADD' => 'Προσθήκη εικόνας/αρχείου',
	'PHPSHOP_FILES_PATH_ERROR' => 'Δώστε έγκυρη διαδρομή (path)!',
	'PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS' => 'Η εικόνα προεπισκόπησης δημιουργήθηκε!',
	'PHPSHOP_FILES_IMAGE_RESIZE_FAILURE' => 'Η εικόνα προεπισκόπησης δεν δημιουργήθηκε!',
	'PHPSHOP_FILES_UPLOAD_FAILURE' => 'Αποτυχία προσθήκης εικόνας/αρχείου',
	'PHPSHOP_FILES_FULLIMG_DELETE_FAILURE' => 'Αποτυχία διαγραφής εικόνας.',
	'PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS' => 'Επιτυχής διαγραφή.',
	'PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE' => 'Αποτυχία διαγραφής',
	'PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS' => 'Επιτυχής διαγραφή.',
	'PHPSHOP_FILES_FILE_DELETE_FAILURE' => 'Αποτυχία διαγραφής.',
	'PHPSHOP_FILES_FILE_DELETE_SUCCESS' => 'Επιτυχής διαγραφή.',
	'PHPSHOP_FILES_NOT_FOUND' => 'Το ζητούμενο αρχείο δεν βρέθηκε!',
	'PHPSHOP_COUPON_MOD' => 'Κουπόνι',
	'PHPSHOP_COUPON_LIST' => 'Λίστα κουπονιών',
	'PHPSHOP_COUPON_ALREADY_REDEEMED' => 'Το Κουπόνι έχει αγοραστεί ήδη.',
	'PHPSHOP_COUPON_ENTER_HERE' => 'Εισάγετε αριθμό κουπονιού έκπτωσης:',
	'PHPSHOP_COUPON_SUBMIT_BUTTON' => 'ΥΠΟΒΟΛΗ',
	'PHPSHOP_COUPON_CODE_EXISTS' => 'Ο Αριθμός κουπονιού υπάρχει ήδη.Παρακαλώ δοκιμάστε ξανά.',
	'PHPSHOP_COUPON_COMPLETE_ALL_FIELDS' => 'Συμπληρώστε όλα τα πεδία.',
	'PHPSHOP_COUPON_VALUE_NOT_NUMBER' => 'Εισάγετε αριθμητική τιμή!',
	'PHPSHOP_COUPON_NEW_HEADER' => 'Νέο Κουπόνι',
	'PHPSHOP_COUPON_COUPON_HEADER' => 'Κωδικός κουπονιού',
	'PHPSHOP_COUPON_VALUE' => 'Αξία',
	'PHPSHOP_COUPON_DISCOUNT' => 'Έκπτωση κουπονιού',
	'PHPSHOP_COUPON_CODE_INVALID' => 'Ο κωδικός κουπονιού δεν βρέθηκε!Παρακαλώ δοκιμάστε ξανά.',
	'PHPSHOP_FREE_SHIPPING' => 'Δωρεάν αποστολή',
	'PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT' => 'Η αποστολή είναι Δωρεάν για αυτό το ποσό.',
	'PHPSHOP_FREE_SHIPPING_AMOUNT' => 'Ελάχιστο ποσό για Δωρεάν αποστολή',
	'PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP' => 'Το ελάχιστο ποσό (με Φόρους) για Δωρεάν αποστολή 
                                                (Π.Χ.: <strong>50</strong> σημαίνει Δωρεάν αποστολή για ποσό
                                                  $50 (με Φόρους) ή μεγαλύτερο.',
	'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE' => 'Τύπος Λογαριασμού',
	'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING' => 'Checking',
	'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING' => 'Business',
	'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS' => 'Καταθέσεων',
	'PHPSHOP_PAYMENT_AN_RECURRING' => 'Επαναλαμβανόμενες Χρεώσεις',
	'PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP' => 'Καθορίστε εάν θέλετε Επαναλαμβανόμενες Χρεώσεις.',
	'PHPSHOP_INTERNAL_ERROR' => 'Εσωτερικό σφάλμα κατά την αίτηση συναλλαγής με',
	'PHPSHOP_PAYMENT_ERROR' => 'Σφάλμα κατά την πληρωμή',
	'PHPSHOP_PAYMENT_TRANSACTION_SUCCESS' => 'Η πληρωμή ολοκληρώθηκε επιτυχώς',
	'PHPSHOP_UPS_RESPONSE_ERROR' => 'Η UPS δεν ήταν ικανή να επεξεργαστεί το αίτημα ποσοστού αποστολής.',
	'PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS' => 'Εγγυημένη ημέρα (ες) για την παράδοση ',
	'PHPSHOP_UPS_PICKUP_METHOD' => 'Μέθοδος παραλαβής UPS',
	'PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP' => 'Πώς δίνετε τις συσκευασίες στη UPS;',
	'PHPSHOP_UPS_PACKAGE_TYPE' => 'Συσκευασία UPS;',
	'PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP' => 'Επιλέξτε τον τύπο προεπιλογής συσκευασίας.',
	'PHPSHOP_UPS_TYPE_RESIDENTIAL' => 'Κατ οίκο παράδοση;',
	'PHPSHOP_UPS_RESIDENTIAL' => 'Κατ οίκο (RES)',
	'PHPSHOP_UPS_COMMERCIAL' => 'Εμπορική παράδοση (COM)',
	'PHPSHOP_UPS_RESIDENTIAL_TOOLTIP' => ' Κατ οίκο (RES) ή Εμπορική παράδοση; (COM)',
	'PHPSHOP_UPS_HANDLING_FEE' => 'Αμοιβή χειρισμού',
	'PHPSHOP_UPS_HANDLING_FEE_TOOLTIP' => 'Αμοιβή χειρισμού για μέθοδο αποστολής.',
	'PHPSHOP_UPS_TAX_CLASS' => 'Τάξη Φόρου',
	'PHPSHOP_UPS_TAX_CLASS_TOOLTIP' => 'Χρησιμοποιήστε την εξής Τάξη Φόρου στο κόστος αποστολής.',
	'PHPSHOP_ERROR_CODE' => 'Κώδικας σφάλματος',
	'PHPSHOP_ERROR_DESC' => 'Περιγραφή σφάλματος',
	'PHPSHOP_CHANGE_TRANSACTION_KEY' => 'Εμφάνιση/αλλαγή Κλειδιού Συναλλαγής',
	'PHPSHOP_PAYMENT_CVV2' => 'Αίτηση Κωδικού CVV2/CVC2/CID (CVV2/CVC2/CID)',
	'PHPSHOP_PAYMENT_CVV2_TOOLTIP' => 'Έλεγχος για έγκυρο κωδικό CVV2/CVC2/CID (Τριών ή τεσσάρων ψηφίων στο πίσω μέρος της Κάρτας);',
	'PHPSHOP_CUSTOMER_CVV2_TOOLTIP' => 'Εισάγετε τον Τριών ή τεσσάρων ψηφίων Κωδικό που είναι στο πίσω μέρος της Κάρτας (Εμπρός σε ορισμένες Κάρτες)',
	'PHPSHOP_CUSTOMER_CVV2_ERROR' => 'Εισάγετε τον Κωδικό κάρτας για να συνεχίσετε.',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST' => 'Χαρακτηριστικά Προϊόντος',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST' => 'Εξτρά Λίστα χαρακτηριστικών ',
	'PHPSHOP_MULTISELECT' => 'Πολλαπλή επιλογή με CTRL και Ποντίκι',
	'PHPSHOP_ADMIN_CFG_ENABLE_EPN' => 'Ενεργοποίηση πληρωμής μέσω eProcessingNetwork.com;',
	'PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN' => 'Κάντε κλικ για Ενεργοποίηση πληρωμής μέσω eProcessingNetwork.com μέσω phpShop.',
	'PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE' => 'Test mode ;',
	'PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN' => 'Επιλέξτε \'ΝΑΙ\' για κατάσταση δοκιμής.Επιλέξτε \'ΟΧΙ\' για κατάσταση κανονικής λειτουργίας.',
	'PHPSHOP_ADMIN_CFG_EPN_USERNAME' => 'ID Σύνδεσης eProcessingNetwork.com',
	'PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN' => 'Αυτό είναι το ID Σύνδεσης eProcessingNetwork.com',
	'PHPSHOP_ADMIN_CFG_EPN_KEY' => 'Κλειδί συναλλαγής μέσω eProcessingNetwork.com',
	'PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN' => 'Αυτό είναι το Κλειδί συναλλαγής eProcessingNetwork.com',
	'PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE' => 'Τύπος Authentication',
	'PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN' => 'Αυτός είναι ο Τύπος authentication για το eProcessingNetwork.com.',
	'PHPSHOP_RELATED_PRODUCTS' => 'Παρόμοια προϊόντα',
	'PHPSHOP_RELATED_PRODUCTS_HEADING' => 'Δείτε επίσης και αυτά τα προϊόντα',
	'PHPSHOP_NONE' => 'Κανένα',
	'PHPSHOP_ORDER_HISTORY' => 'Ιστορικό παραγγελιών',
	'PHPSHOP_ORDER_HISTORY_COMMENT' => 'Σχόλια',
	'PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL' => 'Σχόλια στην παραγγελία σας',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME' => 'Ονομα χρήστη USPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP' => 'Ονομα χρήστη USPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD' => 'Κωδικός πρόσβασης USPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP' => 'Κωδικός πρόσβασης USPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER' => 'USPS shipping server',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP' => 'USPS shipping server',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH' => 'USPS shipping path',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP' => 'USPS shipping path',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE' => 'Μέγεθος συσκευασίας USPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP' => 'Μέγεθος συσκευασίας USPS',
	'PHPSHOP_USPS_HANDLING_FEE' => 'Η αμοιβή σας για αυτή τη μέθοδο αποστολής.',
	'PHPSHOP_USPS_HANDLING_FEE_TOOLTIP' => 'Η αμοιβή σας για αυτή τη μέθοδο αποστολής.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE' => 'Η αμοιβή σας για αυτή τη μέθοδο διεθνών αποστολών USPS.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP' => 'Η αμοιβή σας για αυτή τη μέθοδο διεθνών αποστολών USPS.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE' => 'Ανά ποσοστό κιλών για τις διεθνείς αποστολές USPS.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP' => 'Ανά ποσοστό κιλών για τις διεθνείς αποστολές USPS.',
	'PHPSHOP_USPS_RESPONSE_ERROR' => 'Η USPS δεν ήταν ικανή να επεξεργαστεί το αίτημα.',
	'PHPSHOP_PRODUCT_TYPE_LIST_LBL' => 'Λίστα τύπου προϊόντων',
	'PHPSHOP_PRODUCT_TYPE_ADDEDIT' => 'Προσθήκη/επεξεργασία τύπου προϊόντων',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU' => 'Λίστα τύπου προϊόντων',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU' => 'Προσθήκη τύπου προϊόντων',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION' => 'Περιγραφή παραμέτρων',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE' => 'Τύπος παραμέτρων',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT' => 'YYYY-MM-DD',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT' => 'HH:MM:SS',
	'PHPSHOP_PARAMETER_SEARCH' => 'Ειδική αναζήτηση με παραμέτρους',
	'PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY' => 'Αναζήτηση σε κατηγορία',
	'PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS' => 'Αλλαγή παραμέτρων',
	'PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER' => 'Φθίνουσα σειρά',
	'PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER' => 'Αύξουσα σειρά',
	'PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY' => 'Παράμετροι Κατηγορίας',
	'PHPSHOP_FEE' => 'Αμοιβή',
	'PHPSHOP_BACK_TO_COUNTRY' => 'Πίσω στην Χώρα',
	'PHPSHOP_ADD_STATE' => 'Προσθήκη Πόλης',
	'PHPSHOP_LIST_STATES' => 'Εμφάνισε τις Πόλεις',
	'PHPSHOP_SHOW_FEATURED' => 'Προτεινόμενα προϊόντα',
	'PHPSHOP_USER_SEND_REGISTRATION_DETAILS' => 'Γειά σας  %s,

Σας ευχαριστούμε για την εγγραφή στο %s. Ο λογαριασμός χρήστη έχει δημιουργηθεί.
Μπορείτε να εισέλθετε με τα στοιχεία σας στο %s

Όνομα χρήστη - %s
Κωδικός χρήστη - %s
',
	'PEAR_LOG_CRIT' => 'Κρίσιμο',
	'PEAR_LOG_ERR' => 'Σφάλμα',
	'PEAR_LOG_WARNING' => 'Προειδοποίηση',
	'PEAR_LOG_INFO' => 'Μήνυμα',
	'PEAR_LOG_TIP' => 'Πληροφορίες',
	'PEAR_LOG_ALERT' => 'Ειδοποίηση',
	'PEAR_LOG_EMERG' => 'Επείγον',
	'PEAR_LOG_NOTICE' => 'Σημείωση',
	'PEAR_LOG_DEBUG' => 'Αποσφαλμάτωση',
	'PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE' => 'Λειτουργία Δοκιμής?',
	'PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN' => 'Επιλέξτε \'ΝΑΙ\' για τις δοκιμές.Επιλέξτε \'ΟΧΙ\' κανονικές συναλλαγές.',
	'PHPSHOP_ADMIN_CFG_PFP_PARTNER' => 'Επεξεργασία ID συνεργάτη VeriSign',
	'PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN' => 'To παρεχόμενο σε σας ID συνεργάτη από τον μεταπωλητή VeriSign που σας δόθηκε για την υπηρεσία PayFlow',
	'VM_MANAGE_USER_FIELDS' => 'Διαχείριση Πεδίων Χρηστών',
	'VM_FIELDMANAGER_REORDER' => 'Ανακατάταξη',
	'VM_PRODUCTS_MOVE_TOOLBAR' => 'Μετακίνηση Προϊόντων',
	'VM_ADMIN_CFG_PAYPAL_NOTIFYSCRIPT_TIP' => 'Ενεργοποιημένο,σας δίνει τη δυνατότητα ελέγχου του Notify Script %s μέσω αυτής της φόρμας δοκιμής: <a href="http://www.eliteweaver.co.uk/testing/ipntest.php" target="_blank">www.eliteweaver.co.uk/testing/ipntest.php</a>',
	'VM_ADMIN_CFG_PAYPAL_STATUS_PENDING_EXPLAIN' => 'Η κατάσταση στην οποία οι παραγγελίες που τίθενται δεν έχουν καμία ολοκληρωμένη συναλλαγή πληρωμής 
		Η συναλλαγή δεν ακυρώθηκε σε αυτήν την περίπτωση,αλλά είναι εκκρεμής,περιμένοντας την ολοκλήρωση.',
	'VM_ADMIN_CFG_PAYPAL_STATUS_PENDING' => 'Η κατάσταση παραγγελίας για τις εκκρεμείς πληρωμές',
	'VM_SHIPPING_MODULE_LIST_LBL' => 'Λίστα Modules Αποστολής',
	'VM_ENABLED' => 'Ενεργό',
	'VM_DISABLED' => 'Ανενεργό',
	'VM_ABOUT' => 'Σχετικά',
	'VM_HELP_TOPICS' => 'Αρχείο Βοηθείας',
	'VM_COMMUNITY_FORUM' => 'Φόρουμ',
	'VM_CONFIGURATION_CHANGE_SUCCESS' => 'Τα στοιχεία ρυθμίσεων ενημερώθηκαν!',
	'VM_CONFIGURATION_CHANGE_FAILURE' => 'Αδυναμία εγγραφής στο αρχείο ρυθμίσεων %s!',
	'VM_WRITABLE' => 'Εγγράψιμο',
	'VM_UNWRITABLE' => 'Μη Εγγράψιμο',
	'VM_FEDEX_ACCOUNT_NUMBER' => 'Αριθμός λογαριασμού FedEx',
	'VM_FEDEX_METER_NUMBER' => 'Αριθμός μετρητών FedEx',
	'VM_FEDEX_METER_NUMBER_TIP' => 'Ο αριθμός μετρητών που έχετε λάβει από την FedEx',
	'VM_FEDEX_URI' => 'Διεύθυνση FedEx Server',
	'VM_FEDEX_URI_TIP' => 'Δυνατότητα να ζητήσετε τις διευθύνσεις FedEx\'s API servers δεν συμπεριλαμβάνεται (FEDEX_URI). Παρακαλώ καταχωρήστε με τη Fedex για να λάβετε αυτές τις πληροφορίες (<a href="http://www.fedex.com/globaldeveloper/shipapi/">www.fedex.com/globaldeveloper/shipapi/</a>).
<br/>Η προεπιλογή για τη δοκιμή είναι: <strong>https://gatewaybeta.fedex.com/GatewayDC</strong>',
	'VM_ORDER_EXPORT' => 'Εξαγωγή παραγγελίας',
	'VM_ORDER_EXPORT_MODULE_LIST_MNU' => 'Λίστα Modules Εξαγωγής παραγγελίας',
	'VM_ORDER_EXPORT_MODULE_FORM_MNU' => 'Προσθήκη Module Εξαγωγής παραγγελίας',
	'VM_TAXDETAILS_LABEL' => 'Το φορολογικό σύνολο περιέχει',
	'PHPSHOP_REVIEW_MODIFIED' => 'Η επισκόπηση ενημερώθηκε.',
	'VM_RECOMMEND_FORM_MESSAGE' => 'Το μήνυμα σας',
	'VM_RECOMMEND_MESSAGE' => 'Γειά σου,

Βρήκα αυτό το προϊόν που ίσως σε ενδιαφέρει %s.

Μπορείς να δεις λεπτομέρειες εδώ:
%s

Φιλικά.',
	'VM_ENQUIRY_SHOPPER_EMAIL_SUBJECT' => '%s - Επιβεβαίωση του αιτήματος ενημέρωσης',
	'VM_ENQUIRY_VENDOR_EMAIL_SUBJECT' => '%s - Αίτηση ενημέρωσης για το προϊόν: %s',
	'VM_ENQUIRY_SHOPPER_EMAIL_MESSAGE' => 'Επιβεβαίωση λήψης του αιτήματος ενημέρωσης σας

Σας ευχαριστούμε που ρωτήσατε {vendor_name}  για το προϊόν:
Όνομα προϊόντος: {product_name}
Κωδικός προϊόντος (SKU): {product_sku}
Σύνδεσμος (link) προϊόντος: {product_url}

Θα επικοινωνήσουμε άμεσα απαντώντας στο ερώτημα σας.
(Παρακαλώ μην απαντήσετε στο e-mail αυτό)',
	'VM_ENQUIRY_VENDOR_EMAIL_MESSAGE' => 'Λάβατε μια αίτηση ενημέρωσης απο {shopper_name} που αφορά στο κάτωθι προϊόν: 
Όνομα προϊόντος: {product_name}
Κωδικός προϊόντος (SKU) : {product_sku}

Αίτηση:
{shopper_message}
URL: {product_url}

Mail mailto: {shopper_email}',
	'VM_RECOMMEND_SUBJECT' => 'Προτεινόμενο προϊόν σε %s',
	'VM_RECOMMEND_DONE' => 'Η πρόταση στάλθηκε επιτυχώς!',
	'VM_RECOMMEND_FAILED' => 'Η πρόταση δεν στάλθηκε. Δοκιμάστε ξανά!',
	'VM_LEGALINFO_SHORTTEXT' => '<h5>Όροι Συναλλαγής</h5>

Προσοχή.Μπορείτε να ακυρώσετε την παραγγελία σας εντός 48 ωρών.Επιστροφή προϊόντος γίνεται εντός 48 ωρών και μόνο εφ όσον είναι στην αρχική συσκευασία του και σε άριστη κατάσταση.Για περισσότερες πληροφορίες διαβάστε τους όρους συναλλαγής. <a href="%s" onclick="%s" target="_blank">Όροι Συναλλαγής</a> page.',
	'VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX' => 'Ο Κατάλογος αποθήκευσης δεδομένων περιόδου (session data) δεν είναι εγγράψιμος.Ελέγξτε τις ρυθμίσεις σας!',
	'VM_SESSION_SAVEPATH_UNWRITABLE' => 'Ο Κατάλογος αποθήκευσης session data %s δεν είναι εγγράψιμος!Το Κατάστημα προσωρινά προσπαθεί να χρησιμοποιήσει το  %s ',
	'VM_SESSION_COOKIES_NOT_ACCEPTED_TIP' => 'Δεν δέχεστε cookies που είναι απαιτούμενα για την λειτουργία του Ιστοχώρου.Ελέγξτε τις ρυθμίσεις του Browser σας για την αποδοχή cookies.',
	'BUTTON_SEND_REG' => 'ΥΠΟΒΟΛΗ ΕΓΓΡΑΦΗΣ',
	'CONTACT_FORM_NC' => 'Ελέγξτε τα στοιχεία για λάθη ή παραλείψεις.',
	'CMN_REQUIRED' => 'Απαιτούμενο',
	'CMN_NEW' => 'ΝΕΟ',
	'CMN_SAVE' => 'ΑΠΟΘΗΚΕΥΣΗ',
	'CMN_NEW_ITEM_LAST' => 'Τα νέα αντικείμενα τοποθετούνται στο τέλος.Η ταξινόμηση μπορεί να αλλάξει ΜΕΤΑ την αποθήκευση τους.',
	'CMN_OPTIONAL' => 'Προεραιτικό',
	'E_APPLY' => 'Εφαρμογή',
	'E_IMAGES' => 'Εικόνες',
	'URL' => 'URL:',
	'E_REMOVE' => 'ΑΚΥΡΩΣΗ',
	'PN_LT' => '<',
	'PN_RT' => '>',
	'PN_PAGE' => 'Σελίδα',
	'PN_OF' => 'από',
	'PN_START' => 'Αρχή',
	'PN_PREVIOUS' => 'Προηγούμενη',
	'PN_NEXT' => 'Επόμενη',
	'PN_END' => 'Τέλος',
	'PN_DISPLAY_NR' => 'Εμφάνιση #',
	'PN_RESULTS' => 'Αποτελέσματα',
	'CMN_PRINT' => 'Εκτύπωση',
	'CMN_PDF' => 'PDF',
	'CMN_EMAIL' => 'E-mail',
	'BACK' => 'ΠΙΣΩ',
	'USERNAME' => 'Όνομα χρήστη',
	'PASSWORD' => 'Κωδικός χρήστη',
	'BUTTON_LOGIN' => 'ΣΥΝΔΕΣΗ',
	'REGISTER_UNAME' => 'Όνομα χρήστη',
	'REGISTER_EMAIL' => 'E-mail',
	'REGWARN_MAIL' => 'Δώστε έγκυρο e-mail.',
	'SEND_SUB' => 'Λεπτομέρειες λογαριασμού για %s at %s',
	'ASEND_MSG' => 'Γειά σου %s,
	
	Ένας νέος χρήστης εγγράφηκε στο %s.
	Το μήνυμα αυτό περιέχει τα στοιχεία:
	
	Όνομα - %s
	E-mail - %s
	Όνομα χρήστη - %s
	
	Αυτόματο ενημερωτικό μήνυμα. Παρακαλώ μην απαντήσετε στο μήνυμα αυτό.',
	'REG_COMPLETE' => '<div class="componentheading">Η εγγραφή ολοκληρώθηκε!</div><br />Μπορείτε να εισέλθετε με τα στοιχεία σας.',
	'REG_COMPLETE_ACTIVATE' => '<div class="componentheading">Η εγγραφή ολοκληρώθηκε!</div><br />Ο λογαριασμός σας δημιουργήθηκε και ένα link ενεργοποίησης στάλθηκε στο e-mail που δηλώσατε.Σημειώστε ότι πρέπει να ενεργοποιήσετε τον λογαριασμό σας μέσω του link που λάβατε πριν μπορέσετε να εισέλθετε.Σας ευχαριστούμε!',
	'DATE_FORMAT_LC' => '%A, %d %B %Y',
	'VM_CART_PRODUCT_ADDED' => 'Το προϊόν προστέθηκε.',
	'VM_CART_PRODUCT_UPDATED' => 'Το προϊόν προστέθηκε.',
	'CMN_OK' => 'OK',
	'CMN_CONTINUE' => 'ΣΥΝΕΧΕΙΑ',
	'CMN_CANCEL' => 'ΑΚΥΡΩΣΗ',
	'VM_USERGROUP_LBL' => 'Ομάδες χρηστών',
	'VM_CART_MIN_ORDER' => 'Η ελάχιστη παραγγελία για αυτό το προϊόν είναι $min Τεμάχια.',
	'VM_CART_MAX_ORDER' => 'Η μέγιστη παραγγελία για αυτό το προϊόν είναι $max Τεμάχια.',
	'ITEM_PREVIOUS' => 'Προηγούμενo',
	'ITEM_NEXT' => 'Επόμενo',
	'VM_ORDER_EDIT_ACTIONS' => 'Ενέργειες',
	'VM_ORDER_EDIT' => 'Τροποποίηση παραγγελίας',
	'VM_ORDER_EDIT_ADD' => 'Προσθήκη',
	'VM_ORDER_EDIT_ADD_PRODUCT' => 'Προσθήκη προϊόντος',
	'VM_ORDER_EDIT_EDIT_ORDER' => 'Τροποποίηση παραγγελίας',
	'VM_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'Η ποσότητα δεν μπορεί να είναι 0',
	'VM_ORDER_EDIT_PRODUCT_ADDED' => 'Το Προϊόν προστέθηκε επιτυχώς στην παραγγελία',
	'VM_ORDER_EDIT_PRODUCT_DELETED' => 'Το Προϊόν αφαιρέθηκε επιτυχώς από την παραγγελία',
	'VM_ORDER_EDIT_QUANTITY_UPDATED' => 'Ποσότητα ενημερωμένη επιτυχώς',
	'VM_ORDER_EDIT_RETURN_PARENTS' => 'Πίσω στο γονικό προϊόν ',
	'VM_ORDER_EDIT_CHOOSE_PRODUCT' => 'Επιλέξτε ένα προϊόν',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_NEW' => 'Νέο χαρακτηριστικό',
	'PHPSHOP_PRODUCT_FORM_PROPERTY_NEW' => 'Νέα Ιδιότητα Χαρακτηριστικού',
	'PHPSHOP_PRODUCT_FORM_PROPERTY' => 'Ιδιότητα Χαρακτηριστικού',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_DELETE' => 'Διαγράψτε το χαρακτηριστικό',
	'LAST_UPDATED' => 'Τελευταία ενημέρωση',
	'NOT_AUTH' => 'Δεν έχετε επαρκή δικαιώματα για αυτό το στοιχείο.',
	'DO_LOGIN' => 'Παρακαλώ Εισέλθετε.',
	'VALID_AZ09' => 'Παρακαλώ δώστε έγκυρο %s. Χωρίς κενά,με πάνω από %d χαρακτήρες και να περιέχει γράμματα ή αριθμούς',
	'CMN_PUBLISHED' => 'Δημοσιευμένο',
	'CMN_UNPUBLISHED' => 'Αδημοσίευτο',
	'MORE' => 'Περισσότερα',
	'BUTTON_LOGOUT' => 'ΑΠΟΣΥΝΔΕΣΗ',
	'NO_ACCOUNT' => 'Αποκτήστε λογαριασμό!',
	'CREATE_ACCOUNT' => 'ΕΓΓΡΑΦΗ',
	'REGWARN_PASS' => 'Δώστε κωδικό χωρίς κενά,με πάνω από 6 χαρακτήρες,γράμματα ή αριθμούς',
	'REGWARN_VPASS1' => 'Επιβεβαιώστε τον κωδικό.',
	'REGWARN_VPASS2' => 'Σφάλμα: επιβεβαιώστε τα στοιχεία σας.',
	'USEND_MSG_ACTIVATE' => 'Γειά σας %s,

Σας ευχαριστούμε που εγγραφήκατε στο %s. Ο λογαριασμός σας δημιουργήθηκε αλλά πρέπει να ενεργοποιηθεί προτού χρησιμοποιηθεί.
Κάντε κλικ στο σύνδεσμο ή αντιγράψτε τον στον Browser σας για την ενεργοποίηση:
%s

Μετά την ενεργοποίηση,μπορείτε να συνδεθείτε στο %s χρησιμοποιώντας τα στοιχεία :

Όνομα χρήστη - %s
Κωδικός - %s',
	'USEND_MSG' => 'Γειά σας %s,

Σας ευχαριστούμε που εγγραφήκατε στο %s.

μπορείτε να συνδεθείτε στο %s χρησιμοποιώντας τα στοιχεία που δηλώσατε.',
	'HI' => 'Hi',
	'NEW_USER_MESSAGE_SUBJECT' => 'New User Details',
	'NEW_USER_MESSAGE' => 'Γειά σας %s,


Προστεθήκατε ως χρήστης στο  %s από τον Διαχειριστή.

Το e-mail αυτό περιέχει το Όνομα χρήστη και τον Κωδικό εισόδου στο %s

Όνομα χρήστη - %s
Κωδικός - %s


Παρακαλώ μην απαντήσετε στο e-mail αυτό.Δημιουργείται αυτόματα από το σύστημα για λόγους ενημέρωσης.',
	'REMEMBER_ME' => 'ΑΠΟΘΗΚΕΥΣΗ',
	'JAN' => 'Ιανουάριος',
	'FEB' => 'Φεβρουάριος',
	'MAR' => 'Μάρτιος',
	'APR' => 'Απρίλιος',
	'MAY' => 'Μάιος',
	'JUN' => 'Ιούνιος',
	'JUL' => 'Ιούλιος',
	'AUG' => 'Αύγουστος',
	'SEP' => 'Σεπτέμβριος',
	'OCT' => 'Οκτώβριος',
	'NOV' => 'Νοέμβριος',
	'DEC' => 'Δεκέμβριος',
	'VM_DOWNLOAD_FILE_NOTREADABLE' => 'Το ζητούμενο αρχείο δεν μπορεί να διαβαστεί από τον Server',
	'VM_DOWNLOAD_FILE_NOTFOUND' => 'Το ζητούμενο αρχείο δεν βρέθηκε.Πιθανή αιτία:Λάθος διαδρομή',
	'VALID_EUVATID' => 'Παρακαλώ εισάγετε ένα έγκυρο ID ΦΠΑ Ε.Ε.',
	'VM_REGISTER_ACCOUNT' => 'Δημιουργία λογαριασμού;<br />
Σας επιτρέπει να έρθετε πίσω στο κατάστημα και να δείτε όλες τις παραγγελίες που έχετε κάνει.',
	'RELOAD' => 'Ξαναφόρτωμα',
	'VM_FEED_SUBSCRIBE_TITLE' => 'Εγγραφείτε στην ενημέρωση των πιό πρόσφατων προϊόντων!',
	'VM_FEED_SUBSCRIBE_TOCATEGORY_TITLE' => 'Εγγραφείτε στην ενημέρωση των πιό πρόσφατων προϊόντων της κατηγορίας!',
	'VM_FEDEX_ACCOUNT_SETTINGS' => 'Ρυθμίσεις λογαριασμού FedEx',
	'VM_FEDEX_TAXES_FEES' => 'Φόροι και αμοιβές',
	'VM_FEDEX_ADDITIONAL_SETTINGS' => 'Πρόσθετες Ρυθμίσεις',
	'VM_FEDEX_TAX_CLASS' => 'Φορολογική κατηγορία',
	'VM_FEDEX_TAX_CLASS_TOOLTIP' => 'Αυτό το φορολογικό ποσοστό θα εφαρμοστεί στην αμοιβή αποστολής.',
	'VM_FEDEX_HANDLING_FEE' => 'Αμοιβή χειρισμού',
	'VM_FEDEX_HANDLING_FEE_TOOLTIP' => 'Διευκρινίστε μια πρόσθετη αμοιβή χειρισμού.',
	'VM_FEDEX_SERVICES' => 'Υπηρεσίες',
	'VM_FEDEX_SIGNATURE_OPTION' => 'Επιλογή υπογραφών',
	'VM_FEDEX_SIGNATURE_OPTION_1' => 'Παραδώστε χωρίς υπογραφή',
	'VM_FEDEX_SIGNATURE_OPTION_2' => 'Έμμεση υπογραφή',
	'VM_FEDEX_SIGNATURE_OPTION_3' => 'Αμεση υπογραφή',
	'VM_FEDEX_SIGNATURE_OPTION_4' => 'Υπογραφή Ενήλικου',
	'VM_FEDEX_SORT_ORDER' => 'Επίδειξη ποσοστού παραγγελίας',
	'VM_FEDEX_SORT_ASC' => 'Αυξανόμενο',
	'VM_FEDEX_SORT_DESC' => 'Μειούμενο',
	'VM_FEDEX_ERR_METER_NUMBER' => 'Σφάλμα στην ενημέρωση του μετρητή.',
	'VM_FEDEX_LBL_METHOD' => 'Τρόπος αποστολής',
	'VM_FEDEX_LBL_PRICE' => 'Τιμή',
	'VM_FEATURED_PRODUCT' => 'ΕΙΔΙΚΑ ΠΡΟΪΟΝTA',
	'VM_RECENT_PRODUCTS' => 'ΠΡΟΣΦΑΤΑ ΠΡΟΪΟΝTA',
	'VM_ADMIN_SIMPLE_LAYOUT' => 'Απλό σχεδιάγραμμα',
	'VM_ADMIN_EXTENDED_LAYOUT' => 'Εκτεταμένο σχεδιάγραμμα',
	'VM_YOUR_VERSION' => 'Η έκδοσή σας',
	'VM_ADMIN_BACKTOJOOMLA' => 'Πίσω στη Διαχείριση του Joomla! ',
	'VM_ADMIN_PANELTITLE' => 'Πίνακας Ελέγχου VirtueMart',
	'VM_VERSIONCHECK_TITLE' => 'Έλεγχος έκδοσης VirtueMart',
	'VM_VERSIONCHECK_NOW' => 'Έλεγχος για την πιό πρόσφατη έκδοση',
	'LOST_PASSWORD' => 'Υπενθύμιση Κωδικού  Χρήστη',
	'PHPSHOP_USPS_PADDING' => 'Τοις εκατό για να γεμίσει το βάρος της συσκευασίας.(Περιλάβετε %)',
	'PHPSHOP_USPS_PADDING_TOOLTIP' => 'Γεμίστε το βάρος για να επιτρέψετε το πρόσθετο βάρος για τη αποστολή του κιβωτίου και τη συσκευασία.Η χρησιμοποίηση αυτού επιτρέπει σε σας  να βάλετε το πραγματικό βάρος στις τοποθετήσεις βάρους στοιχείων σας.Απαιτεί να περιλάβει το σημάδι %. Παράδειγμα  15%',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_ENABLED' => 'Επιτρέψτε διεθνή Express αποστολή',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_ENABLED_TOOLTIP' => 'Εκτιμήσεις για διεθνή Express αποστολή.',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_PACKAGE' => 'Tύπος συσκευασίας Εσωτερικού',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_PACKAGE_TOOLTIP' => 'Tύπος συσκευασίας Εσωτερικού',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_PACKAGE' => 'Διεθνής τύπος συσκευασίας',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_PACKAGE_TOOLTIP' => 'Διεθνής τύπος συσκευασίας',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_LETTER' => 'Επιστολή/φάκελος',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_PACKAGE' => 'Συσκευασία',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_DHL_PACKAGE' => 'Συσκευασία DHL',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_OTHER' => 'Η Συσκευασία σας',
	'PHPSHOP_SHIPPING_METHOD_DHL_CONTENT_DESC' => 'Περιγραφή περιεχομένου Διεθνών αποστολών',
	'PHPSHOP_SHIPPING_METHOD_DHL_CONTENT_DESC_TOOLTIP' => 'Περιγραφή περιεχομένου Διεθνών αποστολών',
	'PHPSHOP_SHIPPING_METHOD_DHL_EXPRESS' => 'Express',
	'PHPSHOP_SHIPPING_METHOD_DHL_NEXT_AFTERNOON' => 'Επόμενο απόγευμα',
	'PHPSHOP_SHIPPING_METHOD_DHL_SECOND_DAY' => 'Δεύτερη ημέρα',
	'PHPSHOP_SHIPPING_METHOD_DHL_GROUND' => 'Έδαφος',
	'PHPSHOP_SHIPPING_METHOD_DHL_1030' => 'Express 10:30 πμ',
	'PHPSHOP_SHIPPING_METHOD_DHL_SATURDAY' => 'Express Σάββατο',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL' => 'Διεθνής Express',
	'PHPSHOP_SHIPPING_METHOD_DHL_INVALID_XML' => 'Άκυρη ανταπόκριση DHL XML',
	'PHPSHOP_SHIPPING_METHOD_DHL_MISSING_RESULT' => 'Ελλείπων κώδικας αποτελέσματος DHL XML',
	'PHPSHOP_SHIPPING_METHOD_DHL_NOT_ON_WEEKENDS' => 'Αποστολή DHL δεν είναι διαθέσιμη τα Σαββατοκύριακα.',
	'PHPSHOP_SHIPPING_METHOD_DHL_TOO_LATE_TO_SHIP' => 'Η παραγγελία σας θα αποσταλεί την αμέσως επόμενη εργάσιμη ημέρα.',
	'PHPSHOP_SHIPPING_METHOD_DHL_WILL_GO_OUT' => 'Η ΠΑΡΑΓΓΕΛΙΑ ΣΑΣ ΘΑ ΑΠΟΣΤΑΛΕΙ',
	'PHPSHOP_SHIPPING_METHOD_DHL_ID' => 'DHL ID',
	'PHPSHOP_SHIPPING_METHOD_DHL_ID_TOOLTIP' => 'ID πρόσβασης DHL',
	'PHPSHOP_SHIPPING_METHOD_DHL_PASSWORD' => 'Κωδικός DHL',
	'PHPSHOP_SHIPPING_METHOD_DHL_PASSWORD_TOOLTIP' => 'Κωδικός πρόσβασης που αντιστοιχεί στο DHL ID',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_SHIPPING_KEY' => 'Κλειδί DHL αποστολών Εσωτερικού',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_SHIPPING_KEY_TOOLTIP' => 'Κλειδί DHL αποστολών Εσωτερικού',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_SHIPPING_KEY' => 'Κλειδί DHL Διεθνών αποστολών',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_SHIPPING_KEY_TOOLTIP' => 'Κλειδί DHL Διεθνών αποστολών',
	'PHPSHOP_SHIPPING_METHOD_DHL_ACCOUNT_NUMBER' => 'Αριθμός λογαριασμού DHL',
	'PHPSHOP_SHIPPING_METHOD_DHL_ACCOUNT_NUMBER_TOOLTIP' => 'Αριθμός λογαριασμού DHL',
	'PHPSHOP_SHIPPING_METHOD_DHL_TOO_LATE' => 'Πολύ αργά για αποστολή!',
	'PHPSHOP_SHIPPING_METHOD_DHL_TOO_LATE_TOOLTIP' => 'Χρησιμοποιείται σαν ενημέρωση.Βάλτε 24ωρο στυλ(πχ. 1600, οχι 4:00μμ)',
	'PHPSHOP_SHIPPING_METHOD_DHL_TEST_MODE' => 'Χρήση Δοκιμαστικής λειτουργίας',
	'PHPSHOP_SHIPPING_METHOD_DHL_TEST_MODE_TOOLTIP' => 'Χρήση Server DHL Δοκιμαστικής λειτουργίας,όχι στον κεντρικό υπολογιστή',
	'PHPSHOP_SHIPPING_METHOD_DHL_EXPRESS_ENABLED' => 'Ενεργοποίηση αποστολής Express',
	'PHPSHOP_SHIPPING_METHOD_DHL_EXPRESS_ENABLED_TOOLTIP' => 'Πάρτε τις εκτιμήσεις απο την DHL.',
	'PHPSHOP_SHIPPING_METHOD_DHL_NEXT_AFTERNOON_ENABLED' => 'Ενεργοποίηση αποστολής το επόμενο απόγευμα',
	'PHPSHOP_SHIPPING_METHOD_DHL_NEXT_AFTERNOON_ENABLED_TOOLTIP' => 'Προϊόντα που στέλνονται το επόμενο απόγευμα.',
	'PHPSHOP_SHIPPING_METHOD_DHL_SECOND_DAY_ENABLED' => 'Ενεργοποίηση αποστολής την δεύτερη μέρα',
	'PHPSHOP_SHIPPING_METHOD_DHL_SECOND_DAY_ENABLED_TOOLTIP' => 'Ενεργοποίηση αποστολής την δεύτερη μέρα.',
	'PHPSHOP_SHIPPING_METHOD_DHL_GROUND_ENABLED' => 'Ενεργοποίηση αποστολής εδάφους',
	'PHPSHOP_SHIPPING_METHOD_DHL_GROUND_ENABLED_TOOLTIP' => 'Ενεργοποίηση αποστολής εδάφους.',
	'PHPSHOP_SHIPPING_METHOD_DHL_1030_ENABLED' => 'Ενεργοποίηση αποστολής Express',
	'PHPSHOP_SHIPPING_METHOD_DHL_1030_ENABLED_TOOLTIP' => 'Ενεργοποίηση αποστολής Express.',
	'PHPSHOP_SHIPPING_METHOD_DHL_SATURDAY_ENABLED' => 'Ενεργοποίηση αποστολής Express Σαββάτου (μόνο για Παρασκευή)',
	'PHPSHOP_SHIPPING_METHOD_DHL_SATURDAY_ENABLED_TOOLTIP' => 'Ενεργοποίηση αποστολής Express Σαββάτου.',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_WEIGHT' => 'Βάρος της συσκευασίας',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_WEIGHT_TOOLTIP' => 'Το βάρος συσκευασίας θα προστεθεί στο συνολικό βάρος.Θέστε 0 εάν τα βάρη περιλαμβάνουν ήδη το βάρος συσκευασίας.',
	'PHPSHOP_SHIPPING_METHOD_DHL_DUTY_SHOPPER_GROUP' => 'Ομάδα αγοραστών που χρησιμοποιούν  τις τιμές Duty (για Διεθνή.)',
	'PHPSHOP_SHIPPING_METHOD_DHL_DUTY_SHOPPER_GROUP_TOOLTIP' => 'Εισάγετε την ομάδα αγοραστών που έχετε δημιουργήσει για να κρατήσετε την αξία προϊόντων που χρειάστηκε στον υπολογισμό των διεθνών τιμών καθήκοντος.Δημιουργήστε μια ομάδα αγοραστών ΔΑΣΜΟΣ και χρησιμοποιήστε σε κάθε στοιχείο για να καθορίσετε μια πρόσθετη τιμή που χρησιμοποιείται στους υπολογισμούς αξίας δασμού.Εάν καμία ομάδα δεν διευκρινίζεται ή ένα στοιχείο προϊόντων δεν περιέχει αυτήν την ομάδα αγοραστών,η τιμή προεπιλογής χρησιμοποιείται.',
	'PHPSHOP_SHIPPING_METHOD_DHL_ADDITIONAL_PROTECTION' => 'Πρόσθετος τύπος προστασίας',
	'PHPSHOP_SHIPPING_METHOD_DHL_ADDITIONAL_PROTECTION_TOOLTIP' => 'Επιλέξτε μια μορφή πρόσθετης προστασίας (ασφάλεια) ή καμίας',
	'PHPSHOP_SHIPPING_METHOD_DHL_ASSET_PROTECTION' => 'Προστασία προτερημάτων',
	'PHPSHOP_SHIPPING_METHOD_DHL_NOT_REQUIRED' => 'Μη αναγκαίο',
	'PHPSHOP_SHIPPING_METHOD_DHL_INSURANCE_SHOPPER_GROUP' => 'Ομάδα αγοραστών για τις ασφαλιστικές τιμές',
	'PHPSHOP_SHIPPING_METHOD_DHL_INSURANCE_SHOPPER_GROUP_TOOLTIP' => 'Δημιουργήστε μια ομάδα αγοραστών ΑΣΦΑΛΕΙΑ και χρησιμοποιήστε σε κάθε στοιχείο για να καθορίσετε μια πρόσθετη τιμή που χρησιμοποιείται στους υπολογισμούς ασφαλιστικής αξίας.Εάν καμία ομάδα δεν διευκρινίζεται ή ένα στοιχείο προϊόντων δεν περιέχει αυτήν την ομάδα αγοραστών,η τιμή προεπιλογής χρησιμοποιείται.',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_INSURANCE' => 'Εσωτερικό ασφαλιστικό ποσοστό',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_INSURANCE_TOOLTIP' => 'Εσωτερικό ασφαλιστικό ποσοστό DHL - ενιαία  αξία ανά συσκευασία.',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_INSURANCE' => 'Διεθνές ασφαλιστικό ποσοστό - ανά ποσοστό κιλών',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_INSURANCE_TOOLTIP' => 'Διεθνές ασφαλιστικό ποσοστό DHL  - ανά ποσοστό κιλών.',
	'PHPSHOP_SHIPPING_METHOD_DHL_HANDLING_FEE' => 'Αμοιβή χειρισμού',
	'PHPSHOP_SHIPPING_METHOD_DHL_HANDLING_FEE_TOOLTIP' => 'Αμοιβή χειρισμού για να προσθέσει σε όλες τις αποστολές.',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_HISTORY' => 'Ιστορία',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_NO_DATA' => 'Κανένα στοιχείο παρακολούθησης.',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_NUMBER' => 'Αριθμός παρακολούθησης',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_PACKAGE' => 'Τύπος συσκευασίας',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_SERVICE' => 'Τύπος υπηρεσιών',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_SENDER' => 'Αποστολέας',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_RECEIVER' => 'Παραλήπτης',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_PICKUP' => 'Παραλαβή',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_DELIVERY' => 'Παράδοση',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_DATE' => 'Ημερομηνία',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_TIME' => 'Χρόνος',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LOCATION' => 'Θέση',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_EST_DEL' => 'Κατα εκτίμηση παράδοση',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_SIGNATORY' => 'Υπογράφων',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_SIGNATURE_LEGEND' => 'Ο κατάλογος μπορεί να χρησιμοποιηθεί για να αποκρυπτογραφήσει τους κώδικες παράδοσης (εάν παρουσιάζονται) :',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_LD' => 'LD Τοπικά παραδοθείς',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_FD' => 'FD Μπροστινή πόρτα',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_SD' => 'SD Δευτερεύουσα πόρτα',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_BD' => 'BD Πίσω πόρτα',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_GAR' => 'GAR Γκαράζ',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_LOF' => 'LOF Επιστολή στο σταθμό',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_LPN' => 'LPN υπογεγραμμένη ή αποπειραθείσα ειδοποίηση παράδοσης',
	'FORGOT_YOUR_USERNAME' => 'Υπενθύμιση Ονόματος Χρήστη',
	'EMAIL_FRIEND' => 'Προτείνετε το προϊόν σε φίλο',
	'EMAIL_FRIEND_ADDR' => 'Το e-mail του φίλου σας:',
	'EMAIL_YOUR_NAME' => 'Το όνομα σας:',
	'EMAIL_YOUR_MAIL' => 'Το Το e-mail σας:',
	'VM_CART_NOTIFY' => 'Μείνετε ενήμεροι!',
	'CMN_PUBLISH' => 'Δημοσιευμένο',
	'CMN_UNPUBLISH' => 'Αδημοσίευτο',
	'CMN_PLEASESELECT_PUBLISH' => 'Επιλέξτε από την λίστα για δημοσίευση',
	'CMN_PLEASESELECT_UNPUBLISH' => 'Επιλέξτε από την λίστα για αποδημοσίευση',
	'CMN_PLEASESELECT_DELETE' => 'Επιλέξτε από την λίστα για διαγραφή',
	'CMN_PLEASESELECT_TO' => 'Επιλέξτε από την λίστα list to',
	'CMN_CONFIRM_DELETE_ITEMS' => 'Είστε βέβαιος/α ότι θέλετε να διαγράψετε αυτά τα στοιχεία;',
	'NO_RESTRICTION' => 'Κανένας περιορισμός',
	'CMN_ORDER_UP' => 'Μετακίνησε πάνω',
	'CMN_ORDER_DOWN' => 'Μετακίνησε κάτω',
	'PRODUCT_WAITING_LIST_EMAIL_SUBJECT' => '%s παραλήφθηκε!',
	'PRODUCT_WAITING_LIST_EMAIL_TEXT' => 'Σας ευχαριστούμε για την υπομονή σας!

Το %s  είναι διαθέσιμο και μπορείτε να το προμηθευτείτε εδώ (link):
%s

 Αυτό είναι το μοναδικό μήνυμα που θα λάβετε για αυτό το προϊόν.',
	'PHPSHOP_CART_GOTO_WAITING_LIST' => 'Παρακαλώ περιμένετε.Στην επόμενη σελίδα μπορείτε να υποβάλετε το αίτημα ενημέρωσης.',
	'PHPSHOP_ADMIN_CFG_PAYMENT_ORDERSTATUS_SUCC' => 'Κατάσταση παραγγελίας για τις επιτυχείς συναλλαγές',
	'PHPSHOP_ADMIN_CFG_PAYMENT_ORDERSTATUS_SUCC_EXPLAIN' => 'Επιλέξτε την κατάσταση παραγγελίας στην οποία η πραγματική παραγγελία τίθεται,εάν η συναλλαγή πληρωμής ήταν επιτυχής. 
Εάν χρησιμοποίητε  τις επιλογές πώλησης με download: επιλέξτε τη θέση που επιτρέπει download (ο πελάτης ειδοποιείται αμέσως για download μέσω του ηλεκτρονικού ταχυδρομείου).',
	'PHPSHOP_ADMIN_CFG_PAYMENT_ORDERSTATUS_FAIL' => 'Κατάσταση παραγγελίας για τις μη επιτυχείς συναλλαγές',
	'PHPSHOP_ADMIN_CFG_PAYMENT_ORDERSTATUS_FAIL_EXPLAIN' => 'Κατάσταση παραγγελίας για τις μη επιτυχείς συναλλαγές.',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_RESPCODES' => 'Παρουσίαση κωδικών απάντησης για τις αποτυχημένες συναλλαγές;',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_RESPCODES_EXPLAIN' => 'Εάν θέσeτε ΝΑΙ έπειτα ο πελάτης θα δει toυς κώδικες συναλλαγής Authorize.net (Αυτό μπορεί να είναι χρήσιμο για την ανίχνευση προβλημάτων
Για περαιτέρω λεπτομέρειες δείτε <a href="http://www.authorize.net/support/AIM_guide.pdf">Authorize.net Advanced Integration Method (AIM) Implementation Guide</a>',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_EMAIL_MERCHANT' => 'Επιβεβαίωση ηλεκτρονικού ταχυδρομείου στον έμπορο;',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_EMAIL_MERCHANT_EXPLAIN' => 'Να στείλω το αντίγραφο του ηλεκτρονικού ταχυδρομείου επιβεβαίωσης πελατών στον έμπορο; Εάν ναι  ένα μήνυμα θα σταλεί στην εμπορική διεύθυνση καθώς επίσης και τη διεύθυνση που διαμορφώνονται στην εμπορική επαφή.
<em> Σημείωση: αυτό το ταχυδρομείο στέλνεται από την πύλη του Authorize.net και είναι ανεξάρτητο από οποιοδήποτε ηλεκτρονικό ταχυδρομείο που στέλνεται απο το VirtueMart</em>',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_EMAIL_CUSTOMER' => 'Επιβεβαίωση ηλεκτρονικού ταχυδρομείου στον πελάτη;',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_EMAIL_CUSTOMER_EXPLAIN' => '
Να στείλω το αντίγραφο του ηλεκτρονικού ταχυδρομείου επιβεβαίωσης στον πελάτη;
<em> Σημείωση: αυτό το ταχυδρομείο στέλνεται από την πύλη του Authorize.net </em> ',
	'PHPSHOP_ADMIN_CFG_PFP_VENDOR' => 'Είσοδος Εμπόρων/Προμηθευτών',
	'PHPSHOP_ADMIN_CFG_PFP_VENDOR_EXPLAIN' => 'Το όνομα σύνδεσής σας',
	'PHPSHOP_ADMIN_CFG_PFP_USER' => 'Όνομα χρήστη',
	'PHPSHOP_ADMIN_CFG_PFP_USER_EXPLAIN' => 'Όνομα χρήστη',
	'PHPSHOP_ADMIN_CFG_PFP_PASSWORD' => 'Κωδικός πρόσβασης',
	'PHPSHOP_ADMIN_CFG_PFP_PASSWORD_SETCHANGE' => 'Ορίστε/αλλάξτε τον κωδικό πρόσβασης ',
	'PHPSHOP_ADMIN_CFG_ECHECK_USERNAME' => 'ID Σύνδεσης στο eCheck.net',
	'PHPSHOP_ADMIN_CFG_ECHECK_USERNAME_EXPLAIN' => 'Το ID Σύνδεσης σας στο eCheck.Net',
	'PHPSHOP_ADMIN_CFG_ECHECK_KEY' => 'Κλειδί συναλλαγής eCheck.net',
	'PHPSHOP_ADMIN_CFG_ECHECK_KEY_EXPLAIN' => 'Κλειδί συναλλαγής eCheck.net',
	'PHPSHOP_ADMIN_CFG_ECHECK_AUTENTICATIONTYPE' => 'Τύπος Authentication',
	'PHPSHOP_ADMIN_CFG_ECHECK_AUTENTICATIONTYPE_EXPLAIN' => 'Τύπος authentication του eCheck.Net.',
	'PHPSHOP_ADMIN_CFG_ECHECK_TRANSACTIONTYPE' => 'Τύπος συναλλαγής eCheck.net',
	'PHPSHOP_ADMIN_CFG_ECHECK_TRANSACTIONTYPE_EXPLAIN' => 'Τύπος συναλλαγής με το eCheck.Net.',
	'PHPSHOP_ADMIN_CFG_EWAY_CUSTID' => 'ID Πελάτη eWay',
	'PHPSHOP_ADMIN_CFG_EWAY_CUSTID_EXPLAIN' => 'Η ταυτότητα πελατών που λάβατε από το eWay.',
	'PHPSHOP_ADMIN_CFG_NOCHEX_EMAIL' => 'NoChex E-mail',
	'PHPSHOP_ADMIN_CFG_NOCHEX_EMAIL_EXPLAIN' => 'Το e-mail σας για τις πληρωμές NoChex σας.',
	'PHPSHOP_ADMIN_CFG_PN_LOGIN' => 'PayMeNow ID',
	'PHPSHOP_ADMIN_CFG_PN_LOGIN_EXPLAIN' => 'Ταυτότητα πελατών PayMeNow',
	'PHPSHOP_ADMIN_CFG_PAYPAL_ONLYVERIFIED' => 'Να Δεχτεί μόνο τους ελεγχμένους αγοραστές;',
	'PHPSHOP_ADMIN_CFG_PAYPAL_ONLYVERIFIED_EXPLAIN' => 'Εδώ μπορείτε να επιλέξετε εάν θέλετε μόνο να δεχτείτε τις πληρωμές από τους αγοραστές με
<strong>ελεγμένο</strong>λογαριασμό PayPal (όταν ένας λογαριασμός δεν ελέγχεται,το PayPal μεταφέρει τα κεφάλαια,αλλά δεν εγγυώνται πλήρως την ισχύ της πώλησης).',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_LOGIN' => 'Ταυτότητα πωλητών/προμηθευτών 2Checkout.com',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_LOGIN_EXPLAIN' => 'Η ταυτότητα σας του 2Checkout.com',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_SECRETWORD' => 'Μυστική λέξη για το 2Checkout.com',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_SECRETWORD_EXPLAIN' => 'Μυστική λέξη για το 2Checkout.com.',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_MERCHANT_NOTIF' => 'Εμπορικές ανακοινώσεις',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_MERCHANT_NOTIF_EXPLAIN' => 'Να επιτρέπεται στο 2CheckOut να στείλει μήνυμα με το ηλεκτρονικό ταχυδρομείο μια παραλαβή στον ιδιοκτήτη καταστημάτων;',
	'PHPSHOP_EPAY_FRAUD' => 'Έχουν γίνει %s πληρωμή (ες) με αυτήν την κάρτα στις τελευταίες 24 ώρες',
	'PHPSHOP_EPAY_PAYMENT_DATE' => 'Ημερομηνία της πληρωμής: ',
	'PHPSHOP_EPAY_PAYMENT_FEE' => 'Η αμοιβή έχει χρεωθεί την πληρωμή: ',
	'PHPSHOP_EPAY_PAYMENT_CALLBACK' => '<b>Οι πληροφορίες πληρωμής ενημερώθηκαν χρησιμοποιώντας την επανάκληση!</b>',
	'PHPSHOP_EPAY_PAYMENT_ORDER_COMMENT' => 'Η πληρωμή εξουσιοδοτήθηκε απο το ePay/PBS. \n Η πληρωμή έχει λάβει τον ακόλουθο αριθμό συναλλαγής ePay: ',
	'PHPSHOP_EPAY_PAYMENT_RETRY_PAYMENT' => '<br/><br><br><b>Καντε κλικ στη σύνδεση για να προσπαθήσετε πάλι:</b><br>',
	'PHPSHOP_EPAY_PAYMENT_ORDER_NOT_FOUND' => '(Η παραγγελία δεν βρέθηκε - εσωτερικό λάθος) ',
	'PHPSHOP_EPAY_PAYMENT_MD5_CHECK_FAILURE' => '(Λάθος MD5 στην επικύρωση - εσωτερικό λάθος - λάθος διαμόρφωσης)',
	'PHPSHOP_EPAY_PAYMENT_DECLINE' => 'Η πληρωμή δεν εξουσιοδοτήθηκε απο ePay/PBS.Η πληρωμή απορρίφθηκε λόγω του ακόλουθου κώδικα λάθους: ',
	'PHPSHOP_EPAY_PAYMENT_LOG_TID' => 'Η πληρωμή εχει τον αριθμό συναλλαγής: ',
	'PHPSHOP_EPAY_PAYMENT_EPAY_LINK' => 'Η πληρωμή μπορεί να υποβληθεί σε επεξεργασία: <a href="https://ssl.ditonlinebetalingssystem.dk/admin" target="_new">www.epay.dk</a>',
	'VM_CHECKOUT_EPAY_PAYMENT_CHECKOUT_HEADER' => 'Έχετε επιβεβαιώσει την παραγγελία και πρέπει τώρα να επιλέξετε πώς πρέπει να πληρωθεί.Αυτό γίνεται με την επιλογή της μεθόδου πληρωμής κατωτέρω.Η πληρωμή θα γίνει σε ένα ασφαλές παράθυρο SSL του ePay (<a href="http://www.epay.dk" target="_new">www.epay.dk</a>).<br><br>',
	'VM_CHECKOUT_EPAY_PAYMENT_CHECKOUT_FOOTER' => 'Εάν το τυποποιημένο παράθυρο πληρωμής δεν ανοίγει αυτόματα,κάντε κλικ στο κουμπί για να το ενεργοποιήσετε. Ειδοποίηση! Εάν χρησιμοποιείτε pop up blocker,πρέπει να πιέσετε το πλήκτρο CTRL πατώντας το κουμπί',
	'VM_CHECKOUT_EPAY_BUTTON_OPEN_WINDOW' => 'Άνοιξε Παράθυρο Πληρωμής',
	'PHPSHOP_ADMIN_CFG_EPAY_MERCHANTNUMBER' => 'Εμπορικό ID PBS',
	'PHPSHOP_ADMIN_CFG_EPAY_MERCHANTNUMBER_EXPLAIN' => 'Το Εμπορικό ID που λάβατε από PBS.Για σκοπό δοκιμής μια εμπορική ταυτότητα δοκιμής μπορεί να ληφθεί με επαφή στο ePay (sales@epay.dk)',
	'PHPSHOP_ADMIN_CFG_EPAY_CARDTYPES' => 'Τύποι καρτών',
	'PHPSHOP_ADMIN_CFG_EPAY_CARDTYPES_EXPLAIN' => 'Επιλέξτε τους τύπους καρτών για να παρουσιάσετε τον πελάτη',
	'PHPSHOP_ADMIN_CFG_EPAY_LANGUAGE' => 'Γλώσσα',
	'PHPSHOP_ADMIN_CFG_EPAY_LANGUAGE_EXPLAIN' => 'Επιλέξτε γλώσσα.',
	'PHPSHOP_ADMIN_CFG_EPAY_INSTANT_CAPTURE' => 'Στιγμιαία λήψη',
	'PHPSHOP_ADMIN_CFG_EPAY_INSTANT_CAPTURE_EXPLAIN' => 'Για να λαμβάνετε άμεσα την πληρωμή.',
	'PHPSHOP_ADMIN_CFG_EPAY_GROUP' => 'Ομάδα',
	'PHPSHOP_ADMIN_CFG_EPAY_GROUP_EXPLAIN' => 'Για να κινήσει την πληρωμή προς μια διευκρινισμένη ομάδα.Εάν όχι αφήστε αυτόν τον τομέα κενό.',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_TYPE_1' => 'MD5 στη σελίδα αποδοχής',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_TYPE_2' => 'MD5 και στα στοιχεία που διαβιβάζονται στο ePay και στη σελίδα αποδοχής',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_TYPE_EXPLAIN' => 'Η χρήση του MD5. 0 θέτει εκτός λειτουργίας το MD5. 1 οι χρήσεις MD5 δέχονται τη σελίδα σε αυτό το κατάστημα. 2 δημιουργούν ένα MD5 γραμματόσημο,το οποίο στέλνει στο ePay με τα στοιχεία συναλλαγής.Εάν αυτό το γραμματόσημο δεν ταιριάζει με του ePay θα απορριφθεί η πληρωμή.',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_KEY' => 'Κλειδί MD5',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_KEY_EXPLAIN' => 'Εάν το MD5 επιτρέπεται επάνω από το ασφαλές κλειδί για MD5 σφράγιση καθορίζεται εδώ (το ίδιο μυστικό κλειδί πρέπει να καθοριστεί στην ePay). Εάν το MD5 είναι εκτός λειτουργίας αυτός ο τομέας πρέπει να είναι κενός.',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHSMS' => 'Auth SMS',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHSMS_EXPLAIN' => 'Εισάγετε ένα κινητό για να λάβετε εδώ ένα μήνυμα SMS όταν ελέγχεται η πληρωμή από ePay. <b>Ενημερωθείτε για το κόστος SMS!</b>',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHEMAIL' => 'Auth EMAIL',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHEMAIL_EXPLAIN' => 'Εισάγετε ένα ή περισσότερα  e-mail για να λάβετε ένα e-mail όταν ελέγχεται η πληρωμή από ePay.Για πολλούς παραλήπτες χωρίστε τις διευθύνσεις ηλεκτρονικού ταχυδρομείου με (;).',
	'PHPSHOP_ADMIN_CFG_EPAY_WINDOWSTATE' => 'Κατάσταση παραθύρων ',
	'PHPSHOP_ADMIN_CFG_EPAY_WINDOWSTATE_1' => 'Popup',
	'PHPSHOP_ADMIN_CFG_EPAY_WINDOWSTATE_2' => 'Ίδιο παράθυρο (πλήρης οθόνη)',
	'PHPSHOP_ADMIN_CFG_EPAY_3DSECURE' => '3D secure',
	'PHPSHOP_ADMIN_CFG_EPAY_3DSECURE_1' => 'Λειτουργία 3D secure ενεργοποιημένη',
	'PHPSHOP_ADMIN_CFG_EPAY_3DSECURE_2' => 'Μόνο οι πληρωμές μέσω 3D επιτρέπονται',
	'PHPSHOP_ADMIN_CFG_EPAY_3DSECURE_3' => 'Οι 3D ασφαλείς πληρωμές είναι εκτός λειτουργίας',
	'PHPSHOP_ADMIN_CFG_EPAY_CALLBACK' => 'Ενεργοποιήστε την επανάκληση',
	'PHPSHOP_ADMIN_CFG_EPAY_CALLBACK_0' => 'Η επανάκληση είναι εκτός λειτουργίας',
	'PHPSHOP_ADMIN_CFG_EPAY_CALLBACK_1' => 'Επιτρέψτε την επανάκληση',
	'PHPSHOP_ADMIN_CFG_EPAY_CALLBACK_EXPLAIN' => 'Η επανάκληση χρησιμοποιείται για να αποφύγει την αναπροσαρμογή του συστήματος αγορών εάν ο χρήστης κλείσει τη μηχανή αναζήτησης προτού να τον ανακατευθύνετε στο κατάστημα από το ePay. <b>(Προτείνεται για να επιτρέπεται να ενημερώσει το κατάστημα ακόμα κι αν ο πελάτης κατά τη διάρκεια της διαδικασίας πληρωμής κλείνει τη μηχανή αναζήτησης)</b>',
	'PHPSHOP_ADMIN_CFG_EPAY_ADDFEE' => 'Αμοιβή συναλλαγής',
	'PHPSHOP_ADMIN_CFG_EPAY_ADDFEE_0' => 'Ο πελάτης δεν πληρώνει την αμοιβή συναλλαγής',
	'PHPSHOP_ADMIN_CFG_EPAY_ADDFEE_1' => 'Ο πελάτης πληρώνει την αμοιβή συναλλαγής',
	'PHPSHOP_ADMIN_CFG_EPAY_ADDFEE_EXPLAIN' => 'Συχνά είναι απαραίτητο να τεθεί η αμοιβή συναλλαγής στον πελάτη.Το ePay θα υπολογίσει την αμοιβή και θα την βάλει στην πληρωμή προτού να γίνει η πληρωμή.',
	'PHPSHOP_ADMIN_CFG_EPAY_SUBSCRIPTION' => 'Συνδρομή',
	'PHPSHOP_ADMIN_CFG_EPAY_SUBSCRIPTION_0' => 'Θέστε εκτός λειτουργίας τη συνδρομή',
	'PHPSHOP_ADMIN_CFG_EPAY_SUBSCRIPTION_1' => 'Όλες οι πληρωμές δημιουργούνται ως επαναλαμβανόμενες συνδρομές',
	'PHPSHOP_ADMIN_CFG_EPAY_SUBSCRIPTION_EXPLAIN' => 'Οι συνδρομές που χρησιμοποιούνται για τη δημιουργία των πληρωμών που μπορούν να εγκριθούν περισσότερο από μία φορά (επαναλαμβανόμενες πληρωμές)',
	'PHPSHOP_ADMIN_CFG_WORLDPAY_INSTID' => 'ID Εγκατάστασης WorldPay',
	'PHPSHOP_ADMIN_CFG_WORLDPAY_INSTID_EXPLAIN' => 'Το "ID Εγκατάστασης" που έχετε από το WorldPay.',
	'PHPSHOP_ADMIN_CFG_PBS_MERCHANT_ID' => 'Εμπορική ταυτότητα PBS',
	'PHPSHOP_ADMIN_CFG_PBS_MERCHANT_ID_EXPLAIN' => 'Η εμπορική ταυτότητα που έχετε από το PBS',
	'PHPSHOP_ADMIN_CFG_PBD_GATEWAY' => 'Πύλη πληρωμής',
	'PHPSHOP_ADMIN_CFG_PBD_GATEWAY_EXPLAIN' => 'Η πύλη πληρωμής που χρησιμοποιείτε για τις συναλλαγές πληρωμής.',
	'PHPSHOP_ADMIN_CFG_PBS_SHOP_ID' => 'Ταυτότητα καταστημάτων',
	'PHPSHOP_ADMIN_CFG_PBS_SHOP_ID_EXPLAIN' => 'Η ταυτότητα καταστημάτων (μόνο εάν χρησιμοποιείτε την πύλη πληρωμής Webhosting.dk, Danhost.dk ή Wannafind.dk)',
	'PHPSHOP_MENU' => 'Μενού',
	'PHPSHOP_SELECT_CATEGORY' => 'Επιλέξτε μια κατηγορία:',
	'PHPSHOP_RANDOM' => 'Τυχαία Προϊόντα',
	'VM_ORDER_EXPORT_MODULE_FORM_LBL' => 'Module εξαγωγής παραγγελίας',
	'VM_ORDER_EXPORT_MODULE_FORM_NAME' => 'Όνομα του Module εξαγωγής',
	'VM_ORDER_EXPORT_MODULE_FORM_DESC' => 'Περιγραφή',
	'VM_ORDER_EXPORT_CLASS_NAME' => 'Όνομα Κατηγορίας Module εξαγωγής',
	'VM_ORDER_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_olsi</strong>) :<br />
default: ps_xmlexport<br />
<i>Κενό εάν δεν είστε βέβαιοι!</i>',
	'VM_ORDER_EXPORT_CONFIG' => 'Ρύθμιση εξαγωγής παραγγελίας',
	'VM_ORDER_EXPORT_CONFIG_TIP' => 'Εδώ μπορείτε να διαμορφώσετε την εξαγωγή παραγγελίας.
		Πρέπει να είναι έγκυρος κώδικας PHP!',
	'VM_REGISTER_BEFORE' => 'Εγγραφείτε για να χρησιμοποιήσετε την δυνατότητα αυτή',
	'VM_RECOMMEND_MESSAGE_PREFACE' => 'Η ακόλουθη σύσταση από "%s" του ιστοχώρου σας έχει σταλεί απο %s (%s).

_____________________',
	'VM_CFG_BROWSE_STYLE' => 'Επιλέξτε ένα στυλ λιστών προϊόντων',
	'VM_CFG_BROWSE_STYLE_TIP' => 'Αλλάξτε το γενικό στυλ του καταλόγου προϊόντων με αυτήν την ρύθμιση.<br />Το tableless σχεδιάγραμμα είναι τέλειο για το tableless XHTML/CSS βασισμένο site σας.Δοκιμάστε τους άλλους αυτούς εάν το σχεδιάγραμμά δεν σας ικανοποιεί.',
	'PHPSHOP_CHECKOUT_MSG_2' => 'ΠΑΡΑΚΑΛΩ ΕΠΙΛΕΞΤΕ ΜΙΑ ΔΙΕΥΘΥΝΣΗ ΑΠΟΣΤΟΛΗΣ!',
	'PHPSHOP_CHECKOUT_MSG_3' => 'ΠΑΡΑΚΑΛΩ ΕΠΙΛΕΞΤΕ ΜΙΑ ΜΕΘΟΔΟ ΑΠΟΣΤΟΛΗΣ!',
	'PHPSHOP_CHECKOUT_MSG_99' => 'ΠΑΡΑΚΑΛΩ,ΕΛΕΓΞΤΕ ΤΑ ΣΤΟΙΧΕΙΑ ΚΑΙ ΕΠΙΒΕΒΑΙΩΣΤΕ ΤΗΝ ΠΑΡΑΓΓΕΛΙΑ ΣΑΣ!',
	'PROMPT_PASSWORD' => 'Υπενθύμιση κωδικού',
	'REGISTER_TITLE' => 'Εγγραφή',
	'VM_LATEST_PRODUCT' => 'ΠΡΟΣΦΑΤΑ ΠΡΟΪΟΝTA',
	'VM_CART_NOSTOCK' => 'Εκτός Stock',
	'CSVIMPROVED_TITLE' => 'Βελτιωμένο CSV- τμήμα εισαγωγής/εξαγωγής',
	'CSVIMPROVED_NEEDINSTALL' => 'Προκειμένου να χρησιμοποιήσετε CSV εισαγωγή/εξαγωγή  πρέπει να εγκαταστήσετε το συστατικό "CSVImproved"',
	'VM_RECOVER_CART' => 'Ανακτήστε το καλάθι σας',
	'VM_CART_PRODUCT_NOTEXIST' => 'Το επιλεγμένο προϊόν δεν υπάρχει.',
	'VM_COOKIE_MISSING' => 'Λείπει το Cookie',
	'EMAIL_ERR_ONLYONE' => 'Δεν μπορείτε να εισαγάγετε περισσότερες από μια διευθύνσεις ηλεκτρονικού ταχυδρομείου',
	'VM_ENQUIRY_TEMPLATE_NOT_FOUND' => 'Δεν βρίσκεται Αρχείο προτύπων έρευνας!',
	'VM_PRODUCT_MISSING_SKU' => 'Ένας κωδικός SKU πρέπει να εισαχθεί.',
	'VM_PRODUCT_MISSING_NAME' => 'Ένα όνομα προϊόντων πρέπει να εισαχθεί.',
	'VM_PRODUCT_MISSING_AVAILDATE' => 'Πρέπει να παρέχετε μια ημερομηνία διαθεσιμότητας.',
	'VM_PRODUCT_MISSING_CATEGORY' => 'Μια κατηγορία πρέπει να επιλεγεί.',
	'VM_PRODUCT_IMAGEURL_MUSTBEGIN' => 'Πρέπει να αρχίσετε με http.',
	'VM_PRODUCT_SPECIFY_DELETE' => 'Παρακαλώ διευκρινίστε ένα προϊόν για διαγραφή!',
	'VM_PRODUCT_CLONED' => 'Το προϊόν κλωνοποιήθηκε επιτυχώς.',
	'VM_PRODUCT_ADDED' => 'Το προϊόν προστέθηκε επιτυχώς.',
	'VM_PRODUCT_IMGDEL_FAILED' => 'Αποτυχία διαγραφής των εικόνων!',
	'VM_PRODUCT_UPDATED' => 'Το προϊόν ενημερώθηκε επιτυχώς',
	'VM_PRODUCT_ADDING_FAILED' => 'Σφάλμα κατά την προσπάθεια να προσθέσω το προϊόν!',
	'VM_PRODUCT_MOVE_NOTFOUND' => 'Κανένα προϊόν δεν βρέθηκε για να μετακινηθεί.',
	'VM_PRODUCT_MUSTSELECT_ONE_CAT' => 'Πρέπει να επιλέξετε ΜΙΑ κατηγορία!',
	'VM_PRODUCT_DELETED' => 'Διαγραμμένο ID προϊόντος: {product_id}',
	'VM_PRODUCT_ID_MISSING' => 'To ID προϊόντος λείπει.',
	'VM_PRODUCT_PRICE_MISSING' => 'Μια τιμή πρέπει να εισαχθεί.',
	'VM_PRODUCT_PRICE_CURRENCY_MISSING' => 'Ένα νόμισμα πρέπει να εισαχθεί.',
	'VM_PRODUCT_PRICE_QEND_LESS' => 'Το εισαγμένο τέλος ποσότητας είναι λιγότερο από την έναρξη ποσότητας.',
	'VM_PRODUCT_PRICE_ALREADY' => 'Το προϊόν έχει ήδη μια αξία της επιλεγμένης ομάδας αγοραστών και της διευκρινισμένης σειράς ποσότητας.',
	'VM_PRODUCT_PRICE_NOTENTERED' => 'Δεν έχετε εισαγάγει καμία τιμή.',
	'VM_PRODUCT_PRICE_ADDED' => 'Η τιμή νέων προϊόντων έχει προστεθεί.',
	'VM_PRODUCT_PRICE_ADDING_FAILED' => 'Η τιμή δεν μπορούσε να προστεθεί σε αυτό το προϊόν.',
	'VM_PRODUCT_PRICE_UPDATED' => 'Η τιμή προϊόντων έχει ενημερωθεί.',
	'VM_PRODUCT_PRICE_UPDATING_FAILED' => 'Η τιμή δεν μπόρεσε να ενημερωθεί.',
	'VM_PRODUCT_PRICE_DELETED' => 'Η τιμή προϊόντων έχει διαγραφεί.',
	'VM_ORDER_DELETE_ERR_ID' => 'Αδύνατο να διαγραφεί χωρίς το ID παραγγελίας.',
	'VM_ORDERSTATUS_CHANGE_ERR_CORE' => 'Αυτός ο κωδικός κατάστασης δεν μπορεί να αλλάξει,είναι ένας από τους κώδικες θέσης πυρήνων.',
	'VM_ORDERSTATUS_DELETE_ERR_SELECT' => 'Επιλέξτε έναν τύπο κατάστασης παραγγελίας για διαγραφή.',
	'VM_ORDERSTATUS_DELETE_ERR_CORE' => 'Ο τύπος κατάστασης παραγγελίας δεν μπορεί να διαγραφεί,είναι ένας από τους κώδικες θέσης πυρήνων.',
	'VM_ORDERSTATUS_DELETE_ERR_STILL' => 'Ο τύπος κατάστασης παραγγελίας δεν μπορεί να διαγραφεί,διότι περιέχει παραγγελίες.',
	'VM_ORDERSTATUS_ADDED' => 'Ο τύπος κατάστασης παραγγελίας έχει προστεθεί.',
	'VM_ORDERSTATUS_ADD_FAILED' => 'Η προσθήκη του τύπου κατάστασης παραγγελίας έχει αποτύχει.',
	'VM_ORDERSTATUS_UPDATED' => 'Ο τύπος κατάστασης παραγγελίας έχει ενημερωθεί.',
	'VM_PAYMENTMETHOD_ERR_NAME' => 'Παρακαλώ εισάγετε ένα όνομα μεθόδου πληρωμής.',
	'VM_PAYMENTMETHOD_ERR_CODE' => 'Παρακαλώ εισάγετε έναν κωδικό μεθόδου πληρωμής.',
	'VM_PAYMENTMETHOD_UPDATE_SELECT' => 'Παρακαλώ επιλέξτε μια μέθοδο πληρωμής για ενημέρωση.',
	'VM_PAYMENTMETHOD_DELETE_SELECT' => 'Παρακαλώ επιλέξτε μια μέθοδο πληρωμής για διαγραφή.',
	'VM_PAYMENTMETHOD_CLASS_NOT_EXIST' => 'Η επιλεγμένη κατηγορία πληρωμής δεν μπορεί να εμφανιστεί επειδή δεν υπάρχει .',
	'VM_USER_ERR_MISSINGVALUE' => 'Ελλιπής τιμή πεδίου "%s".',
	'VM_USER_ERR_GROUP' => 'Πρέπει να διορίσετε το χρήστη σε μια ομάδα.',
	'VM_USER_ADD_ERR_NOPERMS' => 'Δεν έχετε καμία άδεια να προσθέσετε έναν χρήστη εκείνου του τύπου χρηστών: %s.',
	'VM_USER_DELETE_SELECT' => 'Παρακαλώ επιλέξτε έναν χρήστη για να διαγράψετε.',
	'VM_USER_DELETE_ERR_NOPERMS' => 'Δεν έχετε άδεια να διαγράψετε έναν χρήστη εκείνου του τύπου χρηστών: %s.',
	'VM_USER_DELETE_ERR_YOURSELF' => 'Πολύ αστείο,αλλά δεν μπορείτε να διαγραφείτε!',
	'VM_USER_ADD_FAILED' => 'Ο νέος χρήστης δεν μπορούσε να προστεθεί',
	'VM_USER_ADDED' => 'Ο χρήστης έχει προστεθεί.',
	'VM_USER_UPDATED' => 'Οι λεπτομέρειες χρήστη έχουν ενημερωθεί.',
	'VM_USER_ERR_ONLYSUPERADMIN' => 'Δεν μπορείτε να αλλάξετε αυτήν την ομάδα χρηστών δεδομένου ότι ο χρήστης είναι ο μόνος ενεργός Διαχειριστής του site.',
	'VM_USER_DELETE_ERR_SUPERADMIN' => 'Δεν μπορείτε να διαγράψετε ένα ΥπερΔιαχειριστή',
	'VM_USER_DELETE_ERR_ADMIN' => 'Δεν μπορείτε να διαγράψετε ένα Διαχειριστή.Μόνο ο Υπερδιαχειριστής έχει την δυνατότητα αυτή!',
	'MUST_NOT_USE' => 'ΔΕΝ ΠΡΕΠΕΙ ΝΑ ΧΡΗΣΙΜΟΠΟΙΗΣΕΤΕ  ΑΥΤΗ ΤΗ ΛΕΙΤΟΥΡΓΙΑ!!!',
	'VM_USERADDRESS_ERR_LABEL_EXISTS' => 'Η ετικέτα διεύθυνσης υπάρχει ήδη.',
	'VM_USERADDRESS_DELETE_SELECT' => 'Επιλέξτε διεύθυνση χρήστη για διαγραφή.',
	'VM_USERADDRESS_ADDED' => 'Η διεύθυνση προστέθηκε στο χρήστη.',
	'VM_USERADDRESS_ADD_FAILED' => 'Σφάλμα κατά την προσθήκη διεύθυνσης.',
	'VM_USERADDRESS_UPDATED' => 'Η διεύθυνση ενημερώθηκε.',
	'VM_USERADDRESS_UPDATED_FAILED' => 'Σφάλμα κατά την ενημέρωση διεύθυνσης.',
	'VM_USERFIELD_ERR_ALREADY' => 'Το όνομα πεδίου %s χρησιμοποιείται!',
	'VM_USERFIELD_SAVED' => 'Το πεδίο αποθηκεύτηκε.',
	'VM_USERFIELD_DELETE_SELECT' => 'Επιλέξτε πεδίο για διαγραφή.',
	'VM_USERFIELD_DELETE_ERR_SYSTEM' => '"%s" δεν μπορεί να διαγραφεί,γιατί είναι πεδίο συστήματος.',
	'VM_USERFIELD_DELETED' => 'Διεγραμμένο πεδίο "%s"',
	'PHPSHOP_PRODUCT_DISCOUNT_FORM_MNU' => 'Προσθήκη έκπτωσης',
	'VM_CANADAPOST_SEND_LANGUAGE_CODE' => 'EN',
	'VM_CANADAPOST_FORM_HANDLING_DATE' => 'Αναμενόμενη ημερομηνία άφιξης',
	'VM_CANADAPOST_FORM_HANDLING_LBL' => 'Δαπάνη διαχείρισης',
	'VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID' => 'Το εμπορικό σας ID για την Canada Post',
	'VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID_EXPLAIN' => 'Το εμπορικό σας ID για την Canada Post',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER' => 'Canada Post Server IP',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER_EXPLAIN' => 'Αυτή είναι η IP Address του Canada Post Server- η προεπιλογή είναι 206.191.4.228',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_PORT' => 'Canada Post Server Port',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_PORT_EXPLAIN' => 'Αυτή είναι η θύρα του Canada Post Server<br />
Η θύρα του server είναι η 30000<br />
Εάν δεν μπορείτε να χρησιμοποιήσετε αυτή την θύρα,δεν θα είστε σε θέση να χρησιμοποιήσετε αυτό το module<br />
Ελέγξτε εάν έχετε πρόσβαση στην θύρα',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX' => 'Το ποσό ομοσπονδιακού φόρου Canada Post',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX_EXPLAIN' => 'Το ποσό ομοσπονδιακού φόρου πηγαίνει εδώ',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX' => 'Επαρχιακό φορολογικό ποσό Canada Post',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX_EXPLAIN' => 'Το φορολογικό ποσό Επαρχίας πηγαίνει εδώ',
	'VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN' => 'Περιγραφή για τις ημερομηνίες άφιξης',
	'VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN_I' => 'Περιγραφή για τις ημερομηνίες άφιξης',
	'VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN' => 'Περιγραφή δαπανών',
	'VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN_I' => 'Περιγραφή για το χειρισμό των δαπανών',
	'PHPSHOP_PRODUCT_FORM_TITLE' => 'Τίτλος',
	'VM_PRODUCT_ATTRIBUTE_ERR_ATTRNAME' => 'Εισάγετε όνομα Ιδιότητας.',
	'VM_PRODUCT_ATTRIBUTE_ERR_ATTRUNIQ' => 'Εισάγετε μοναδικό όνομα Ιδιότητας.',
	'VM_PRODUCT_ATTRIBUTE_ERR_DELITEMS' => 'Δεν μπορείτε να διαγράψετε τις τελευταίες ιδιότητες ενώ το προϊόν έχει στοιχεία.Διαγράψτε όλα τα στοιχεία πρώτα.',
	'VM_PRODUCT_ATTRIBUTE_ERR_SAVING' => 'Η αποθήκευση Ιδιότητας απέτυχε.',
	'VM_PRODUCT_ATTRIBUTE_SAVED' => 'Η Ιδιότητα αποθηκεύτηκε.',
	'VM_PRODUCT_ATTRIBUTE_ERR_UPDATING' => 'Αποτυχία ενημέρωσης Ιδιότητας.',
	'VM_PRODUCT_ATTRIBUTE_UPDATED' => 'Η Ιδιότητα ενημερώθηκε.',
	'VM_CHECK_UPDATES_MNU' => 'Έλεγχος ενημερώσεων',
	'VM_PRODUCT_TYPE_ERR_NAME' => 'Εισάγετε όνομα τύπου προϊόντων.',
	'VM_PRODUCT_TYPE_DELETE_SELECT' => 'Επιλέξτε τύπο προϊόντων για διαγραφή.',
	'VM_PRODUCT_TYPE_ADD_FAILED' => 'Αποτυχία δημιουργίας πίνακα στον τύπο προϊόντων!!',
	'VM_PRODUCT_TYPE_ADDED' => 'Ο τύπος προϊόντος προστέθηκε.',
	'VM_PRODUCT_TYPE_PARAMETER_ERR_NAME' => 'Εισάγετε όνομα παραμέτρου.',
	'VM_PRODUCT_TYPE_PARAMETER_ERR_LABEL' => 'Εισάγετε ετικέτα παραμέτρου.',
	'VM_PRODUCT_TYPE_PARAMETER_ERR_VALUES' => 'Αν επιλέξετε Πολλαπλή επιλογή προσθέστε πιθανές τιμές.',
	'VM_PRODUCT_TYPE_PARAMETER_ERR_EXIST' => 'Η παράμετρος με αυτό το όνομα υπάρχει ήδη στον τύπο προϊόντων.',
	'VM_PRODUCT_TYPE_PARAMETER_DELETE_SELECT' => 'Επιλέξτε παράμετρο για διαγραφή.',
	'VM_PRODUCT_TYPE_PARAMETER_ADDING_FAILED' => 'Η προσθήκη πεδίου παραμέτρου στον πίνακα απέτυχε.',
	'VM_PRODUCT_TYPE_PARAMETER_ADDED' => 'Η παράμετρος προστέθηκε ήδη.',
	'VM_UPDATE_PACKAGE_EXISTS' => 'Ένα αρχείο με ίδιο όνομα υπάρχει ήδη.Χρήση του αρχείου:',
	'VM_UPDATE_ERR_STORE_FAILED' => 'Αποτυχία αποθήκευσης του πακέτου ενημέρωσης.Ο κατάλογος Cache πρέπει να είναι εγγράψιμος.',
	'VM_UPDATE_ERR_RETRIEVE_FAILED' => 'Αποτυχία λήψης του πακέτου ενημέρωσης στο virtuemart.net Server.Ίσως δεν υπάρχει ενημέρωση για την έκδοση σας ή υπάρχει πρόβλημα σύνδεσης δικτύου.',
	'VM_UPDATE_ERR_EXTRACT_FAILED' => 'Αποτυχία εξαγωγής περιεχομένων του πακέτου ενημέρωσης στο',
	'VM_UPDATE_ERR_PARSE_FAILED' => 'Αποτυχία ανάλυσης του XML πακέτου ενημέρωσης.',
	'VM_UPDATE_ERR_FILE_MISSING' => 'Το αρχείο %s λείπει απο το πακέτο ενημέρωσης.',
	'VM_UPDATE_ERR_DOWNLOAD' => 'Η ενημέρωση δεν μεταφορτώθηκε.',
	'VM_UPDATE_ERR_FILE_UNWRITABLE' => 'Το αρχείο %s πρέπει να είναι εγγράψιμο.',
	'VM_UPDATE_ERR_DIR_UNWRITABLE' => 'Ο κατάλογος %s πρέπει να είναι εγγράψιμος.',
	'VM_UPDATE_ERR_OVERWRITE_FAILED' => 'ΜΗ Επιτυχής αλλαγή αρχείου "%s"',
	'VM_UPDATE_FILE_OVERWROTE' => 'Επιτυχής αλλαγή αρχείου "%s"',
	'VM_UPDATE_ERR_QUERY_FAILED' => 'Το ερώτημα: "%s" δεν εκτελέστηκε επιτυχώς.Μπορεί να μην είναι κρίσιμο,αλλά φυλάξτε το μήνυμα σφάλματος για μελλοντική χρήση.',
	'VM_UPDATE_QUERY_EXECUTED' => 'Το ερώτημα "%s" εκτελέστηκε επιτυχώς',
	'VM_UPDATE_SUCCESS' => 'Η έκδοση του VirtueMart (%s) ενημερώθηκε επιτυχώς στην έκδοση %s.',
	'VM_UPDATE_ERR_NOTMATCHING' => 'Η ενημέρωση δεν ταιριάζει με την έκδοση σας του VirtueMart.',
	'VM_UPDATE_STEP_1' => 'Έλεγχος ενημερώσεων',
	'VM_UPDATE_STEP_2' => 'Σύνοψη/Εφαρμογή ενημερώσεων',
	'VM_UPDATE_STEP_3' => 'Αποτελέσματα',
	'VM_PRODUCT_TYPE_ERR_SELECT' => 'Επιλέξτε τύπο προϊόντος.',
	'VM_PRODUCT_TYPE_ERR_SELECT_PRODUCT' => 'Επιλέξτε ένα προϊόν.',
	'VM_PRODUCT_TYPE_ERR_ALREADY' => 'Το προϊόν συνδέθηκε ηδη με τον τύπο προϊόντων.',
	'VM_PRODUCT_PRODUCT_TYPE_DELETE_SELECT_PT' => 'Επιλέξτε ένα τύπο προϊόντων για διαγραφή προϊόντος απο τον τύπο προϊόντων.',
	'VM_PRODUCT_PRODUCT_TYPE_DELETE_SELECT_PR' => 'Επιλέξτε ένα προϊόν για διαγραφή απο τον τύπο προϊόντων.',
	'VM_PRODUCT_PRODUCT_TYPE_ASSIGNED' => 'Το προϊόν συνδέθηκε με τον τύπο προϊόντων.',
	'VM_WAITING_LIST_ERR_ALREADY' => 'Ενημερωθήκατε ήδη για αυτό το προϊόν.',
	'VM_WAITING_LIST_ERR_EMAIL_ENTER' => 'Δώστε ένα έγκυρο e-mail για την λίστας αναμονής.',
	'VM_WAITING_LIST_ERR_EMAIL_NOTVALID' => 'Δώστε ένα έγκυρο e-mail.',
	'VM_WAITING_LIST_ERR_PRODUCT' => 'Επιλέξτε ένα προϊόν για την λίστας αναμονής.',
	'VM_WAITING_LIST_DELETE_SELECT' => 'Επιλέξτε ένα ID λίστας αναμονής για διαγραφή.',
	'VM_WAITING_LIST_DELETE_ERR_PRODUCT' => 'Ορίστε ένα ID προϊόντος.',
	'VM_USER_GROUP_ERR_PROTECTED' => 'Η ομάδα χρηστών %s δεν μπορεί να διαγραφεί ή να τροποποιηθεί!',
	'VM_USER_GROUP_ERR_STILLUSERS' => 'Η ομάδα χρηστών %s περιέχει χρήστες και δεν μπορεί να διαγραφεί!',
	'VM_USER_GROUP_ADDED' => 'Η ομάδα χρηστών προστέθηκε.',
	'VM_USER_GROUP_UPDATED' => 'Η ομάδα χρηστών ενημερώθηκε.',
	'VM_ABSTRACTOBJECT_VALIDATE_ERR_ID' => 'Ορίστε ένα ID για επαλήθευση',
	'VM_ABSTRACTOBJECT_VALIDATE_ERR_FIELD' => 'Μια τιμή για το πεδίο "%s" λείπει.',
	'VM_ABSTRACTOBJECT_VALIDATE_NOTUNIQUE' => 'Μια εγγραφή με ίδια τιμή "%s" για "%s" υπάρχει ήδη!Καθορίστε μια άλλη!',
	'VM_ABSTRACTOBJECT_REORDER_ERR_TYPE' => 'Ο τύπος αντικείμενου προς ανακατάταξη δεν καθορίστηκε.',
	'VM_ABSTRACTOBJECT_PUBLISH_ERR_TYPE' => 'Ο τύπος αντικείμενου προς (απο) δημοσίευση δεν καθορίστηκε.',
	'VM_ABSTRACTOBJECT_TASK_OK' => '{field_name}(s) {set} Ήταν {task}.',
	'CMN_YEARS' => 'Έτη',
	'VM_SORT_ALPHA_CONFIRM' => 'Επιβεβαίωση Ταξινόμησης αλφαβητικά. ΠΡΟΣΟΧΗ! Είναι ΜΗ αναστρέψιμη!.',
	'VM_SORT_SAVE_ORDER' => 'Αποθήκευση παραγγελίας',
	'VM_SORT_ALPHA' => 'Ταξινόμηση αλφαβητικά',
	'VM_PRODUCT_DISCOUNT_ERR_AMOUNT' => 'Εισάγετε ποσόν έκπτωσης.',
	'VM_PRODUCT_DISCOUNT_ERR_TYPE' => 'Επιλέξτε τύπο έκπτωσης.',
	'VM_PRODUCT_DISCOUNT_START_END_DATE' => 'Η ημερομηνία έναρξης πρέπει να προηγείται της λήξης.',
	'VM_PRODUCT_DISCOUNT_ERR_UPDATE' => 'Επιλέξτε έκπτωση για ενημέρωση.',
	'VM_PRODUCT_DISCOUNT_ERR_DELETE' => 'Επιλέξτε έκπτωση για διαγραφή.',
	'VM_PRODUCT_DISCOUNT_ADDED' => 'Η έκπτωση προστέθηκε.',
	'VM_PRODUCT_DISCOUNT_UPDATED' => 'Η έκπτωση ενημερώθηκε.',
	'VM_PRODUCT_DISCOUNT_OVERRIDE' => 'Υπερισχύει',
	'PHPSHOP_ITEM' => 'Αντικείμενο',
	'VM_PRODUCT_CATEGORY_ERR_NAME' => 'Δώστε όνομα κατηγορίας.',
	'VM_PRODUCT_CATEGORY_ERR_PARENT' => 'Η γονική κατηγορία δεν μπορεί να είναι η ίδια κατηγορία.',
	'VM_PRODUCT_CATEGORY_ERR_DELETE_SELECT' => 'Επιλέξτε κατηγορία για διαγραφή.',
	'VM_PRODUCT_CATEGORY_ERR_DELETE_CHILDREN' => 'Η κατηγορία περιέχει υποκατηγορίες.Διαγράψτε πρώτα αυτές!.',
	'VM_PRODUCT_CATEGORY_ERR_DELETE_IMAGES' => 'Αποτυχία διαγραφής εικόνων κατηγορίας!',
	'VM_PRODUCT_CATEGORY_ADDED' => 'Επιτυχής προσθήκη κατηγορίας',
	'VM_PRODUCT_CATEGORY_UPDATED' => 'Επιτυχής ενημέρωση κατηγορίας',
	'VM_PRODUCT_CATEGORY_DELETED' => 'Επιτυχής διαγραφή ID κατηγορίας',
	'VM_DELETE_RECORD' => 'Διαγραφή εγγραφής',
	'VM_DEFAULT_TOP_LEVEL' => 'Πρώτος Βαθμός',
	'VM_SORT_ERR_NUMBERS_ONLY' => 'Σφάλμα!Χρησιμοποιήστε μόνο αριθμούς.!',
	'VM_PRODUCT_FILES_ERR_PROVIDE' => 'Μεταφορτώστε ένα αρχείο ή δώστε το URL του αρχείου.',
	'VM_PRODUCT_FILES_ERR_ID' => 'Ορίστε ID προϊόντος.',
	'VM_PRODUCT_FILES_ERR_DELETE' => 'Επιλέξτε αρχείο για διαγραφή.',
	'VM_PRODUCT_FILES_IMAGES_SET' => 'Οι εικόνες προϊόντων ορίσθηκαν.',
	'VM_PRODUCT_FILES_ADDED' => 'Το νέο αρχείο προστέθηκε.',
	'VM_PRODUCT_FILES_ERR_TOOBIG' => 'Το αρχείο που θέλετε να μεταφέρετε είναι πολύ μεγάλο.',
	'VM_PRODUCT_FILES_ERR_PARTIALLY' => 'Το αρχείο που μεταφέρετε μεταφέρθηκε μερικώς μόνο.',
	'VM_TAX_ERR_STATE_LISTED' => 'Η πόλη είναι ήδη στη λίστα.',
	'VM_TAX_ERR_COUNTRY' => 'Δώστε χώρα για αυτή την Κλίμακα Φόρου.',
	'VM_TAX_ERR_COUNTRY_NOTEXIST' => 'Η χώρα που επιλέξατε δεν υπάρχει.',
	'VM_TAX_ERR_TAXRATE' => 'Δώστε Κλίμακα Φόρου.',
	'VM_TAX_ERR_UPDATE_SELECT' => 'Επιλέξτε Κλίμακα Φόρου για ενημέρωση.',
	'VM_TAX_ERR_DELETE_SELECT' => 'Επιλέξτε Κλίμακα Φόρου για διαγραφή.',
	'VM_TAX_ADDED' => 'Η Κλίμακα Φόρου προστέθηκε.',
	'VM_TAX_ADD_FAILED' => 'Αποτυχία προσθήκης Κλίμακας Φόρου.',
	'VM_TAX_UPDATED' => 'Η Κλίμακα Φόρου ενημερώθηκε.',
	'VM_TAX_UPDATE_FAILED' => 'Αποτυχία ενημέρωσης Κλίμακας Φόρου.',
	'VM_ENTER_VALUE_FIELD' => 'Παρακαλώ συμπληρώστε το πεδίο',
	'VM_COUPON_ADDED' => 'Το νέο κουπόνι προστέθηκε.',
	'VM_COUPON_UPDATED' => 'Το κουπόνι ενημερώθηκε.',
	'VM_COUPON_GREATER_TOTAL_SETTO' => 'Η αξία Κουπονιού είναι μεγαλύτερη από το σύνολο της παρούσας παραγγελίας και ορίστηκε προσωρινά σε {value}',
	'VM_CREDITCARD_ERR_NAME' => 'Δώστε όνομα για τύπο Πιστωτικής Κάρτας.',
	'VM_CREDITCARD_ERR_CODE' => 'Δώστε κωδικό τύπου Πιστωτικής Κάρτας.',
	'VM_CREDITCARD_EXISTS' => 'Το όνομα ή ο κωδικός υπάρχει ηδη!',
	'VM_CREDITCARD_ERR_DELETE_SELECT' => 'Επιλέξτε τύπο Πιστωτικής Κάρτας για διαγραφή.',
	'VM_CREDITCARD_ADDED' => 'Ο τύπος Πιστωτικής Κάρτας προστέθηκε.',
	'VM_CREDITCARD_UPDATED' => 'Ο τύπος Πιστωτικής Κάρτας ενημερώθηκε.',
	'VM_CURRENCY_ERR_NAME' => 'Δώστε όνομα για την ποσότητα',
	'VM_CURRENCY_ERR_CODE' => 'Δώστε κωδικό για την ποσότητα.',
	'VM_CURRENCY_ERR_EXISTS' => 'Το όνομα ποσότητας υπάρχει ηδη!',
	'VM_CURRENCY_ERR_DELETE_SELECT' => 'Επιλέξτε ποσότητα για διαγραφή.',
	'VM_CURRENCY_ADDED' => 'Η ποσότητα προστέθηκε.',
	'VM_CURRENCY_UPDATED' => 'Η ποσότητα ενημερώθηκε.',
	'VM_EXPORT_ERR_MODULE_NAME' => 'Δώστε όνομα για το module εξαγωγής παραγγελίας.',
	'VM_EXPORT_ERR_CLASS_NOT_EXIST' => 'Η κλάση εξαγωγής δεν υπάρχει.',
	'VM_EXPORT_ERR_DELETE_SELECT' => 'Επιλέξτε module εξαγωγής για διαγραφή.',
	'VM_EXPORT_ERR_UPDATE_SELECT' => 'Επιλέξτε module εξαγωγής για ενημέρωση.',
	'VM_FUNCTION_ERR_DELETE_SELECT' => ' Επιλέξτε λειτουργία για διαγραφή.',
	'VM_FUNCTION_ERR_DELETE_NOTALLOWED_MOD' => 'Δεν επιτρέπεται η διαγραφή της λειτουργίας (Περιορισμοί λειτουργίας: {module_perms}, Τα Δικαιώματα σας: {perms}).',
	'VM_FUNCTION_ERR_DELETE_NOTALLOWED_FUNC' => 'Δεν επιτρέπεται η διαγραφή της λειτουργίας (Περιορισμοί λειτουργίας: {function_perms}, Τα Δικαιώματα σας: {perms}).',
	'VM_MANUF_CAT_ERR_NAME' => 'Δώστε όνομα κατηγορίας Κατασκευαστή.',
	'VM_MANUF_CAT_ERR_EXISTS' => 'Το όνομα κατηγορίας Κατασκευαστή υπάρχει ηδη!',
	'VM_MANUF_CAT_ERR_DELETE_SELECT' => 'Επιλέξτε κατηγορία Κατασκευαστή για διαγραφή.',
	'VM_MANUF_CAT_ADDED' => 'Η κατηγορία Κατασκευαστή προστέθηκε.',
	'VM_MANUF_CAT_UPDATED' => 'Η κατηγορία Κατασκευαστή ενημερώθηκε.',
	'VM_MODULE_ERR_NAME' => 'Δώστε όνομα για αυτό το module.',
	'VM_MODULE_ERR_EXISTS' => 'Το όνομα αυτό έχει ήδη δοθεί σε module.',
	'VM_MODULE_ERR_PERMS' => 'Δώστε άδειες χρήσης για αυτό το module.',
	'VM_MODULE_ERR_DELETE_SELECT' => 'Επιλέξτε module προς διαγραφή',
	'VM_MODULE_ERR_DELETE_CORE' => 'To module {name} είναι module πυρήνα και δεν μπορεί να διαγραφεί',
	'VM_MODULE_ADDED' => 'To Module προστέθηκε.',
	'VM_MODULE_UPDATED' => 'To Module ενημερώθηκε',
	'VM_MANUF_ERR_NAME' => 'Δώστε όνομα  κατασκευαστή',
	'VM_MANUF_ERR_EXISTS' => 'Ο κατασκευαστής αυτός υπάρχει ήδη!',
	'VM_MANUF_ERR_DELETE_SELECT' => 'Επιλέξτε κατασκευαστή προς διαγραφή',
	'VM_MANUF_ERR_DELETE_STILLPRODUCTS' => 'Ο κατασκευαστής περιέχει ακόμα εγγεγραμμένα προϊόντα',
	'VM_MANUF_ADDED' => 'Ο κατασκευαστής προστέθηκε',
	'VM_MANUF_UPDATED' => 'Ο κατασκευαστής ενημερώθηκε',
	'PHPSHOP_CUSTOMER_CVV2_TOOLTIP_TITLE' => 'Κωδικός ασφαλείας',
	'VM_CREDIT_CARD_TYPE' => 'Τύπος πιστωτικής κάρτας',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHEMAIL_1' => 'Αποστολή authentication e-mail στον πελάτη',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHEMAIL_0' => 'Μην αποστείλεις authentication e-mail στον πελάτη',
	'PHPSHOP_ADMIN_CFG_EPAY_EXTRAINFO_RESET_EXPLAIN' => 'Αν οι πρόσθετες πληροφορίες είναι κενές,κάντε κλικ στο κουμπί παρακάτω!',
	'PHPSHOP_ADMIN_CFG_EPAY_EXTRAINFO_RESET' => 'Πληροφορίες μηδενισμού πληρωμής',
	'PHPSHOP_ADMIN_CFG_EPAY_ERR_CONFIGFILE' => 'Αδύνατη η εγγραφή στο αρχείο ρυθμίσεων',
	'VM_CHECKOUT_ERR_CCTYPE' => 'Ο τύπος πιστωτικής κάρτας δεν βρέθηκε.',
	'VM_ENQUIRY_MAIL_CUSTOMER_QUESTION' => 'Ερώτηση πελάτη',
	'VM_ENQUIRY_MAIL_HAS_REQUESTED' => 'Ζήτησε πληροφορίες σχετικά με..',
	'VM_ENQUIRY_MAIL_PRODUCT_SKU' => 'Προϊόν-SKU',
	'VM_ENQUIRY_MAIL_QUESTION' => 'Ερώτηση',
	'OFFLINE_MODE' => 'ΛΕΙΤΟΥΡΓΙΑ OFFLINE',
	'VM_STORE_UPDATED' => 'Το κατάστημα έχει ενημερωθεί.',
	'VM_VENDOR_UPDATED' => 'Ο πωλητής έχει ενημερωθεί.',
	'PHPSHOP_DOWNLOADS_LINK' => 'Κάντε κλικ στον δεσμό για να πάρετε το αρχείο',
	'PHPSHOP_DOWNLOAD_REMAINING' => '{count} μεταφορτώση έχει μείνει',
	'PHPSHOP_DOWNLOADS_REMAINING' => '{count} μεταφορτώσεις έχουν μείνει',
	'PHPSHOP_DOWNLOAD_VALID_UNTIL' => ' μέχρι {date}',
	'VM_CCNEWSLETTER_SUBSCRIPTION' => 'Εγγραφή στο Newsletter',
	'VM_CCNEWSLETTER_INTRODUCTION' => 'Επιθυμείτε να εγγραφείτε στο newsletter',
	'USER_REGISTRATION_DISABLED' => 'Η εγγραφή μέλους είναι ανενεργή, πρέπει να την ενεργοποιήσετε για να προχωρήσετε.'
); $VM_LANG->initModule( 'common', $langvars );
?>