<?php
$this->breadcrumbs=array(
	'Locs',
);

$this->menu=array(
	
		array('label'=>Yii::t('default','Create Loc'), 'url'=>array('create')),
		array('label'=>Yii::t('default','Manage Loc'), 'url'=>array('admin')),
);
?>

<h1>Locs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
