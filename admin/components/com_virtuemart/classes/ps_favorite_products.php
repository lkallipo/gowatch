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

class ps_favorites {
	var $classname = "ps_favorites";
	var $error;


	function list_order($order_status='A', $secure=0 ) {
		global $VM_LANG, $CURRENCY_DISPLAY, $sess, $limit, $limitstart, $keyword, $mm_action_url;

		$ps_vendor_id = $_SESSION["ps_vendor_id"];
		$auth = $_SESSION['auth'];
		require_once( CLASSPATH .'ps_html.php');
		require_once( CLASSPATH .'htmlTools.class.php');
		require_once(CLASSPATH . 'ps_product.php' );
		$ps_product = $GLOBALS['ps_product'] = new ps_product;
		require_once( CLASSPATH .'pageNavigation.class.php');
		$db = new ps_DB;
		$dbs = new ps_DB;
		$i = 0;
		$listfields = '*';
		$countfields = 'count(*) as num_rows';
		$count = "SELECT $countfields FROM #__{vm}_favorites ";
		$list = "SELECT $listfields FROM #__{vm}_favorites ";
		$q = "WHERE user_id='" . $auth["user_id"] . "' ";
		
		/*if( !empty( $keyword )) {
			$q .= "AND (order_id LIKE '%".$keyword."%' ";
			$q .= "OR order_number LIKE '%".$keyword."%' ";
			$q .= "OR order_total LIKE '%".$keyword."%') ";
		}*/
		$q .= "ORDER BY fav_date DESC";
		$count .= $q;

		$db->query($count);
		$num_rows = $db->num_rows();
		$db->next_record();
		
		$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

		$list .= $q .= " LIMIT ".$pageNav->limitstart.", $limit ";
		$db->query( $list );

		$listObj = new listFactory( $pageNav );

		/*if( $num_rows > 0 ) {
			// print out the search field and a list heading
			$listObj->writeSearchHeader( '', '', 'account', 'index');
		}*/
		
		// start the list table
		$option = $_GET["option"];
		$Itemid = $_GET["Itemid"];
		$listObj->startTable();

		$listObj->writeTableHeader( 4 );

		while ($db->next_record()) {
			$dbs->query( "SELECT p.product_id, p.product_parent_id, p.product_name, c.category_id, c.category_flypage, product_thumb_image FROM #__{vm}_product p, #__{vm}_product_price pp, #__{vm}_product_category_xref pc, #__{vm}_category c WHERE p.product_id='".$db->f("product_id")."' AND p.product_publish='Y' AND pc.product_id = p.product_id AND pp.product_id = p.product_id AND pc.category_id = c.category_id ");
			$dbs->next_record();
			$imagename = $dbs->f('product_thumb_image');
			$cat_id = $dbs->f("category_id");
			$product_id = $dbs->f("product_id");
			$product_name = $dbs->f("product_name");
			$product_price = $ps_product->show_price( $product_id );
			
			require_once(CLASSPATH . 'ps_product_attribute.php' );
$ps_product_attribute = new ps_product_attribute;
			 if (USE_AS_CATALOGUE != '1' && $product_price != "" && !stristr( $product_price, $VM_LANG->_('PHPSHOP_PRODUCT_CALL') )) {
				$form_addtocart = "<form action=\"". $mm_action_url ."index.php\" method=\"post\" name=\"addtocart\" id=\"". uniqid('addtocart_') ."\" class=\"addtocart_form\">\n
				  
					<input id=\"quantity_".$i."\" class=\"inputbox\" size=\"1\" name=\"quantity\" value=\"1\" />
					<input type=\"submit\" class=\"addtocart_button\" value=\"".$VM_LANG->_('PHPSHOP_CART_ADD_TO')."\" title=\"".$VM_LANG->_('PHPSHOP_CART_ADD_TO')."\" />
					<input type=\"hidden\" name=\"category_id\" value=\"". @intval($_REQUEST['category_id']) ."\" />\n
					<input type=\"hidden\" name=\"product_id\" value=\"". $dbs->f("product_id") ."\" />\n
					<input type=\"hidden\" name=\"prod_id[]\" value=\"". $dbs->f("product_id") ."\" />\n
					<input type=\"hidden\" name=\"page\" value=\"shop.cart\" />\n
					<input type=\"hidden\" name=\"func\" value=\"cartAdd\" />\n
					<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />\n
					<input type=\"hidden\" name=\"option\" value=\"$option\" />\n
				  </form>\n";
			}
			else $form_addtocart = "";
			//generate button to remove from favorites list
			$form_deletefavorite = "<link href=\"../administrator/components/com_favorites/template.css\" rel=\"stylesheet\" type=\"text/css\" />\n<form action=\"". $mm_action_url ."index.php\" method=\"GET\" name=\"deletefavo\" id=\"". uniqid('deletefavo_') ."\">\n
			
			<input type=\"submit\" class=\"deletefav_button\" value=\"".$VM_LANG->_('E_REMOVE')."\" title=\"".$VM_LANG->_('E_REMOVE')."\" onclick=\"return confirm('".$VM_LANG->_('PHPSHOP_DELETE_MSG')."')\" />
			<input type=\"hidden\" name=\"fav_id\" value=\"". $db->f("fav_id") ."\" />\n
			<input type=\"hidden\" name=\"page\" value=\"account.favorite_products\" />\n
			<input type=\"hidden\" name=\"function\" value=\"delete\" />\n
			<input type=\"hidden\" name=\"option\" value=\"$option\" />\n
			<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />\n
			<input type=\"hidden\" name=\"prod_name\" value=\"". $dbs->f("product_name") ."\" /> \n
			</form>\n";
			
       if ($i == 0) {
          $sectioncolor = "sectiontableentry2";
          $i += 1;
      }
      else {
          $sectioncolor = "sectiontableentry1";
          $i -= 1;
      } 
      if( !$db->f('category_flypage') ) {
      	$flypage = ps_product::get_flypage( $db->f('product_id'));
      }
      else {
      	$flypage = $db->f('category_flypage');
      }
      //$tt_item++;
      $pid = $db->f("product_parent_id") ? $db->f("product_parent_id") : $db->f("product_id");
	  
		//$deletebutton = "<a class=\"toolbar\" href=\"index2.php?option=com_virtuemart&page=account.favorite_products&func=delete&$id_fieldname=$id&keyword=". urlencode($keyword)."&limitstart=$limitstart".$extra."\" onclick=\"return confirm('".$VM_LANG->_('PHPSHOP_DELETE_MSG')."');\" onmouseout=\"MM_swapImgRestore();\"  onmouseover=\"MM_swapImage('delete$id','','". IMAGEURL ."ps_image/delete_f2.gif',1);\">";
		//$deletebutton .= "<img src=\"". IMAGEURL ."ps_image/delete.gif\" alt=\"Delete this record\" name=\"delete$id\" align=\"middle\" border=\"0\" />";
		//$deletebutton .= "</a>";
			$listObj->newRow();
			
			$tmp_cell = "<div style=\"text-align:center;\">".$db->f("fav_date")."</div>";				
			$listObj->addCell( $tmp_cell );
			
			$tmp_cell = "<div style=\"width:120px; text-align:center\"><a href=\"". $sess->url( $mm_action_url."index.php?page=shop.product_details&flypage=$flypage&product_id=" . $pid . "&category_id=" . $cat_id )."\">\n";
			
			if ($imagename==""){
			$tmp_cell .= "<img src=\"".IMAGEURL.NO_IMAGE."\" alt=\"".$product_name."\" style=\"border: 0px solid; padding:5px 0px 0px 5px;\"/></a>";
			$tmp_cell .="</div>";
			}
			else{
			$tmp_cell .= "<img src=\"components/com_virtuemart/shop_image/product/".$imagename."\" alt=\"".$product_name."\" style=\"border: 0px solid; padding:5px 0px 0px 5px;\"/></a>";
			$tmp_cell .="</div>";
			}
			
			$listObj->addCell( $tmp_cell );	
				$tmp_cell = "<div style=\"text-align:center; width:150px;\">";
				$tmp_cell .= "<img src=\"".IMAGEURL."ps_image/goto.png\" style=\"margin-left:-27px\" height=\"16\" width=\"16\" align=\"middle\" border=\"0\" alt=\"".$VM_LANG->_('PHPSHOP_ORDER_LINK')."\" />&nbsp;&nbsp;";
				$tmp_cell .= "<a href=\"". $sess->url( $mm_action_url."index.php?page=shop.product_details&flypage=$flypage&product_id=" . $pid . "&category_id=" . $cat_id )."\">".$product_name."</a>";
				if (_SHOW_PRICES == '1') { 
						$tmp_cell .= "<br />".$product_price;
					}
				$tmp_cell .= "<br /><strong>".$VM_LANG->_('PHPSHOP_ORDER_PRINT_PO_NUMBER').":</strong> ".sprintf("%08d", $db->f("fav_id"));
				$tmp_cell .= "</div>";
			$listObj->addCell( $tmp_cell );
			$tmp_cell = "<div style=\"text-align:right;\">";
			$tmp_cell .= $form_addtocart .="<br/>";
			$tmp_cell .= $form_deletefavorite;
			$tmp_cell .="</div>";
			$listObj->addCell( $tmp_cell );
		}
		$listObj->writeTable();
		$listObj->endTable();
		if( $num_rows > 0 ) {
			$listObj->writeFooter( $keyword );
		}
		
	}
	
