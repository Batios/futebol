<?php
$this->breadcrumbs=array(
	'Gols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gols', 'url'=>array('index')),
	array('label'=>'Manage Gols', 'url'=>array('admin')),
);
?>

<h1>Create Gols</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>