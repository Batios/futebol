<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jog_id), array('view', 'id'=>$data->jog_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->jog_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_nome_colete')); ?>:</b>
	<?php echo CHtml::encode($data->jog_nome_colete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tim_bra_id')); ?>:</b>
	<?php echo CHtml::encode($data->tim_bra_id); ?>
	<br />


</div>