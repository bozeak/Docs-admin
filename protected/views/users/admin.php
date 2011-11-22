<?php
$this->breadcrumbs=array(
	//'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Users'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('users-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'uid',
		'login',
		'password',
		array(
			'name'=>'rid',
			'value'=>'$data->r->rid_name',
			'filter'=>CHtml::listData(Roles::model()->findAll(), 'rid', 'rid_name'),
			
		),
		array(
			'name'=>'subdiv',
			'value'=>'$data->subdiv0->name',
			'filter'=>CHtml::listData(Subdiv::model()->findAll(), 'id', 'name'),
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
