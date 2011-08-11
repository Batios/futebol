<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_jog_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tip_jog_id), array('view', 'id'=>$data->tip_jog_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_jog_descricao')); ?>:</b>
	<?php echo CHtml::encode($data->tip_jog_descricao); ?>
	<br />


</div>