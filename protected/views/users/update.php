<?php
$this->breadcrumbs=array(
	'Users'=>array('admin'),
	$model->uid=>array('view','id'=>$model->uid),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->uid)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->login; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>