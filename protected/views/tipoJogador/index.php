<?php
$this->breadcrumbs=array(
	'Tipo Jogadors',
);

$this->menu=array(
	array('label'=>'Create TipoJogador', 'url'=>array('create')),
	array('label'=>'Manage TipoJogador', 'url'=>array('admin')),
);
?>

<h1>Tipo Jogadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
