<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jog_tim_id'); ?>
		<?php echo $form->textField($model,'jog_tim_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jog_id'); ?>
		<?php echo $form->textField($model,'jog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tim_id'); ?>
		<?php echo $form->textField($model,'tim_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->