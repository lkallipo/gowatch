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
	'PHPSHOP_USER_LIST_LBL' => 'Λίστα χρηστών',
	'PHPSHOP_USER_LIST_USERNAME' => 'Όνομα χρήστη',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Πλήρες Όνομα',
	'PHPSHOP_USER_LIST_GROUP' => 'Ομάδα',
	'PHPSHOP_USER_FORM_LBL' => 'Προσθήκη/Ενημέρωση Στοιχείων Χρήστη',
	'PHPSHOP_USER_FORM_PERMS' => 'Δικαιώματα',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Κωδικός Πελάτη/ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Λίστα Module',
	'PHPSHOP_MODULE_LIST_NAME' => 'Όνομα Module',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Δικαιώματα Module',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Λειτουργίες',
	'PHPSHOP_MODULE_FORM_LBL' => 'Πληροφορίες Module',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Ετικέτα Module (για Κυρίως μενού)',
	'PHPSHOP_MODULE_FORM_NAME' => 'Όνομα Module',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Δικαιώματα Module',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Επικεφαλίδα Module',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Υποσέλιδο Module',
	'PHPSHOP_MODULE_FORM_MENU' => 'Εμφάνιση Module στο μενού Διαχείρισης;',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Σειρά εμφάνισης',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Περιγραφή Module',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'Κωδικός Γλώσσας',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Αρχείο γλώσσας',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Λίστα Λειτουργιών',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Όνομα Λειτουργίας',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Όνομα Κατηγορίας',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'Μέθοδος κατηγορίας',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Δικαιώματα',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Πληροφορίες Λειτουργίας',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Όνομα Λειτουργίας',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Όνομα κατηγορίας',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'Μέθοδος κατηγορίας',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Δικαιώματα Λειτουργίας',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Περιγραφή Λειτουργίας',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Λίστα Νομισμάτων',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Όνομα Νομίσματος',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'Κωδικός Νομίσματος',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Λίστα Χωρών',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Όνομα Χώρας',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'Κωδικός Χώρας (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'Κωδικός Χώρας (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Εμφάνιση πόλεων',
	'PHPSHOP_STATE_LIST_LBL' => 'Εμφάνιση πόλεων για: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Προσθήκη/επεξεργασία πόλεως',
	'PHPSHOP_STATE_LIST_NAME' => 'Όνομα πόλεως',
	'PHPSHOP_STATE_LIST_3_CODE' => 'Κωδικός πόλεως (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'Κωδικός πόλεως (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Γενικές ρυθμίσεις',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Δικτυακός τόπος',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Αποστολή',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Πληρωμή',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Αρχεία για download',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Χρήση μόνο σαν καταλόγου',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Εάν επιλέξετε αυτό,απενεργοποιείτε όλες τις δυνατότητες του καλαθιού',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Προβολή τιμών',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => ' Επιλέξτε για να δείχνει τις τιμές.Εάν χρησιμοποιείτε τη λειτουργία καταλόγου,κάποιοι δεν θέλουν να εμφανίζονται οι τιμές στις σελίδες.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Εικονικός φόρος',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Αυτό προσδιορίζει εάν τα προϊόντα με μηδενικό βάρος,(λογισμικό) φορολογούνται ή όχι.Τροποποιήστε το αρχείο ps_checkout.php->calc_order_taxable() για προσωπικές ρυθμίσεις',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Κατάσταση φόρου:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Βάση διεύθυνσης αποστολής',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Βάση διεύθυνσης κατασκευαστή',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Αυτό καθορίζει ποιός συντελεστής φόρου  επιλέγεται για τον υπολογισμό του φόρου :<br />
                <ul><li>Αυτόν από το νομό/χώρα που προέρχεται ο ιδιοκτήτης του καταστήματος</li><br/>
                <li>Αυτόν από όπου ο πελάτης προέρχεται.</li>
		<li>ή "EU mode", όπου χρησιμοποιείται ό φόρος ανά προϊόν άν ο πελάτης είναι στην Ευρωπαϊκή Ενωση, αλλιώς ο φόρος υπολογίζεται σύμφωνα με τη διευθυνση του πελάτη .</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Ενεργοποίηση πολλαπλών συντελεστών φόρου;',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Επιλέξτε το, εάν έχετε προϊόντα με διαφορετικό συντελεστή φόρου ( π.χ 8% για βιβλία 18% για άλλα προϊόντα',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Αφαίρεση έκπτωσης προτού το φόρο/έξοδα αποστολής;',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Ενεργοποίηση συστήματος αποστολής σχολίων/ψηφοφορίας προϊόντων',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Εάν ενεργοποιηθεί,επιτρέπετε στους πελάτες να <strong>να ψηφίζουν για τα προϊόντα</strong> και <strong>να γράφουν κριτικές</strong> για αυτά. <br />
                Έτσι οι πελάτες θα μπορουν να γράφουν για τις εμπειρίες τους απο το προϊόν, και να τις μοιράζονται με άλλους πελάτες.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Ενεργοποιεί τη ρύθμιση εάν θα αφαιρέσει την έκπτωση για τη συγκεκριμένη πληρωμή ΠΡΙΝ ή ΜΕΤΑ το φόρο και τα έξοδα αποστολής.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Υποχρεωτική συναίνεση - συμφωνία πελάτη με τους όρους χρήσης;',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Επιλέξτε εάν θέλετε ο πελάτης να συμφωνεί με τους όρους χρήσης προτού εγγραφεί στο ηλεκτρονικό κατάστημα.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Έλεγχος αποθεμάτων',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Ενεργοποίηση ελέγχου αποθέματος όταν ο πελάτης προσθέτει ένα προϊόν στο καλάθι αγορών του. 
                Εάν ενεργοποιηθεί,δεν επιτρέπει στο πελάτη να προσθέσει παραπάνω προϊόντα στο καλάθι από αυτά που είναι διαθέσιμα.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Ενεργοποίηση Προγράμματος συνεργασίας;',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Αυτό ενεργοποιεί τον εντοπισμό των συνεργατών όταν επισκέπτονται το κατάστημα.Ενεργοποιήστε το εάν έχετε εισάγει συνεργάτες στη διαχείριση.',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Μορφή Παραγγελίας e-mail:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Αλληλογραφία κειμένου',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML αλληλογραφία',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Αυτό καθορίζει πως η αλληλογραφία επιβεβαίωσης παραγγελίας (e-mail ) ρυθμίζεται:<br />
                                                                                        <ul><li>e-mail απλού κειμένου </li>
                                                                                        <li>ή html e-mail με εικόνες.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Να επιτρέπεται η διαχείριση του Frontend από χρήστες που δεν έχουν πρόσβαση στο Backend;',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Με αυτήν την ρύθμιση μπορείτε να επιτρέψετε την πρόσβαση στους διαχειριστές του ηλεκτρονικού καταστήματος,αλλά όχι ταυτόχρονη πρόσβαση στη διαχείριση του Mambo (e.g. Registered / Editor).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'Ασφαλές URL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'Το URL ασφαλείας του δικτυακού σας τόπου.(https - με το σημείο / στο τέλος!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'Αρχική σελίδα',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Αυτή είναι η σελίδα που θα φορτώνεται σαν προεπιλεγμένη.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'Απεικόνιση σελίδων λάθους',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Αυτή είναι η προεπιλεγμένη σελίδα για απεικόνιση σελίδων λάθους.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'Αποσφαλμάτωση;',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'Ενεργοποιεί την διαδικασία απεικόνισης αποσφαλμάτωσης.Προβάλει τα πεδία αποσφαλμάτωσης (debug) στο κάτω μέρος κάθε σελίδας.Εξαιρετικά βοηθητικό κατα την διαδικασία ανάπτυξης του eshop.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'FLYPAGE',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Αυτή είναι η προεπιλεγμένη σελίδα για την απεικόνιση των λεπτομερειών του προϊόντος.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Κατηγορία Template',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Ορίζει την προεπιλέγμένη κατηγορία  template για την  προβολή προϊόντων σε μια κατηγορία.<br />
                                                                                                      Μπορείτε να δημιουργήσετε νέα templates μορφοποιώντας τα υπάρχοντα αρχεία του template <br />
                                                                                                      (τα οποία βρίσκονται στο κατάλογο <strong>COMPONENTPATH/html/templates/</strong> και ξεκινούν με το browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'Προεπιλεγμένος αριθμός προβολής προϊόντων σε μία γραμμή',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => ' Αυτό ορίζει τον προεπιλεγμένο αριθμός προβολής προϊόντων σε μία γραμμή.<br />
                                                                                                      Παράδειγμα: Αν επιλέξετε 4, η κατηγορία template θα προβάλει 4 προϊόντα ανά γραμμή',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"Καμία εικόνα" εικόνα',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Αυτή η εικόνα θα απεικονίζεται όταν δεν υπάρχει διαθέσιμη εικόνα προϊόντος.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Προβολή "powered by mambo-phpShop"',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Προβάλει την εικόνα στο κάτω μέρος a powered-by-mambo-phpShop.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'Πρότυπος τρόπος αποστολών με ξεχωριστούς μεταφορείς και κόστη με δυνατότητα παραμετροποίησης. <strong>Προτεινόμενο!</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => ' Πρόσθετο Αποστολής Ζώνης Version 1.0<br />
                                                                                                            Για περισσότερες πληροφορίες για αυτό το module παρακαλούμε επισκεφτείτε: <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            Για λεπτομέρειες ή για επικοινωνία: <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Απενεργοποίηση επιλογής μεθόδου αποστολής.Επιλέξτε αν οι πελάτες σας αγοράζουν με ηλεκτρονική μεταφόρτωση (download) προϊόντα που δεν χρειάζεται να μεταφερθούν - αποσταλούν.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Ενεργοποίηση της Μπάρας Ταμείου (checkout)',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Επιλέξτε αυτό, εάν θέλετε η \'μπάρα του ταμείου\' να εμφανίζεται στον πελάτη κατά τη διάρκεια της διαδικασίας checkout ( 1 - 2 - 3 - 4 με γραφικά).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Επιλέξτε τη διαδικασία ταμείου του καταστήματός σας',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Ενεργοποίηση Κατεβάσματος Αρχείων (Downloads)',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Μαρκάρετε για ενεργοποίηση της λειτουργίας download.Μόνο εάν πουλάτε downloadable προϊόντα.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Κατάσταση παραγγελίας που ενεργοποιεί το download',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Επιλέξτε την Κατάσταση παραγγελίας κατα την οποία ο πελάτης θα ειδοποιείται για το download μέσω e-mail.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Κατάσταση παραγγελίας που απενεργοποιεί τα downloads',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Ορίζει την Κατάσταση παραγγελίας που απενεργοποιεί τα downloads.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'Το path του πελάτη για τα downloads. (Με κάθετο στο τέλος!)<br>
        <span class="message">Για λόγους ασφαλείας,ορίστε το Directory οπουδήποτε ΕΚΤΟΣ από το WEBROOT</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Μέγιστο Download',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Ορίζει τον αριθμό downloads για κάθε Download-ID, (για μια παραγγελία)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'Λήξη Download',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Ορίζει τον χρόνο <strong> σε δευτερόλεπτα </strong> που είναι ενεργό το download. 
  Ο χρόνος αρχίζει με το πρώτο download! Όταν ο χρόνος λήξει,το download-ID είναι ανενεργό.<br />Σημείωση: 86400s=24h.',
	'PHPSHOP_COUPONS' => 'Κουπόνια',
	'PHPSHOP_COUPONS_ENABLE' => 'Ενεργοποίηση χρήσης κουπονιών',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Αν το ενεργοποιήσετε,οι πελάτες μπορούν να εισάγουν τον Αριθμό Κουπονιού Έκπτωσης.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'Κουμπί PDF',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Εμφάνισε / κρύψε κουμπί PDF',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'Πρέπει να δεχτεί τους Όρους Συναλλαγής σε ΚΑΘΕ παραγγελία;',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Μαρκάρετε εάν πρέπει ο  πελάτης να δεχτεί τους Όρους Συναλλαγής σε ΚΑΘΕ παραγγελία.',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Εμφάνιση προϊόντων που είναι εκτός Stock',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Ενεργοποίηση Εμφάνισης προϊόντων που είναι εκτός.Διαφορετικά τα προϊόντα δεν θα εμφανίζονται.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Το κατάστημα είναι εκτός λειτουργίας;',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Εμφάνισε/κρύψε Το κατάστημα είναι εκτός λειτουργίας.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Μήνυμα Εκτός λειτουργίας',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Πρόθεμα πινάκων καταστήματος',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'This is <strong>vm</strong> per default',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Εμφάνιση μενού πλοήγησης στην κορυφή της λίστας προϊόντων;',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Ενεργοποιεί/απενεργοποιεί την Εμφάνιση μενού πλοήγησης στην κορυφή της λίστας προϊόντων στο Frontend.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Εμφάνιση του αριθμού προϊόντων;',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Εμφάνιση του αριθμού προϊόντων μιας κατηγορίας ως κατηγορία (4)?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Ενεργοποίηση δυναμικής προεπισκόπησης μικρογραφιών;',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Ενεργοποιεί την δυναμική αλλαγή μεγέθους εικόνων στο μέγεθος που ορίζετε εδώ,
        χρησιμοποιώντας τη λειτουργία PHP\'s GD2 (Δείτε αν υποστηρίζεται στο :"System" -> "System Info" -> "PHP Info" -> gd. 
        Η ποιότητα των εικόνων προεπισκόπησης είναι καλύτερη από την ποιότητα διαβάθμισης του browser.Οι νέες εικόνες αποθηκεύονται στο φάκελο /shop_image/prduct/resized.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Πλάτος εικόνας προεπισκόπησης',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'Ο στόχος <strong>width</strong> της διαβαθμισμένης προεπισκόπησης.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Ύψος εικόνας προεπισκόπησης',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'Το επιθυμητό <strong>ύψος</strong>της διαβαθμισμένης προεπισκόπησης.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Παρακαλώ επιλέξτε τουλάχιστον ένα πεδίο στην ρύθμιση Αποστολής!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Ρυθμίσεις τιμών',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Εμφάνισε τις τιμές στις εξής ομάδες',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'Η επιλεγμένη ομάδα και όλες με ίδια ή ανώτερα δικαιώματα θα μπορούν να δουν τις τιμές προϊόντων.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Εμφάνιση "(συμπεριλαμβάνει XX% φόρο)" όπου εφαρμόζεται;',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Ενεργοποιημένο εμφανίζει το μήνυμα "(συμπεριλαμβάνει xx% φόρο)" όταν οι τιμές περιλαμβάνουν φόρους.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Εμφάνιση ετικέτας τιμής για συσκευασία;',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Ενεργοποιημένο η ετικέτα τιμής προέρχεται από τις τιμές μονάδων και συσκευασίας προϊόντων:
<strong>Τιμή ανά συσκευασία (10 τεμάχια)<strong><br/>
Ανενεργό εμφανίζει τις ετικέτες ως συνήθως: <strong>Τιμή: $xx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'Περισσότερες ρυθμίσεις πυρήνα',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Ρυθμίσεις πυρήνα',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Χαρακτηριστικά Frontend',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'Ρυθμίσεις Φόρων',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Ρυθμίσεις εγγραφής χρηστών',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'Επιτρέπεται η εγγραφή χρηστών;',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'Απαιτείται η ενεργοποίηση του νέου λογαριασμού;',
	'VM_FIELDMANAGER_NAME' => 'Όνομα πεδίου',
	'VM_FIELDMANAGER_TITLE' => 'Τίτλος πεδίου',
	'VM_FIELDMANAGER_TYPE' => 'Τύπος πεδίου',
	'VM_FIELDMANAGER_REQUIRED' => 'Απαιτείται',
	'VM_FIELDMANAGER_PUBLISHED' => 'Δημοσιευμένο',
	'VM_FIELDMANAGER_SHOW_ON_REGISTRATION' => 'Εμφάνιση στη φόρμα εγγραφής',
	'VM_FIELDMANAGER_SHOW_ON_ACCOUNT' => 'Εμφάνιση στη συντήρηση λογαριασμού',
	'VM_USERFIELD_FORM_LBL' => 'Προσθήκη/επεξεργασία πεδίου χρηστών',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL' => 'Εξ ορισμού ταξινόμηση προϊόντων',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP' => 'Ορίζει κατά ποιά πεδία τα προϊόντα ταξινομούνται εξ ορισμού στην σελίδα',
	'VM_BROWSE_ORDERBY_FIELDS_LBL' => 'Διαθέσιμα "Εμφάνιση κατά" πεδία',
	'VM_BROWSE_ORDERBY_FIELDS_LBL_TIP' => 'Επιλέξτε τα "Εμφάνιση κατά" πεδία στην σελίδα.Καθένα ορίζει μια μέθοδο.Αν αποεπιλεγούν όλα η φόρμα "Εμφάνιση κατά" δεν θα εμφανιστεί.',
	'VM_GENERALLY_PREVENT_HTTPS' => 'Να αποτρέπονται γενικά οι ασφαλείς συνδέσεις https;',
	'VM_GENERALLY_PREVENT_HTTPS_TIP' => 'Ενεργοποιημένο ανακατευθύνει τον πελάτη στο <strong>http</strong> URL όταν δεν πλοηγείται στις σελίδες του καταστήματος που εξαναγκάζονται να χρησιμοποιούν σύνδεση https.',
	'VM_ALLOW_EXTENDED_CLASSES' => 'Επιτρέπει την ενσωμάτωση extended classes από το φάκελο θέματος/στυλ?',
	'VM_ALLOW_EXTENDED_CLASSES_TIP' => 'Επιλεγμένο, Το virtuemart εκτελεί εκτεταμένο κώδικα προγράμματος. Ο γνήσιος κώδικας virtuemart μπορεί να αντικατασταθεί ή να επεκταθεί. Εάν δεν ξέρετε τι είναι αυτό, αποεπιλέξτε το',
	'VM_MODULES_FORCE_HTTPS' => 'Σελίδες του καταστήματος που χρησιμοποιούν σύνδεση https',
	'VM_MODULES_FORCE_HTTPS_TIP' => 'Εδώ μπορείτε να χρησιμοποιήσετε μια λίστα (χωρισμένη με κώμα) από modules (Δες "Admin" => "List Modules"),που χρησιμοποιούν σύνδεση https.',
	'VM_SHOW_REMEMBER_ME_BOX' => 'Εμφάνιση επιλογής "Να με θυμάσαι" στην σύνδεση;',
	'VM_SHOW_REMEMBER_ME_BOX_TIP' => 'Ενεργοποιημένο εμφανίζει το "Να με θυμάσαι" στο checkout.Δεν συνιστάται εάν χρησιμοποιήτε shared ssl.',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH' => 'Ελάχιστος αριθμός χαρακτήρων σχολίων',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP' => 'Ελάχιστος αριθμός χαρακτήρων σχολίων.',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH' => 'Μέγιστος αριθμός χαρακτήρων σχολίων',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP' => 'Μέγιστος αριθμός χαρακτήρων σχολίων.',
	'VM_ADMIN_SHOW_EMAILFRIEND' => 'Εμφάνιση συνδέσμου "Προτείνετε σε φίλο" ;',
	'VM_ADMIN_SHOW_EMAILFRIEND_TIP' => 'Ενεργοποιημένο εμφανίζει ενα link που επιτρέπει στον πελάτη να στείλει ένα e-mail προτείνοντας το προϊόν σε κάποιον φίλο.',
	'VM_ADMIN_SHOW_PRINTICON' => 'Εμφάνιση συνδέσμου "Προβολή εκτύπωσης" ;',
	'VM_ADMIN_SHOW_PRINTICON_TIP' => 'Ενεργοποιημένο εμφανίζει ενα link που ανοίγει μια νέα σελίδα για εκτύπωση.',
	'VM_REVIEWS_AUTOPUBLISH' => 'Αυτόματη δημοσίευση σχολίων;',
	'VM_REVIEWS_AUTOPUBLISH_TIP' => 'Ενεργοποιημένο εμφανίζει τα σχόλια αμέσως μόλις αποσταλούν.Ανενεργό,ο Διαχειριστής πρέπει να εγκρίνει/δημοσιεύσει τα σχόλια προς δημοσίευση.',
	'VM_ADMIN_CFG_PROXY_SETTINGS' => 'Γενικές Ρυθμίσεις Proxy',
	'VM_ADMIN_CFG_PROXY_URL' => 'URL του proxy server',
	'VM_ADMIN_CFG_PROXY_URL_TIP' => 'Παράδειγμα: <strong>http://10.42.21.1</strong>.<br />
Αφήστε το κενό εάν δεν είστε σίγουροι.</strong> Η τιμή αυτή χρησιμοποιείται για σύνδεση στο intenet από τον server του καταστήματος (πχ όταν προσκομίζονται ποσοστά απο τη UPS/USPS).',
	'VM_ADMIN_CFG_PROXY_PORT' => 'Θύρα Proxy',
	'VM_ADMIN_CFG_PROXY_PORT_TIP' => 'Η θύρα που χρησιμοποιείται για επικοινωνία με τον proxy server (Κυρίως <b>80</b> ή <b>8080</b>).',
	'VM_ADMIN_CFG_PROXY_USER' => 'Όνομα χρήστη Proxy',
	'VM_ADMIN_CFG_PROXY_USER_TIP' => 'Εάν απαιτήται authentication απο τον proxy εισάγετε εδώ το όνομα χρήστη.',
	'VM_ADMIN_CFG_PROXY_PASS' => 'Κωδικός Proxy',
	'VM_ADMIN_CFG_PROXY_PASS_TIP' => 'Εάν απαιτήται authentication απο τον proxy εισάγετε εδώ τον κωδικό.',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO' => 'Εμφάνιση πληροφοριών "Οροι συναλλαγής" στην σελίδα επιβεβαίωσης παραγγελίας;',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP' => 'Ο καταστηματάρχης υποχρεούται από το νόμο να ενημερώνει τους πελάτες για τους όρους συναλλαγής,επιστροφών και εγγύησης.Η λειτουργία αυτή συνίσταται να ενεργοποιηθεί!',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT' => 'Νομικοί όροι (σύντομη έκδοση).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP' => 'Το κείμενο αυτό ενημερώνει εν συντομία τους πελάτες για τους όρους συναλλαγής,επιστροφών και εγγύησης.Εμφανίζεται στην τελευταία σελίδα πάνω από το κουμπί επιβεβαίωσης παραγγελίας.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK' => 'Link για το Πλήρες κείμενο όρων συναλλαγής,επιστροφών και εγγύησης.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP' => 'Παρακαλώ εισάγετε το κείμενο όρων συναλλαγής,επιστροφών και εγγύησης.
Έπειτα μπορείτε να το επιλέξετε εδώ.',
	'VM_SELECT_THEME' => 'Επιλέξτε το θέμα του καταστήματος σας (theme)',
	'VM_SELECT_THEME_TIP' => 'Τα θέματα βοηθούν να διαμορφώσετε την εμφάνιση του καταστήματος σας. <br />Εάν δεν υπάρχουν άλλα θέματα εκτός από το "default" δεν έχετε εγκαταστήσει κάποια θέματα!',
	'VM_CFG_CONTENT_PLUGINS_ENABLE' => 'Ενεργοποίηση content mambots/plugins στις περιγραφές;',
	'VM_CFG_CONTENT_PLUGINS_ENABLE_TIP' => 'Ενεργοποιημένο,οι περιγραφές προϊόντων και κατηγοριών αναλύονται από όλα τα δημοσιευμένα mambots/plugins.',
	'VM_CFG_CURRENCY_MODULE' => 'Επιλέξτε το module μετατροπής νομίσματος',
	'VM_CFG_CURRENCY_MODULE_TIP' => 'Επιτρέπει να επιλέξετε το module μετατροπής νομίσματος.Αυτά τα modules λαμβάνουν στοιχεία από ένα server και μετατρέπουν νομισματικές μονάδες (ισοτιμίες).',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EU' => 'Mode Ευρωπαϊκής Ένωσης',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL' => 'Διατήρηση επιπέδου του stock κατά την πώληση;',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL_TIP' => 'Ενεργοποιημένο,ο αριθμός downloadable προϊόντων δεν μειώνεται μετά από κάθε αγορά.',
	'VM_USERGROUP_FORM_LBL' => 'Προσθήκη/επεξεργασία Ομάδας χρηστών',
	'VM_USERGROUP_NAME' => 'Όνομα Ομάδας χρηστών',
	'VM_USERGROUP_LEVEL' => 'Επίπεδο Ομάδας χρηστών',
	'VM_USERGROUP_LEVEL_TIP' => 'ΠΡΟΣΟΧΗ! Μεγαλύτερος αριθμός σημαίνει <b>λιγότερα</b> δικαιώματα. Η <b>admin</b> Ομάδα έχει <em>Επίπεδο 0</em>, Η storeadmin Επίπεδο 250, ΟΙ users Επίπεδο 500.',
	'VM_USERGROUP_LIST_LBL' => 'Λίστα Ομάδας χρηστών',
	'VM_ADMIN_CFG_COOKIE_CHECK' => 'Ενεργοποίηση ελέγχου Cookies;',
	'VM_ADMIN_CFG_COOKIE_CHECK_EXPLAIN' => 'Αν ενεργοποιηθεί,το VirtueMart ελέγχει εάν ο επισκέπτης δέχεται cookies ή όχι. Αυτό είναι φιλικό προς τον επισκέπτη,αλλά μπορεί να έχει αρνητική επίπτωση στη λειτουργία Search Engine optimization!',
	'VM_CFG_REGISTRATION_TYPE' => 'Τύπος εγγραφής χρήστη',
	'VM_CFG_REGISTRATION_TYPE_TIP' => 'Επιλέξτε τύπο εγγραφής χρήστη!<br />
<strong>Κανονική εγγραφή</strong><br />
Στην Κανονική εγγραφή,ο χρήστης πρέπει να επιλέξει όνομα χρήστη και κωδικό<br /><br />
<strong>Αυτόματη εγγραφή</strong><br />
Στην Αυτόματη εγγραφή,το όνομα χρήστη και ο κωδικός δημιουργούνται αυτόματα από το σύστημα και αποστέλλονται στο e-mail που δηλώθηκε.
<br /><br />
<strong>Προαιρετική εγγραφή</strong><br />
Στην Προαιρετική εγγραφή,ο πελάτης επιλέγει αν θα εγγραφεί ή όχι.Αν επιλέξει εγγραφή πρέπει να δώσει όνομα χρήστη και κωδικό.
<br /><br />
<strong>Εγγραφή Ανενεργή</strong><br />
Σε αυτή την περίπτωση δεν είναι δυνατή η εγγραφή χρηστών.',
	'VM_CFG_REGISTRATION_TYPE_NORMAL_REGISTRATION' => 'Κανονική δημιουργία λογαριασμού',
	'VM_CFG_REGISTRATION_TYPE_SILENT_REGISTRATION' => 'Αυτόματη δημιουργία λογαριασμού',
	'VM_CFG_REGISTRATION_TYPE_OPTIONAL_REGISTRATION' => 'Προαιρετική δημιουργία λογαριασμού',
	'VM_CFG_REGISTRATION_TYPE_NO_REGISTRATION' => 'Μη δυνατή δημιουργία λογαριασμού',
	'VM_ADMIN_CFG_FEED_CONFIGURATION' => 'Ρυθμίσεις ενημερώσεων',
	'VM_ADMIN_CFG_FEED_ENABLE' => 'Ενεργοποίηση ενημερώσεων χρηστών',
	'VM_ADMIN_CFG_FEED_ENABLE_TIP' => 'Ενεργοποιημένο,επιτρέπει στους χρήστες να λαμβάνουν ενημέρωση για τα νέα προϊόντα η κατηγορίες προϊόντων.',
	'VM_ADMIN_CFG_FEED_CACHE' => 'Ρυθμίσεις μνήμης ενημερώσεων',
	'VM_ADMIN_CFG_FEED_CACHE_ENABLE' => 'Ενεργοποίηση μνήμης cache;',
	'VM_ADMIN_CFG_FEED_CACHETIME' => 'Χρόνος μνήμης cache (δευτερόλεπτα)',
	'VM_ADMIN_CFG_FEED_CACHE_TIP' => 'Η Ενεργοποίηση μνήμης cache επιταχύνει την λειτουργία των ενημερώσεων.',
	'VM_ADMIN_CFG_FEED_SHOWPRICES' => 'Να περιλαμβάνεται η τιμή προϊόντος στην περιγραφή;',
	'VM_ADMIN_CFG_FEED_SHOWPRICES_TIP' => 'Ενεργοποιημένο,θα περιλαμβάνεται η τιμή προϊόντος στην περιγραφή',
	'VM_ADMIN_CFG_FEED_SHOWDESC' => 'Να περιλαμβάνεται η περιγραφή προϊόντος;',
	'VM_ADMIN_CFG_FEED_SHOWDESC_TIP' => 'Ενεργοποιημένο,θα περιλαμβάνεται η περιγραφή προϊόντος στην ενημέρωση',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES' => 'Να περιλαμβάνεται εικόνα του προϊόντος στην ενημέρωση;',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES_TIP' => 'Ενεργοποιημένο,θα περιλαμβάνεται η εικόνα προϊόντος στην ενημέρωση.',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE' => 'Τύπος περιγραφής προϊόντος',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE_TIP' => 'Επιλέξτε Τύπο περιγραφής προϊόντος στην ενημέρωση.',
	'VM_ADMIN_CFG_FEED_LIMITTEXT' => 'Περιορισμός περιγραφής;',
	'VM_ADMIN_CFG_FEED_MAX_TEXT_LENGTH' => 'Μέγιστο μήκος περιγραφής',
	'VM_ADMIN_CFG_MAX_TEXT_LENGTH_TIP' => 'Το Μέγιστο μήκος περιγραφής.',
	'VM_ADMIN_CFG_FEED_TITLE_TIP' => 'Τίτλος ενημέρωσης (Η επικεφαλίδα {storename} εμφανίζει το όνομα καταστήματος)',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'Τίτλος ενημέρωσης κατηγοριών(\'{catname}\' Η επικεφαλίδα {storename} εμφανίζει το όνομα καταστήματος)',
	'VM_ADMIN_CFG_FEED_TITLE' => 'Τίτλος ενημέρωσης',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES' => 'Τίτλος ενημέρωσης κατηγοριών',
	'VM_ADMIN_SECURITY' => 'Ασφάλεια',
	'VM_ADMIN_SECURITY_SETTINGS' => 'Ρυθμίσεις Ασφαλείας',
	'VM_CFG_ENABLE_FEATURE' => 'Ενεργοποίηση της Ασφάλειας',
	'VM_CFG_CHECKOUT_SHOWSTEP_TIP' => 'Ενεργοποιήστε/απενεργοποιήστε/αναδιατάξτε τις ρυθμίσεις του Checkout.Εμφανίστε πολλαπλά Βήματα δίνοντας τους τον ίδιο αριθμό Βήματος.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_FLEX' => 'Flex Shipping.Σταθερά έξοδα αποστολής με το ποσοστό της συνολικής πώλησης επάνω από την αξία',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_SHIPVALUE' => 'Η αποστολή βασίζεται στο συνολικό ποσό παραγγελίας.Οι τιμές αποστολής είναι καθορισμένες στο αρχείο ρυθμίσεων.',
	'VM_CFG_CHECKOUT_SHOWSTEPINCHECKOUT' => 'Εμφάνιση στο βήμα: %s της διαδικασίας Checkout.',
	'VM_ADMIN_ENCRYPTION_KEY' => 'Κλειδί κρυπτογράφησης',
	'VM_ADMIN_ENCRYPTION_KEY_TIP' => 'Χρησιμοποιείται για ασφαλή αποθήκευση και ανάκτηση ευαίσθητων δεδομένων όπως στοιχεία πιστωτικών καρτών.',
	'VM_ADMIN_STORE_CREDITCARD_DATA' => 'Αποθήκευση πληροφοριών Πιστωτικής Κάρτας;',
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'Tο VirtueMart αποθηκεύει κρυπτογραφημένα τις πληροφορίες της πιστωτικής κάρτας,ακόμα και εάν χρησιμοποιηθεί εξωτερικός server. <strong>Αν δεν χρειάζεστε να επεξεργαστείτε χειροκίνητα τις πληροφορίες αυτές μετά την λήψη της παραγγελίας,συνίσταται να απενεργοποιήσετε την επιλογή αυτή.</strong>',
	'VM_USERFIELDS_URL_ONLY' => 'Μόνο URL',
	'VM_USERFIELDS_HYPERTEXT_URL' => 'Hypertext και URL',
	'VM_FIELDS_TEXTFIELD' => 'Πεδίο κειμένου',
	'VM_FIELDS_CHECKBOX_SINGLE' => 'Κουτί επιλογής (Μονής επιλογής)',
	'VM_FIELDS_CHECKBOX_MULTIPLE' => 'Κουτί επιλογής (Πολλαπλής επιλογής)',
	'VM_FIELDS_DATE' => 'Ημερομηνία',
	'VM_FIELDS_DROPDOWN_SINGLE' => 'Αναπτυσσόμενη λίστα (Μονής επιλογής)',
	'VM_FIELDS_DROPDOWN_MULTIPLE' => 'Αναπτυσσόμενη λίστα (Πολλαπλής επιλογής)',
	'VM_FIELDS_EMAIL' => 'E-mail',
	'VM_FIELDS_EUVATID' => 'ID Φόρων Ε. Ένωσης',
	'VM_FIELDS_EDITORAREA' => 'Περιοχή κειμένου Επεξεργαστή',
	'VM_FIELDS_TEXTAREA' => 'Περιοχή κειμένου',
	'VM_FIELDS_RADIOBUTTON' => 'Κουμπί Radio',
	'VM_FIELDS_WEBADDRESS' => 'Διεύθυνση Web',
	'VM_FIELDS_DELIMITER' => '=== Οριοθέτης ===',
	'VM_FIELDS_NEWSLETTER' => 'Συνδρομή Για ενημέρωση',
	'VM_USERFIELDS_READONLY' => 'Μόνο για ανάγνωση',
	'VM_USERFIELDS_SIZE' => 'Μήκος πεδίου',
	'VM_USERFIELDS_MAXLENGTH' => 'Μέγιστο μήκος',
	'VM_USERFIELDS_DESCRIPTION' => 'Περιγραφή: Κείμενο ή HTML',
	'VM_USERFIELDS_COLUMNS' => 'Στήλες',
	'VM_USERFIELDS_ROWS' => 'Σειρές',
	'VM_USERFIELDS_EUVATID_MOVESHOPPER' => 'Μετέφερε τον πελάτη στην ακόλουθη ομάδα μετά από επιτυχή επικύρωση του ID Φόρου Ε. Ένωσης',
	'VM_USERFIELDS_ADDVALUES_TIP' => 'Χρησιμοποιήστε τον πίνακα για προσθήκη τιμών.',
	'VM_ADMIN_CFG_DISPLAY' => 'Εμφάνιση',
	'VM_ADMIN_CFG_LAYOUT' => 'Σχεδιάγραμμα',
	'VM_ADMIN_CFG_THEME_SETTINGS' => 'Ρυθμίσεις θέματος',
	'VM_ADMIN_CFG_THEME_PARAMETERS' => 'Παράμετροι θέματος',
	'VM_ADMIN_ENCRYPTION_FUNCTION' => 'Λειτουργία κρυπτογράφησης',
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Εδώ μπορείτε να επιλέξετε την κρυπτογράφηση ευαίσθητων στοιχειών που θα αποθηκευτούν.Η κρυπτογράφηση AES_ENCRYPT προτείνεται ως πιο ασφαλής.Το ENCODE δεν παρέχει πραγματική κρυπτογράφηση.',
	'SAVE_PERMISSIONS' => 'Αποθήκευση Δικαιωμάτων',
	'VM_ADMIN_THEME_CFG_NOT_EXISTS' => 'Το αρχείο ρυθμίσεων για αυτό το πρότυπο δεν υπάρχει και δεν μπορεί να δημιουργηθεί.Η ρύθμιση δεν είναι δυνατή.',
	'VM_ADMIN_THEME_NOT_EXISTS' => 'Το πρότυπο "{theme}" δεν υπάρχει.',
	'VM_USERFIELDS_ADDVALUE' => 'Προσθήκη τιμής',
	'VM_USERFIELDS_TITLE' => 'Τίτλος',
	'VM_USERFIELDS_VALUE' => 'Τιμή',
	'VM_USER_FORM_LASTVISIT_NEVER' => 'Ποτέ',
	'VM_USER_FORM_TAB_GENERALINFO' => 'Γενικές πληροφορίες χρήστη',
	'VM_USER_FORM_LEGEND_USERDETAILS' => 'Λεπτομέρειες χρήστη',
	'VM_USER_FORM_LEGEND_PARAMETERS' => 'Παράμετροι',
	'VM_USER_FORM_LEGEND_CONTACTINFO' => 'Πληροφορίες επαφής',
	'VM_USER_FORM_NAME' => 'Όνομα',
	'VM_USER_FORM_USERNAME' => 'Όνομα χρήστη',
	'VM_USER_FORM_EMAIL' => 'E-mail',
	'VM_USER_FORM_NEWPASSWORD' => 'Νέος Κωδικός',
	'VM_USER_FORM_VERIFYPASSWORD' => 'Επιβεβαίωση κωδικού',
	'VM_USER_FORM_GROUP' => 'Ομάδα',
	'VM_USER_FORM_BLOCKUSER' => 'Αποκλεισμός χρήστη',
	'VM_USER_FORM_RECEIVESYSTEMEMAILS' => 'Λήψη e-mails συστήματος',
	'VM_USER_FORM_REGISTERDATE' => 'Ημερομηνία εγγραφής',
	'VM_USER_FORM_LASTVISITDATE' => 'Ημερομηνία τελευταίας επίσκεψης',
	'VM_USER_FORM_NOCONTACTDETAILS_1' => 'Δεν υπάρχουν στοιχεία επαφής για αυτό το χρήστη:',
	'VM_USER_FORM_NOCONTACTDETAILS_2' => 'Δες \'Συστατικά -> Επαφές -> Διαχείριση επαφών\' για λεπτομέρειες.',
	'VM_USER_FORM_CONTACTDETAILS_NAME' => 'Όνομα',
	'VM_USER_FORM_CONTACTDETAILS_POSITION' => 'Θέση',
	'VM_USER_FORM_CONTACTDETAILS_TELEPHONE' => 'Τηλέφωνο',
	'VM_USER_FORM_CONTACTDETAILS_FAX' => 'Fax',
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Αλλαγή στοιχείων επαφής',
	'VM_ADMIN_CFG_LOGFILE_HEADER' => 'Ρυθμίσεις καταγραφής',
	'VM_ADMIN_CFG_LOGFILE_ENABLED' => 'Ενεργοποίηση καταγραφής;',
	'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'Αν τεθεί εκτός,ένα μηδενικό αρχείο χρησιμοποιείται για την ορθή λειτουργία.',
	'VM_ADMIN_CFG_LOGFILE_NAME' => 'Ονομα αρχείου καταγραφής.',
	'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN' => 'Διαδρομή αρχείου καταγραφής.Πρέπει να είναι εγγράψιμο και προσβάσιμο.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL' => 'Βαθμός καταγραφής',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'Μηνύματα καταγραφής άνω του κατωφλίου προτεραιότητας θα αγνοούνται.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP' => 'TIP - 8',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG' => 'DEBUG - 7',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO' => 'INFO - 6',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'NOTICE - 5',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING' => 'WARNING - 4',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR' => 'ERROR - 3',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT' => 'CRITICAL - 2',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT' => 'ALERT - 1',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG' => 'EMERGENCY - 0',
	'VM_ADMIN_CFG_LOGFILE_FORMAT' => 'Μορφή αρχείου καταγραφής.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Σχήμα για τις μεμονωμένες καταχωρήσεις ημερολογίου.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'Οι τομείς ημερολογίου μπορούν να περιλάβουν οποιοδήποτε από τα εξής: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
	'VM_ADMIN_CFG_LOGFILE_ERROR' => 'Αδυναμία δημιουργίας/προσπέλασης αρχείου καταγραφής.Ενημερώστε το Διαχειριστή.',
	'VM_ADMIN_CFG_DEBUG_MODE_ENABLED' => 'Ενεργοποίηση αποσφαλμάτωσης;',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED' => 'Περιορισμός κατά IP διεύθυνση;',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN' => 'Περιορισμός εμφάνισης αποτελεσμάτων αποσφαλμάτωσης σε συγκεκριμένη IP?',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS' => 'Διεύθυνση IP Πελάτη',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'Αν ενεργοποιήσετε την επιλογή και δώσετε διεύθυνση IP,τα αποτελέσματα αποσφαλμάτωσης θα εμφανιστούν μόνο σε αυτή την IP.Κανείς άλλος δεν θα δει τα αποτελέσματα αυτά.',
	'VM_FIELDMANAGER_SHOW_ON_SHIPPING' => 'Εμφάνισε στην φόρμα αποστολής',
	'VM_USER_NOSHIPPINGADDR' => 'Δεν υπάρχουν διεύθυνσης αποστολής.',
	'VM_UPDATE_CHECK_LBL' => 'Ενημέρωση έκδοσης VirtueMart',
	'VM_UPDATE_CHECK_VERSION_INSTALLED' => 'Παρούσα έκδοση',
	'VM_UPDATE_CHECK_LATEST_VERSION' => 'Τελευταία έκδοση VirtueMart',
	'VM_UPDATE_CHECK_CHECKNOW' => 'Έλεγχος τώρα!',
	'VM_UPDATE_CHECK_DLUPDATE' => 'Μεταφορά ενημέρωσης',
	'VM_UPDATE_CHECK_CHECKING' => 'Περιμένετε... Πραγματοποιώ έλεγχο...',
	'VM_UPDATE_CHECK_CHECK' => 'Έλεγχος',
	'VM_UPDATE_NOTDOWNLOADED' => 'Η ενημερωμένη έκδοση δεν μπόρεσε να μεταφερθεί.',
	'VM_UPDATE_PREVIEW_LBL' => 'Προεπισκόπηση ενημέρωσης VirtueMart',
	'VM_UPDATE_WARNING_TITLE' => 'Γενική ειδοποίηση',
	'VM_UPDATE_WARNING_TEXT' => 'Η ενημέρωση θα αντικαταστήσει κρίσιμα αρχεία του συστήματος και μπορεί να προκαλέσει κατάρρευση ή δυσλειτουργία
εάν τροποποιήσατε κάποια αρχεία του VirtueMart. Η ενημέρωση θα αντικαταστήσει πλήρως τα τροποποιημένα αρχεία και πιθανώς να δημιουργηθούν προβλήματα. Λάβετε αντίγραφο ασφαλείας πριν από κάθε ενέργεια.',
	'VM_UPDATE_PATCH_DETAILS' => 'Στοιχεία ενημέρωσης',
	'VM_UPDATE_PATCH_DESCRIPTION' => 'Περιγραφή',
	'VM_UPDATE_PATCH_DATE' => 'Ημερομηνία έκδοσης',
	'VM_UPDATE_PATCH_FILESTOUPDATE' => 'Αρχεία που θα ενημερωθούν',
	'VM_UPDATE_PATCH_STATUS' => 'Κατάσταση',
	'VM_UPDATE_PATCH_WRITABLE' => 'Εγγράψιμο',
	'VM_UPDATE_PATCH_UNWRITABLE' => 'Αρχεία/κατάλογοι ΜΗ εγγράψιμα',
	'VM_UPDATE_PATCH_QUERYTOEXEC' => 'Ερωτήματα προς εκτέλεση στη Βάση δεδομένων',
	'VM_UPDATE_PATCH_CONFIRM_TEXT' => 'Διάβασα τους όρους <a href="#warning">Warning</a> και θέλω να εφαρμόσω την ενημέρωση του VirtueMart.',
	'VM_UPDATE_PATCH_APPLY' => 'Εφαρμογή ενημέρωσης',
	'VM_UPDATE_PATCH_ERR_UNWRITABLE' => 'Δεν είναι όλα τα απαιτούμενα αρχεία/κατάλογοι εγγράψιμα.Ελέγξτε τις ρυθμίσεις σας και ξαναδοκιμάστε.',
	'VM_UPDATE_PATCH_PLEASEMARK' => 'Μαρκάρετε το checkbox πριν εφαρμόσετε την ενημέρωση.',
	'VM_UPDATE_RESULT_TITLE' => 'Εγκατεστημένη Έκδοση',
	'VM_FIELDS_CAPTCHA' => 'Πεδίο Captcha (με χρήση com_securityimages)',
	'VM_FIELDS_AGEVERIFICATION' => 'Πιστοποίηση ηλικίας (με πεδία επιλογής)',
	'VM_FIELDS_AGEVERIFICATION_MINIMUM' => 'Ορίστε την Ελάχιστη ηλικία'
); $VM_LANG->initModule( 'admin', $langvars );
?>