<?php
$this->breadcrumbs=array(
	Yii::t('app','Tipraspuns')=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Tipraspuns'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View Tipraspuns'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Manage Tipraspuns'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Tipraspuns').' '. $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>