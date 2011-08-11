<?php
$this->breadcrumbs=array(
	'Jogadores'=>array('index'),
	$model->jog_id=>array('view','id'=>$model->jog_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jogadores', 'url'=>array('index')),
	array('label'=>'Create Jogadores', 'url'=>array('create')),
	array('label'=>'View Jogadores', 'url'=>array('view', 'id'=>$model->jog_id)),
	array('label'=>'Manage Jogadores', 'url'=>array('admin')),
);
?>

<h1>Update Jogadores <?php echo $model->jog_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>