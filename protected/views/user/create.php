<?php
$this->breadcrumbs=array(
	'Busers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BUser', 'url'=>array('index')),
	array('label'=>'Manage BUser', 'url'=>array('admin')),
);
?>

<h1>Create BUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>