<?php
$this->breadcrumbs=array(
	'Times',
);

$this->menu=array(
	array('label'=>'Create Times', 'url'=>array('create')),
	array('label'=>'Manage Times', 'url'=>array('admin')),
);
?>

<h1>Times</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
