<?php
$this->breadcrumbs=array(
	'Times Brasileiroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TimesBrasileiros', 'url'=>array('index')),
	array('label'=>'Manage TimesBrasileiros', 'url'=>array('admin')),
);
?>

<h1>Create TimesBrasileiros</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>