<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CdekCitys;

/**
 * CdekCitysSearchModel represents the model behind the search form about `common\models\CdekCitysModel`.
 */
class CdekCitysSearch extends CdekCitys
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'code_id'], 'integer'],
            [['country_name', 'full_name', 'city_name', 'obl_name', 'center', 'nal_sum_limit', 'eng_name', 'post_code_list', 'add_time', 'update_time', 'ch_name'], 'safe'],
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

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CdekCitys::find();

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
            'code_id' => $this->code_id,
        ]);

        $query->andFilterWhere(['like', 'country_name', $this->country_name])
            ->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'city_name', $this->city_name])
            ->andFilterWhere(['like', 'obl_name', $this->obl_name])
            ->andFilterWhere(['like', 'center', $this->center])
            ->andFilterWhere(['like', 'nal_sum_limit', $this->nal_sum_limit])
            ->andFilterWhere(['like', 'eng_name', $this->eng_name])
            ->andFilterWhere(['like', 'post_code_list', $this->post_code_list])
            ->andFilterWhere(['like', 'add_time', $this->add_time])
            ->andFilterWhere(['like', 'update_time', $this->update_time])
            ->andFilterWhere(['like', 'ch_name', $this->ch_name]);

        return $dataProvider;
    }
}
