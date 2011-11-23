<?php
$this->breadcrumbs=array(
	Yii::t('app','Responsabils')=>array('admin'),
	Yii::t('app','Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Responsabil'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tipraspuns-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app','Manage Responsabils') ?></h1>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'responsabil-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'fullname',
                array(
                    //'filter'=>CHtml::listData(Grad::model()->findAll(),'id','md'),
                    'name'=>'grad',
                    'value'=>'$data->grad0->md',
                ),
                array(
                    'name'=>'subdiv',
                    'value'=>'$data->subdiv0->name',
                ),
		'contacts',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
