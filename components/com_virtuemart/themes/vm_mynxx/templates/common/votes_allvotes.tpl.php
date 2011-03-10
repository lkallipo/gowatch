<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); ?>

<!-- The "Average Customer Rating: xxxxX (2 votes) " Part -->
<span class="contentpagetitle"><?php echo $VM_LANG->_('PHPSHOP_CUSTOMER_RATING') ?>:</span>
<img src="<?php echo VM_THEMEURL ?>images/stars/<?php echo $rating ?>.gif"  border="0" alt="<?php echo $rating ?> stars" />

<?php //echo $VM_LANG->_('PHPSHOP_TOTAL_VOTES').": ". $allvotes; ?>
