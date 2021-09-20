<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Unifiedorder
{
    /**
     * 统一下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxa/wxa_api.php?chapter=9_1
     */
    public function post(array $options = [
        'xml' => [
            'profit_sharing' => 'N',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'device_info' => '013467007045764',
            'sign_type' => 'MD5',
            'body' => '腾讯充值中心-QQ会员充值',
            'detail' => '',
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
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxa/wxa_api.php?chapter=9_1#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'profit_sharing' => 'N',
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'device_info' => '013467007045764',
            'sign_type' => 'MD5',
            'body' => '腾讯充值中心-QQ会员充值',
            'detail' => '',
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
