<?php
$this->breadcrumbs=array(
	'公司'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'List BCompany', 'url'=>array('index')),
	array('label'=>'Create BCompany', 'url'=>array('create')),
	array('label'=>'View BCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BCompany', 'url'=>array('admin')),
);
?>

<div class="span6">
<h5>更新公司 <?php echo $model->id; ?></h5>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>

<div class="span3">

</div>