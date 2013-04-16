<?php
/* @var $this CustomerController */
/* @var $model BCustomer */

$this->breadcrumbs=array(
	'客户'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'List BCustomer', 'url'=>array('index')),
	array('label'=>'Create BCustomer', 'url'=>array('create')),
	array('label'=>'View BCustomer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BCustomer', 'url'=>array('admin')),
);
?>

<div class="span6">
<h4>Update BCustomer <?php echo $model->id; ?></h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
<div class="span3">

</div>