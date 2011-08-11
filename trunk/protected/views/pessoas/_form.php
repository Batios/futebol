<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pessoas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pes_nome'); ?>
		<?php echo $form->textField($model,'pes_nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pes_nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pes_apelido'); ?>
		<?php echo $form->textField($model,'pes_apelido',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pes_apelido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pes_data_nascimento'); ?>
		<?php echo $form->textField($model,'pes_data_nascimento'); ?>
		<?php echo $form->error($model,'pes_data_nascimento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">

	$(function() {
        
            $.datepicker.setDefaults($.datepicker.regional[ "pt-BR" ])

            $( "#Pessoas_pes_data_nascimento" ).datepicker({
                    showOn: "button",
                    buttonImage: "images/calendar.gif",
                    buttonImageOnly: true
            });
	});

</script>