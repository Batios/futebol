<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gols-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jog_tim_id'); ?>
		<?php echo $form->listbox(
                        $model,
                        'jog_tim_id',
                        CHtml::listData(JogadorTime::model()->findAll(), 'jog_tim_id', 'descricao_jogador_time'),
                        array('size'=>1, 'prompt'=>'Selecione um jogador')); ?>
		<?php echo $form->error($model,'jog_tim_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gol_data_ocorrencia'); ?>
		<?php echo $form->textField($model,'gol_data_ocorrencia'); ?>
		<?php echo $form->error($model,'gol_data_ocorrencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">

	$(function() {

            $.datepicker.setDefaults($.datepicker.regional[ "pt-BR" ])

            $( "#Gols_gol_data_ocorrencia" ).datepicker({
                    showOn: "button",
                    buttonImage: "images/calendar.gif",
                    buttonImageOnly: true
            });
	});

</script>