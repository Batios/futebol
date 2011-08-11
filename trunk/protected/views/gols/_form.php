<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gols-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jog_tim_id'); ?>
		<?php echo $form->textField($model,'jog_tim_id'); ?>
		<?php echo $form->error($model,'jog_tim_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gol_data_ocorrencia'); ?>
		<?php echo $form->textField($model,'gol_data_ocorrencia'); ?>
		<?php echo $form->error($model,'gol_data_ocorrencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gol_data_cadastro'); ?>
		<?php echo $form->textField($model,'gol_data_cadastro'); ?>
		<?php echo $form->error($model,'gol_data_cadastro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->