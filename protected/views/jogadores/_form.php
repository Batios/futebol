<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jogadores-form',
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
		<?php echo $form->labelEx($model,'jog_tipo'); ?>
		<?php echo $form->textField($model,'jog_tipo'); ?>
		<?php echo $form->error($model,'jog_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jog_nome_colete'); ?>
		<?php echo $form->textField($model,'jog_nome_colete',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'jog_nome_colete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tim_bra_id'); ?>
		<?php echo $form->textField($model,'tim_bra_id'); ?>
		<?php echo $form->error($model,'tim_bra_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->