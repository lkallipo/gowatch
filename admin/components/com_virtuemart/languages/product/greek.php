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
	'PHPSHOP_MODULE_LIST_ORDER' => 'Σειρά Ταξινόμησης',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Αποθήκη Προϊόντων',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'Αριθμός',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Βάρος',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Δημοσίευση',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Αναζήτηση προϊόντος',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'Τροποποιημένο',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'Τροποποιημένο κατά τιμή',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'Χωρίς τιμή',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'Μετά',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Πρίν',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Προεπισκόπηση σελίδας προϊόντος στο κατάστημα',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Νέο Προϊόν',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Πληροφορίες Προϊόντος',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Κατάσταση Προϊόντος',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Διαστάσεις και Βάρος Προϊόντος',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Εικόνες Προϊόντος',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Ενημέρωση Είδους',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Πληροφορίες Είδους',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Κατάσταση είδους',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Διαστάσεις και Βάρος Είδους',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Εικόνες Είδους',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Για να ενημερώσετε την εικόνα,εισάγετε τη διαδρομή του αρχείου της νέας εικόνας.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Εισάγετε "none" γα διαγραφή της τρέχουσας εικόνας.',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Είδη Προϊόντος',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Χαρακτηριστικά Είδους',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Είστε βέβαιοι για τη Διαγραφή του Προϊόντος και των Ειδών που Σχετίζονται με Αυτό;',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το Είδος;',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Κατασκευαστής',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'Κωδικός - SKU',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Όνομα',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Κατηγορία',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Ημερ/νια Διάθεσης',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Σε Προσφορά',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Τύπος Έκπτωσης',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Δημοσίευση;',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'Μήκος',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Πλάτος',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'Ύψος',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Μονάδα μέτρησης',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Μονάδα Μέτρησης',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Πλήρης Εικόνα',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'kg',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'cm',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Τεμάχια ανά συσκευασία',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Εδώ μπορείτε να συμπληρώσετε μια μονάδα αριθμού στη συσκευασία.(μεγ. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Μονάδες στο κιβώτιο',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Εδώ μπορείτε να συμπληρώσετε μια μονάδα αριθμού (μεγ. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Αποτελέσματα Προσθήκης Προϊόντος',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Αποτελέσματα Ενημέρωσης Προϊόντος',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Αποτελέσματα Προσθήκης Είδους',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Αποτελέσματα Ενημέρωσης Είδους',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Πληροφορίες Κατηγορίας',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Όνομα Κατηγορίας',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Γονική',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Περιγραφή Κατηγορίας',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Δημοσίευση;',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Σελίδα Κατηγορίας',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Λίστα Χαρακτηριστικών για',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Τίτλος Χαρακτηριστικού',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Σειρά Εμφάνισης',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Φόρμα Χαρακτηριστικών',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Νέο χαρακτηριστικό για το Προϊόν ',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Ενημέρωση Ιδιότητας για το Προϊόν ',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Νέο χαρακτηριστικό για το Είδος ',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Ενημέρωση χαρακτηριστικού για το Είδος ',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Όνομα Χαρακτηριστικού',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Σειρά Εμφάνισης',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Τιμή για ',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Ονομα Ομάδας',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Τιμή',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'Νόμισμα',
	'PHPSHOP_PRICE_FORM_LBL' => 'Στοιχεία Τιμής',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Νέα Τιμή για το Προϊόν',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Ενημέρωση Τιμής για το Προϊόν',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Νέα Τιμή για το Είδος',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Ενημέρωση Τιμής για το Είδος',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Τιμή',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'Νόμισμα',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Ομάδα Αγοραστών',
	'PHPSHOP_LEAVE_BLANK' => '(Αφήστε το ΚΕΝΟ αν δεν έχετε<br />κάποιο ειδικό αρχείο php γι\' αυτό!)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Είδος',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Μέρα έναρξης της έκπτωσης',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Διευκρινίζει την ημέρα που αρχίζει η έκπτωση',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'Ημερομηνία λήξης της έκπτωσης',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Διευκρινίζει την ημέρα που τελειώνει η έκπτωση',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Δημοσιευμένο;',
	'PHPSHOP_FILES_LIST' => 'Διαχειριστής αρχείων: Λίστα Εικόνων/καταλόγων για:',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Όνομα αρχείου',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'Τίτλος αρχείου',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'Τύπος αρχείου',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Πλήρης εικόνα',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'Μικρή εικόνα',
	'PHPSHOP_FILES_FORM' => 'Μεταφορτώστε ένα αρχείο για',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Παρόν αρχείο',
	'PHPSHOP_FILES_FORM_FILE' => 'Αρχείο',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Εικόνα',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Μεταφόρτωση σε',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'Εξ ορισμού path αρχείου εικόνας',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Ορίστε την τοποθεσία αρχείου',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Τοποθεσία Download (πχ για προϊόντα που πωλούνται μέσω download!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Αυτόματη δημιουργία εικόνας προεπισκόπησης;',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Το αρχείο είναι δημοσιευμένο;',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Τίτλος αρχείου (που βλέπει ο πελάτης)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'URL αρχείου (Προαιρετικό)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Εισάγετε το κείμενο που θα εμφανίζεται στον πελάτη στην σελίδα προϊόντος.<br />e.g.: 24h, 48 ώρες, 3 - 5 ημέρες, Κατά παραγγελία..',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'ή επιλέξτε μια εικόνα να εμφανίζεται (flypage).<br />Οι εικόνες υπάρχουν στον κατάλογο <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => 'Προσθέτουμε έξτρα πεδία κειμένου που μπορεί ο χρήστης να πληκτρολογήσει επιπλέον πληροφορίες<br />
			Η μορφή είναι ώς εξής <b>Πεδίο1;Πεδίο2,...</b><h4>Παραδείγματα για τη μορφή εξτρά λίστας χαρακτηριστικών:</h4><br />
			Ο πελάτης θέλει να γραφεί στο μπλουζάκι του ένα κείμενο.Θα δημιουργήσετε 2 πεδία "κειμενο & χρώμα":<br /> Στην "εξτρά λίστα" δίνουμε <b>κείμενο;χρώμα</b> και πατούμε Εφαρμογή',
	'PHPSHOP_IMAGE_ACTION' => 'Ενέργεια εικόνας',
	'PHPSHOP_PARAMETERS_LBL' => 'Παράμετροι',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Τύπος προϊόντος',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Λίστα Τύπων προϊόντος για',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Προσθήκη Τύπων προϊόντος για',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Τύπος προϊόντος',
	'VM_PRODUCT_PRODUCT_TYPE_ADD_MULTIPLE_PRODUCTS' => ' Πολλαπλά προϊόντα',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Όνομα Τύπου προϊόντος',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Περιγραφή τύπου προϊόντων',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Παράμετροι',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Πληροφορίες τύπου προϊόντων',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Δημοσίευση;',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Σελίδα πλοήγησης τύπου προϊόντων',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Flypage τύπου προϊόντων',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Παράμετροι τύπου προϊόντων',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Πληροφορίες παραμέτρων',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Ο τύπος προϊόντων δεν βρέθηκε!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Όνομα παραμέτρου',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'Αυτό το όνομα πρέπει να είναι μοναδικό,χωρίς κενά.<br/>π.χ.: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Ετικέτα παραμέτρου',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Ακέραιος αριθμός',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Κείμενο',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Σύντομο κείμενο',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Επιπλέον ',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Σύντομο κείμενο',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Ημερ/νια και ώρα',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Ημερομηνία',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Ώρα',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Διαχωριστής',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'Πολλαπλές τιμές',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Πιθανές τιμές',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Εμφάνιση πιθανών τιμών ως πολλαπλή επιλογή;',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>Αν επιλέξετε Πιθανές τιμές,η παράμετρος παίρνει μόνο αυτές τις τιμές. Πχ.:</strong><br/><span class="sectionname">Ξύλο;Μέταλλο;Πλαστικό;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Εξ ορισμού τιμή',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'Αν επιλέξετε Εξ ορισμού Τιμή χρησιμοποιήστε αυτή τη μορφή:<ul><li>Ημερομηνία: YYYY-MM-DD</li><li>Ώρα: HH:MM:SS</li><li>Ημερ/νια και ώρα: YYYY-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Μονάδα',
	'PHPSHOP_PRODUCT_CLONE' => 'Κλωνοποίηση προϊόντος',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Απόκρυψη προϊόντων εκτός stock',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Χαρακτηριστικά και με έκπτωση',
	'PHPSHOP_FEATURED' => 'Χαρακτηριστικά',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'Χαρακτηριστικά ΚΑΙ με έκπτωση',
	'PHPSHOP_SHOW_DISCOUNTED' => 'Προϊόντα με έκπτωση',
	'PHPSHOP_FILTER' => 'Φίλτρο',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Τιμή με έκπτωση',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Εδώ μπορείτε να αγνοήσετε τη ρύθμιση έκπτωσης.Συμπληρώνετε μια πρόσθετη αξία έκπτωσης αυτού του προϊόντος.<br/>
		Το κατάστημα θα δημιουργήσει ένα νέο αρχείο έκπτωσης από την τιμή έκπτωσης.',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Ποσότητα (αρχή)',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Ποσότητα (τέλος)',
	'VM_PRODUCTS_MOVE_LBL' => 'Μετακίνηση προϊόντος σε άλλη κατηγορία',
	'VM_PRODUCTS_MOVE_LIST' => 'Επιλέξατε για μετακίνηση τα κάτωθι %s προϊόντα',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Μετακίνηση στην κατηγορία...',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Επιλέξτε μια κατηγορία προϊόντων για να αναδιατάξετε τα προϊόντα σε μια κατηγορία ',
	'VM_REVIEW_FORM_LBL' => 'Προσθήκη',
	'PHPSHOP_REVIEW_EDIT' => 'Προσθήκη/επεξεργασία Αναθεώρησης',
	'SEL_CATEGORY' => 'Επιλέξτε κατηγορία',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Ελάχιστη ποσότητα παραγγελίας',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Μεγίστη ποσότητα παραγγελίας',
	'VM_DISPLAY_TABLE_HEADER' => 'Εμφάνιση επικεφαλίδας',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Σύνδεση με προϊόν – απόγονο απο λίστα',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Περιέλαβε Τύπο προϊόντος με προϊόν – απόγονο',
	'VM_DISPLAY_USE_LIST_BOX' => 'Χρήση λίστας για προϊόντα – απόγονους',
	'VM_DISPLAY_LIST_STYLE' => 'Λίστα στυλ',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Χρήση Γονικών Ρυθμίσεων:',
	'VM_DISPLAY_LIST_TYPE' => 'Λίστα:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Ποσότητα:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Τιμές αναπτυσσόμενου κουτιού',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Εμφάνιση περιγραφής προϊόντος – απόγονου',
	'VM_DISPLAY_DESC_WIDTH' => 'Πλάτος περιγραφής προϊόντος – απόγονου',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Πλάτος ιδιοτήτων προϊόντος – απόγονου',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Πρόθεμα Κατηγορίας περιγραφής προϊόντος – απόγονου',
	'VM_INCLUDED_PRODUCT_ID' => 'IDs προϊόντων που θα περιληφθούν',
	'VM_EXTRA_PRODUCT_ID' => 'Πρόσθετα IDs',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Χρήση Radio Box',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Επιλογές εμφάνισης',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Παρέκαμψε τις τιμές εμφάνισης απογόνου και χρησιμοποίησε τις γονικές',
	'PHPSHOP_DISPLAY_NORMAL' => 'Πρότυπο κουτί ποσότητας',
	'PHPSHOP_DISPLAY_HIDE' => 'Απόκρυψη κουτιού ποσότητας',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Χρήση αναπτυσσόμενου κουτιού',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Χρήση Check Box',
	'PHPSHOP_DISPLAY_ONE' => 'Ένα κουμπί προσθήκη στο καλάθι',
	'PHPSHOP_DISPLAY_MANY' => 'Κουμπί προσθήκη στο καλάθι για κάθε προϊόν – απόγονο',
	'PHPSHOP_DISPLAY_START' => 'Αρχή αξίας',
	'PHPSHOP_DISPLAY_END' => 'Τέλος αξίας',
	'PHPSHOP_DISPLAY_STEP' => 'Βήμα αξίας',
	'PRODUCT_WAITING_LIST_TAB' => 'Λίστα αναμονής',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Χρήστες σε αναμονή ενημέρωσης για προϊόντα σε stock',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Ενημέρωσε τους χρήστες τώρα (αφού ενημερώσετε το stock)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'Ενημερώθηκαν',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'Επιλογή εικόνας',
	'VM_PRODUCT_RELATED_SEARCH' => 'Αναζήτηση προϊόντων ή κατηγοριών:',
	'VM_FILES_LIST_ROLE' => 'Ρόλος',
	'VM_FILES_LIST_UP' => 'Πάνω',
	'VM_FILES_LIST_GO_UP' => 'Πήγαινε επάνω',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Εμφάνισε x προϊόντα ανά σειρά',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'Σελίδα πλοήγησης κατηγορίας',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Επιλογές κλωνοποίησης προϊόντος',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Κλωνοποίησε και τα αντικείμενα απογόνους',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Όνομα/ημερομηνία',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'Επιλέξτε ένα ή περισσότερα προϊόντα',
	'VM_PRODUCT_SEARCHING' => 'Αναζήτηση...',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Παράδειγμα λίστας χαρακτηριστικών:</h4>
Τίτλος χαρακτηριστικού = Χρώμα, Ιδιότητα Χαρακτηριστικού = Κόκκινο ;
<br />Κατόπιν κάντε κλικ στη "Νέα ιδιότητα χαρακτηριστικού" για προσθήκη νέου χρώματος: π.χ. Πράσινο
<br /> Μετά κάντε κλικ στο "Νέο χαρακτηριστικό" για προσθήκη και νέου χαρακτηριστικού, π.χ. μεγεθος.
<br /> Και αντίστοιχα κλικ σε "Νέα Ιδιότητα χαρακτηριστικού" για π.χ. XL, κλπ <br /><br />
Στο πεδίο "Τιμή" δίνουμε τυχόν διαφορές τιμής για κάθε ιδιότητα, π.χ. <br />
Τιμή = +10 για προσθήκη του ποσού στην τιμή.<br />  Τιμή = -10 για αφαίρεση του ποσού απο την τιμή.<br />  Τιμή = 10 για συγκεκριμένη τιμή προϊόντος.<br /><br />
<h4>Προσθήκη χαρακτηριστικών, ιδιοτήτων και τιμής με τη χρήση μίας γραμμής εντολών:</h4>
Μπορούμε επίσης να κάνουμε όλα τα παραπάνω με τη χρήση μίας γραμμής εντολών στο πεδίο "Τιτλος"<br /> και πατώντας το υποβολή στην κορυφή της σελίδας.<br />
Π.χ. μπορούμε να προσθέσουμε ένα μπλουζάκι σε μεγέθη XL, Μ και S (με διαφορετικές τιμές ανά μέγεθος),<br /> σε τέσσερα χρώματα και το χρυσό να κοστίζει 24 ευρώ με την παρακάτω εντολή:<br /><br />
<b>Μέγεθος,XL[+1.99],M,S[-2.99]; Χρώμα,Κόκκινο,Πράσινο,Κίτρινο,Χρυσό [=24.00]</b><br /><br />
Η μορφή είναι: "Χαρακτηριστικό1,ιδιότητα1,ιδιότητα2[τιμή]; Χαρακτηριστικό2,ιδιότητα1,ιδιότητα2" κλπ.<br />
Το κάθε επόμενο χαρακτηριστικό το χωρίζουμε με ";".',
	'VM_FILES_FORM_PRODUCT_IMAGE' => 'Εικόνα προϊόντος (πλήρης και μικρογραφία)',
	'VM_FILES_FORM_DOWNLOADABLE' => 'Μεταφορτώσιμο προϊόν/αρχείο (για πώληση!)',
	'VM_FILES_FORM_RESIZE_IMAGE' => 'Αλλαγή μεγέθους πλήρους εικόνας?'
); $VM_LANG->initModule( 'product', $langvars );
?>