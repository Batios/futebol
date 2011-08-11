<?php
$this->breadcrumbs=array(
	'Times Brasileiroses'=>array('index'),
	$model->tim_bra_id,
);

$this->menu=array(
	array('label'=>'List TimesBrasileiros', 'url'=>array('index')),
	array('label'=>'Create TimesBrasileiros', 'url'=>array('create')),
	array('label'=>'Update TimesBrasileiros', 'url'=>array('update', 'id'=>$model->tim_bra_id)),
	array('label'=>'Delete TimesBrasileiros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tim_bra_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TimesBrasileiros', 'url'=>array('admin')),
);
?>

<h1>View TimesBrasileiros #<?php echo $model->tim_bra_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tim_bra_id',
		'tim_bra_nome',
		'tim_bra_sigla',
	),
)); ?>
