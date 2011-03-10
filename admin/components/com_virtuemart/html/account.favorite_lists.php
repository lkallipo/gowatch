<?php
/**
* description: Virtuemart Add to Favourite Component
* Serjoka serjoka@gmail.com
* @package VirtueMart
* @subpackage classes
* @copyright Copyright (C) 2008-2011 MobyJam.net. All rights reserved.
* This program is distributed under the terms of the GNU General Public License
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

mm_showMyFileName( __FILE__ );

require_once(CLASSPATH.'ps_favorite_products.php');

require_once(CLASSPATH . 'ps_product.php' );

$user_id = $_GET['user_id'];

$ps_favorites = new ps_favorites;

$page_name = "Favorite List";
?>
<?php
  $q  = "SELECT *, u.name FROM #__{vm}_favorites fv, #__{vm}_favorites_sh sh, #__users u WHERE ";
  $q .= "fv.user_id='" . $user_id . "' AND fv.user_id = sh.user_id AND fv.user_id = u.id ";
  $q .= "ORDER BY fav_date DESC";
  $db->query($q);
  
  $uname = $db->f("name");
  $shdate = $db->f("share_date");
  $shtitle = $db->f("share_title");
  $shdesc = $db->f("share_desc");
  $iswishlist = $db->f("isWishList");
  
  echo $actionmessage;
?>

<!--<form action="<?php echo SECUREURL ?>index.php" method="post">
<input type="hidden" name="option" value="com_virtuemart" />
<input type="hidden" name="page" value="account.order_details" />
<input type="hidden" name="print" value="1" />
-->
<table border="0" cellspacing="0" cellpadding="10" width="100%" align="center">
<tr>
   <td>
   <b><?php if (!$db->f("product_id") =="") {
	   if ($iswishlist == 0) echo $uname."'s ".JText::_('VM_FAVORITE_LIST');
	   else echo $uname."'s ".JText::_('VM_WISHLIST_LIST');
	   }
	   ?></b>
   <br /><br />
   <b><?php echo $VM_LANG->_(PHPSHOP_USER_FORM_TITLE); ?>:</b> <?php echo $shtitle; ?>
   <br />
   <b><?php echo $VM_LANG->_(PHPSHOP_MANUFACTURER_FORM_DESCRIPTION); ?>:</b> <?php echo $shdesc; ?>
   <br /><br />
	<?php $ps_favorites->list_share("A","1",$user_id,$iswishlist); ?>
   <br />
 <!--  <input type="submit" class="button" name="submit" value="<?php echo JText::_('PHPSHOP_VIEW') ?>" /> -->
   </td>
</tr>
</table>
<!--</form> -->
<!-- Body ends here -->
