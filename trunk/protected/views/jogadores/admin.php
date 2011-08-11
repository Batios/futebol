<?php
$this->breadcrumbs=array(
	'Jogadores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Jogadores', 'url'=>array('index')),
	array('label'=>'Create Jogadores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('jogadores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jogadores</h1>

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
	'id'=>'jogadores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'jog.pes_nome',
		'jog_nome_colete',
		'timBra.tim_bra_nome',
		'jog_linha_descricao',
		'jog_gol_descricao',
		'tipJog.tip_jog_descricao',
		/*
		'pos.pos_descricao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
