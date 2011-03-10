<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ?>
<div class="related-products-main">
<h3><?php echo $VM_LANG->_('PHPSHOP_RELATED_PRODUCTS_HEADING') ?></h3>
    <?php 
    while( $products->next_record() ) { ?>
	<div class="related-products-listing">
      	<?php echo $ps_product->product_snapshot( $products->f('product_sku') ) ?>
	</div>
	<?php 
    }
	?>
</div>
