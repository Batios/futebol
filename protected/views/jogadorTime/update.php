<?php
$this->breadcrumbs=array(
	'Jogador Times'=>array('index'),
	$model->jog_tim_id=>array('view','id'=>$model->jog_tim_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JogadorTime', 'url'=>array('index')),
	array('label'=>'Create JogadorTime', 'url'=>array('create')),
	array('label'=>'View JogadorTime', 'url'=>array('view', 'id'=>$model->jog_tim_id)),
	array('label'=>'Manage JogadorTime', 'url'=>array('admin')),
);
?>

<h1>Update JogadorTime <?php echo $model->jog_tim_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>