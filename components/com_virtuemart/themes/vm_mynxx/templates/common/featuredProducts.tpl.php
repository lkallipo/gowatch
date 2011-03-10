<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 

$iCol = 1;
$iRow = 1;

//Number of featured products to show per row
$featured_per_row = 2;
//Set the cell width
$cellwidth = intval( (100 / $featured_per_row) - 0 );

if( empty( $featured_products )) {
	return; // Do nothing, if there are no Featured!
}
//echo "<h3>".$VM_LANG->_('VM_FEATURED_PRODUCT')."</h3>";
echo '<div id="home-featured">';
foreach( $featured_products as $featured ) {
	?>
	<div style="float:left;width:<?php echo $cellwidth ?>%;" class="<?php echo printCellPosition($iRow,$iCol,$featured_per_row,$featured_products); ?>">
		<div class="home-featured-block">
			<div class="home-featured-inner">
            <?php
			if ( $featured["product_thumb"] ) { ?>
                <div class="home-featured-blockImageContainer"><a title="<?php echo $featured["product_name"] ?>" href="<?php $sess->purl(URL."index.php?option=com_virtuemart&amp;page=shop.product_details&amp;flypage=".$featured["flypage"]."&amp;product_id=".$featured["product_id"]) ?>"> 
				<?php echo ps_product::image_tag( $featured["product_thumb"], "class=\"browseProductImage\" border=\"0\" alt=\"".$featured["product_name"]."\"");
				?></a></div>
				<a title="<?php echo $featured["product_name"] ?>" href="<?php $sess->purl(URL."index.php?option=com_virtuemart&amp;page=shop.product_details&amp;flypage=".$featured["flypage"]."&amp;product_id=".$featured["product_id"]) ?>" class="browse-product-title"> 
					<?php echo $featured["product_name"] ?></a>
					<div class="home-featured-productPrice"><?php echo $featured['product_price'] ?></div>
            <?php
			}?>
            <?php echo $featured['product_s_desc'] ?><br />
            <?php echo $featured['form_addtocart'] ?>
			<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<?php
	// Do we need to close the current row now?
	if ($iCol == $featured_per_row) { // If the number of products per row has been reached
		echo "<br style=\"clear:both;\" />\n";
		$iCol = 1;
		$iRow++;
	}
	else {
		$iCol++;
	}
}
?>
</div>
<br style="clear:both;" />

<?php 
//helper function for getting the row position
function printCellPosition($row,$col, $featured_per_row, $featured_products) {

	$total_count = count($featured_products);
	$total_rows = $featured_per_row;
	$total_cols = intval(ceil($total_count / $featured_per_row));
	
	if ($row == 1) $rowpart = 't';
	elseif ($row == $total_rows) $rowpart = 'c';
	else $rowpart = 'b';
	
	if ($col == 1) $colpart = 'l';
	elseif ($col == $total_cols) $colpart = 'c';
	else $colpart = 'r';
	
	return $rowpart . $colpart;
	
}
?>
