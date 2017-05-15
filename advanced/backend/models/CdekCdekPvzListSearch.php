<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CdekPvzList;

/**
 * CdekCdekPvzListSearchModel represents the model behind the search form about `common\models\CdekPvzListModel`.
 */
class CdekCdekPvzListSearch extends CdekPvzList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['code', 'name', 'city', 'worktime', 'address', 'phone', 'note', 'type', 'ownercode', 'add_time', 'update_time'], 'safe'],
            [['citycode', 'coordx', 'coordy', 'weightlimit', 'wdightmin', 'weightmax'], 'number'],
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
        $query = CdekPvzList::find();

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
            'citycode' => $this->citycode,
            'coordx' => $this->coordx,
            'coordy' => $this->coordy,
            'weightlimit' => $this->weightlimit,
            'wdightmin' => $this->wdightmin,
            'weightmax' => $this->weightmax,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'worktime', $this->worktime])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'ownercode', $this->ownercode])
            ->andFilterWhere(['like', 'add_time', $this->add_time])
            ->andFilterWhere(['like', 'update_time', $this->update_time]);

        return $dataProvider;
    }
}
