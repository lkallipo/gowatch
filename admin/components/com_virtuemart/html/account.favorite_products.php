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

if(isset($_GET['fav_id'])){
$fav_id = $_GET['fav_id'];
$product_name = $_GET ['prod_name'];

if ( is_numeric ($fav_id)) {
$actionmessage = "<div align=\"center\" style=\"color:#666666; font-size:16px; padding:25px\">". JText::_('VM_DELETED_TITLE') ." <strong>".$product_name." </strong> ". JText::_('VM_DELETED_TITLE2')."</div>";
$qd = "DELETE FROM #__{vm}_favorites WHERE fav_id = ".$fav_id;
$db->query($qd);
 } 
 echo $actionmessage;
}

$ps_favorites = new ps_favorites;

$page_name = "Favorite List";
?>
<?php
  $q  = "SELECT * FROM #__{vm}_favorites WHERE ";
  $q .= "user_id='" . $auth["user_id"] . "' ";
  $q .= "ORDER BY fav_date DESC";
  $db->query($q);
  
 

  if ($db->f("product_id") =="") {
  echo "<br /><br /><br /><strong>";
  echo "<div align=\"center\" style=\"color:#C00; font-size:14px\">". JText::_('VM_FAVORITE_EMPTY')."</div>";
  echo "</strong>";
  }
?>

<!--<form action="<?php echo SECUREURL ?>index.php" method="post">
<input type="hidden" name="option" value="com_virtuemart" />
<input type="hidden" name="page" value="account.order_details" />
<input type="hidden" name="print" value="1" />
-->
<table border="0" cellspacing="0" cellpadding="10" width="100%" align="center">
<tr>
   <td>
   <b><?php if (!$db->f("product_id") =="") {echo JText::_('VM_FAVORITE_LIST');} ?></b>
   <br />
   <br />
	<?php $ps_favorites->list_order("A","1"); ?>
   <br />
 <!--  <input type="submit" class="button" name="submit" value="<?php echo JText::_('PHPSHOP_VIEW') ?>" /> -->
   </td>
</tr>
</table>
<!--</form> -->
<!-- Body ends here -->
