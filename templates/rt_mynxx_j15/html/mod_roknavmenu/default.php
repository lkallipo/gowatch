<?php
/**
 * @package   Mynxx Template - RocketTheme
 * @version   1.5.7 August 19, 2010
 * @author    RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Rockettheme Mynxx Template uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

$menu->rowsPerColumn = intval($menu->getParameter("menuRowsPerColumn"));
$menu->columns = intval($menu->getParameter("menuColumns"));
$menu->multiColLevel = intval($menu->getParameter("menuMultiColLevel"));
?>
<?php
if ( ! defined('modRokNavMenuShowItems') )
{
function showItem(&$item,&$menu) {
    $column_class = '';
    $level = 'level'.$item->level;
    if ($item->level > 0) {
        if ($menu->multiColLevel == 0 or ($menu->multiColLevel > 0 and $item->level == $menu->multiColLevel)) {
            if ($menu->rowsPerColumn > 0) {
                $position = intval($item->order)-1;
                $column_class = ' c'. floor($position / $menu->rowsPerColumn); 
            } elseif ($menu->columns > 0) {
                $name = $item->title;
                $parent = $item->getParent();
                $siblings = intval($parent->hasChildren());
                $position = intval($item->order)-1;
                $column_class = ' c'. floor($position / ceil($siblings / $menu->columns));
            }
            
        }
        
        if (!isset($menu->$level->currentCol) or ($menu->$level->currentCol != $column_class)) {
            $menu->$level->currentCol = $column_class;
            $column_class .= ' coltop';
        }
    }
    
?>
<li <?php if($item->hasListItemClasses()) : ?>class="<?php echo $item->getListItemClasses();?> <?php echo $column_class; ?>"<?php endif;?> <?php if(isset($item->css_id)):?>id="<?php echo $item->css_id;?>"<?php endif;?>>
	<?php if ($item->type == 'menuitem') : ?>
		<a <?php if($item->hasLinkClasses()):?>class="<?php echo $item->getLinkClasses();?>"<?php endif;?> <?php if(isset($item->link)):?>href="<?php echo $item->link;?>"<?php endif;?> <?php if(isset($item->target)):?>target="<?php echo $item->target;?>"<?php endif;?> <?php if(isset($item->onclick)):?>onclick="<?php echo $item->onclick?>"<?php endif;?>>
			<?php if (isset($item->image)):?><img alt="<?php echo $item->alias;?>" src="<?php echo $item->image;?>"/><?php endif; ?>
			<span><?php echo $item->title;?></span>
		</a>	
	<?php elseif($item->type == 'separator') : ?>
	    <a <?php if($item->hasLinkClasses()):?>class="<?php echo $item->getLinkClasses();?>"<?php endif;?> >
			<span><?php echo $item->title;?></span>
		</a>
	<?php endif; ?>
	<?php if ($item->hasChildren()): ?>
	<?php
	$columnCount = 1;
	if ($menu->multiColLevel > 0 and (intval($item->level)+1 == $menu->multiColLevel)) {
   		if (($menu->rowsPerColumn > 0) and ($item->hasChildren() > $menu->rowsPerColumn)) {
               $columnCount = intval($item->hasChildren() / $menu->rowsPerColumn);
           } elseif ($menu->columns > 0) {
               $columnCount = $menu->columns;
           } 
       }
	?>
	<div class="drop-wrap columns-<?php echo $columnCount;?>">
	<ul class="png columns-<?php echo $columnCount;?>">
		<?php foreach ($item->getChildren() as $child) : ?>			
			<?php showItem($child,$menu); ?>
		<?php endforeach; ?>
	</ul>
	</div>
	<?php endif; ?>
	
</li>	
<?php
} 
define('modRokNavMenuShowItems', true);
}
?>
<ul class="menu<?php echo $menu->getParameter('class_sfx');?>" <?php if($menu->getParameter('tag_id') != null):?>id="<?php echo $menu->getParameter('tag_id');?>"<?php endif;?>>
	<?php foreach ($menu->getChildren() as $item) :  ?>
		<?php showItem($item,$menu); ?>
	<?php endforeach; ?>
</ul>
