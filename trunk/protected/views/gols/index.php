<?php
$this->breadcrumbs=array(
	'Gols',
);

$this->menu=array(
	array('label'=>'Create Gols', 'url'=>array('create')),
	array('label'=>'Manage Gols', 'url'=>array('admin')),
);
?>

<h1>Gols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
