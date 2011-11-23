<?php
$this->breadcrumbs=array(
	Yii::t('app','Tipraspuns')=>array('admin'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Manage Tipraspuns'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create Tipraspuns') ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>