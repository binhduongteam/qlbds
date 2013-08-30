<?php
$this->breadcrumbs=array(
	'Du Ans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DuAn', 'url'=>array('index')),
	array('label'=>'Create DuAn', 'url'=>array('create')),
	array('label'=>'Update DuAn', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DuAn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DuAn', 'url'=>array('admin')),
);
?>

<h1>View DuAn #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'maduan',
		'tenduan',
		'diachi',
		'bandoduan',
		'project_manager_id',
		'date_created',
		'date_updated',
	),
)); ?>
