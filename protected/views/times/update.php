<?php
$this->breadcrumbs=array(
	'Times'=>array('index'),
	$model->tim_id=>array('view','id'=>$model->tim_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Times', 'url'=>array('index')),
	array('label'=>'Create Times', 'url'=>array('create')),
	array('label'=>'View Times', 'url'=>array('view', 'id'=>$model->tim_id)),
	array('label'=>'Manage Times', 'url'=>array('admin')),
);
?>

<h1>Update Times <?php echo $model->tim_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>