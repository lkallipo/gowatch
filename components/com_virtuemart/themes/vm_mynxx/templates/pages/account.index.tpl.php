<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version $Id: account.index.tpl.php 1443 2008-06-30 18:39:22Z soeren_nb $
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/

if ($perm->is_registered_customer($auth['user_id'])) {

?>
<div class="account-maintenance">
  <span class="customer-account"><?php echo $VM_LANG->_('PHPSHOP_ACC_CUSTOMER_ACCOUNT') ?></span>
  <?php  echo $auth["first_name"] . " " . $auth["last_name"] . "<br />";?>
  <table border="0" cellspacing="0" cellpadding="10" width="100%" align="center">
  
<?php if( $my->id > 0)  { ?>
    <tr>
      <td>
      <strong><a href="<?php $sess->purl(SECUREURL . "index.php?page=account.billing") ?>" class="account-maint">
          <?php 
          echo "<img src=\"".VM_THEMEURL."images/identity.png\" class=\"account-img\" border=\"0\" alt=\"".$VM_LANG->_('PHPSHOP_ACCOUNT_TITLE')."\" />";
          echo $VM_LANG->_('PHPSHOP_ACC_ACCOUNT_INFO') ?></a></strong>
          <?php echo $VM_LANG->_('PHPSHOP_ACC_UPD_BILL') ?>
      </td>
    </tr>
    <?php
    if(NO_SHIPTO != '1') {
	?>
		<tr>
		  <td>
		  <strong><a href="<?php $sess->purl(SECUREURL . "index.php?page=account.shipping") ?>" class="account-maint"><?php
                  echo "<img src=\"".VM_THEMEURL."images/web.png\" class=\"account-img\" border=\"0\" alt=\"".$VM_LANG->_('PHPSHOP_ACC_SHIP_INFO')."\" />";
                  echo $VM_LANG->_('PHPSHOP_ACC_SHIP_INFO') ?></a></strong>
                        <?php echo $VM_LANG->_('PHPSHOP_ACC_UPD_SHIP') ?>
                  </td>
                </tr>
                <?php
	}
	?>
<?php } ?>
    <tr>
      <td>
      	<strong><?php 
	      echo "<img src=\"".VM_THEMEURL."images/package.png\" class=\"account-img\" border=\"0\" alt=\"".$VM_LANG->_('PHPSHOP_ACC_ORDER_INFO')."\" />";
	      echo $VM_LANG->_('PHPSHOP_ACC_ORDER_INFO') ?>
	    </strong>
        <?php $ps_order->list_order("A", "1" ); ?>
      </td>
    </tr>
    
</table>
</div>
<!-- Body ends here -->
<?php } 
else { 
	// You're not allowed... you need to login.
    echo $VM_LANG->_('DO_LOGIN') .'<br/><br/><br/>';
    include(PAGEPATH.'checkout.login_form.php');
} ?>