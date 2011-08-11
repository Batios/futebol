<?php
$this->breadcrumbs=array(
	'Gols'=>array('index'),
	$model->gol_id=>array('view','id'=>$model->gol_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gols', 'url'=>array('index')),
	array('label'=>'Create Gols', 'url'=>array('create')),
	array('label'=>'View Gols', 'url'=>array('view', 'id'=>$model->gol_id)),
	array('label'=>'Manage Gols', 'url'=>array('admin')),
);
?>

<h1>Update Gols <?php echo $model->gol_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>