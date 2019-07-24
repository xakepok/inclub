<?php
defined('_JEXEC') or die;

// Access to module parameters
$isClub = RwHelper::isClub();
?>

<?php if ($isClub !== false): ?>
<div>
    <?php echo JText::sprintf('MOD_INCLUB_TEXT', JDate::getInstance($isClub)->format("d.m.Y"));?>
</div>
<?php endif;?>
