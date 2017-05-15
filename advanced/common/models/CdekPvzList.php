<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cdek_pvz_list}}".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $citycode
 * @property string $city
 * @property string $worktime
 * @property string $address
 * @property string $phone
 * @property string $note
 * @property double $coordx
 * @property double $coordy
 * @property string $type
 * @property string $ownercode
 * @property double $weightlimit
 * @property double $wdightmin
 * @property string $weightmax
 * @property string $add_time
 * @property string $update_time
 */
class CdekPvzList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_pvz_list}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['citycode', 'coordx', 'coordy', 'weightlimit', 'wdightmin', 'weightmax'], 'number'],
            [['code'], 'string', 'max' => 10],
            [['name', 'city', 'type', 'ownercode', 'add_time', 'update_time'], 'string', 'max' => 50],
            [['worktime', 'phone'], 'string', 'max' => 100],
            [['address', 'note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => '分部代号',
            'name' => '分部名',
            'citycode' => '城市ID',
            'city' => '城市名',
            'worktime' => '上班时间',
            'address' => '地址',
            'phone' => '电话号码',
            'note' => '备注（该分部地址明细）',
            'coordx' => '地直经度',
            'coordy' => '地址纬度',
            'type' => '分部类型：是CDEK分部还是自动提货机。PVZ,',
            'ownercode' => '分部是否属于CDEK。 CDEK —属于CDEK, InPost —属于InPost.',
            'weightlimit' => '该分部能接收货物重量限制（没有值表示没有限制）',
            'wdightmin' => '分部能接收的最小货物',
            'weightmax' => '该分部能够接收最大货物重量(千克kg重量<=WeightMax)',
            'add_time' => 'Add Time',
            'update_time' => 'Update Time',
        ];
    }
}
