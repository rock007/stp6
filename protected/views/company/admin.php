<?php
$this->breadcrumbs=array(
	'Bcompanies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BCompany', 'url'=>array('index')),
	array('label'=>'Create BCompany', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('bcompany-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="span9">

<h1>Manage Bcompanies</h1>

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
	'id'=>'bcompany-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'address',
		'province',
		'city',
		'url',
		/*
		'tele',
		'email',
		'remarks',
		'ctype',
		'createDate',
		'lnkUser',
		'privilege',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
