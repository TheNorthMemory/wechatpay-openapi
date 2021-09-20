<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Sandboxnew\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Micropay
{
    /**
     * 提交付款码支付(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/micropay.php?chapter=9_10&index=1
     */
    public function post(array $options = [
        'xml' => [
            'profit_sharing' => 'N',
            'deposit' => 'Y',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'body' => 'image形象店-深圳腾大- QQ公仔',
            'detail' => '',
            'attach' => '说明',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => '1234',
            'limit_pay' => 'no_credit',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'receipt' => 'Y',
            'auth_code' => '120061098828009406',
            'scene_info' => '{"store_info" : {"id": "SZTX001","name": "腾大餐厅","area_code": "440305","address": "科技园中一路腾讯大厦" }}',
        ],
    ]): ResponseInterface;

    /**
     * 提交付款码支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/micropay.php?chapter=9_10&index=1#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'profit_sharing' => 'N',
            'deposit' => 'Y',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'body' => 'image形象店-深圳腾大- QQ公仔',
            'detail' => '',
            'attach' => '说明',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => '1234',
            'limit_pay' => 'no_credit',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'receipt' => 'Y',
            'auth_code' => '120061098828009406',
            'scene_info' => '{"store_info" : {"id": "SZTX001","name": "腾大餐厅","area_code": "440305","address": "科技园中一路腾讯大厦" }}',
        ],
    ]): PromiseInterface;
}
