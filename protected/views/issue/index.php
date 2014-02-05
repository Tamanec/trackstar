<?php
/* @var $this IssueController */
/* @var $dataProvider CActiveDataProvider */
/* @var $context Project */

$this->breadcrumbs=array(
	'Issues',
);

$this->menu=array(
	array('label'=>'Create Issue', 'url'=>array('create', 'pid' => $context->id)),
	array('label'=>'Manage Issue', 'url'=>array('admin', 'pid' => $context->id)),
);
?>

<h1>Issues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
