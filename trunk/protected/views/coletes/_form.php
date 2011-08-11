<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'coletes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'col_descricao'); ?>
		<?php echo $form->textField($model,'col_descricao',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'col_descricao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->