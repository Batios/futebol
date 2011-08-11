<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('col_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->col_id), array('view', 'id'=>$data->col_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col_descricao')); ?>:</b>
	<?php echo CHtml::encode($data->col_descricao); ?>
	<br />


</div>