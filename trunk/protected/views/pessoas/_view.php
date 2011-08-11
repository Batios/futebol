<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pes_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pes_id), array('view', 'id'=>$data->pes_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pes_nome')); ?>:</b>
	<?php echo CHtml::encode($data->pes_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pes_apelido')); ?>:</b>
	<?php echo CHtml::encode($data->pes_apelido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pes_data_nascimento')); ?>:</b>
	<?php echo CHtml::encode($data->pes_data_nascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pes_data_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->pes_data_cadastro); ?>
	<br />


</div>