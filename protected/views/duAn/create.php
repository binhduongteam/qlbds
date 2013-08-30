<?php
$this->breadcrumbs=array(
	'Du Ans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('default','List DuAn'), 'url'=>array('index')),
	array('label'=>Yii::t('default','Manage DuAn'), 'url'=>array('admin')),
);
?>

<h1>Create DuAn</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>