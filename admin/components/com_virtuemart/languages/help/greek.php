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
	'VM_HELP_YOURVERSION' => 'Η έκδοση προϊόντων σας',
	'VM_HELP_ABOUT' => '<span style="font-weight: bold;">
		Το VirtueMart</span> είναι η πλήρης λύση ηλεκτρονικού εμπορίου του Open Source για Mambo και Joomla!.(Authors: Edikon Corp. & the <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> community).',
	'VM_HELP_LICENSE_DESC' => 'Το VirtueMart διανέμεται κάτω από την άδεια <a href="{licenseurl}" target="_blank">{licensename} License</a>.',
	'VM_HELP_TEAM' => 'Υπάρχει μια μικρή ομάδα των υπεύθυνων για την ανάπτυξη που βοηθά στην εξέλιξη .',
	'VM_HELP_PROJECTLEADER' => 'Ομαδάρχης Προγράμματος',
	'VM_HELP_HOMEPAGE' => 'Αρχική σελίδα',
	'VM_HELP_DONATION_DESC' => 'Κάντε μια μικρή δωρεά προς το έργο του VirtueMart για να τους βοηθήσετε να συνεχίσουν την εργασία τους και να δημιουργήσουν νέες δυνατότητες.',
	'VM_HELP_DONATION_BUTTON_ALT' => 'Κάντε τις πληρωμές σας με PayPal. Γρήγορα, ελεύθερα και με ασφάλεια!'
); $VM_LANG->initModule( 'help', $langvars );
?>