<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tim_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tim_id), array('view', 'id'=>$data->tim_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('par_id')); ?>:</b>
	<?php echo CHtml::encode($data->par->descricao_partida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tim_nome')); ?>:</b>
	<?php echo CHtml::encode($data->tim_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col_id')); ?>:</b>
	<?php echo CHtml::encode($data->col->col_descricao); ?>
	<br />


</div>