<?php
$this->breadcrumbs=array(
	'Times Brasileiroses',
);

$this->menu=array(
	array('label'=>'Create TimesBrasileiros', 'url'=>array('create')),
	array('label'=>'Manage TimesBrasileiros', 'url'=>array('admin')),
);
?>

<h1>Times Brasileiroses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
