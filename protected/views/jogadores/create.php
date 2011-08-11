<?php
$this->breadcrumbs=array(
	'Jogadores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jogadores', 'url'=>array('index')),
	array('label'=>'Manage Jogadores', 'url'=>array('admin')),
);
?>

<h1>Create Jogadores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>