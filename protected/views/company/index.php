<?php
$this->breadcrumbs=array(
	'Bcompanies',
);

$this->menu=array(
	array('label'=>'Create BCompany', 'url'=>array('create')),
	array('label'=>'Manage BCompany', 'url'=>array('admin')),
);
?>
<div class="span6">

<h1>Bcompanies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>