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

$page_name = "Favorite Shared List";
  $q  = "SELECT * FROM #__{vm}_favorites_sh WHERE user_id='" . $auth["user_id"] . "'";
  $db->query($q);
?>

<table border="0" cellspacing="0" cellpadding="10" width="100%" align="center">
<tr>
   <td>
   <b><?php echo JText::_('VM_SHARE_FAVORITES'); ?></b>
   <br /><br />
   <?php
   	$option = $_GET["option"];
	$Itemid = $_GET["Itemid"];
	$function = $_GET['function'];
	$iswishlist = $_GET['is_wishlist'];
if ($db->f("user_id") < 1 & $function == "share" ){
	$share_title  = $_GET['share_title'];
	if ($share_title == ""){ echo "<font color=\"red\"><b>".JText::_('VM_FAVORITE_SH_NOTITLE')."</b></font><br /><br />";
	} else { 
	$share_desc  = $_GET['share_desc'];
    $Sql = "INSERT INTO #__{vm}_favorites_sh SET user_id='" . $auth["user_id"] . "', share_date=NOW(), share_title='" . $share_title . "', share_desc='" . $share_desc . "', isWishList='" . $iswishlist . "'";
  $db->query($Sql);
  $form_share_favorites = "<b><u>".JText::_('VM_FAVORITE_SHARED')."</b></u><br /><br />";
  echo $form_share_favorites;
  	}
}
 else if ($db->f("user_id") > 1  & $function == "share"){
	 		$share_title  = $_GET['share_title'];
	if ($share_title == ""){ echo "<font color=\"red\"><b>".JText::_('VM_FAVORITE_SH_NOTITLE')."</b></font><br /><br />";
	} else { 
	$share_desc  = $_GET['share_desc'];
	  		$Sql = "UPDATE #__{vm}_favorites_sh SET share_date=NOW(), share_title='" . $share_title . "', share_desc='" . $share_desc . "', isWishList='" . $iswishlist . "' WHERE user_id='" . $auth["user_id"] . "'";
  			$db->query($Sql);
  			$form_share_favorites = "<b><u>".JText::_('VM_FAVORITE_SH_UPDATED')."</b></u><br /><br />";
  			echo $form_share_favorites;
	  }
} 
 else if ($db->f("user_id") > 1  & $function == "unshare"){
	$share_desc  = $_GET['share_desc'];
	  		$Sql = "DELETE FROM #__{vm}_favorites_sh WHERE user_id='" . $auth["user_id"] . "'";
  			$db->query($Sql);
			$Sql = "UPDATE #__{vm}_favorites SET product_qty=-1 WHERE user_id='" . $auth["user_id"] . "'";
			$db->query($Sql);
  			$form_share_favorites = "<b><u>".JText::_('VM_FAVORITE_USH_UPDATED')."</b></u><br /><br />";
  			echo $form_share_favorites;
} 

		$q  = "SELECT * FROM #__{vm}_favorites_sh WHERE user_id='" . $auth["user_id"] . "'";
  		$db->query($q);
		$share_title = $db->f("share_title");
		$share_desc = $db->f("share_desc");
		$iswishlist = $db->f("isWishList");
		if ($iswishlist == 0) $wish_opt = "<option value=\"0\" selected=\"selected\">No</option><option value=\"1\">Yes</option>";
		else $wish_opt = "<option value=\"0\">No</option><option value=\"1\" selected=\"selected\">Yes</option>";
      	$form_share_favorites = "<script language=\"javascript\" type=\"text/javascript\">\n <!--\n function imposeMaxLength(Object, MaxLen)\n {\n return (Object.value.length <= MaxLen);\n }\n -->\n </script>\n";
	$form_share_favorites .= "<link href=\"../administrator/components/com_favorites/template.css\" rel=\"stylesheet\" type=\"text/css\" />\n<div align=\"left\">\n<form action=\"". $mm_action_url ."index.php\" method=\"GET\" name=\"share\" id=\"share\">\n
				<input type=\"hidden\" name=\"page\" value=\"account.favorite_sh\" />\n
				<input type=\"hidden\" name=\"option\" value=\"$option\" />\n
				<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />\n
				<input type=\"hidden\" name=\"function\" value=\"share\" />\n<b>"
				  .JText::_('VM_IS_WISHLIST')."</b>&nbsp;<select name=\"is_wishlist\" id=\"is_wishlist\">".$wish_opt."</select><br /><br />
                ".JText::_('VM_SHARE_TITLE')."<br /><input id=\"share_title\" class=\"inputbox\" size=\"35\" maxlength=\"32\" name=\"share_title\" value=\"". $share_title ."\" /><br /><br />
				".JText::_('VM_SHARE_DESC')."<br /><textarea id=\"share_desc\" class=\"inputbox\" cols=\"50\" rows=\"2\" name=\"share_desc\" onkeypress=\"return imposeMaxLength(this, 100);\" >". $share_desc ."</textarea><div style=\"clear:both\" /><br />
                  <input type=\"submit\" class=\"addtofav_button\" style=\"margin-right:8px\" value=\"".JText::_('VM_SHARE_BUTTON')."\" title=\"".JText::_('VM_SHARE_BUTTON')."\" />
              </form>\n</div>\n";
	$form_unshare_favorites = "<div align=\"left\">\n<form action=\"". $mm_action_url ."index.php\" method=\"GET\" name=\"share\" id=\"share\">\n
				<input type=\"hidden\" name=\"page\" value=\"account.favorite_sh\" />\n
				<input type=\"hidden\" name=\"option\" value=\"$option\" />\n
				<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />\n
				<input type=\"hidden\" name=\"function\" value=\"unshare\" />\n
                <input type=\"submit\" class=\"deletefav_button\" value=\"".JText::_('VM_UNSHARE_BUTTON')."\" title=\"".JText::_('VM_SHARE_BUTTON')."\" onclick=\"return confirm('".JText::_('VM_FAVORITE_UNSHARE_MSG')."')\" />
              </form>\n</div>\n";
	echo $form_share_favorites;
	echo $form_unshare_favorites;
?>
   </td>
</tr>
</table>
<!--</form> -->
<!-- Body ends here -->
