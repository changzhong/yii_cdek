<?php 
/**
 * 首页控制器
 */
namespace frontend\controllers;

use yii;
class IndexController extends BaseController{


	protected $except = ['index'];
	/**
	 * 首页
	 */

	public function actionIndex()
	{
		return $this->render('index');
	}
}
