<?php


$this->breadcrumbs=array(
	'Afișare',
);

?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tdb-grid',
	'dataProvider'=>$model->searchAll(),
	//'filter'=>$model,
        'enableSorting'=>false,
	'columns'=>array(
	        array(
                    'name'=>'id',
                    'value'=>'$data->id',
                    'htmlOptions'=>array(
                        'style'=>'width: 30px; text-align: center',
                    ),
                ),
		//'subdiv',
                array(
                    'header'=>'Nr. de înregistrare<br />Data înregistrării',
                    'value' =>'$data->nr_reg."<br>".nl2br(Yii::app()->locale->dateFormatter->formatDateTime($data->date_reg, "long", false))',
                    'type'=>'raw',
                    'htmlOptions'=>array(
                        'style'=>'width: 120px; padding: 0 0 0 5px',
                    ),
                ),
                //'nr_reg',
		//'date_reg',
		//'date_doc',
		//'elab',
                array(
                    'name'=>'elab',
                    'value'=>'$data->elab',
                    'htmlOptions'=>array(
                        'style'=>'width: 130px',
                    ),
                ),
                array(
                    'name'=>'responsabil',
                    'value'=>'nl2br($data->resp->grad0->md)." ".nl2br($data->resp->fullname)."<br>".nl2br($data->resp->contacts)',
                    'type'=>'raw',
                    'htmlOptions'=>array(
                        'style'=>'width: 170px',
                    ),
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
//                array(
//                    'name'=>'author',
//                    'value'=>'$data->autor->login',
//                    'htmlOptions'=>array(
//                        'style'=>'width: 40px',
//                    ),
//                ),
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}',
                        
		),
	),
)); ?>
