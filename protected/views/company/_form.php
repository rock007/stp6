<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bcompany-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



<fieldset>
<legend>基本信息</legend>
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->textField($model,'province',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>
</fieldset>

<fieldset>
<legend>联系方式</legend>

	<div class="row">
		<?php echo $form->labelEx($model,'tele'); ?>
		<?php echo $form->textField($model,'tele',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tele'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
</fieldset>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctype'); ?>
		<?php echo $form->textField($model,'ctype'); ?>
		<?php echo $form->error($model,'ctype'); ?>
	</div>

<!--  
	<div class="row">
		<?php echo $form->labelEx($model,'lnkUser'); ?>
		<?php echo $form->textField($model,'lnkUser',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lnkUser'); ?>
	</div>
-->

	<div class="row">
		<?php echo $form->labelEx($model,'privilege'); ?>
		<?php echo $form->textField($model,'privilege'); ?>
		<?php echo $form->error($model,'privilege'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		
		<?php echo CHtml::button("返回")?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->