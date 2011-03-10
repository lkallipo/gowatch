<div class="browse-page-block">
	<div class="browse-page-block-inner">
		<div class="home-featured-blockImageContainer">
		<!-- cleverweb: made image to be link to the product -->
		<a href="<?php echo $product_flypage ?>">
			<?php echo ps_product::image_tag( $product_thumb_image, 'class="browseProductImage" border="0" title="'.$product_name.'" alt="'.$product_name .'"' ) ?>
		</a>		
		</div>
		<a href="<?php echo $product_flypage ?>" class="browse-product-title"><?php echo $product_name ?></a>
		<div class="home-featured-productPrice">
			<?php echo $product_price ?>
		</div>
		<?php echo $product_s_desc ?> <a href="<?php echo $product_flypage ?>"> <?php echo $product_details ?></a>
		<?php echo $form_addtocart ?><br />
	</div>
</div>