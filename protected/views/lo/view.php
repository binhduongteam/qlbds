<?php
$this->breadcrumbs=array(
	'Los'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Lo', 'url'=>array('index')),
	array('label'=>'Create Lo', 'url'=>array('create')),
	array('label'=>'Update Lo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lo', 'url'=>array('admin')),
);
?>

<h1>View Lo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tinhtrang',
		'sanpham_id',
		'malo',
		'toado',
		'loc_id',
		'khachhang_id',
		'date_created',
		'date_updated',
	),
)); ?>
