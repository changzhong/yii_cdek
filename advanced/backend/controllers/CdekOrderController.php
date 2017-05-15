<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/7
 * Time: 19:43
 * 订单控制器
 */
namespace backend\controllers;

use common\helps\tool;
use common\models\CdekOrder;
use yii\web\Controller;
use yii\data\Pagination;
use common\models\CdekAbnormal;

class CdekOrderController extends Controller
{
	/**
	 * 订单列表
	 */
	public function actionIndex(){
		$model = new CdekOrder();
		$data = $model->getListByWhere();
		$abnormalCount = CdekAbnormal::find()->where('status = :status',[':status'=>0])->count();
		return $this->render('index',[
			'model' => $model,
			'datas' => $data['datas'],
			'pages' => $data['pages'],
			'abnormalCount' => $abnormalCount,
			'status' => $model::$_status,
		]);
	}
}