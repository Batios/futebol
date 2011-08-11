<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jogador-time-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jog_id'); ?>
		<?php echo $form->listbox(
                        $model,
                        'jog_id',
                        CHtml::listData(Pessoas::model()->findAll(), 'pes_id', 'pes_nome'),
                        array('size'=>1, 'prompt'=>'Selecione uma pessoa')); ?>
		<?php echo $form->error($model,'jog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tim_id'); ?>
		<?php echo $form->listbox(
                        $model,
                        'tim_id',
                        CHtml::listData(Times::model()->findAll(), 'tim_id', 'descricao_time'),
                        array('size'=>1, 'prompt'=>'Selecione um time')); ?>
		<?php echo $form->error($model,'tim_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->