<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grad'); ?>
		<?php echo $form->dropDownList($model,'grad', CHtml::listData(Grad::model()->findAll(), 'id', 'md'), array('empty'=>'--Alegeti--')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subdiv'); ?>
		<?php echo $form->dropDownList($model,'subdiv', CHtml::listData(Subdiv::model()->findAll(), 'id', 'name'), array('empty'=>'--Alegeti--')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contacts'); ?>
		<?php echo $form->textField($model,'contacts',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->