<?php
$this->breadcrumbs=array(
	'Times'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Times', 'url'=>array('index')),
	array('label'=>'Manage Times', 'url'=>array('admin')),
);
?>

<h1>Create Times</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>