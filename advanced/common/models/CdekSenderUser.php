<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cdek_sender_user}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $tel
 * @property string $address
 * @property string $email
 * @property integer $add_user_id
 * @property string $add_time
 * @property string $update_time
 */
class CdekSenderUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_sender_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tel', 'add_user_id'], 'integer'],
            [['address'], 'string'],
            [['name', 'email', 'add_time', 'update_time'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '发件人姓名',
            'tel' => '电话号码',
            'address' => 'Address',
            'email' => '邮箱',
            'add_user_id' => '添加人',
            'add_time' => '添加时间',
            'update_time' => '更改时间',
        ];
    }
}
