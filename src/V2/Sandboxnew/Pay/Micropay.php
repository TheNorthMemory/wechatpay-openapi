<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Sandboxnew\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Micropay
{
    /**
     * 提交付款码支付(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2022.05.31
     * @link https://wechatpay.im/openapi/v2/sandboxnew/pay/micropay
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'profit_sharing' => 'N',
            'deposit' => 'Y',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'body' => 'image形象店-深圳腾大- QQ公仔',
            'detail' => \json_encode([
                'cost_price' => 1,
                'receipt_id' => 'wx123',
                'goods_detail' => [[
                    'goods_id' => '商品编码',
                    'wxpay_goods_id' => '1001',
                    'goods_name' => 'iPhone6s 16G',
                    'quantity' => 1,
                    'price' => 528800,
                ],],
            ]),
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
            'scene_info' => \json_encode([
                'store_info' => [
                    'id' => 'SZTX001',
                    'name' => '腾大餐厅',
                    'area_code' => '440305',
                    'address' => '科技园中一路腾讯大厦',
                ],
            ]),
        ],
    ]): ResponseInterface;

    /**
     * 提交付款码支付(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2022.05.31
     * @link https://wechatpay.im/openapi/v2/sandboxnew/pay/micropay
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'profit_sharing' => 'N',
            'deposit' => 'Y',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'body' => 'image形象店-深圳腾大- QQ公仔',
            'detail' => \json_encode([
                'cost_price' => 1,
                'receipt_id' => 'wx123',
                'goods_detail' => [[
                    'goods_id' => '商品编码',
                    'wxpay_goods_id' => '1001',
                    'goods_name' => 'iPhone6s 16G',
                    'quantity' => 1,
                    'price' => 528800,
                ],],
            ]),
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
            'scene_info' => \json_encode([
                'store_info' => [
                    'id' => 'SZTX001',
                    'name' => '腾大餐厅',
                    'area_code' => '440305',
                    'address' => '科技园中一路腾讯大厦',
                ],
            ]),
        ],
    ]): PromiseInterface;
}
