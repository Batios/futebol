<?php
$this->breadcrumbs=array(
	'Posicoes',
);

$this->menu=array(
	array('label'=>'Create Posicoes', 'url'=>array('create')),
	array('label'=>'Manage Posicoes', 'url'=>array('admin')),
);
?>

<h1>Posicoes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