	function list_share($order_status='A', $secure=0, $usr_id=999999, $iswishlist=0) {
		global $VM_LANG, $CURRENCY_DISPLAY, $sess, $limit, $limitstart, $keyword, $mm_action_url;

		$ps_vendor_id = $_SESSION["ps_vendor_id"];
		$auth = $_SESSION['auth'];
		require_once( CLASSPATH .'ps_html.php');
		require_once( CLASSPATH .'htmlTools.class.php');
		require_once(CLASSPATH . 'ps_product.php' );
		$ps_product = $GLOBALS['ps_product'] = new ps_product;
		require_once( CLASSPATH .'pageNavigation.class.php');
		$db = new ps_DB;
		$dbs = new ps_DB;
		$i = 0;
		$listfields = '*';
		$countfields = 'count(*) as num_rows';
		$count = "SELECT $countfields FROM #__{vm}_favorites ";
		$list = "SELECT $listfields FROM #__{vm}_favorites ";
		$q = "WHERE user_id='" . $usr_id . "' ";
		
		/*if( !empty( $keyword )) {
			$q .= "AND (order_id LIKE '%".$keyword."%' ";
			$q .= "OR order_number LIKE '%".$keyword."%' ";
			$q .= "OR order_total LIKE '%".$keyword."%') ";
		}*/
		$q .= "ORDER BY fav_date DESC";
		$count .= $q;

		$db->query($count);
		$db->next_record();
		
		$pageNav = new vmPageNav( $num_rows, $limitstart, $limit );

		$list .= $q .= " LIMIT ".$pageNav->limitstart.", $limit ";
		$db->query( $list );

		$listObj = new listFactory( $pageNav );

		if( $num_rows > 0 ) {
			// print out the search field and a list heading
			//$listObj->writeSearchHeader( '', '', 'account', 'index');
		}
		// start the list table
		$option = $_GET["option"];
		$Itemid = $_GET["Itemid"];
		$listObj->startTable();

		$listObj->writeTableHeader( 3 );

		while ($db->next_record()) {
			$dbs->query( "SELECT p.product_id, p.product_parent_id, p.product_name, c.category_id, c.category_flypage, product_thumb_image FROM #__{vm}_product p, #__{vm}_product_price pp, #__{vm}_product_category_xref pc, #__{vm}_category c WHERE p.product_id='".$db->f("product_id")."' AND p.product_publish='Y' AND pc.product_id = p.product_id AND pp.product_id = p.product_id AND pc.category_id = c.category_id ");
			$dbs->next_record();
			$imagename = $dbs->f('product_thumb_image');
			$cat_id = $dbs->f("category_id");
			$product_id = $dbs->f("product_id");
			$product_name = $dbs->f("product_name");
			$product_price = $ps_product->show_price( $product_id );
			require_once(CLASSPATH . 'ps_product_attribute.php' );
			$ps_product_attribute = new ps_product_attribute;
			if (USE_AS_CATALOGUE != '1' && $product_price != "" && !stristr( $product_price, $VM_LANG->_('PHPSHOP_PRODUCT_CALL') )) {
				if ($iswishlist == 1 && $db->f("product_qty") <> 0){
				$form_addtocart = "<form action=\"". $mm_action_url ."index.php\" method=\"post\" name=\"addtocart\" id=\"". uniqid('addtocart_') ."\" class=\"addtocart_form\">\n
					<input type=\"submit\" class=\"addtocart_button\" value=\"".JText::_('VM_WISHLIST_GIFTIT')."\" title=\"".JText::_('VM_WISHLIST_GIFTIT')."\" />
					<input type=\"hidden\" id=\"quantity_".$i."\" class=\"inputbox\" size=\"1\" name=\"quantity\" value=\"1\" />
					<input type=\"hidden\" name=\"category_id\" value=\"". @intval($_REQUEST['category_id']) ."\" />\n
					<input type=\"hidden\" name=\"product_id\" value=\"". $dbs->f("product_id") ."\" />\n
					<input type=\"hidden\" name=\"prod_id[]\" value=\"". $dbs->f("product_id") ."\" />\n
					<input type=\"hidden\" name=\"page\" value=\"shop.cart\" />\n
					<input type=\"hidden\" name=\"func\" value=\"cartAdd\" />\n
					<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />\n
					<input type=\"hidden\" name=\"option\" value=\"$option\" />\n
				  </form>\n";
				  }
				  else if ($iswishlist == 1 && $db->f("product_qty") == 0) $form_addtocart = "<font color=\"red\" style=\"font-size:20px;text-align:center\"><strong>".JText::_('VM_WISHLIST_UNAVAILABLE')."</strong></font>";
				  else {
					  $form_addtocart = "<form action=\"". $mm_action_url ."index.php\" method=\"post\" name=\"addtocart\" id=\"". uniqid('addtocart_') ."\" class=\"addtocart_form\">\n
				  
					<input type=\"submit\" class=\"addtocart_button\" value=\"".$VM_LANG->_('PHPSHOP_CART_ADD_TO')."\" title=\"".$VM_LANG->_('PHPSHOP_CART_ADD_TO')."\" />
					<input id=\"quantity_".$i."\" class=\"inputbox\" size=\"1\" name=\"quantity\" value=\"1\" />
					<input type=\"hidden\" name=\"category_id\" value=\"". @intval($_REQUEST['category_id']) ."\" />\n
					<input type=\"hidden\" name=\"product_id\" value=\"". $dbs->f("product_id") ."\" />\n
					<input type=\"hidden\" name=\"prod_id[]\" value=\"". $dbs->f("product_id") ."\" />\n
					<input type=\"hidden\" name=\"page\" value=\"shop.cart\" />\n
					<input type=\"hidden\" name=\"func\" value=\"cartAdd\" />\n
					<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />\n
					<input type=\"hidden\" name=\"option\" value=\"$option\" />\n
				  </form>\n";
				  }
 			}
			else $form_addtocart = "";
       if ($i == 0) {
          $sectioncolor = "sectiontableentry2";
          $i += 1;
      }
      else {
          $sectioncolor = "sectiontableentry1";
          $i -= 1;
      } 
      if( !$db->f('category_flypage') ) {
      	$flypage = ps_product::get_flypage( $db->f('product_id'));
      }
      else {
      	$flypage = $db->f('category_flypage');
      }
      //$tt_item++;
      $pid = $db->f("product_parent_id") ? $db->f("product_parent_id") : $db->f("product_id");
	  
			$listObj->newRow();
			
			$tmp_cell = "<div style=\"text-align:center;\">".$db->f("fav_date")."</div>";				
			$listObj->addCell( $tmp_cell );
			
			$tmp_cell = "<div style=\"width:120px; text-align:center\"><a href=\"". $sess->url( $mm_action_url."index.php?page=shop.product_details&flypage=$flypage&product_id=" . $pid . "&category_id=" . $cat_id )."\">\n";
			
			if ($imagename==""){
			$tmp_cell .= "<img src=\"".IMAGEURL.NO_IMAGE."\" alt=\"".$product_name."\" style=\"border: 0px solid; padding:5px 0px 0px 5px;\"/></a>";
			$tmp_cell .="</div>";
			}
			else{
			$tmp_cell .= "<img src=\"components/com_virtuemart/shop_image/product/".$imagename."\" alt=\"".$product_name."\" style=\"border: 0px solid; padding:5px 0px 0px 5px;\"/></a>";
			$tmp_cell .="</div>";
			}
			
			$listObj->addCell( $tmp_cell );	
				$tmp_cell = "<div style=\"text-align:center; width:150px;\">";
				$tmp_cell .= "<img src=\"".IMAGEURL."ps_image/goto.png\" style=\"margin-left:-27px\" height=\"16\" width=\"16\" align=\"middle\" border=\"0\" alt=\"".$VM_LANG->_('PHPSHOP_ORDER_LINK')."\" />&nbsp;&nbsp;";
				$tmp_cell .= "<a href=\"". $sess->url( $mm_action_url."index.php?page=shop.product_details&flypage=$flypage&product_id=" . $pid . "&category_id=" . $cat_id )."\">".$product_name."</a>";
				if (_SHOW_PRICES == '1') {
				$tmp_cell .= "<br />".$product_price;
				}
				if ($iswishlist == 1 && $db->f("product_qty") > -1) $tmp_cell .= "<br /><strong>".JText::_('VM_WISHLIST_AVAILABLE').":</strong> ".sprintf($db->f("product_qty"));
				else if ($iswishlist == 1 && $db->f("product_qty") <= -1) $tmp_cell .= "<br /><strong>".JText::_('VM_WISHLIST_AVAILABLE').":</strong> ".JText::_('VM_WISHLIST_UNLIMITED');
				$tmp_cell .= "</div>";
			$listObj->addCell( $tmp_cell );
			$tmp_cell = "<div style=\"text-align:right;\">";
			$tmp_cell .= $form_addtocart;
			$tmp_cell .="</div>";
			$listObj->addCell( $tmp_cell );
		}
		$listObj->writeTable();
		$listObj->endTable();
		if( $num_rows > 0 ) {
			$listObj->writeFooter( $keyword );
		}

	}

