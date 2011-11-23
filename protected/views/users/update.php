<?php
$this->breadcrumbs=array(
	Yii::t('app','Users')=>array('admin'),
	$model->login=>array('view','id'=>$model->uid),
	Yii::t('app','Update'),
);

$this->menu=array(
	//array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Users'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View Users'), 'url'=>array('view', 'id'=>$model->uid)),
	array('label'=>Yii::t('app','Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update User').' <tt>'.$model->login.'</tt>'; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>