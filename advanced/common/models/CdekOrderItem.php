<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cdek_order_item}}".
 *
 * @property integer $id
 * @property integer $order_id
 * @property string $ware_key
 * @property double $cost
 * @property double $payment
 * @property string $weight
 * @property string $amount
 * @property string $comment
 * @property integer $apply_price
 */
class CdekOrderItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_order_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'apply_price'], 'integer'],
            [['cost', 'payment', 'weight', 'amount'], 'number'],
            [['apply_price'], 'required'],
            [['ware_key'], 'string', 'max' => 20],
            [['comment'], 'string', 'max' => 500],
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
            'ware_key' => '包装里货件的序号',
            'cost' => '货件投保金额',
            'payment' => '到付金额 ',
            'weight' => '每一件的净重（克g）',
            'amount' => '货件数量',
            'comment' => '备注',
            'apply_price' => '申报金额',
        ];
    }
}
