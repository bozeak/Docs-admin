<?php
$this->breadcrumbs=array(
	Yii::t('app','Responsabils')=>array('admin'),
	Yii::t('app','Create'),
);

$this->menu=array(
	//array('label'=>'List Responsabil', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Responsabil'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create Responsabil') ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>