<?php
$this->breadcrumbs=array(
	'Du Ans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DuAn', 'url'=>array('index')),
	array('label'=>'Create DuAn', 'url'=>array('create')),
	array('label'=>'View DuAn', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DuAn', 'url'=>array('admin')),
);
?>

<h1>Update DuAn <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>