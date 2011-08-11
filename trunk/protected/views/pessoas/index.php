<?php
$this->breadcrumbs=array(
	'Pessoases',
);

$this->menu=array(
	array('label'=>'Create Pessoas', 'url'=>array('create')),
	array('label'=>'Manage Pessoas', 'url'=>array('admin')),
);
?>

<h1>Pessoases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
