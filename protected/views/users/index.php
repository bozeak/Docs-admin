<?php
$this->breadcrumbs=array(
	Yii::t('app','Users'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Users'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Users'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
