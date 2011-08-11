<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'times-brasileiros-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tim_bra_nome'); ?>
		<?php echo $form->textField($model,'tim_bra_nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tim_bra_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tim_bra_sigla'); ?>
		<?php echo $form->textField($model,'tim_bra_sigla',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tim_bra_sigla'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->