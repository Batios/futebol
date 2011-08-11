<?php
$this->breadcrumbs=array(
	'Pessoases'=>array('index'),
	$model->pes_id,
);

$this->menu=array(
	array('label'=>'List Pessoas', 'url'=>array('index')),
	array('label'=>'Create Pessoas', 'url'=>array('create')),
	array('label'=>'Update Pessoas', 'url'=>array('update', 'id'=>$model->pes_id)),
	array('label'=>'Delete Pessoas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pes_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pessoas', 'url'=>array('admin')),
);
?>

<h1>View Pessoas #<?php echo $model->pes_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pes_id',
		'pes_nome',
		'pes_apelido',
		'pes_data_nascimento',
		'pes_data_cadastro',
	),
)); ?>
