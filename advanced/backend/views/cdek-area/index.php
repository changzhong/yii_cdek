<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CdekAreaSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cdek分区管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdek-area-model-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加分区', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <table class="table table-hover">
    	<tr>
    		<td>ID</td>
    		<td>分区名称</td>
    		<td>创建人</td>
    		<td>创建时间</td>
    		<td>更新时间</td>
    		<td>状态</td>
    		<td>操作</td>
    	</tr>
    	<?php 
    		if(!empty($data)):
    			foreach ($data as $key => $value):
    	 ?>
    		<tr>
    			<td><?php echo $value['id']; ?></td>
    			<td><?php echo $value['area_name']; ?></td>
    			<td><?php echo $value['admin']['username']; ?></td>
    			<td><?php echo date('Y-m-d',$value['create_time']); ?></td>
    			<td><?php echo date('Y-m-d',$value['update_time']); ?></td>
    			<td><?php echo $model::$_status[$value['status']]; ?></td>
    			<td>
    				<?php echo Html::a('编辑',['update','id'=>$value['id']],['class'=>'btn btn-warning']); ?>
    				<?php echo Html::a('运费设置',['cdek-freight/index','id'=>$value['id']],['class'=>'btn btn-success']); ?>
    				<?php echo Html::button('显示城市',['class'=>'btn btn-danger','onclick'=>'targetCitys(this)']); ?>
    			</td>
    		</tr>
			<?php if($value['citys']) :; ?>
				<tr class="hidden">
					<td colspan="7">
						<table class="table table-hover">
							<tr class="alert-danger">
				    			<td>俄语名称</td>
				    			<td>中文名称</td>
				    			<td>英文名称</td>
				    		</tr>
							<?php foreach ($value['citys'] as $k => $v):;  ?>
							<tr>
								<td><?php echo $v['full_name']; ?></td>
								<td><?php echo $v['ch_name']; ?></td>
								<td><?php echo $v['eng_name']; ?></td>
							</tr>
							<?php endforeach; ?>
							<tr class="alert-warning">
								<td colspan="3" class="text-center" onclick="hiddenCitys(this)">
									<span class="glyphicon glyphicon-chevron-up"></span>
									隐藏城市
									<span class="glyphicon glyphicon-chevron-up"></span>
								</td>
							</tr>
						</table>
					</td>
				</tr>	
	    		
			<?php endif;?>
    	<?php 
    			endforeach;
    		else: 
		?>
    		<tr>
    			<td colspan="7"><h4 class="text-danger text-center">没有相关数据</h4></td>
    		</tr>
    	<?php endif; ?>
    </table>
    <?php if(1==2): ?>
	    <?= GridView::widget([
	        'dataProvider' => $dataProvider,
	        'filterModel' => $searchModel,
	        'columns' => [
	            'id',
	            'area_name',
	            [
		            'attribute' => 'status',
		            'filter' => $status,
		            'value' => function($model){
	    	            return $model->status?'启用':'禁用';
		            }
	            ],
		        'user_id',
		        'sort',
		        [
		        	'attribute' => 'create_time',
			        'value' => function($model){
	    	            return date('Y-m-d H:i:s',$model->create_time);
			        }
		        ],
		        [
			        'attribute' => 'update_time',
			        'value' => function($model){
				        return date('Y-m-d H:i:s',$model->update_time);
			        }
		        ],
		        [
		        	'attribute' => 'city_ids',
		        	'label' => '分区城市',
		        	'value' => function($model){
		        	}
		        ],

	            ['class' => 'yii\grid\ActionColumn'],
	        ],
	    ]); ?>
	<?php endif; ?>
</div>


<?php 

$css = <<<CSS
	.alert-warning{cursor: pointer;}
CSS;
$this->registerCss($css);

?>
<script type="text/javascript">
	//隐藏与显示城市列表
	function targetCitys(th){
		var ani = $(th).parents('tr').next();
		if(ani.hasClass('hidden')){
			ani.removeClass('hidden');
			$(th).text('隐藏城市');
		}else{
			ani.addClass('hidden');
			$(th).text('显示城市');
		}
	}

	function hiddenCitys(th){
		var ani = $(th).parents('table').parents('tr');
		ani.addClass('hidden');
		ani.prev().find('.btn-danger').text('显示城市');
	}
</script>