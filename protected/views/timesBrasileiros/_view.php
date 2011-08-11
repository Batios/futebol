<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tim_bra_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tim_bra_id), array('view', 'id'=>$data->tim_bra_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tim_bra_nome')); ?>:</b>
	<?php echo CHtml::encode($data->tim_bra_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tim_bra_sigla')); ?>:</b>
	<?php echo CHtml::encode($data->tim_bra_sigla); ?>
	<br />


</div>