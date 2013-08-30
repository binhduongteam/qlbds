<?php
$this->breadcrumbs=array(
	'Los',
);

$this->menu=array(
	array('label'=>Yii::t('default','Create Lo'), 'url'=>array('create')),
	array('label'=>Yii::t('default','Manage Lo'), 'url'=>array('admin')),
);
?>

<h1>Los</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
