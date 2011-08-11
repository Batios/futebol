<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pos_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pos_id), array('view', 'id'=>$data->pos_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pos_descricao')); ?>:</b>
	<?php echo CHtml::encode($data->pos_descricao); ?>
	<br />


</div>