<?php
$this->breadcrumbs=array(
	'Coletes'=>array('index'),
	$model->col_id,
);

$this->menu=array(
	array('label'=>'List Coletes', 'url'=>array('index')),
	array('label'=>'Create Coletes', 'url'=>array('create')),
	array('label'=>'Update Coletes', 'url'=>array('update', 'id'=>$model->col_id)),
	array('label'=>'Delete Coletes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->col_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coletes', 'url'=>array('admin')),
);
?>

<h1>View Coletes #<?php echo $model->col_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'col_id',
		'col_descricao',
	),
)); ?>
