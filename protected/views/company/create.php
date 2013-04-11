<?php
$this->breadcrumbs=array(
	'Bcompanies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BCompany', 'url'=>array('index')),
	array('label'=>'Manage BCompany', 'url'=>array('admin')),
);
?>
<div class="span6">
<h1>添加公司</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<div class="span3">
place empty
</div>