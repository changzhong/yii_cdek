<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/14
 * Time: 23:30
 */
use yii\helpers\Html;

$this->title = '我的订单';
?>

<div class="container-fluid" id="orderIndex">
		<style>
			.item_tr{border-bottom: 1px solid red;}
			.rec_info{width: 15%;}
			.form-inline .form-group{margin-bottom: 10px; margin-right: 10px;}
			.price{font-size: 18px}
			.balance{color:#f60; font-size:24px}
		</style>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>
						我的订单
						<a class="btn btn-success" href="{:U('cdek/createOrder')}">添加订单</a>
						<a href="{:U('orderList',['status'=>2])}" class="btn btn-danger">待付款订单<span class="badge"><?php echo $wattingCount?:0; ?></span></a>
					</h4>
				</div>
			</div>
			
			
			<div class="panel-body">
				<form action="" method="get" class="form-inline">
					<div class="form-group">
						<label for="au" class="control-label">添加人：</label>
						<input type="text" class="form-control" id="name" name="name" value="<?php echo Yii::$app->request->get('name')?:'';  ?>">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">发件人：</label>
						<select name="sender_user_id" id="" class="form-control">
							<option value="">发件人</option>
							<volist name="send_user" id="su">
								<option value="{$su.id}" <if condition="I('get.sender_user_id') eq $su['id']">selected="selected"</if>>{$su.name}</option>
							</volist>
						</select>
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">状态：</label>
						<select name="status" id="status" class="form-control">
							<option value="">请选择</option>
							<?php foreach ($status as $sk=> $sv):  ?>
								<option value="<?php echo $sk; ?>" <?php echo Yii::$app->request->get('status') !== '' && Yii::$app->request->get('status') == $sk?'selected="selected"':''; ?> ><?php echo $sv; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">订单号：</label>
						<input type="text" name="track_number" class="form-control" value="<?php echo Yii::$app->request->get('track_number')?:''; ?>">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">追踪号：</label>
						<input type="text" name="DispatchNumber" class="form-control" value="<?php echo Yii::$app->request->get('DispatchNumber')?:''; ?>">
					</div>
					
					<div class="form-group">
						<label for="" class="control-label">收件人：</label>
						<input type="text" name="recipien_name" class="form-control" value="<?php echo Yii::$app->request->get('recipien_name')?:''; ?>">
					</div>
					<div class="form-group">
						<label for="" class="control-label">电话：</label>
						<input type="text" name="phone" class="form-control" value="<?php echo Yii::$app->request->get('phone')?:''; ?>">
					</div>
					
					<div class="form-group">
						<label for="beginDate" class="control-label">创建时间：</label>
						<input type="text" name="begin_date" id="beginDate" class="form-control date-input" readonly="readonly" value="<?php echo $beginDate = Yii::$app->request->get('begin_date'); $beginDate?date('Y-m-d',$beginDate):''; ?>">
					</div>
					<div class="form-group">
						<label for="endDate" class="control-label"> - </label>
						<input type="text" name="end_date" value="<?php echo $endDate = Yii::$app->request->get('end_date'); $endDate?date('Y-m-d',$endDate):''; ?>" id="endDate" class="form-control date-input" readonly="readonly">
					</div>
					<div class="form-group">
						<input type="submit" value="查 询" class="btn btn-primary">
					</div>
				</form>
				
				<h4>
					帐户余额：
					<span class="balance"><?php echo Yii::$app->user->identity->balance; ?></span> 元
					 <?php echo Html::a('充 值',['funds/recharge'],["class"=>"btn btn-danger"]) ?>
				</h4>
			</div>
			
			<table class="table table-hover table-bordered">
				<tr class="alert-danger">
					<th class="">订单信息</th>
					<th class="">跟踪信息</th>
					<th class="rec_info">收件人信息</th>
					<!-- <th>其它信息</th> -->
					<th class="">重量</th>
					<!-- <th class="">增值服务号码</th> -->
					<th class="rec_info">产品详情</th>
					<th class="rec_info">费用详情</th>
					<th>金额</th>
					<th class="">状态</th>
					<th>操作</th>
				</tr>
				<?php
				if(isset($datas) && !empty($datas)):
					foreach ($datas as $data):
						?>
						<tr>
							<!-- <td>{$vo.order_number}</td> -->
							<td>
								<?php echo $data['date']; ?>
							</td>
							<td>
								订单号：
								<?php echo Html::a($data['track_number'],['cdek-order/get-order-status',['number'=>$data['track_number']]]) ?>
								<br>
								追踪号
								<?php echo Html::a($data['track_number'],'http://www.edostavka.ru/track.html?order_id='.$data['DispatchNumber'],["target"=>"_blank"]) ?>
								<br>
								（点击追踪号查看物流信息）
							</td>
							</td>
							<td>
								姓名： <?php echo $data['recipien_name'] ?>
								<br>
								电话：<?php echo $data['phone'] ?>
								<br>
								邮箱: <?php echo $data['recipient_email'] ?>
								<br>
								<?php
								//$city = M('cdek_citys')->where('code_id = '.$vo['rec_city_code'])->field('full_name,eng_name')->find();
								?>
								俄语城市：<?php echo $data['city']['full_name'] ?> <br>
								英文城市：<?php echo $data['city']['eng_name'] ?>
								<br>
								地址：<?php echo $data['street'] ?>
							
							</td>
							<!-- <td>
								附加运费: {$vo.delivery_recipient_cost} <br>
								分部代码: {$vo.pvz_code} <br>
								包装序号: {$vo.package_number} <br>
								条码: {$vo.barcode}
							</td> -->
							
							<td>
								估重 :  <?php echo $data['weight']/1000; ?> KG
								<br>
								<?php if(isset($data['price']['weight']) && empty($data['price']['weight'])): ?>
									
									实重：<b class="text-danger"><?php echo $data['price']['weigth']; ?> KG</b>
								<?php endif; ?>
								<!--  长：{$vo.sizeA} CM
								 <br>
								 宽：{$vo.sizeB} CM
								 <br>
								  高：{$vo.sizeC} CM -->
							</td>
							<!-- <td>{$vo.service_codes}</td> -->
							<td>
								<?php if(isset($data['item']) && !empty($data['item'])): ?>
									产品名称：<?php echo $data['item']['comment'] ?><br>
									产品数量：<?php echo $data['item']['amount'] ?> <br>
									投保金额：<?php echo $data['item']['payment'] ?> <br>
									申报金额：<?php echo $data['item']['apply_price'] ?>
								<?php endif; ?>
							</td>
							<td>
								<?php if(isset($data['price']) && !empty($data['price'])): ?>
									<ul class="list-unstyled">
										<li>运费：<?php echo $data['price']['discount_price'] ?></li>
										<li>操作费：<?php echo $data['price']['ope_price'] ?></li>
										<li>备注：<?php echo $data['price']['remarks'] ?></li>
									</ul>
								<?php endif; ?>
							</td>
							<td><b class="text-danger price"><?php echo $data['price']['total_price'] ?></b></td>
							<td>
								<?php echo $status[$data['status']]; ?>
							</td>
							
							<td>
								<div class="form-group">
									<!--待发货或超级管理员才显示删除-->
									<?php
									if($data['status'] == 1){
										echo Html::a('删除',['delete',['trackNumber'=>$data['track_number']]],["class"=>"deleteClick btn btn-danger btn-xs"]);
									}
									echo Html::a('打印',['print',['number'=>$data['DispatchNumber']]],["target"=>"_blank","class"=>"btn btn-info btn-xs"]);
									?>
								</div>
								<?php
								//已付款订单不能编辑
								if($data['status'] != 3){
									echo Html::a('编辑',['edit',['id'=>$data['id']]],["target"=>"_blank","class"=>"btn btn-primary btn-xs"]);
								}
								?>
							</td>
						</tr>
						<?php
					endforeach;
				else:
					?>
					<tr>
						<td colspan="11" class="text-center text-danger">
							<h3>没有相关数据</h3>
						</td>
					</tr>
				<?php endif; ?>
			</table>
			
			<div class="text-right">
				<?php echo \yii\widgets\LinkPager::widget(['pagination'=>$pages]); ?>
			</div>
	
		<script src="__STATIC__/thinkbox/jquery.thinkbox.js"></script>
		
		<script type="text/javascript">
            //导航高亮
            highlight_subnav('{:U('brand/index')}');
            $('.deleteClick').click(function(){
                if(!confirm('确定删除订单吗？')){
                    return false;
                };
            });

            $('.date-input').datetimepicker({
                format:'yyyy-mm-dd',
                language:"cn",
            });
		</script>

</div>
