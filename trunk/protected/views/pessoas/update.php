<?php
$this->breadcrumbs=array(
	'Pessoases'=>array('index'),
	$model->pes_id=>array('view','id'=>$model->pes_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pessoas', 'url'=>array('index')),
	array('label'=>'Create Pessoas', 'url'=>array('create')),
	array('label'=>'View Pessoas', 'url'=>array('view', 'id'=>$model->pes_id)),
	array('label'=>'Manage Pessoas', 'url'=>array('admin')),
);
?>

<h1>Update Pessoas <?php echo $model->pes_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>