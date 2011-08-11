<?php
$this->breadcrumbs=array(
	'Times Brasileiroses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TimesBrasileiros', 'url'=>array('index')),
	array('label'=>'Create TimesBrasileiros', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('times-brasileiros-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Times Brasileiroses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'times-brasileiros-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tim_bra_id',
		'tim_bra_nome',
		'tim_bra_sigla',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
