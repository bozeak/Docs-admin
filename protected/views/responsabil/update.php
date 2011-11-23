<?php
$this->breadcrumbs=array(
	Yii::t('app','Responsabils')=>array('admin'),
	$model->fullname=>array('view','id'=>$model->id),
	Yii::t('app','Update'),
);

$this->menu=array(
	//array('label'=>'List Responsabil', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Responsabil'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View Responsabil'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Manage Responsabil'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update Responsabil').' '.$model->fullname; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>