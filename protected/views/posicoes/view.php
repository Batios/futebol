<?php
$this->breadcrumbs=array(
	'Posicoes'=>array('index'),
	$model->pos_id,
);

$this->menu=array(
	array('label'=>'List Posicoes', 'url'=>array('index')),
	array('label'=>'Create Posicoes', 'url'=>array('create')),
	array('label'=>'Update Posicoes', 'url'=>array('update', 'id'=>$model->pos_id)),
	array('label'=>'Delete Posicoes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pos_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Posicoes', 'url'=>array('admin')),
);
?>

<h1>View Posicoes #<?php echo $model->pos_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pos_id',
		'pos_descricao',
	),
)); ?>
