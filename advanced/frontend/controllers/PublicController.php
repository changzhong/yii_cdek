<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/14
 * Time: 20:42
 */
namespace frontend\controllers;

use yii\web\Controller;

class PublicController extends Controller
{
	/**
	 * 站点关闭提示页
	 * @return string
	 */
	public function actionCloseTips(){
		return $this->renderPartial('closeTips');
	}
}