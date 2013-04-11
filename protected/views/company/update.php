<?php
$this->breadcrumbs=array(
	'Bcompanies'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BCompany', 'url'=>array('index')),
	array('label'=>'Create BCompany', 'url'=>array('create')),
	array('label'=>'View BCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BCompany', 'url'=>array('admin')),
);
?>

<div class="span6">
<h1>更新公司 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>

<div class="span3">

</div>