<?php
$this->breadcrumbs=array(
	'Jogador Times'=>array('index'),
	$model->jog_tim_id,
);

$this->menu=array(
	array('label'=>'List JogadorTime', 'url'=>array('index')),
	array('label'=>'Create JogadorTime', 'url'=>array('create')),
	array('label'=>'Update JogadorTime', 'url'=>array('update', 'id'=>$model->jog_tim_id)),
	array('label'=>'Delete JogadorTime', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jog_tim_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JogadorTime', 'url'=>array('admin')),
);
?>

<h1>View JogadorTime #<?php echo $model->jog_tim_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jog_tim_id',
		'jog_id',
		'tim_id',
	),
)); ?>
