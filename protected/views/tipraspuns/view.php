<?php
$this->breadcrumbs=array(
	Yii::t('app','Tipraspuns')=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Tipraspuns'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update Tipraspuns'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Delete Tipraspuns'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage Tipraspuns'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View Tipraspuns').' '.$model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
