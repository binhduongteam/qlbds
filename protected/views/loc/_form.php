<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'loc-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'maloc'); ?>
		<?php echo $form->textField($model,'maloc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'maloc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duan_id'); ?>
		<?php echo $form->textField($model,'duan_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'duan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bandoloc'); ?>
		<?php echo $form->textField($model,'bandoloc',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'bandoloc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loaisanpham_id'); ?>
		<?php echo $form->textField($model,'loaisanpham_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'loaisanpham_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'toado'); ?>
		<?php echo $form->textField($model,'toado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'toado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
		<?php echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_updated'); ?>
		<?php echo $form->textField($model,'date_updated'); ?>
		<?php echo $form->error($model,'date_updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->