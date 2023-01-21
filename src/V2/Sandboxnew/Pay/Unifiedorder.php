<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Sandboxnew\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Unifiedorder
{
    /**
     * 统一下单(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2022.05.31
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxa/wxa_api.php?chapter=9_1
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'profit_sharing' => 'N',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'device_info' => '013467007045764',
            'sign_type' => 'MD5',
            'body' => '腾讯充值中心-QQ会员充值',
            'detail' => '{"cost_price":1,"receipt_id":"wx123","goods_detail":[{"goods_id":"商品编码","wxpay_goods_id":"1001","goods_name":"iPhone6s 16G","quantity":1,"price":1},{"goods_id":"商品编码","wxpay_goods_id":"1002","goods_name":"iPhone6s 32G","quantity":1,"price":1}]}',
            'attach' => '深圳分店',
            'out_trade_no' => '20150806125346',
            'fee_type' => 'CNY',
            'total_fee' => '88',
            'spbill_create_ip' => '123.12.12.123',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'goods_tag' => 'WXG',
            'notify_url' => 'http://www.weixin.qq.com/wxpay/pay.php',
            'trade_type' => 'JSAPI',
            'product_id' => '12235413214070356458058',
            'limit_pay' => 'no_credit',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'receipt' => 'Y',
            'scene_info' => '{"store_info" : {"id": "SZTX001","name": "腾大餐厅","area_code": "440305","address": "科技园中一路腾讯大厦" }}',
        ],
    ]): ResponseInterface;

    /**
     * 统一下单(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2022.05.31
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxa/wxa_api.php?chapter=9_1#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'profit_sharing' => 'N',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'device_info' => '013467007045764',
            'sign_type' => 'MD5',
            'body' => '腾讯充值中心-QQ会员充值',
            'detail' => '{"cost_price":1,"receipt_id":"wx123","goods_detail":[{"goods_id":"商品编码","wxpay_goods_id":"1001","goods_name":"iPhone6s 16G","quantity":1,"price":1},{"goods_id":"商品编码","wxpay_goods_id":"1002","goods_name":"iPhone6s 32G","quantity":1,"price":1}]}',
            'attach' => '深圳分店',
            'out_trade_no' => '20150806125346',
            'fee_type' => 'CNY',
            'total_fee' => '88',
            'spbill_create_ip' => '123.12.12.123',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'goods_tag' => 'WXG',
            'notify_url' => 'http://www.weixin.qq.com/wxpay/pay.php',
            'trade_type' => 'JSAPI',
            'product_id' => '12235413214070356458058',
            'limit_pay' => 'no_credit',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'receipt' => 'Y',
            'scene_info' => '{"store_info" : {"id": "SZTX001","name": "腾大餐厅","area_code": "440305","address": "科技园中一路腾讯大厦" }}',
        ],
    ]): PromiseInterface;
}
