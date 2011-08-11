<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partidas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'par_data_partida'); ?>
		<?php echo $form->textField($model,'par_data_partida'); ?>
		<?php echo $form->error($model,'par_data_partida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'par_descricao'); ?>
		<?php echo $form->textField($model,'par_descricao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'par_descricao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">

	$(function() {

            $.datepicker.setDefaults($.datepicker.regional[ "pt-BR" ])

            $( "#Partidas_par_data_partida" ).datepicker({
                    showOn: "button",
                    buttonImage: "images/calendar.gif",
                    buttonImageOnly: true
            });
	});

</script>