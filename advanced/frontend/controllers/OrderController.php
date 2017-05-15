<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/14
 * Time: 23:14
 */

namespace frontend\controllers;

use common\helps\tool;
use common\models\CdekOrder;
use yii\data\Pagination;

class OrderController extends BaseController
{
	
	public $layout = 'user';
	
	public function actionIndex()
	{
		$model = new CdekOrder();
		
		$wattinCount = $model::find()->where('status = :watting_status',[':watting_status'=>$model::STATUS_WAIT_PLAY])->count();
		$data = $model->getListByWhere();

		return $this->render('index',[
			'wattingCount' => $wattinCount,
			'datas' => $data['datas'],
			'pages' => $data['pages'],
			'model' => $model,
			'status' => $model::$_status,
		]);
	}
}
