<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jogador-time-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jog_id'); ?>
		<?php echo $form->textField($model,'jog_id'); ?>
		<?php echo $form->error($model,'jog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tim_id'); ?>
		<?php echo $form->textField($model,'tim_id'); ?>
		<?php echo $form->error($model,'tim_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->