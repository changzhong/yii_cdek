<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cdek_freight}}".
 *
 * @property integer $id
 * @property integer $area_id
 * @property integer $type
 * @property double $begin_weight
 * @property double $end_weight
 * @property integer $add_user_id
 * @property integer $add_time
 * @property double $price
 * @property integer $status
 * @property double $cost_price
 */
class CdekFreight extends \yii\db\ActiveRecord
{
    const TYPE_1 = 1;
    const TYPE_2 = 2;

    public static $_type = [
        self::TYPE_1 => '一口价',
        self::TYPE_2 => '重量*价格',
    ];

    const STATUS_Y  = 1;
    const STATUS_N = 0;

    public static $_status = [
        self::STATUS_Y => '正常',
        self::STATUS_N => '禁用',
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_freight}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_id', 'type', 'begin_weight', 'add_user_id', 'add_time', 'price', 'status'], 'required'],
            [['area_id', 'type', 'add_user_id', 'add_time', 'status'], 'integer'],
            [['begin_weight', 'end_weight', 'price', 'cost_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area_id' => '分区ID',
            'type' => '计算类型',
            'begin_weight' => '开始重量 >',
            'end_weight' => '结束重量 <=',
            'add_user_id' => '添加人',
            'add_time' => '添加时间',
            'price' => '价格',
            'status' => '状态1正常 2禁用',
            'cost_price' => '成本价',
        ];
    }

    public function getAdmin(){
        return $this->hasOne(Admin::className(),['id'=>'add_user_id'])->asArray();
    }
}
