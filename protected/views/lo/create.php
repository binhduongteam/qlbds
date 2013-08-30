<?php
$this->breadcrumbs=array(
	'Los'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lo', 'url'=>array('index')),
	array('label'=>'Manage Lo', 'url'=>array('admin')),
);
?>

<h1>Create Lo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>