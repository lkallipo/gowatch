<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ?>

<?php
defined( 'vmToolTipCalled') or define('vmToolTipCalled', 1);
if( $this->get_cfg( 'showStoreDescriptionOnHome', 1 )) {
echo "<div class=\"vmStoreDesc\">".$vendor_store_desc."</div><br />";
}
if( $this->get_cfg( 'showFrontPageCategories', 1 )) {
echo "<div class=\"vmContentHeading\"><h2 class=\"contentheading\">".$VM_LANG->_('PHPSHOP_CATEGORIES')."</h2></div>";
echo $categories;
echo "<br />";
}
if( $this->get_cfg( 'showlatest', 1 )) {
echo "<div class=\"vmRecent\">";
echo $recent_products;
echo "</div>";
echo "<br />";
}
?>
<?php
// Show Featured Products
if( $this->get_cfg( 'showFeatured', 1 )) {
    /* featuredproducts(random, no_of_products,category_based) no_of_products 0 = all else numeric amount
    edit featuredproduct.tpl.php to edit layout */
    echo $ps_product->featuredProducts(true,10,false);
}
// Show Latest Products
if( $this->get_cfg( 'showlatest', 1 )) {
    /* latestproducts(random, no_of_products,month_based,category_based) no_of_products 0 = all else numeric amount
    edit latestproduct.tpl.php to edit layout */
    ps_product::latestProducts(true,10,false,false);
}
?>