<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Vehicle\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Payapply
{
    /**
     * 申请扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/vehicle/pay/payapply
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
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
        ],
    ]): ResponseInterface;

    /**
     * 申请扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/vehicle/pay/payapply
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
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
        ],
    ]): PromiseInterface;
}
