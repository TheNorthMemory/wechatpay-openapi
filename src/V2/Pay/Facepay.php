<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Facepay
{
    /**
     * 提交刷脸支付(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/facepay
     */
    public function post(array $options = [
        'xml' => [
            'deposit' => 'Y',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000100',
            'device_info' => '013467007045764',
            'body' => 'image形象店-深圳腾大- QQ公仔',
            'detail' => \json_encode([
                'goods_detail' => [[
                    'goods_id' => '商品编码',
                    'wxpay_goods_id' => '1001',
                    'goods_name' => 'iPhone6s 16G',
                    'goods_num' => 1,
                    'price' => 528800,
                    'goods_category' => '123789',
                    'body' => '苹果手机',
                ],],
            ]),
            'attach' => '说明',
            'out_trade_no' => '1217472501201407033233367018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => '1234',
            'limit_pay' => 'no_credit',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'face_code' => 'b713b5d2-666c-48',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 提交刷脸支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/facepay
     */
    public function postAsync(array $options = [
        'xml' => [
            'deposit' => 'Y',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000100',
            'device_info' => '013467007045764',
            'body' => 'image形象店-深圳腾大- QQ公仔',
            'detail' => \json_encode([
                'goods_detail' => [[
                    'goods_id' => '商品编码',
                    'wxpay_goods_id' => '1001',
                    'goods_name' => 'iPhone6s 16G',
                    'goods_num' => 1,
                    'price' => 528800,
                    'goods_category' => '123789',
                    'body' => '苹果手机',
                ],],
            ]),
            'attach' => '说明',
            'out_trade_no' => '1217472501201407033233367018',
            'total_fee' => '888',
            'fee_type' => 'CNY',
            'spbill_create_ip' => '8.8.8.8',
            'goods_tag' => '1234',
            'limit_pay' => 'no_credit',
            'time_start' => '20091225091010',
            'time_expire' => '20091227091010',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'face_code' => 'b713b5d2-666c-48',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
