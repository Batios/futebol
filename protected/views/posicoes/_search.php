<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pos_id'); ?>
		<?php echo $form->textField($model,'pos_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pos_descricao'); ?>
		<?php echo $form->textField($model,'pos_descricao',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->