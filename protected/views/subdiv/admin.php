<?php
$this->breadcrumbs=array(
	//'Subdivs'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	//array('label'=>'List Subdiv', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Subdiv'), 'url'=>array('create')),
);
?>

<h1><?php echo Yii::t('app','Manage Subdivs') ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subdiv-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
