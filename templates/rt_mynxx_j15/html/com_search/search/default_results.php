	<?php // @version $Id: default_results.php 10381 2008-06-01 03:35:53Z pasamio $
defined('_JEXEC') or die('Restricted access');

?>

<?php if (!empty($this->searchword)) : ?>
<div class="searchintro">
	<p>
		<?php echo JText::_('Search Keyword') ?> <strong><?php echo $this->escape($this->searchword) ?></strong>
		<?php echo $this->result ?>
	</p>
	<p>
		<a href="#form1" class="readon" onclick="document.getElementById('search_searchword').focus();return false" onkeypress="document.getElementById('search_searchword').focus();return false" ><?php echo JText::_('Search_again') ?></a>
	</p>
</div>
<?php endif; ?>

<?php if (count($this->results)) : ?>
<div class="sidemod-title"><h3 class="side"><?php echo JText :: _('Search_result'); ?></h3></div>
<div class="results">
	<?php $start = $this->pagination->limitstart + 1; ?>
	<ol class="list" start="<?php echo  $start ?>">
		<?php foreach ($this->results as $result) : ?>
		<?php
		$text = $result->text;
		$text = preg_replace( '/\[.+?\]/', '', $text);
		?>	
		<li>
			<?php if ($result->href) : ?>
			<h4>
				<a href="<?php echo JRoute :: _($result->href) ?>" <?php echo ($result->browsernav == 1) ? 'target="_blank"' : ''; ?> >
					<?php echo $this->escape($result->title); ?></a>
			</h4>
			<?php endif; ?>
			<?php if ($result->section) : ?>
			<p><?php echo JText::_('Category') ?>:
				<span class="small">
					<?php echo $this->escape($result->section); ?>
				</span>
			</p>
			<?php endif; ?>

			<div class="description">
				<?php echo $text; ?>
			</div>
			<?php if  ( $this->params->get( 'show_date'  )) : ?>
			<span class="small">
  				<?php echo $result->created; ?>
			</span>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
	</ol>
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>
<?php else: ?>
<div class="noresults"></div>
<?php endif; ?>