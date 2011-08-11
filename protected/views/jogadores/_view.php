<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nome_jogador), array('view', 'id'=>$data->jog_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_nome_colete')); ?>:</b>
	<?php echo CHtml::encode($data->jog_nome_colete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tim_bra_id')); ?>:</b>
	<?php echo CHtml::encode($data->timBra->tim_bra_nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_linha')); ?>:</b>
	<?php echo CHtml::encode($data->jog_linha_descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jog_gol')); ?>:</b>
	<?php echo CHtml::encode($data->jog_gol_descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_jog_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipJog->tip_jog_descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pos_id')); ?>:</b>
	<?php echo CHtml::encode($data->pos->pos_descricao); ?>
	<br />


</div>