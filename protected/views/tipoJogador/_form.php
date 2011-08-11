<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-jogador-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tip_jog_descricao'); ?>
		<?php echo $form->textField($model,'tip_jog_descricao',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tip_jog_descricao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->