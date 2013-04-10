<?php
$this->breadcrumbs=array(
	'Busers'=>array('index'),
	$model->userName,
);

$this->menu=array(
	array('label'=>'List BUser', 'url'=>array('index')),
	array('label'=>'Create BUser', 'url'=>array('create')),
	array('label'=>'Update BUser', 'url'=>array('update', 'id'=>$model->userName)),
	array('label'=>'Delete BUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userName),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BUser', 'url'=>array('admin')),
);
?>

<h1>View BUser #<?php echo $model->userName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userName',
		'pwd',
		'email',
		'sex',
		'isCompany',
		'registerDate',
		'lastLoginDate',
		'lastLoginIP',
		'status',
	),
)); ?>
