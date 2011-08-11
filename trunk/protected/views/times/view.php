<?php
$this->breadcrumbs=array(
	'Times'=>array('index'),
	$model->tim_id,
);

$this->menu=array(
	array('label'=>'List Times', 'url'=>array('index')),
	array('label'=>'Create Times', 'url'=>array('create')),
	array('label'=>'Update Times', 'url'=>array('update', 'id'=>$model->tim_id)),
	array('label'=>'Delete Times', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tim_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Times', 'url'=>array('admin')),
);
?>

<h1>View Times #<?php echo $model->tim_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tim_id',
		'par.descricao_partida',
		'tim_nome',
		'col.col_descricao',
	),
)); ?>
