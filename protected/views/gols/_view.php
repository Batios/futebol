<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gol_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gol_id), array('view', 'id'=>$data->gol_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_tim_id')); ?>:</b>
	<?php echo CHtml::encode($data->jog_tim_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gol_data_ocorrencia')); ?>:</b>
	<?php echo CHtml::encode($data->gol_data_ocorrencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gol_data_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->gol_data_cadastro); ?>
	<br />


</div>