<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cdek_citys}}".
 *
 * @property integer $id
 * @property integer $code_id
 * @property string $country_name
 * @property string $full_name
 * @property string $city_name
 * @property string $obl_name
 * @property string $center
 * @property string $nal_sum_limit
 * @property string $eng_name
 * @property string $post_code_list
 * @property string $add_time
 * @property string $update_time
 * @property string $ch_name
 */
class CdekCitys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_citys}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code_id', 'ch_name'], 'required'],
            [['code_id'], 'integer'],
            [['country_name'], 'string', 'max' => 10],
            [['full_name', 'city_name', 'obl_name', 'eng_name', 'post_code_list', 'ch_name'], 'string', 'max' => 500],
            [['center', 'add_time', 'update_time'], 'string', 'max' => 50],
            [['nal_sum_limit'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code_id' => '城市CODE',
            'country_name' => '国家名称',
            'full_name' => '城市全名',
            'city_name' => '城市名称',
            'obl_name' => 'Obl Name',
            'center' => '市中心',
            'nal_sum_limit' => 'Nal Sum Limit',
            'eng_name' => '英文名称',
            'post_code_list' => '邮编',
            'add_time' => '添加时间',
            'update_time' => '更新时间',
            'ch_name' => '中文名称',
        ];
    }


}
