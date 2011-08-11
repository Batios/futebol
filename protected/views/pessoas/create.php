<?php
$this->breadcrumbs=array(
	'Pessoases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pessoas', 'url'=>array('index')),
	array('label'=>'Manage Pessoas', 'url'=>array('admin')),
);
?>

<h1>Create Pessoas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>