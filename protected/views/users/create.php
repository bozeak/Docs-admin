<?php
$this->breadcrumbs=array(
	Yii::t('app','Users')=>array('admin'),
	Yii::t('app','Create'),
);

$this->menu=array(
	//array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create User')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>