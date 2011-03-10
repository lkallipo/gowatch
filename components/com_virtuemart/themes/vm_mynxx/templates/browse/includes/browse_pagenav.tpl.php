<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
mm_showMyFileName(__FILE__); ?>
<?php if(!@is_object( $pagenav)) return;  ?>
<!-- BEGIN PAGE NAVIGATION -->
<div class="pagenav-bar">
	<div class="pagenav-bar-padding">
		<div class="browse-page-limitbox">
			<?php if( $show_limitbox ) { ?>
				<form action="<?php echo $search_string ?>" method="post">
					<?php echo $VM_LANG->_('PN_DISPLAY_NR') ?>&nbsp;&nbsp;
					<?php $pagenav->writeLimitBox( $search_string ); ?>
					<noscript><input class="button" type="submit" value="<?php echo $VM_LANG->_('PHPSHOP_SUBMIT') ?>" /></noscript>
				</form>
		</div>
		<div class="limitbox-results-text">
			<?php
			}
			$pagenav->writePagesCounter();
			?>
		</div>
		<div class="browse-page-navigation">
			<?php $pagenav->writePagesLinks( $search_string ); ?>
		</div>
	</div>
</div>
<!-- END PAGE NAVIGATION -->