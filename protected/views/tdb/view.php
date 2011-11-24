<?php
$this->breadcrumbs=array(
	'Înregistrarea nr. '.$model->id,
);

//$this->menu=array(
//	array('label'=>'List TDb', 'url'=>array('index')),
//	array('label'=>'Create TDb', 'url'=>array('create')),
//	array('label'=>'Update TDb', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete TDb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage TDb', 'url'=>array('admin')),
//);
?>

<h1>View TDb #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                array(
                    'name'=>'subdiv',
                    'value'=>$model->subdiv2->name,
                ),
		'nr_reg',
                array(
                    'name'=>'date_reg',
                    'value'=>Yii::app()->locale->dateFormatter->formatDateTime($model->date_reg, "long", false),
                ),
		array(
                    'name'=>'date_doc',
                    'value'=>Yii::app()->locale->dateFormatter->formatDateTime($model->date_doc, "long", false),
                ),
		'elab',
		'id_elab',
		'address',
		'nr_cadastr',
		'tel',
		'content',
                array(
                    'name'=>'responsabil',
                    'value'=>$model->resp->fullname,
                ),
                array(
                    'name'=>'get_exec',
                    'value'=>Yii::app()->locale->dateFormatter->formatDateTime($model->get_exec, "long", false),
                ),
		'nr_respons',
                array(
                    'name'=>'date_respons',
                    'value'=>(($model->date_respons) != "0000-00-00")?Yii::app()->locale->dateFormatter->formatDateTime($model->date_respons, "long", false):"",
                ),
                array(
                    'name'=>'respons_type',
                    'value'=>(isset($model->tipraspuns))?$model->tipraspuns->name:"",
                ),
		'note',
		'dossier',
	),
)); ?>
