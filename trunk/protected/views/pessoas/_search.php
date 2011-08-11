<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pes_id'); ?>
		<?php echo $form->textField($model,'pes_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pes_nome'); ?>
		<?php echo $form->textField($model,'pes_nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pes_apelido'); ?>
		<?php echo $form->textField($model,'pes_apelido',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pes_data_nascimento'); ?>
		<?php echo $form->textField($model,'pes_data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pes_data_cadastro'); ?>
		<?php echo $form->textField($model,'pes_data_cadastro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->