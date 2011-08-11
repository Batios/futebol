<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tim_bra_id'); ?>
		<?php echo $form->textField($model,'tim_bra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tim_bra_nome'); ?>
		<?php echo $form->textField($model,'tim_bra_nome',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tim_bra_sigla'); ?>
		<?php echo $form->textField($model,'tim_bra_sigla',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->