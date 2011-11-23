<?php
$this->breadcrumbs=array(
	Yii::t('app','Subdivs')=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app','Update'),
);

$this->menu=array(
	//array('label'=>Yii::t('app','List Subdiv'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Subdiv'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View Subdiv'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Manage Subdiv'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Subdiv').' '.$model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>