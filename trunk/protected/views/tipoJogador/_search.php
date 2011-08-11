<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tip_jog_id'); ?>
		<?php echo $form->textField($model,'tip_jog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_jog_descricao'); ?>
		<?php echo $form->textField($model,'tip_jog_descricao',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->