<?php defined('_JEXEC') or die; ?>

<?php if(count($items)): ?>
<div class="carousel-testimonios">
	<?php foreach ($items as $key=>$item):	?>
	<div class="item-testimonio">
		<?php if($params->get('itemIntroText')): ?>
			<?php echo $item->introtext; ?>
		<?php endif; ?>
		<?php if($params->get('itemTitle')): ?>
			<h3 class="center">- <?php echo $item->title; ?></h3>
		<?php endif; ?>
	</div>
	<?php endforeach; ?>
</div>
<?php endif; ?>
