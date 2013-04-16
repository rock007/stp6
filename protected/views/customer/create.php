<?php
/* @var $this CustomerController */
/* @var $model BCustomer */

$this->breadcrumbs=array(
	'Bcustomers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BCustomer', 'url'=>array('index')),
	array('label'=>'Manage BCustomer', 'url'=>array('admin')),
);
?>
<div class="span6">
<h4>添加客户</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
<div class="span3">
place empty
</div>