<?php
$this->breadcrumbs=array(
	'Posicoes'=>array('index'),
	$model->pos_id=>array('view','id'=>$model->pos_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Posicoes', 'url'=>array('index')),
	array('label'=>'Create Posicoes', 'url'=>array('create')),
	array('label'=>'View Posicoes', 'url'=>array('view', 'id'=>$model->pos_id)),
	array('label'=>'Manage Posicoes', 'url'=>array('admin')),
);
?>

<h1>Update Posicoes <?php echo $model->pos_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>