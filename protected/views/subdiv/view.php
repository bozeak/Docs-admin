<?php
$this->breadcrumbs=array(
	Yii::t('app','Subdivs')=>array('admin'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'List Subdiv', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Subdiv'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update Subdiv'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Delete Subdiv'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage Subdiv'), 'url'=>array('admin')),
);
?>

<h1> <?php echo Yii::t('app','View Subdiv').' '.$model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
