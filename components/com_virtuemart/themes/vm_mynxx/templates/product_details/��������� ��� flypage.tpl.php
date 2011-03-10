<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
mm_showMyFileName(__FILE__);
 ?>
 
<div id="product-details-page">
	
	<!--<?php echo $buttons_header // The PDF, Email and Print buttons ?>-->
	<?php
	if( $this->get_cfg( 'showPathway' )) {
		echo "<div class=\"pathway\">$navigation_pathway</div>";
	}
	?>
	<div id="prod-navigation-bar">
	<?php
	if( $this->get_cfg( 'product_navigation', 1 )) {
		if( !empty( $previous_product )) {
			echo '<a class="previous_page" href="'.$previous_product_url.'">'.shopMakeHtmlSafe($previous_product['product_name']).'</a>';
		}
		if( !empty( $next_product )) {		
			echo '<a class="next_page" href="'.$next_product_url.'">'.shopMakeHtmlSafe($next_product['product_name']).'</a>';
		}
	}
	?>
	</div>
	<?php  if( $this->get_cfg('showManufacturerLink') ) ?>
	<div class="details-padding">
		<div class="product-image">
			<div class="product-image-first"><?php echo $product_image ?></div>
			<div class="product-image-add"><?php echo $this->vmlistAdditionalImages( $product_id, $images ) ?></div>
		</div>
		<div class="details-right-column">
	  		<h1><?php echo $product_name ?> <?php echo $edit_link ?></h1>
			<div class="product-sku">
				<?php echo 'Κωδικός Προϊόντος: <span>'.$product_sku.'</span>' ?>
			</div>
			<div class="product-description">
				<?php echo $product_description ?>
			</div>
			<!--<div class="product-price-label">
				<?php echo $product_price_lbl ?>
			</div>-->
	      	<div class="product-price">
				<?php echo $product_price ?>
				<div class="clr"></div><div class="fpa">με ΦΠΑ</div>
			</div>			
			
			
			<div class="show-availability">
				<?php 
		  			if( $this->get_cfg( 'showAvailability' )) {
		  				echo $product_availability; 
		  			}
		  		?>
			</div>
			<div class="product-rating">
				<?php echo $product_rating ?>
			</div><br />
			<div class="add-cart">
				<div class="add-cart-inner">
					<?php echo $addtocart ?>
				</div>
		    </div>
			<div class="product-packaging">
				<?php echo $product_packaging ?>
			</div>
			<div class="ask-seller">
				<?php echo $ask_seller ?>
			</div>
		  	<span style="font-style: italic;">
				<?php echo $file_list ?>
			</span>
			
			<div class="recent-products-list">
				<?php 
				if( !empty( $recent_products )) { ?>
					<div class="vmRecent">
						<?php echo $recent_products; ?>
					</div>
				<?php 
				}
				if( !empty( $navigation_childlist )) { ?>
					<?php echo $VM_LANG->_('PHPSHOP_MORE_CATEGORIES') ?><br />
					<?php echo $navigation_childlist ?><br style="clear:both"/>
				<?php 
				} ?>
			</div>
			<div class="related-products">
		  		<?php echo $related_products ?>
			</div>
			<?php if( $this->get_cfg('showVendorLink')) { ?>
			<div class="vendor-link">
			  	<?php echo $vendor_link ?>
			</div>
			<?php  } ?>
		</div>
	</div>
	<div class="details-bottom-section">		
		<div class="clr"></div>
		<div class="infoContainer"></div>
		<div class="product-type">
		  		<?php echo $features_Sex ?>
	    </div>
		<?php if (!empty($product_reviewform)) : ?>
		<div class="product-reviewform">
			<div class="product-reviewform-inner">
				<?php echo $product_reviewform ?>
			</div>
		</div>
		<?php endif; ?>
		<div class="product-reviews">
			<div class="product-reviews-inner">
	  			<?php echo $product_reviews ?>
			</div>
		</div>
	</div>
</div>