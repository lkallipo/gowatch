<?php // @version $Id: default_form.php 10381 2008-06-01 03:35:53Z pasamio $
defined('_JEXEC') or die('Restricted access');
?>

<div class="sidemod-title"><h3 class="side"><?php echo JText::_('search_again'); ?></h3></div>
<form action="<?php echo JRoute::_( 'index.php?option=com_search#content' ) ?>" method="post" class="search_result">
<a name="form1"></a>
<fieldset class="word">
<label for="search_searchword"><?php echo JText::_('Search Keyword') ?> </label>
<input type="text" name="searchword" id="search_searchword"  maxlength="20" value="<?php echo $this->escape($this->searchword) ?>" class="inputbox" />
</fieldset>

<fieldset class="phrase">
<legend><?php echo JText::_('Search Parameters') ?></legend>
<label for="ordering" class="ordering"><?php echo JText::_('Ordering') ?>:</label>
<?php echo $this->lists['ordering']; ?>
<?php echo $this->lists['searchphrase']; ?>
</fieldset>

<?php if ($this->params->get('search_areas', 1)) : ?>


<!--

cleverweb: removed advanced search categories and karfoto mono area = categories

<fieldset class="only"><legend><?php echo JText::_('Search Only') ?>:</legend>

	<?php foreach ($this->searchareas['search'] as $val => $txt) : ?>
		<?php $checked = is_array($this->searchareas['active']) && in_array($val, $this->searchareas['active']) ? 'checked="true"' : ''; ?>
		<input type="checkbox" name="areas[]" value="<?php echo $val ?>" id="area_<?php echo $val ?>" <?php echo $checked ?> />
		<label for="area_<?php echo $val ?>">
		<?php echo JText::_($txt); ?>
		</label>
	<?php endforeach; ?>

-->
<input type="checkbox" name="areas[]" value="categories" id="area_categories" checked="checked" style="display:none"/>
	
</fieldset>
<?php endif; ?>
<p>
	<button name="Search" onClick="this.form.submit()" class="button"><?php echo JText::_( 'Search' );?></button>
</p>


<?php if (count($this->results)) : ?>
<div class="display">
<label for="limit"><?php echo JText :: _('Display Num') ?></label>
	<?php echo $this->pagination->getLimitBox(); ?>
	<p>
		<?php echo $this->pagination->getPagesCounter(); ?>
	</p>
</div>
<?php endif; ?>

<input type="hidden" name="task"   value="search" />
</form>