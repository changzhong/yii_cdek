<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cdek_area}}".
 *
 * @property integer $id
 * @property string $area_name
 * @property integer $status
 * @property integer $create_time
 * @property integer $user_id
 * @property integer $update_time
 * @property string $city_ids
 * @property integer $sort
 */
class CdekArea extends \yii\db\ActiveRecord
{
	
	const STATUS_N = 0;
	const STATUS_Y = 1;
	
	public static $_status = [
		self::STATUS_Y => '启用',
		self::STATUS_N => '禁用',
	];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_area}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_name', 'status'], 'required'],
            [['status', 'create_time', 'user_id', 'update_time', 'sort'], 'integer'],
            [['city_ids'], 'string'],
            [['area_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area_name' => '分区名称',
            'status' => '状态',
            'create_time' => '创建时间',
            'user_id' => '创建人',
            'update_time' => '最后更改时间',
            'city_ids' => '分区城市ID',
            'sort' => '排序',
        ];
    }
    
	public function beforeSave($insert)
    {
	    if(parent::beforeSave($insert)){
	        if($this->isNewRecord){
	        	$this->create_time = time();
	        	$this->user_id = Yii::$app->user->identity->getId();
	        }
	        $this->update_time = time();
	        return true;
	    }
	    return false;
    }
}
