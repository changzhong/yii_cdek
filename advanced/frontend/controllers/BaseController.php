<?php 
/**
 * 基础控制器
 */

namespace frontend\controllers;
use common\helps\tool;
use common\models\Config;
use yii;
use yii\web\Controller;
use yii\helpers\Url;

class BaseController extends Controller
{

	//默认所有需要验证
	protected $actions = ['*']; 

	//额外不需要验证的方法
	protected $except = [];

	//必须登录才能访问的方法
	protected $mustlogin = [];

	//数据提交方式验证
	protected $verbs = [];
	
	public $webConfig;

	public function behaviors()
	{
		return [
			'access' => [
				'class' => \yii\filters\AccessControl::className(),
				'only'  => $this->actions,
				'except' => $this->except,
				'rules' => [
					[
						'allow' => false,
						'actions' => empty($this->mustlogin)?[]:$this->mustlogin,
						'roles' => ['?'],//游客
					],
					[
						'allow' => true,
						'actions' => empty($this->mustlogin)?[]:$this->mustlogin,
						'roles' => ['@'], 
					]
				],
			],
			'verbs' => [
				'class' => \yii\filters\VerbFilter::className(),
				'actions' => $this->verbs,
			]
		];
	}


	public function init()
	{
		//查找网站配置
		if(!$this->webConfig = Yii::$app->cache->get('webConfig')){
			$configModel = new Config();
			$webConfigs = $configModel::find()->asArray()->select('name,value')->all();
			foreach ($webConfigs as $value){
				$webConfig[$value['name']] = $value['value'];
			}
			unset($webConfigs);
			Yii::$app->cache->set('webConfig',$webConfig,300);
		}
		$this->view->params['webConfig'] = $this->webConfig;
		

	}
	
	public function beforeAction($action)
	{
		//判断是否关闭站点
		if($this->webConfig['WEB_SITE_CLOSE'] === 0){
			return $this->redirect(Url::to(['public/close-tips']));
		}
		return true;
	}
}