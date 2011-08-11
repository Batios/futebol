<?php
$this->breadcrumbs=array(
	'Jogador Times',
);

$this->menu=array(
	array('label'=>'Create JogadorTime', 'url'=>array('create')),
	array('label'=>'Manage JogadorTime', 'url'=>array('admin')),
);
?>

<h1>Jogador Times</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
