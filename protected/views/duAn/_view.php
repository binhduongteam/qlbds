<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maduan')); ?>:</b>
	<?php echo CHtml::encode($data->maduan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenduan')); ?>:</b>
	<?php echo CHtml::encode($data->tenduan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diachi')); ?>:</b>
	<?php echo CHtml::encode($data->diachi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bandoduan')); ?>:</b>
	<?php echo CHtml::encode($data->bandoduan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_manager_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_manager_id); ?>
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