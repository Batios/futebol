<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'par_id'); ?>
		<?php echo $form->textField($model,'par_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'par_data_partida'); ?>
		<?php echo $form->textField($model,'par_data_partida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'par_data_cadastro'); ?>
		<?php echo $form->textField($model,'par_data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'par_descricao'); ?>
		<?php echo $form->textField($model,'par_descricao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'par_data_alteracao'); ?>
		<?php echo $form->textField($model,'par_data_alteracao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->