<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ?>

<?php 
if( $this->get_cfg( 'showPathway' )) {
	echo "<div class=\"pathway\">$navigation_pathway</div>";
}
?>

<table border="1" style="width: 100%;">
  <tbody>
  <tr style="line-height: 10px;"><td> <div ><a href='javascript:history.go(-1)' class="back_button">&nbsp; <?php //echo $VM_LANG->_('BACK') ?></a><?php echo $features_Sex ?></div> </td>
  <td > 
  <?php echo $buttons_header // The PDF, Email and Print buttons ?>
  </td>
  <td><div style="float:right; width:100%;">
  <?php 
   if( $this->get_cfg( 'showPathway' )) {
	echo "<div class=\"pathway\">$navigation_pathway</div>";
   } 
  if( $this->get_cfg( 'product_navigation', 1 )) {
	if( !empty( $previous_product )) {
		echo '<a class="previous_page" href="'.$previous_product_url.'">'.shopMakeHtmlSafe($previous_product['product_name']).'</a>';
	}
	if( !empty( $next_product )) {		
		echo '<a class="next_page" href="'.$next_product_url.'">'.shopMakeHtmlSafe($next_product['product_name']).'</a>';
	}
}
?> </div></td>
	<tr>
	  <td rowspan="2" valign="top" style="text-align:center;"><br/>
	  	<?php echo $product_image ?>
	  	<br/><br/>
	  	<?php if( !empty($images)) { ?>
		  	<div class="thumbnailListContainer">
		  		<h5><?php echo $VM_LANG->_('PHPSHOP_MORE_IMAGES') ?></h5>
		  		<?php 
					echo $this->vmListAdditionalImages( $product_id, $images );
		  		?>
		  	</div>
		 <?php } 	?>
	  </td>
	  <td rowspan="1" colspan="2">
	  <h1><?php echo $product_name ?> <?php echo $edit_link ?></h1>
	  </td>
	</tr>
	<tr>
      <td width="33%" valign="top" align="left">
      	<?php echo $product_price_lbl ?>
      	<?php echo $product_price ?><br /></td>
      <td valign="top"><?php echo $product_packaging ?><br /></td>
	</tr>
	<tr>
	  <td colspan="3">
	  	<a class="button" onclick="protoPop( this.href.replace(/index.php/, 'index2.php' ) + '&only_page=1', { modal: true,width:640,height:480 } );return false;" href="<?php echo $ask_seller_href ?>"><?php echo $ask_seller_text ?></a>
	  </td>
	</tr>
	<tr>
	  <td rowspan="1" colspan="3"><hr />
	  	<?php echo $product_description ?><br/>
	  	<span style="font-style: italic;"><?php echo $file_list ?></span>
	  </td>
	</tr>
	<tr>
	  <td><?php 
	  		if( $this->get_cfg( 'showAvailability' )) {
	  			echo $product_availability; 
	  		}
	  		?><br />
	  </td>
	  <td colspan="2"><br /><?php echo $addtocart ?></td>
	</tr>
	<tr>
	  <td colspan="3"><?php echo $product_type ?></td>
	</tr>
	<tr>
	  <td colspan="3"><hr /><?php echo $product_reviews ?></td>
	</tr>
	<tr>
	  <td colspan="3"><?php echo $product_reviewform ?><br /></td>
	</tr>
	<tr>
	  <td colspan="3"><?php echo $related_products ?><br />
	   </td>
	</tr>
	<?php if( $this->get_cfg('showVendorLink')) { ?>
	<tr>
	  <td colspan="3"><div style="text-align: center;"><?php echo $vendor_link ?><br /></div><br /></td>
	</tr>
	<?php } ?>
  </tbody>
</table>
<?php if( !empty( $navigation_childlist )) { ?>
	<?php echo $VM_LANG->_('PHPSHOP_MORE_CATEGORIES') ?><br />
	<?php echo $navigation_childlist ?><br style="clear:both"/>
<?php } ?>
