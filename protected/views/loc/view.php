<?php
$this->breadcrumbs=array(
	'Locs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Loc', 'url'=>array('index')),
	array('label'=>'Create Loc', 'url'=>array('create')),
	array('label'=>'Update Loc', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Loc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Loc', 'url'=>array('admin')),
);
?>

<h1>View Loc #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'maloc',
		'duan_id',
		'bandoloc',
		'loaisanpham_id',
		'toado',
		'date_created',
		'date_updated',
	),
)); ?>
