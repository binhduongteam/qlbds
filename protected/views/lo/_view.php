<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tinhtrang')); ?>:</b>
	<?php echo CHtml::encode($data->tinhtrang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sanpham_id')); ?>:</b>
	<?php echo CHtml::encode($data->sanpham_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('malo')); ?>:</b>
	<?php echo CHtml::encode($data->malo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toado')); ?>:</b>
	<?php echo CHtml::encode($data->toado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_id')); ?>:</b>
	<?php echo CHtml::encode($data->loc_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('khachhang_id')); ?>:</b>
	<?php echo CHtml::encode($data->khachhang_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />

	*/ ?>

</div>