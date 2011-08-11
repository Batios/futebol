<?php
$this->breadcrumbs=array(
	'Coletes'=>array('index'),
	$model->col_id=>array('view','id'=>$model->col_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coletes', 'url'=>array('index')),
	array('label'=>'Create Coletes', 'url'=>array('create')),
	array('label'=>'View Coletes', 'url'=>array('view', 'id'=>$model->col_id)),
	array('label'=>'Manage Coletes', 'url'=>array('admin')),
);
?>

<h1>Update Coletes <?php echo $model->col_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>