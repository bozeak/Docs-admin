<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fullname), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grad')); ?>:</b>
	<?php echo CHtml::encode($data->grad0->md); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subdiv')); ?>:</b>
	<?php echo CHtml::encode($data->subdiv0->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacts')); ?>:</b>
	<?php echo CHtml::encode($data->contacts); ?>
	<br />


</div>