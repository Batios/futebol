<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jog_id'); ?>
		<?php echo $form->textField($model,'jog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jog_nome_colete'); ?>
		<?php echo $form->textField($model,'jog_nome_colete',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tim_bra_id'); ?>
		<?php echo $form->textField($model,'tim_bra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jog_linha'); ?>
		<?php echo $form->checkBox($model,'jog_linha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jog_gol'); ?>
		<?php echo $form->checkBox($model,'jog_gol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_jog_id'); ?>
		<?php echo $form->textField($model,'tip_jog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pos_id'); ?>
		<?php echo $form->textField($model,'pos_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->