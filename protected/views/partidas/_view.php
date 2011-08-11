<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('par_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->par_id), array('view', 'id'=>$data->par_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('par_data_partida')); ?>:</b>
	<?php echo CHtml::encode($data->par_data_partida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('par_data_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->par_data_cadastro); ?>
	<br />


</div>