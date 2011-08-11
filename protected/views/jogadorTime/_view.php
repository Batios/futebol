<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_tim_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jog_tim_id), array('view', 'id'=>$data->jog_tim_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_id')); ?>:</b>
	<?php echo CHtml::encode($data->jog_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tim_id')); ?>:</b>
	<?php echo CHtml::encode($data->tim_id); ?>
	<br />


</div>