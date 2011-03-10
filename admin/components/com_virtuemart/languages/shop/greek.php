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
	'PHPSHOP_BROWSE_LBL' => 'Κατάλογος Προϊόντων καταστήματος',
	'PHPSHOP_FLYPAGE_LBL' => 'Λεπτομέρειες προϊόντος',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Επεξεργασία Προϊόντος',
	'PHPSHOP_DOWNLOADS_START' => 'Αρχίστε το Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Παρακαλώ εισάγετε το Κωδικό Download (Download-ID) που λάβατε με e-mail και πατήστε "Αρχίστε το Download".',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Παρακαλούμε εισάγετε το e-mail σας παρακάτω για να σας ειδοποιήσουμε όταν αυτό το προϊόν είναι πάλι διαθέσιμο. 
                                                                        Δεν θα μοιραστούμε,ενοικιάσουμε,πωλήσουμε ή χρησιμοποιήσουμε αυτό το e-mail για κανένα άλλο σκοπό πέρα από 
                                                                        το να σας πούμε πότε το προϊόν θα είναι πάλι διαθέσιμο.<br /><br />Ευχαριστούμε!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Ευχαριστούμε που περιμένετε!<br />Θα σας ειδοποιήσουμε αμέσως μόλις έχουμε νέες παραλαβές.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'ΕΙΔΟΠΟΙΗΣΤΕ ΜΕ!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Ψάξε όλες τις κατηγορίες',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Ψάξε όλες τις πληροφορίες ειδών',
	'PHPSHOP_SEARCH_PRODNAME' => 'Μόνο το όνομα του προϊόντος',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Μόνο Κατασκευαστής/Προμηθευτής',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Μόνο περιγραφή προϊόντος',
	'PHPSHOP_SEARCH_AND' => 'ΚΑΙ',
	'PHPSHOP_SEARCH_NOT' => 'ΟΧΙ',
	'PHPSHOP_SEARCH_TEXT1' => 'Η πρώτη αναδυόμενη λίστα σας επιτρέπει να επιλέξετε μία κατηγορία για να περιορίσετε σε αυτή την αναζήτηση. 
        Η δεύτερη αναδυώμενη λίστα σας επιτρέπει να κάνετε αναζήτηση σε ένα συγκεκριμένο πεδίο των πληροφοριών του προϊόντος (π.χ. Όνομα). 
        Από τη στιγμή που έχετε κάνει τις επιλόγες σας (ή αφήσατε την εξ\' ορισμού επιλογή Όλες),εισάγετε την προς αναζήτηση,λέξη κλειδί. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Μπορείτε να εξειδικεύσετε περαιτέρω την αναζήτησή σας προσθέτοντας μία δεύτερη λέξη κλειδί και επιλέγοντας τις λειτουργίες ΚΑΙ και ΟΧΙ. 
        Επιλέγοντας ΚΑΙ σημαίνει ότι και οι δύο λέξεις πρέπει να είναι παρούσες για να εμφανιστεί το προϊόν. 
        Επιλέγοντας ΟΧΙ σημαίνει ότι το προϊόν θα εμφανιστεί μόνο αν η πρώτη λέξη κλειδί είναι παρούσα 
        και η δεύτερη δεν είναι.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'ΣΥΝΕΧΕΙΑ ΑΓΟΡΩΝ',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Διαθέσιμες εικόνες',
	'PHPSHOP_BACK_TO_DETAILS' => 'ΕΠΙΣΤΡΟΦΗ ΣΤΟ ΠΡΟΪΟN',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Η εικόνα δεν βρέθηκε!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Θέλετε να κάνετε αναζήτηση με βάση παραμέτρους;<BR>',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Δεν υπάρχει κατηγορία για αναζήτηση',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Δεν υπάρχει τύπος προϊόντος με αυτό το όνομα.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Είναι',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Δεν είναι',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Αναζήτηση με πλήρες κείμενο',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Όλα επιλεγμένα',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Κανένα επιλεγμένο',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Καθαρισμός φόρμας',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Δεν βρέθηκε αποτέλεσμα.',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Τεμάχια {μονάδα}ες ανά συσκευασία:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Τεμάχια {μονάδα}ες ανά κιβώτιο:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Τιμή μονάδος',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Μάθετε περισσότερα για το προϊόν',
	'VM_RECOMMEND_FORM_LBL' => 'Προτείνετε το προϊόν',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Άδειασμα καλαθιού',
	'VM_RETURN_TO_PRODUCT' => 'ΕΠΙΣΤΡΟΦΗ ΣΤΟ ΠΡΟΪΟN',
	'EMPTY_CATEGORY' => 'Η κατηγορία είναι προσωρινά κενή.',
	'ENQUIRY' => 'Επικοινωνία',
	'NAME_PROMPT' => 'Το όνομα σας',
	'EMAIL_PROMPT' => 'Διεύθυνση E-mail',
	'MESSAGE_PROMPT' => 'Γράψτε το μήνυμα σας',
	'SEND_BUTTON' => 'ΑΠΟΣΤΟΛΗ',
	'THANK_MESSAGE' => 'Σας ευχαριστούμε!Θα επικοινωνήσουμε σύντομα.',
	'PROMPT_CLOSE' => 'Κλείσιμο',
	'VM_RECOVER_CART_REPLACE' => 'Αντικατάσταση Καλαθιού με αποθηκευμένο Καλάθι',
	'VM_RECOVER_CART_MERGE' => 'Προσθήκη αποθηκευμένου Καλαθιού στο τρέχον Καλάθι',
	'VM_RECOVER_CART_DELETE' => 'Άδειασμα Καλαθιού',
	'VM_EMPTY_YOUR_CART_TIP' => 'Άδειασμα Καλαθιού',
	'VM_SAVED_CART_TITLE' => 'Αποθηκευμένο Καλάθι',
	'VM_SAVED_CART_RETURN' => 'Επιστροφή'
); $VM_LANG->initModule( 'shop', $langvars );
?>