<?php

namespace common\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "{{%cdek_order}}".
 *
 * @property integer $id
 * @property string $order_number
 * @property string $date
 * @property string $track_number
 * @property string $send_city_code
 * @property integer $rec_city_code
 * @property string $send_city_post_code
 * @property string $rec_dity_post_code
 * @property string $recipien_name
 * @property string $recipient_email
 * @property string $phone
 * @property string $tariff_type_code
 * @property string $delivery_recipient_cost
 * @property string $comment
 * @property string $street
 * @property string $host
 * @property string $flat
 * @property string $pvz_code
 * @property string $package_number
 * @property string $barcode
 * @property string $weight
 * @property string $sizeA
 * @property string $sizeB
 * @property string $sizeC
 * @property string $service_codes
 * @property string $DispatchNumber
 * @property integer $status
 * @property integer $add_user_id
 * @property integer $sender_user_id
 * @property string $add_time
 */
class CdekOrder extends \yii\db\ActiveRecord
{
	const STATUS_DEL = 0;
	const STATUS_NEW = 1;
	const STATUS_WAIT_SEND = 2;
	const STATUS_WAIT_PLAY = 3;
	
	public static $_status = [
		self::STATUS_DEL => '已删除',
		self::STATUS_NEW => '待发货',
		self::STATUS_WAIT_SEND => '已发货',
		self::STATUS_WAIT_PLAY => '已付款',
	];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cdek_order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_number', 'add_time'], 'required'],
            [['send_city_code', 'tariff_type_code', 'weight', 'sizeA', 'sizeB', 'sizeC'], 'number'],
            [['rec_city_code', 'status', 'add_user_id', 'sender_user_id'], 'integer'],
            [['service_codes'], 'string'],
            [['order_number', 'date', 'track_number', 'barcode'], 'string', 'max' => 20],
            [['send_city_post_code', 'rec_dity_post_code'], 'string', 'max' => 6],
            [['recipien_name'], 'string', 'max' => 128],
            [['recipient_email', 'delivery_recipient_cost', 'comment'], 'string', 'max' => 255],
            [['phone', 'host', 'flat', 'DispatchNumber', 'add_time'], 'string', 'max' => 50],
            [['street'], 'string', 'max' => 500],
            [['pvz_code'], 'string', 'max' => 10],
            [['package_number'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_number' => '网店提供的传单号（可以为1）',
            'date' => '下单日期',
            'track_number' => '货件跟踪号',
            'send_city_code' => '始发城市ID',
            'rec_city_code' => '目的城市ID',
            'send_city_post_code' => '始发城市邮编',
            'rec_dity_post_code' => '目的城市邮编',
            'recipien_name' => '收件人全名 ',
            'recipient_email' => 'Recipient Email',
            'phone' => '收件人电话号码',
            'tariff_type_code' => '运率代码 ',
            'delivery_recipient_cost' => '网店从收件人收的附加运费',
            'comment' => '任何备注',
            'street' => '街名',
            'host' => '楼号',
            'flat' => '门号',
            'pvz_code' => '分部代码',
            'package_number' => '包装序号',
            'barcode' => '条码',
            'weight' => '毛重（总重量，克g）',
            'sizeA' => '包装长度（厘米sm）',
            'sizeB' => '包装宽度（厘米sm',
            'sizeC' => '包装高度（厘米sm）',
            'service_codes' => '增值服务号码',
            'DispatchNumber' => '返回追踪号',
            'status' => '订单状态',
            'add_user_id' => '添加人',
            'sender_user_id' => '发件人',
            'add_time' => 'Add Time',
        ];
    }

    /**
     * 关联查询订单详情
     */
    public function getItem(){
        return $this->hasOne(CdekOrderItem::className(), ['order_id' => 'id']);
    }

    /**
     * 关联查询订单费用
     */
    public function getPrice(){
        return $this->hasOne(CdekOrderPrice::className(),['order_id'=>'id']);
    }
    
    /**
     * 关联用户
     */
    public function getUser(){
    	return $this->hasOne(User::className(),['id'=>'add_user_id']);
    }
    
    /**
     * 关联发件人
     */
    public function getSendUser(){
    	return $this->hasOne(CdekSenderUser::className(),['id'=>'sender_user_id']);
	}

	/**
	 * 关联城市
	 */
	public function getCity(){
		return $this->hasOne(CdekCitys::className(),['code_id'=>'rec_city_code']);
	}
	
	public function getListByWhere($where = ''){
		$count = $this::find()->count();
		$pages = new Pagination();
		$pages->totalCount = $count;
		$pages->pageSize = 20;
		
		$datas = $this::find()
			->with([
				'item','price',
				'user'=>function($query){
					$query->select('id,username');
				},
				'sendUser'=>function($query){
					$query->select('id,name');
				},
				'city'=>function($query){
					$query->select('code_id,full_name,eng_name');
				}
			])
			->offset($pages->offset)
			->limit($pages->limit)
			->asArray()
			->all();
		return [
			'datas' => $datas,
			'pages' => $pages,
		];
	}
}
