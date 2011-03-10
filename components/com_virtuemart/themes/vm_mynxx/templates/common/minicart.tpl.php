<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

if ($empty_cart) {
	echo "";
} else {
	// Loop through each row and build the table
	foreach( $minicart as $cart ) { 		
		foreach( $cart as $attr => $val ) {
			// Using this we make all the variables available in the template
			// translated example: $this->set( 'product_name', $product_name );
			$this->set( $attr, $val );
		}

		if(!$vmMinicart) { // Build Minicart
			?>
			<div class="cart-listings">
				<div class="cart-qty">
				<?php echo $cart['quantity'] ?>&nbsp;x&nbsp;<a href="<?php echo $cart['url'] ?>"><?php echo $cart['product_name'] ?></a>
				</div>
				<div class="cart-price">
				<?php echo $cart['price'] ?>
				</div>
				<?php echo $cart['attributes'];
				echo "</div>";
		}
	}
	
	if(!$vmMinicart) { ?>
    	<div style="clear: both;"></div>
	<?php } ?>
	<div class="cart-totals">
		<div class="cart-qty" >
			<?php echo "<span class=\"total_products\">$total_products</span>"; ?>
		</div>
		<div class="cart-price">
			<?php echo $total_price ?>
		</div>
	</div>
	<?php if (!$empty_cart && !$vmMinicart) { ?>
    	<div class="show-cart-button"><?php echo $show_cart ?></div>
	<?php } 
}
echo $saved_cart;
?>