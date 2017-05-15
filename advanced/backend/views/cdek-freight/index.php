<?php 
	use yii\helpers\Html;
	$this->title = '【 '.$area['area_name'].' 】价格列表';
	$this->params['breadcrumbs'][] = $this->title;
?>

<p>
	<?php echo Html::a('添加价格',['create','id'=>$area['id']],['class'=>'btn btn-success']); ?>
</p>

<table class="table table-hover table-bordered">
	<tr>
		<td>ID</td>
		<td>重量区间(KG)</td>
		<td>计算类型</td>
		<td>价格</td>
		<td>添加人</td>
		<td>添加时间</td>
		<td>状态</td>
		<td>操作</td>
	</tr>
	<?php if(!empty($freights)): ?>
		<?php foreach ($freights as $freight):; ?>
			<tr>
				<td><?php echo $freight['id']; ?></td>
				<td><?php echo $freight['begin_weight'].' < 价格 <= '.$freight['end_weight']; ?></td>
				<td><?php echo $model::$_type[$freight['type']]; ?></td>
				<td><?php echo $freight['price']; ?></td>
				<td><?php var_dump($freight['admin']); echo $freight['admin']['username']; ?></td>
				<td><?php echo $freight['add_time']; ?></td>
				<td><?php echo $model::$_status[$freight['status']]; ?></td>
				<td><?php echo $freight['id']; ?></td>
			</tr>
		<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="8">
				<h3 class="text-danger text-center">没有相关数据</h3>
			</td>
		</tr>
	<?php endif; ?>
</table>