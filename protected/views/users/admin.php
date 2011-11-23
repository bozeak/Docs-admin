<?php
$this->breadcrumbs=array(
	//'Users'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	//array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Users'), 'url'=>array('create')),
);
?>

<h1><?php echo Yii::t('app','Manage Users'); ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'uid',
		'login',
		//'password',
		array(
			'name'=>'rid',
			'value'=>'$data->r->rid_name',
			'filter'=>CHtml::listData(Roles::model()->findAll(), 'rid', 'rid_name'),
			
		),
		array(
			'name'=>'subdiv',
                        'value'=>'($data->subdiv0 != null)?$data->subdiv0->name:" "',
			'filter'=>CHtml::listData(Subdiv::model()->findAll(), 'id', 'name'),
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
