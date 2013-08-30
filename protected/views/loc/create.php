<?php
$this->breadcrumbs=array(
	'Locs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Loc', 'url'=>array('index')),
	array('label'=>'Manage Loc', 'url'=>array('admin')),
);
?>

<h1>Create Loc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>