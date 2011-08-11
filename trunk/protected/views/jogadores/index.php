<?php
$this->breadcrumbs=array(
	'Jogadores',
);

$this->menu=array(
	array('label'=>'Create Jogadores', 'url'=>array('create')),
	array('label'=>'Manage Jogadores', 'url'=>array('admin')),
);
?>

<h1>Jogadores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
