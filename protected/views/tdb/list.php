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
		'subdiv',
		'nr_reg',
		'date_reg',
		'date_doc',
		'elab',
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
