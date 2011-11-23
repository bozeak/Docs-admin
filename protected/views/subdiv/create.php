<?php
$this->breadcrumbs=array(
	Yii::t('app','Subdivs')=>array('admin'),
	Yii::t('app','Create'),
);

$this->menu=array(
	//array('label'=>'List Subdiv', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Subdiv'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create Subdiv') ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>