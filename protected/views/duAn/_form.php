<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'du-an-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'maduan'); ?>
		<?php echo $form->textField($model,'maduan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'maduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tenduan'); ?>
		<?php echo $form->textField($model,'tenduan',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'tenduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diachi'); ?>
		<?php echo $form->textField($model,'diachi',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'diachi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bandoduan'); ?>
		<?php echo $form->textField($model,'bandoduan',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'bandoduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_manager_id'); ?>
		<?php echo $form->textField($model,'project_manager_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'project_manager_id'); ?>
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