	function order_print_navigation( $order_id=1 ) {
		global $sess, $modulename, $VM_LANG;

		$navi_db = new ps_DB;

		$navigation = "<br /><div align=\"center\">\n<strong>\n";
		$q = "SELECT order_id FROM #__{vm}_orders WHERE ";
		$q .= "order_id < '$order_id' ORDER BY order_id DESC";
		$navi_db->query($q);
		$navi_db->next_record();
		if ($navi_db->f("order_id")) {
			$url = $_SERVER['PHP_SELF'] . "?page=$modulename.order_print&order_id=";
			$url .= $navi_db->f("order_id");
			$navigation .= "<a class=\"pagenav\" href=\"" . $sess->url($url) . "\">" .$VM_LANG->_('ITEM_PREVIOUS')."</a> | ";
		} else
		$navigation .= "<span class=\"pagenav\">" .$VM_LANG->_('ITEM_PREVIOUS')." | </span>";

		$q = "SELECT order_id FROM #__{vm}_orders WHERE ";
		$q .= "order_id > '$order_id' ORDER BY order_id";
		$navi_db->query($q);
		$navi_db->next_record();
		if ($navi_db->f("order_id")) {
			$url = $_SERVER['PHP_SELF'] . "?page=$modulename.order_print&order_id=";
			$url .= $navi_db->f("order_id");
			$navigation .= "<a class=\"pagenav\" href=\"" . $sess->url($url) ."\">". $VM_LANG->_('ITEM_NEXT')."</a>";
		} else
		$navigation .= "<span class=\"pagenav\">".$VM_LANG->_('ITEM_NEXT')."</span>";

		$navigation .= "\n</strong>\n</div>\n";

		return $navigation;
	}

}
$ps_favorites = new ps_favorites;

?>