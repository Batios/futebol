<?php
$this->breadcrumbs=array(
	'Tipo Jogadors'=>array('index'),
	$model->tip_jog_id=>array('view','id'=>$model->tip_jog_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoJogador', 'url'=>array('index')),
	array('label'=>'Create TipoJogador', 'url'=>array('create')),
	array('label'=>'View TipoJogador', 'url'=>array('view', 'id'=>$model->tip_jog_id)),
	array('label'=>'Manage TipoJogador', 'url'=>array('admin')),
);
?>

<h1>Update TipoJogador <?php echo $model->tip_jog_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>