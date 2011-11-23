<?php
$this->breadcrumbs=array(
	//'Tipraspuns'=>array('index'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	//array('label'=>'List Tipraspuns', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Tipraspuns'), 'url'=>array('create')),
);

?>

<h1><?php echo Yii::t('app','Manage Tipraspuns') ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipraspuns-grid',
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
