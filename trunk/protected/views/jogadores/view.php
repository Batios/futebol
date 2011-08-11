<?php
$this->breadcrumbs=array(
	'Jogadores'=>array('index'),
	$model->jog_id,
);

$this->menu=array(
	array('label'=>'List Jogadores', 'url'=>array('index')),
	array('label'=>'Create Jogadores', 'url'=>array('create')),
	array('label'=>'Update Jogadores', 'url'=>array('update', 'id'=>$model->jog_id)),
	array('label'=>'Delete Jogadores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jog_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jogadores', 'url'=>array('admin')),
);
?>

<h1>View Jogadores #<?php echo $model->jog_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jog.pes_nome',
		'jog_nome_colete',
		'timBra.tim_bra_nome',
		'jog_linha_descricao',
		'jog_gol_descricao',
		'tipJog.tip_jog_descricao',
		'pos.pos_descricao',
	),
)); ?>
