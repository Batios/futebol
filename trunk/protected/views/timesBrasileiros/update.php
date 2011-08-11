<?php
$this->breadcrumbs=array(
	'Times Brasileiroses'=>array('index'),
	$model->tim_bra_id=>array('view','id'=>$model->tim_bra_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TimesBrasileiros', 'url'=>array('index')),
	array('label'=>'Create TimesBrasileiros', 'url'=>array('create')),
	array('label'=>'View TimesBrasileiros', 'url'=>array('view', 'id'=>$model->tim_bra_id)),
	array('label'=>'Manage TimesBrasileiros', 'url'=>array('admin')),
);
?>

<h1>Update TimesBrasileiros <?php echo $model->tim_bra_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>