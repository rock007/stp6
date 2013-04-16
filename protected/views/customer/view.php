<?php
/* @var $this CustomerController */
/* @var $model BCustomer */

$this->breadcrumbs=array(
	'客户'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BCustomer', 'url'=>array('index')),
	array('label'=>'Create BCustomer', 'url'=>array('create')),
	array('label'=>'Update BCustomer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BCustomer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BCustomer', 'url'=>array('admin')),
);
?>
<div class="span6">
<h4>查看 #<?php echo $model->id; ?>客户资料| <a href="" >返回</a></h4>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table'),
	'attributes'=>array(
		'id',
		'name',
		'position',
		'sex',
		'mobile',
		'tele',
		'qq',
		'email',
		'province',
		'city',
		'remarks',
		'lnkCompany',
		'lnkUser',
		'privilege',
		'status',
		'createDate',
	),
)); ?>

</div>

<div class="span3">
place hold
</div>
