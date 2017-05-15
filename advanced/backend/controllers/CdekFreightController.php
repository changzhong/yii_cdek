<?php 
/**
 * CDEK分区价格控制器
 */
namespace backend\controllers;

use yii\web\Controller;
use common\models\CdekFreight;
use common\models\CdekArea;


class CdekFreightController extends Controller
{
	/**
	 * 分区价格列表
	 */

	public function actionIndex($id)
	{
		$area = CdekArea::find()->asArray()->where('id = :id',[':id'=>$id])->one();
		if(empty($area)){
			Yii::$app->session()->setFlash('没有相关分区');
		}

		$model = new CdekFreight();
		$freights = $model::find()->with('admin')->where('area_id =  :id',[':id'=>$area['id']])->asArray()->all();
		return $this->render('index',[
			'area' => $area,
			'freights' => $freights,
			'model' => $model,
		]);
	}
}


