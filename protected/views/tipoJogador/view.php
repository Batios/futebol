<?php
$this->breadcrumbs=array(
	'Tipo Jogadors'=>array('index'),
	$model->tip_jog_id,
);

$this->menu=array(
	array('label'=>'List TipoJogador', 'url'=>array('index')),
	array('label'=>'Create TipoJogador', 'url'=>array('create')),
	array('label'=>'Update TipoJogador', 'url'=>array('update', 'id'=>$model->tip_jog_id)),
	array('label'=>'Delete TipoJogador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tip_jog_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoJogador', 'url'=>array('admin')),
);
?>

<h1>View TipoJogador #<?php echo $model->tip_jog_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tip_jog_id',
		'tip_jog_descricao',
	),
)); ?>
