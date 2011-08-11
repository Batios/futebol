<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jogadores-form',
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
		<?php echo $form->labelEx($model,'jog_nome_colete'); ?>
		<?php echo $form->textField($model,'jog_nome_colete',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'jog_nome_colete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tim_bra_id'); ?>
		<?php echo $form->listbox(
                        $model,
                        'tim_bra_id',
                        CHtml::listData(TimesBrasileiros::model()->findAll(), 'tim_bra_id', 'tim_bra_nome'),
                        array('size'=>1, 'prompt'=>'Selecione um time')); ?>
		<?php echo $form->error($model,'tim_bra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jog_linha'); ?>
		<?php echo $form->checkBox($model,'jog_linha'); ?>
		<?php echo $form->error($model,'jog_linha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jog_gol'); ?>
		<?php echo $form->checkBox($model,'jog_gol'); ?>
		<?php echo $form->error($model,'jog_gol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tip_jog_id'); ?>
		<?php echo $form->listbox(
                        $model,
                        'tip_jog_id',
                        CHtml::listData(TipoJogador::model()->findAll(), 'tip_jog_id', 'tip_jog_descricao'),
                        array('size'=>1, 'prompt'=>'Selecione um tipo')); ?>
		<?php echo $form->error($model,'tip_jog_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pos_id'); ?>
		<?php echo $form->listbox(
                        $model,
                        'pos_id',
                        CHtml::listData(Posicoes::model()->findAll(), 'pos_id', 'pos_descricao'),
                        array('size'=>1, 'prompt'=>'Selecione uma Posição')); ?>
		<?php echo $form->error($model,'pos_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->