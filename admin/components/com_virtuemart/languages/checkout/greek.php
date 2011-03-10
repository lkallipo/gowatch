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
	'PHPSHOP_NO_CUSTOMER' => 'Δεν είστε Εγγεγραμμένος Χρήστης.Παρακαλούμε δώστε μας Πληροφορίες Χρέωσης.',
	'PHPSHOP_THANKYOU' => 'Σας ευχαριστούμε για την παραγγελία σας.',
	'PHPSHOP_EMAIL_SENDTO' => 'Ένα e-mail Επιβεβαίωσης, στάλθηκε προς',
	'PHPSHOP_CHECKOUT_NEXT' => 'Επόμενο',
	'PHPSHOP_CHECKOUT_CONF_BILLINFO' => 'Πληροφορίες Χρέωσης',
	'PHPSHOP_CHECKOUT_CONF_COMPANY' => 'Εταιρεία',
	'PHPSHOP_CHECKOUT_CONF_NAME' => 'Όνομα',
	'PHPSHOP_CHECKOUT_CONF_ADDRESS' => 'Διεύθυνση',
	'PHPSHOP_CHECKOUT_CONF_EMAIL' => 'E-mail',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO' => 'Πληροφορίες Αποστολής',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY' => 'Εταιρεία',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME' => 'Όνομα',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS' => 'Διεύθυνση',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE' => 'Τηλ.',
	'PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD' => 'Μέθοδος Πληρωμής',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO' => 'Απαραίτητες πληροφορίες όταν επιλεχθεί πληρωμή μέσω Πιστωτικής Κάρτας',
	'PHPSHOP_PAYPAL_THANKYOU' => 'Ευχαριστούμε για την πληρωμή σας. 
        Η συναλαγή ήταν επιτυχής. Θα λάβετε ένα e-mail επιβεβαίωσης για την συναλλαγή σας από το PayPal. 
        Μπορείτε να συνεχίσετε ή να επισκεφθείτε το <a href=http://www.paypal.com>www.paypal.com</a> για να δείτε τις λεπτομέρειες της συναλλαγής.',
	'PHPSHOP_PAYPAL_ERROR' => 'Συνέβει κάποιο σφάλμα ενώ γινόταν επεξεργασία της συναλλαγής σας.Η κατάσταση της παραγγελία σας δεν μπορεί να ενημερωθεί.',
	'PHPSHOP_THANKYOU_SUCCESS' => 'Η παραγγελία σας έγινε δεκτή επιτυχώς!',
	'VM_CHECKOUT_TITLE_TAG' => 'Πληρωμή: Βήμα %s από %s',
	'VM_CHECKOUT_ORDERIDNOTSET' => 'Ο κωδικός παραγγελίας Order ID δεν ορίστηκε ή είναι κενός!',
	'VM_CHECKOUT_FAILURE' => 'ΣΦΑΛΜΑ',
	'VM_CHECKOUT_SUCCESS' => 'ΕΠΙΤΥΧΙΑ',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_1' => 'Αυτή η σελίδα βρίσκεται στον ιστοχώρο του καταστήματος.',
	'VM_CHECKOUT_PAGE_GATEWAY_EXPLAIN_2' => 'Η πύλη εκτελεί τη σελίδα στον ιστοχώρο,και εμφανίζει τα αποτελέσματα  με κρυπτογράφηση SSL.',
	'VM_CHECKOUT_CCV_CODE' => 'Κωδικός  Αυθεντικότητας Κάρτας',
	'VM_CHECKOUT_CCV_CODE_TIPTITLE' => 'Κωδικός Αυθεντικότητας Κάρτας;',
	'VM_CHECKOUT_MD5_FAILED' => 'Αποτυχία ελέγχου MD5',
	'VM_CHECKOUT_ORDERNOTFOUND' => 'Η παραγγελία δεν βρέθηκε',
	'VM_CHECKOUT_PBS_APPROVED_ORDERCOMMENT' => '
                Η συναλλαγή εγκρίθηκε από την PBS. \n
                Η συναλλαγή έλαβε τον Αριθμό:\n\n
                Αριθμός συναλλαγής: {transactionnumber}\n',
	'VM_CHECKOUT_PBS_NOTAPPROVED_ORDERCOMMENT' => '
                Η συναλλαγή απορρίφθηκε από την PBS. \n
                Η συναλλαγή έλαβε τον Αριθμό:\n\n
                Αριθμός συναλλαγής: {transactionnumber}\n',
	'VM_CHECKOUT_DD_ERROR_0' => 'Έμπορος/forretningsnummer ugyldigt',
	'VM_CHECKOUT_DD_ERROR_1' => 'Ugyldigt kreditkortnummer',
	'VM_CHECKOUT_DD_ERROR_2' => 'Ugyldigt belob',
	'VM_CHECKOUT_DD_ERROR_3' => 'OrderID mangler eller er ugyldig',
	'VM_CHECKOUT_DD_ERROR_4' => 'PBS afvisning - (Oftest - ugyldig kortdata, sp?rret kort osv...)',
	'VM_CHECKOUT_DD_ERROR_5' => 'Intern server fejl hos DanDomain eller PBS',
	'VM_CHECKOUT_DD_ERROR_6' => 'E-dankort ikke tilladt. Kontakt DanDomain',
	'VM_CHECKOUT_DD_ERROR_DEFAULT' => 'Το Σύστημα Απέτυχε',
	'VM_CHECKOUT_FP_ERROR_1' => 'ΣΦΑΛΜΑ: Η συναλλαγή απορρίφθηκε',
	'VM_CHECKOUT_FP_ERROR_2' => 'ΣΦΑΛΜΑ: Η συναλλαγή απορρίφθηκε',
	'VM_CHECKOUT_FP_ERROR_3' => 'ΣΦΑΛΜΑ: Λανθασμένη μορφή αριθμού',
	'VM_CHECKOUT_FP_ERROR_4' => 'ΣΦΑΛΜΑ: Μη νόμιμη συναλλαγή',
	'VM_CHECKOUT_FP_ERROR_5' => 'ΣΦΑΛΜΑ: Δεν αποκρίθηκε',
	'VM_CHECKOUT_FP_ERROR_6' => 'Error_system_failure',
	'VM_CHECKOUT_FP_ERROR_7' => 'ΣΦΑΛΜΑ: Η κάρτα έχει λήξει',
	'VM_CHECKOUT_FP_ERROR_8' => 'ΣΦΑΛΜΑ: Σφάλμα επικοινωνίας',
	'VM_CHECKOUT_FP_ERROR_9' => 'ΣΦΑΛΜΑ: Εσωτερικό σφάλμα',
	'VM_CHECKOUT_FP_ERROR_10' => 'ΣΦΑΛΜΑ: Μη καταχωρημένη Κάρτα',
	'VM_CHECKOUT_FP_ERROR_DEFAULT' => 'ΑΓΝΩΣΤΟ ΣΦΑΛΜΑ',
	'VM_CHECKOUT_WF_ERROR_1' => 'Transaktionen blev ikke godkendt',
	'VM_CHECKOUT_WF_ERROR_2' => 'Mulig snyd',
	'VM_CHECKOUT_WF_ERROR_3' => 'Αποτυχία επικοινωνίας',
	'VM_CHECKOUT_WF_ERROR_4' => 'Kort udlobet',
	'VM_CHECKOUT_WF_ERROR_5' => 'Εσωτερικό σφάλμα',
	'VM_CHECKOUT_WF_ERROR_6' => 'Ακυρη συναλλαγή',
	'VM_CHECKOUT_WF_ERROR_7' => 'Το Σύστημα Απέτυχε',
	'VM_CHECKOUT_WF_ERROR_8' => 'Forkert forretningsnummer',
	'VM_CHECKOUT_WF_ERROR_9' => 'Kortet eksistere ikke',
	'VM_CHECKOUT_WF_ERROR_10' => 'Kort l?ngen er for kort.',
	'VM_CHECKOUT_WF_ERROR_11' => 'Transaktion kan ikke gennemfores igennem denne terminal',
	'VM_CHECKOUT_WF_ERROR_12' => 'Kortejeren har ikke rettigheder til at gennemfore denne transaktion.',
	'VM_CHECKOUT_WF_ERROR_13' => 'Kortnummeret eksistere ikke',
	'VM_CHECKOUT_WF_ERROR_14' => 'Άγνωστο λάθος',
	'PHPSHOP_EPAY_PAYMENT_CARDTYPE' => 'Η πληρωμή δημιουργήθηκε από το %s <img
src="/components/com_virtuemart/shop_image/ps_image/epay_images/%s"
border="0">'
); $VM_LANG->initModule( 'checkout', $langvars );
?>