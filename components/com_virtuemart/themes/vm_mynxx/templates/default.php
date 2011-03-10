<?php 
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id: shop.product_details.php,v 1.2 2006/03/30 11:23:24 M Exp $
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );
//if ($standard)
//    return;
		$tpl = vmTemplate::getInstance();

	$product_types[0]["product_type_name"] = $dbag->f("product_type_name");
	
	// SELECT parameter value of product
	$q2  = "SELECT * FROM #__{vm}_product_type_".$dbag->f("product_type_id");
	$q2 .= " WHERE product_id='$product_id'";
	$dbp->query($q2);
		// SELECT parameter of Product Type
		$dba->query($q.$dbag->f("product_type_id")." ORDER BY parameter_list_order");
		$i=0; // parameter counter;
		while ($dba->next_record()) {
			$product_type_param[$i]["parameter_label"] = $dba->f("parameter_label");
			$parameter_description = $dba->f("parameter_description");
			$product_type_param[$i]["parameter_description"] = $parameter_description;
			if (!empty($parameter_description)) {
				$product_type_param[$i]["tooltip"] = vmToolTip($parameter_description, $VM_LANG->_('PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION'));
			}
			$product_type_param[$i]["parameter_value"] = $dbp->f($dba->f("parameter_name"));
			$product_type_param[$i]["parameter_unit"] = $dba->f("parameter_unit");
			$i++;
		}
		$product_types[0]["parameters"] = $product_type_param;
		$tpl->set( 'product_types', $product_types );
		$html = $tpl->fetch( 'common/product_type.tpl.php' );
		return $html;		
?>