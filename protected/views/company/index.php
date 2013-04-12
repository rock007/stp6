<?php
$this->breadcrumbs=array(
	'公司',
);

$this->menu=array(
	array('label'=>'Create BCompany', 'url'=>array('create')),
	array('label'=>'Manage BCompany', 'url'=>array('admin')),
);
?>
<div class="span9">

<h5>公司库</h5>
<div class="viewModel">
<a href=""><span>列表</span></a>|<a href=""><span>卡片</span></a>
</div>

<form class="form-search">
  <input type="text" class="input-medium " style="width: 300px">
  <button type="submit" class="btn">检索</button>
</form>

<!--  
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view2',
	'template'   => '<table class="table table-bordered">{items}</table>{pager}',
)); ?>
-->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'itemsCssClass'=>'table table-bordered',
	'columns'=>array(
        'title',
		array(
			'name'=>'详细地址',
			'value'=>'$data->province."省".$data->city."市".$data->address',
		), 
        'tele',
		'email',   
        array(            
            'name'=>'createDate',
           // 'value'=>'date("Y-M-d H:m:s,", $data->createDate)',
        ),       
        array(
      'class'=>'CButtonColumn',
      'template'=>'{view} {update} {delete}',
      'viewButtonOptions'=>array('title'=>'查看'),
      'updateButtonOptions'=>array('title'=>'修改'),
      'deleteButtonOptions'=>array('title'=>'删除'),
      'header'=>'管理操作', 
              
        'buttons' => array(
          'view'=>array(
              'imageUrl'=>'',
          ),
          'delete'=>array(
              'imageUrl'=>'',
          ),
          'update'=>array(
              'imageUrl'=>'',
          ),
        ),
    ),
    ),	
)); ?>


</div>