<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: no_shipping.php 1095 2007-12-19 20:19:16Z soeren_nb $
* @package VirtueMart
* @subpackage shipping
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

/**
* Just a dummy class for "NO SHIPPING"
*/
class no_shipping {

  var $classname = "no_shipping";
  
  /**************************************************************************
  ** name: list_rates( $d )
  ** created by: soeren
  ***************************************************************************/  
  function list_rates( &$d ) {
      return "";
    }
    
  /**************************************************************************
  ** name: get_rate( $d )
  ** created by: soeren
  ***************************************************************************/
   function get_rate( &$d ) {
      return 0;
   }
  /**************************************************************************
  ** name: get_tax_rate()
  ** created by: soeren
  ***************************************************************************/
   function get_tax_rate() {
      return 0;
   }

}
?>
