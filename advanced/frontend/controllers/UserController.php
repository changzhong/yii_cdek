<?php 
/**
 * 会员控制器
 */

namespace frontend\controllers;
use frontend\models\SignupForm;
use yii;
use frontend\models\LoginForm;

class UserController extends BaseController
{
	protected $except = ['login'];

	/**
	 * 用户登录
	 */
	public function actionLogin()
	{
	
		$model = new LoginForm();
		if(Yii::$app->request->isPost){
			if($model->load(Yii::$app->request->post()) && $model->login()){
				$this->goBack();
			}
		}
		return $this->render('login',[
			'model' => $model
		]);
	}
	
	
	/**
	 * 用户退出
	 */
	public function actionLogout()
	{
		Yii::$app->user->logout();
		return $this->goHome();
	}
	
	/**
	 * 用户注册
	 */
	public function actionRegister()
	{
		$model = new SignupForm();
		if ($model->load(Yii::$app->request->post())) {
			if ($user = $model->signup()) {
				if (Yii::$app->getUser()->login($user)) {
					return $this->goHome();
				}
			}
		}
		
		return $this->render('register', [
			'model' => $model,
		]);
	}
	
	
}