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
		<?php echo $form->label($model,'jog_tipo'); ?>
		<?php echo $form->textField($model,'jog_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jog_nome_colete'); ?>
		<?php echo $form->textField($model,'jog_nome_colete',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tim_bra_id'); ?>
		<?php echo $form->textField($model,'tim_bra_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->