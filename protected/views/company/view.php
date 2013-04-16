<?php
$this->breadcrumbs=array(
	'公司'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List BCompany', 'url'=>array('index')),
	array('label'=>'Create BCompany', 'url'=>array('create')),
	array('label'=>'Update BCompany', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BCompany', 'url'=>array('admin')),
);
?>
<div class="span6">
<h5>查看公司 #<?php echo $model->id; ?> | <a href="" >返回</a></h5>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table'),
	'attributes'=>array(
		'id',
		'title',
		'address',
		'province',
		'city',
		'url',
		'tele',
		'email',
		'remarks',
		'ctype',
		'createDate',
		'lnkUser',
		'privilege',
		'status',
	),
)); ?>
</div>
<div class="span3">


<fieldset>
<legend>联系人[<a href="">添加</a>]</legend>
xx


</fieldset>
</div>


