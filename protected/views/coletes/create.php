<?php
$this->breadcrumbs=array(
	'Coletes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coletes', 'url'=>array('index')),
	array('label'=>'Manage Coletes', 'url'=>array('admin')),
);
?>

<h1>Create Coletes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>