<?php
$this->breadcrumbs=array(
	'Los'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lo', 'url'=>array('index')),
	array('label'=>'Create Lo', 'url'=>array('create')),
	array('label'=>'View Lo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Lo', 'url'=>array('admin')),
);
?>

<h1>Update Lo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>