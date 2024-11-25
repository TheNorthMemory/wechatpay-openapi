<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Deposit;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Unifiedorder
{
    /**
     * 支付押金（JSAPI/APP支付）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/deposit_sl.php?chapter=27_8&index=3
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'sub_mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'body' => '腾讯充值中心-QQ会员充值',
            'detail' => '{"goods_detail":[]}',
            'attach' => '说明',
            'out_trade_no' => '1217752501201407033233368018',
            'fee_type' => 'CNY',
            'total_fee' => '888',
            'spbill_create_ip' => '123.12.12.123',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'notify_url' => 'http://www.weixin.qq.com/wxpay/pay.php',
            'trade_type' => 'JSAPI',
            'product_id' => '12235413214070356458058',
            'limit_pay' => 'no_credit',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'receipt' => 'Y',
            'scene_info' => '{"store_info":{"id":"SZTX001","name":"腾大餐厅","area_code":"440305","address":"科技园中一路腾讯大厦"}}',
        ],
    ]): ResponseInterface;

    /**
     * 支付押金（JSAPI/APP支付）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/deposit_sl.php?chapter=27_8&index=3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'sub_mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'body' => '腾讯充值中心-QQ会员充值',
            'detail' => '{"goods_detail":[]}',
            'attach' => '说明',
            'out_trade_no' => '1217752501201407033233368018',
            'fee_type' => 'CNY',
            'total_fee' => '888',
            'spbill_create_ip' => '123.12.12.123',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'notify_url' => 'http://www.weixin.qq.com/wxpay/pay.php',
            'trade_type' => 'JSAPI',
            'product_id' => '12235413214070356458058',
            'limit_pay' => 'no_credit',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'receipt' => 'Y',
            'scene_info' => '{"store_info":{"id":"SZTX001","name":"腾大餐厅","area_code":"440305","address":"科技园中一路腾讯大厦"}}',
        ],
    ]): PromiseInterface;
}
