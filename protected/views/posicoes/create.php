<?php
$this->breadcrumbs=array(
	'Posicoes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Posicoes', 'url'=>array('index')),
	array('label'=>'Manage Posicoes', 'url'=>array('admin')),
);
?>

<h1>Create Posicoes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>