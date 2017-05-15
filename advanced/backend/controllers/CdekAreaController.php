<?php

namespace backend\controllers;

use Yii;
use common\models\CdekArea;
use backend\models\CdekAreaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\CdekCitys;

/**
 * CdekAreaController implements the CRUD actions for CdekAreaModel model.
 */
class CdekAreaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CdekAreaModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CdekAreaSearch();
        $areas = $searchModel::find()->with('admin')->asArray()->all();
        if($areas){
            $citysModel = new CdekCitys();
            foreach ($areas as $key=>$value) {
                if(!empty($value['city_ids'])){
                    $areas[$key]['citys'] = $citysModel::find()->where('id IN ( '.$value['city_ids'].' )')->all();
                }else{
                    $areas[$key]['citys'] = [];
                }
            }
        }
        return $this->render('index',[
            'data' => $areas,
            'model' => $searchModel,
        ]);
        die;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
	        'status' => $searchModel::$_status,
        ]);
    }

    /**
     * Displays a single CdekAreaModel model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CdekAreaModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CdekArea();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
        	$model->status = 1;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CdekAreaModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CdekAreaModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CdekAreaModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CdekAreaModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CdekArea::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
