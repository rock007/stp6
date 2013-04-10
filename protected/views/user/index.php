<?php
$this->breadcrumbs=array(
	'Busers',
);

$this->menu=array(
	array('label'=>'Create BUser', 'url'=>array('create')),
	array('label'=>'Manage BUser', 'url'=>array('admin')),
);
?>

<h1>Busers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
