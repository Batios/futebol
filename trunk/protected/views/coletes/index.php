<?php
$this->breadcrumbs=array(
	'Coletes',
);

$this->menu=array(
	array('label'=>'Create Coletes', 'url'=>array('create')),
	array('label'=>'Manage Coletes', 'url'=>array('admin')),
);
?>

<h1>Coletes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
