<?php
$this->breadcrumbs=array(
	'Partidases'=>array('index'),
	$model->par_id,
);

$this->menu=array(
	array('label'=>'List Partidas', 'url'=>array('index')),
	array('label'=>'Create Partidas', 'url'=>array('create')),
	array('label'=>'Update Partidas', 'url'=>array('update', 'id'=>$model->par_id)),
	array('label'=>'Delete Partidas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->par_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Partidas', 'url'=>array('admin')),
);
?>

<h1>View Partidas #<?php echo $model->par_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'par_id',
		'par_data_partida',
		'par_data_cadastro',
	),
)); ?>
