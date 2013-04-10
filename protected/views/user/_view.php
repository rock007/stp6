<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userName')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userName), array('view', 'id'=>$data->userName)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pwd')); ?>:</b>
	<?php echo CHtml::encode($data->pwd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isCompany')); ?>:</b>
	<?php echo CHtml::encode($data->isCompany); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registerDate')); ?>:</b>
	<?php echo CHtml::encode($data->registerDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastLoginDate')); ?>:</b>
	<?php echo CHtml::encode($data->lastLoginDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lastLoginIP')); ?>:</b>
	<?php echo CHtml::encode($data->lastLoginIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>