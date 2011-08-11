<?php
$this->breadcrumbs=array(
	'Gols'=>array('index'),
	$model->gol_id,
);

$this->menu=array(
	array('label'=>'List Gols', 'url'=>array('index')),
	array('label'=>'Create Gols', 'url'=>array('create')),
	array('label'=>'Update Gols', 'url'=>array('update', 'id'=>$model->gol_id)),
	array('label'=>'Delete Gols', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->gol_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gols', 'url'=>array('admin')),
);
?>

<h1>View Gols #<?php echo $model->gol_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gol_id',
		'jog_tim_id',
		'gol_data_ocorrencia',
		'gol_data_cadastro',
	),
)); ?>
