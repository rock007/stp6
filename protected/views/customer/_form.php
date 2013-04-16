<?php
/* @var $this CustomerController */
/* @var $model BCustomer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bcustomer-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


<fieldset>
<legend>基本信息<span class="form_tag"> <a href="">展开</a> </span></legend>
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->textField($model,'province',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'lnkCompany'); ?>
		<?php echo $form->textField($model,'lnkCompany'); ?>
		<?php echo $form->error($model,'lnkCompany'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'lnkUser'); ?>
		<?php echo $form->textField($model,'lnkUser',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lnkUser'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'privilege'); ?>
		<?php echo $form->textField($model,'privilege'); ?>
		<?php echo $form->error($model,'privilege'); ?>
	</div>
	
</fieldset>

<fieldset>
<legend>联系方式<span class="form_tag"> <a href="">展开</a> </span></legend>
	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tele'); ?>
		<?php echo $form->textField($model,'tele',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tele'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qq'); ?>
		<?php echo $form->textField($model,'qq',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'qq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createDate'); ?>
		<?php echo $form->textField($model,'createDate'); ?>
		<?php echo $form->error($model,'createDate'); ?>
	</div>
	
</fieldset>

	<div class="row buttons">
		
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建' : '更新',
			array('class'=>'btn btn-primary')); ?>
		
		<?php echo CHtml::button("返回",array('class'=>'btn'))?>
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->