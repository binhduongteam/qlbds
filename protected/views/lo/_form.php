<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tinhtrang'); ?>
		<?php echo $form->textField($model,'tinhtrang'); ?>
		<?php echo $form->error($model,'tinhtrang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sanpham_id'); ?>
		<?php echo $form->textField($model,'sanpham_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sanpham_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'malo'); ?>
		<?php echo $form->textField($model,'malo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'malo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'toado'); ?>
		<?php echo $form->textField($model,'toado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'toado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loc_id'); ?>
		<?php echo $form->textField($model,'loc_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'loc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'khachhang_id'); ?>
		<?php echo $form->textField($model,'khachhang_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'khachhang_id'); ?>
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