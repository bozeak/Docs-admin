<?php
$this->breadcrumbs=array(
	Yii::t('app','Users')=>array('admin'),
	$model->login,
);

$this->menu=array(
	//array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Users'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update Users'), 'url'=>array('update', 'id'=>$model->uid)),
	array('label'=>Yii::t('app','Delete Users'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->uid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View User'); ?> <tt><?php echo $model->login; ?></tt></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'login',
		//'password',
		array(
                    'name'=>'rid',
                    'value'=>$model->r->rid_name,
                ),
                array(
                    'name'=>'subdiv',
                    'value'=>(isset($model->subdiv0))?$model->subdiv0->name:"",
                ),
	),
)); ?>
