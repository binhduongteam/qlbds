<?php
$this->breadcrumbs=array(
	'Locs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Loc', 'url'=>array('index')),
	array('label'=>'Create Loc', 'url'=>array('create')),
	array('label'=>'View Loc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Loc', 'url'=>array('admin')),
);
?>

<h1>Update Loc <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>