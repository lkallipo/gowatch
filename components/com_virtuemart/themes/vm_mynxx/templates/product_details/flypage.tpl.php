<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
mm_showMyFileName(__FILE__);
 ?>
 
 <?php
//$document = &JFactory::getDocument();

//$document->addScript( 'modules/mod_roktabs/tmpl/roktabs.js' );
?>
<script type="text/javascript" src="modules/mod_roktabs/tmpl/roktabs1.js"></script>
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
			
		</div>
	</div>
	<div class="details-bottom-section">		
		<div class="clr"></div>
		<div class="infoBox">
		<table width="100%">
		  <tr>
			<td class="date">Χρόνος αποστολής</td>
			<td class="euro">Τρόποι πληρωμής</td>
			<td class="refund">Πολιτική επιστροφών</td>
			</tr>
		  <tr>
			<td class="infoBoxText"><div>Σηνήθως 2 ημέρες</div></td>
			<td class="infoBoxText">Έχουμε εγγυημένα τις χαμηλότερες τιμές από κάθε άλλο site. Για περισσότερες πληροφορίες πατήστε εδώ ή καλέστε στο 210123456789</td>
			<td class="infoBoxText">Σας προσφέρουμε 30 ημέρες για να επιστρέψετε το προϊόν που αγοράσατε και να πάρετεclass τα χρήματα σας.</td>
		  </tr>
		</table>
		</div>
		<div class="features">
		<script type="text/javascript">
		RokTabsOptions.mouseevent.push('click');
		RokTabsOptions.duration.push(600);
		RokTabsOptions.transition.push(Fx.Transitions.Circ.easeOut);
		RokTabsOptions.auto.push(0);
		RokTabsOptions.delay.push(2000);
		RokTabsOptions.type.push('fading');
	</script>
		<div class="tabs-top">
		<div class="roktabs-wrapper">
			<div class="roktabs base">
				<!--<div class="roktabs-arrows">
					<span class="previous">&larr;</span>
					<span class="next">&rarr;</span>
				</div>-->
				<div class="active-arrows" style="position: relative;">
				<div class="roktabs-links" style="overflow: hidden; position: relative;">
<ul class="roktabs-top">
<li class="first icon-left active" style="cursor: pointer;"><span>ΧΑΡΑΚΤΗΡΙΣΤΙΚΑ</span></li>
<li class="icon-left" style="cursor: pointer;"><span>ΣΥΣΚΕΥΑΣΙΑ</span></li>
<li class="icon-left" style="cursor: pointer;"><span>ΕΓΓΥΗΣΗ</span></li>
<li class="icon-left" style="cursor: pointer;"><span>ΚΡΙΤΙΚΕΣ</span></li>
<li class="last icon-left" style="cursor: pointer;"><span>ΕΡΩΤΗΣΕΙΣ</span></li>
</ul>
</div><div class="clear"></div></div>
				<div class="roktabs-container-tr">
					<div class="roktabs-container-tl">
						<div class="roktabs-container-br">
							<div class="roktabs-container-bl">
								<div class="roktabs-container-inner" style="visibility: visible; opacity: 1;">
									<div class="roktabs-container-wrapper" style="width: 50000px;">
										<div class="roktabs-tab1" >
	<div class="wrapper">
	<div id="main_features" style="float:left; width:300px;">
<table>
<tr><td class="featLbl"><?php echo $features_Sex_label ?></td><td><?php echo $features_Sex ?></td></tr>
<tr><td class="featLbl"><?php echo $features_CantranType_label ?></td><td><?php echo $features_CantranType ?></td></tr>
<tr><td class="featLbl"><?php echo $features_Mechanism_label ?></td><td><?php echo $features_Mechanism ?></td></tr>
<tr><td class="featLbl"><?php echo $features_Watch_Shape_label ?></td><td><?php echo $features_Watch_Shape ?></td></tr>
<tr><td class="featLbl"><?php echo $features_BinderType_label ?></td><td><?php echo $features_BinderType ?></td></tr></table></div>
<div id="sec_features" style="float:left;width:300px;">
<table>
<tr><td class="featLbl"><?php echo $features_BinderColor_label ?></td><td><?php echo $features_BinderColor ?></td></tr>
<tr><td class="featLbl"><?php echo $features_CantranColour_label ?></td><td><?php echo $features_CantranColour ?></td></tr>
<tr><td class="featLbl"><?php echo $features_Frame_label ?></td><td><?php echo $features_Frame ?></td></tr>
<tr><td class="featLbl"><?php echo $features_Extra_features_label ?></td><td><?php echo $features_Extra_features ?></td></tr>
<tr><td class="featLbl"><?php echo $features_WaterResistance_label ?></td><td><?php echo $features_WaterResistance ?></td></tr>
</table></div>
<div class="clr"></div>
       
		  		
	    </div></div>
<div class="roktabs-tab2" >
	<div class="wrapper">
edw gia ti siskeuasia</div></div>
<div class="roktabs-tab3" >
	<div class="wrapper">
<p>egiiisiiii.</p>	</div></div>
<div class="roktabs-tab4">
	<div class="wrapper">
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
		</div></div>
<div class="roktabs-tab5" >
	<div class="wrapper">
<div class="ask-seller">
				<?php echo $ask_seller ?>
			</div></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
							</div>
		</div>
	</div>
		</div>
		
	</div>
</div>