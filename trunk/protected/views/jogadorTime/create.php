<?php
$this->breadcrumbs=array(
	'Jogador Times'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JogadorTime', 'url'=>array('index')),
	array('label'=>'Manage JogadorTime', 'url'=>array('admin')),
);
?>

<h1>Create JogadorTime</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>