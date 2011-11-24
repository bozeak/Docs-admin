<?php


$this->breadcrumbs=array(
	'Afisare',
);

?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tdb-grid',
	'dataProvider'=>$model->searchAll(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		//'subdiv',
                array(
                    'header'=>'Nr. de înregistrare<br />Data înregistrării',
                    'value' =>'$data->nr_reg."<br>".nl2br(Yii::app()->locale->dateFormatter->formatDateTime($data->date_reg, "long", false))',
                    'type'=>'raw',
                ),
                //'nr_reg',
		//'date_reg',
		//'date_doc',
		'elab',
                array(
                    'name'=>'responsabil',
                    'value'=>'nl2br($data->resp->grad0->md)." ".nl2br($data->resp->fullname)."<br>".nl2br($data->resp->contacts)',
                    'type'=>'raw',
                ),
		/*
		'id_elab',
		'address',
		'nr_cadastr',
		'tel',
		'content',
		'responsabil',
		'get_exec',
		'nr_respons',
		'date_respons',
		'respons_type',
		'note',
		'dossier',
		'author',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
