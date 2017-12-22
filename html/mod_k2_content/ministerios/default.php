<?php defined('_JEXEC') or die; ?>

<?php if(count($items)): ?>
<div class="list">
	<?php foreach ($items as $key=>$item):	?>
	<div class="col-4">
		<?php if($params->get('itemImage') && isset($item->image)): ?>
			<a class="itemimage" href="<?php echo $item->link; ?>">
				<img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>" />
			</a>
		<?php endif; ?>
		<?php if($params->get('itemTitle')): ?>
			<a class="itemtitle" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
		<?php endif; ?>
	</div>
	<?php endforeach; ?>
</div>
<?php endif; ?>
