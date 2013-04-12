
<tr>

<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
<td><?php echo CHtml::encode($data->title); ?></td>
<td><?php echo CHtml::encode($data->address); ?></td>
<td><?php echo CHtml::encode($data->province); ?></td>

<td><?php echo CHtml::encode($data->city); ?></td>
<td><?php echo CHtml::encode($data->url); ?></td>
<td><?php echo CHtml::encode($data->tele); ?></td>

</tr>