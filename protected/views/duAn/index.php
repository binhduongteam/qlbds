<?php
$this->breadcrumbs=array(
	'Du Ans',
);

$this->menu=array(
	array('label'=>Yii::t('default','Create DuAn'), 'url'=>array('create')),
	array('label'=>Yii::t('default','Manage DuAn'), 'url'=>array('admin')),
);
?>

<h1>Du Ans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
