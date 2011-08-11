<?php
$this->breadcrumbs=array(
	'Partidases'=>array('index'),
	$model->par_id=>array('view','id'=>$model->par_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Partidas', 'url'=>array('index')),
	array('label'=>'Create Partidas', 'url'=>array('create')),
	array('label'=>'View Partidas', 'url'=>array('view', 'id'=>$model->par_id)),
	array('label'=>'Manage Partidas', 'url'=>array('admin')),
);
?>

<h1>Update Partidas <?php echo $model->par_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>