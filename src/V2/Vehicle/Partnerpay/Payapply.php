<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Vehicle\Partnerpay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Payapply
{
    /**
     * 申请扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/vehicle_v2_sl.php?chapter=20_982&index=2&p=202
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165489',
            'mch_id' => '10000098',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'body' => '公交代扣',
            'detail' => '公交代扣：A公交代扣：B公交代扣：C',
            'attach' => '自定义参数',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => 'WXG',
            'notify_url' => 'http://yoursite.com/wxpay.html',
            'trade_type' => 'PAP',
            'version' => '3.0',
            'trade_scene' => 'PARKING',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'profit_sharing' => 'Y',
            'scene_info' => '{"scene_info":{"start_time":"20170926114339","end_time":"20170826114339","charging_time":"12312312312","plate_number":"CB1000sdfasd","free_time":"1200","car_type":"大型车","parking_name":"欢乐海岸停车场"}}',
            'start_time' => '20170826104339',
            'end_time' => '20170826114339',
            'charging_time' => '3600',
            'plate_number' => '粤B888888',
            'car_type' => '小型车',
            'parking_name' => '欢乐海岸停车场',
            'deduct_mode' => 'PROACTIVE',
            'support_deduct_mode' => 'DEDUCT_PROACTIVE_ONLY',
            'space_number' => 'D6666',
            'gas_station' => '中国石油加油站',
            'gas_label_name' => '98',
            'gas_type' => '汽油',
            'gas_standard' => '国V',
            'gas_amount' => '50120',
            'gas_gun_no' => '10',
            'entrance_name' => '沿江深圳-大铲湾',
            'exit_name' => '虎门大桥',
            'carrying_capacity' => '10',
            'carrying_range' => '6-12',
            'channel_type' => 'ETC',
        ],
    ]): ResponseInterface;

    /**
     * 申请扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/vehicle_v2_sl.php?chapter=20_982&index=2&p=202#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165489',
            'mch_id' => '10000098',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'body' => '公交代扣',
            'detail' => '公交代扣：A公交代扣：B公交代扣：C',
            'attach' => '自定义参数',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => 'WXG',
            'notify_url' => 'http://yoursite.com/wxpay.html',
            'trade_type' => 'PAP',
            'version' => '3.0',
            'trade_scene' => 'PARKING',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'profit_sharing' => 'Y',
            'scene_info' => '{"scene_info":{"start_time":"20170926114339","end_time":"20170826114339","charging_time":"12312312312","plate_number":"CB1000sdfasd","free_time":"1200","car_type":"大型车","parking_name":"欢乐海岸停车场"}}',
            'start_time' => '20170826104339',
            'end_time' => '20170826114339',
            'charging_time' => '3600',
            'plate_number' => '粤B888888',
            'car_type' => '小型车',
            'parking_name' => '欢乐海岸停车场',
            'deduct_mode' => 'PROACTIVE',
            'support_deduct_mode' => 'DEDUCT_PROACTIVE_ONLY',
            'space_number' => 'D6666',
            'gas_station' => '中国石油加油站',
            'gas_label_name' => '98',
            'gas_type' => '汽油',
            'gas_standard' => '国V',
            'gas_amount' => '50120',
            'gas_gun_no' => '10',
            'entrance_name' => '沿江深圳-大铲湾',
            'exit_name' => '虎门大桥',
            'carrying_capacity' => '10',
            'carrying_range' => '6-12',
            'channel_type' => 'ETC',
        ],
    ]): PromiseInterface;
}
