<?php
$this->breadcrumbs=array(
	Yii::t('app','Responsabils')=>array('admin'),
	$model->fullname,
);

$this->menu=array(
	//array('label'=>'List Responsabil', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create Responsabil'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update Responsabil'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('app','Delete Responsabil'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage Responsabil'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','View Responsabil').' '. $model->fullname; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fullname',
                array(
                    'name'=>'grad',
                    'value'=>$model->grad0->md,
                ),
		array(
                    'name'=>'subdiv',
                    'value'=>$model->subdiv0->name,
                ),
		'contacts',
	),
)); ?>
