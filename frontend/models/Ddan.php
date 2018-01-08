<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Ddan extends ActiveRecord{
    public $address_id;

    public static $diveries=[
        1=>["申通快递",25,"速度快,价格贵,服务好"],
        2=>["圆通快递",30,"速度一般,价格贵,服务还可以"],
        3=>["EMS",10,"速度慢,价格便宜,服务差"],
        4=>["邮政",20,"速度一般,价格适中,服务良好"],
    ];

    public static $pays=[
        1=>["货到付款","送货上门后再收款"],
        2=>["在线支付","即时到帐,支持微信"],
        3=>["邮局汇款","通过快钱平台收款 汇款后1-3个工作日到账"]

    ];

    public function rules()
    {
        return [
            [['member_id','name','province','city','area','address','tel','delivery_id',
                'delivery_name','delivery_price','payment_id','payment_name','total','status',
                'trade_no','create_time'
                ],"required","message"=>"必须填写"],
            ["address_id","safe"],

        ];
    }


}