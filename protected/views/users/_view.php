<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rid')); ?>:</b>
	<?php echo CHtml::encode($data->r->rid_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subdiv')); ?>:</b>
	<?php echo CHtml::encode($data->subdiv0->name); ?>
	<br />


</div>