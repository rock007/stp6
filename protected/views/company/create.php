<?php
$this->breadcrumbs=array(
	'公司'=>array('index'),
	'添加',
);

$this->menu=array(
	array('label'=>'List BCompany', 'url'=>array('index')),
	array('label'=>'Manage BCompany', 'url'=>array('admin')),
);
?>
<div class="span6">
<h4>添加公司</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<div class="span3">
place empty
</div>