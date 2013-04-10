<?php
$this->breadcrumbs=array(
	'Busers'=>array('index'),
	$model->userName=>array('view','id'=>$model->userName),
	'Update',
);

$this->menu=array(
	array('label'=>'List BUser', 'url'=>array('index')),
	array('label'=>'Create BUser', 'url'=>array('create')),
	array('label'=>'View BUser', 'url'=>array('view', 'id'=>$model->userName)),
	array('label'=>'Manage BUser', 'url'=>array('admin')),
);
?>

<h1>Update BUser <?php echo $model->userName; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>