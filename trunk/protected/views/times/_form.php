<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'times-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'par_id'); ?>
		<?php echo $form->listbox(
                        $model,
                        'par_id',
                        CHtml::listData(Partidas::model()->partidasAtuais()->findAll(), 'par_id', 'descricao_partida'),
                        array('size'=>1, 'prompt'=>'Selecione uma partida')); ?>
		<?php echo $form->error($model,'par_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tim_nome'); ?>
		<?php echo $form->textField($model,'tim_nome',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tim_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'col_id'); ?>
		<?php echo $form->listbox(
                        $model,
                        'col_id',
                        CHtml::listData(Coletes::model()->findAll(), 'col_id', 'col_descricao'),
                        array('size'=>1, 'prompt'=>'Selecione um colete')); ?>
		<?php echo $form->error($model,'col_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->