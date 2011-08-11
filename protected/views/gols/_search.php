<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'gol_id'); ?>
		<?php echo $form->textField($model,'gol_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jog_tim_id'); ?>
		<?php echo $form->textField($model,'jog_tim_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gol_data_ocorrencia'); ?>
		<?php echo $form->textField($model,'gol_data_ocorrencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gol_data_cadastro'); ?>
		<?php echo $form->textField($model,'gol_data_cadastro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->