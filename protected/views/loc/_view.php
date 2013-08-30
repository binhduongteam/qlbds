<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maloc')); ?>:</b>
	<?php echo CHtml::encode($data->maloc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duan_id')); ?>:</b>
	<?php echo CHtml::encode($data->duan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bandoloc')); ?>:</b>
	<?php echo CHtml::encode($data->bandoloc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loaisanpham_id')); ?>:</b>
	<?php echo CHtml::encode($data->loaisanpham_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toado')); ?>:</b>
	<?php echo CHtml::encode($data->toado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />

	*/ ?>

</div>