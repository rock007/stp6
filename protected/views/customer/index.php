<?php
/* @var $this CustomerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'客户',
);

$this->menu=array(
	array('label'=>'Create BCustomer', 'url'=>array('create')),
	array('label'=>'Manage BCustomer', 'url'=>array('admin')),
);
?>

<div class="span9">
<h4>客户列表</h4>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemsTagName'=>'ul',
	'itemsCssClass'=>'inline',
	//'template'   => '<ul class="inline">{items}</ul>{pager}',
	'itemView'=>'_view',
)); ?>

</div>