<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cdek_abnormal}}".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $status
 * @property integer $add_user_id
 * @property string $add_time
 * @property integer $dispose_user_id
 * @property string $dispose_time
 * @property string $dispose_result
 * @property string $problem
 * @property string $DispatchNumber
 * @property integer $type
 * @property string $order_no
 * @property integer $send_user_id
 */
class CdekAbnormal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_abnormal}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'status', 'add_user_id', 'dispose_user_id', 'type', 'send_user_id'], 'integer'],
            [['dispose_result', 'problem'], 'string'],
            [['add_time', 'dispose_time', 'DispatchNumber', 'order_no'], 'string', 'max' => 50],
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
            'status' => '状态 0待处理 1已处理',
            'add_user_id' => '添加人',
            'add_time' => '添加时间',
            'dispose_user_id' => '处理人',
            'dispose_time' => '处理时间',
            'dispose_result' => '处理结果',
            'problem' => '问题',
            'DispatchNumber' => 'CDEK跟踪号',
            'type' => '异常类型',
            'order_no' => '订单号',
            'send_user_id' => '订单发件人',
        ];
    }
}
