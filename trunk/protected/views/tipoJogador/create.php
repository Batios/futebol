<?php
$this->breadcrumbs=array(
	'Tipo Jogadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoJogador', 'url'=>array('index')),
	array('label'=>'Manage TipoJogador', 'url'=>array('admin')),
);
?>

<h1>Create TipoJogador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>