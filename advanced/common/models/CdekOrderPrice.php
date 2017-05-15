<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cdek_order_price}}".
 *
 * @property integer $id
 * @property integer $order_id
 * @property double $original_price
 * @property double $discount_price
 * @property double $ope_price
 * @property integer $add_user_id
 * @property integer $add_time
 * @property double $total_price
 * @property string $remarks
 * @property double $weight
 */
class CdekOrderPrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_order_price}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'original_price', 'discount_price', 'ope_price', 'add_user_id', 'add_time', 'total_price', 'weight'], 'required'],
            [['order_id', 'add_user_id', 'add_time'], 'integer'],
            [['original_price', 'discount_price', 'ope_price', 'total_price', 'weight'], 'number'],
            [['remarks'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => '订单ID',
            'original_price' => '原价',
            'discount_price' => '折后价',
            'ope_price' => '操作费用',
            'add_user_id' => '添加人',
            'add_time' => '添加时间',
            'total_price' => '总价',
            'remarks' => '备注',
            'weight' => '实际重量',
        ];
    }
}
