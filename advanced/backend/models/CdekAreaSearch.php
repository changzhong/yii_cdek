<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CdekArea;
use common\models\Admin;

/**
 * CdekAreaSearchModel represents the model behind the search form about `common\models\CdekAreaModel`.
 */
class CdekAreaSearch extends CdekArea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'create_time', 'user_id', 'update_time', 'sort'], 'integer'],
            [['area_name', 'city_ids'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function getAdmin(){
        return $this->hasOne(Admin::className(),['id'=>'user_id'])->asArray();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CdekArea::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'create_time' => $this->create_time,
            'user_id' => $this->user_id,
            'update_time' => $this->update_time,
            'sort' => $this->sort,
        ]);

        $query->andFilterWhere(['like', 'area_name', $this->area_name])
            ->andFilterWhere(['like', 'city_ids', $this->city_ids]);

        return $dataProvider;
    }
}
