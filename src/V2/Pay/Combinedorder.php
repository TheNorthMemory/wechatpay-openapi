<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Combinedorder
{
    /**
     * 合单下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/combinedorder
     */
    public function post(array $options = [
        'xml' => [
            'combine_appid' => 'wx8888888888888888',
            'combine_mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'combine_out_trade_no' => '1217752501201407033233368018',
            'spbill_create_ip' => '8.8.8.8',
            'time_start' => '20171225091010',
            'time_expire' => '20171225091510',
            'notify_url' => 'http://www.weixin.qq.com/wxpay/pay.php',
            'trade_type' => 'JSAPI',
            'product_id' => '1234567890',
            'combine_openid' => '120061098828009406',
            'scene_info' => \json_encode([
                'device_id' => 'POS1:1',
                'payer_client_ip' => '14.17.22.32',
                'h5_info' => [
                    'type' => 'iOS | Android | Wap',
                    'app_name' => '王者荣耀',
                    'app_url' => '',
                    'bundle_id' => 'com.tencent.wzryIOS',
                    'package_name' => '',
                ],
            ]),
            'sub_order_list' => \json_encode([
                'order_num' => 2,
                'order_list' => [[
                    'appid' => 'wxdace645e0bc2c424',
                    'mch_id' => '1900009001',
                    'body' => '子订单1',
                    'detail' => '商品详细描述',
                    'attach' => '深圳分店',
                    'out_trade_no' => 'OD201708030001',
                    'fee_type' => 'CNY',
                    'total_fee' => 88,
                    'sub_appid' => 'wxd678efh567hg6787',
                    'sub_mch_id' => '1256324589',
                ],],
            ]),
        ],
    ]): ResponseInterface;

    /**
     * 合单下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/combinedorder
     */
    public function postAsync(array $options = [
        'xml' => [
            'combine_appid' => 'wx8888888888888888',
            'combine_mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'combine_out_trade_no' => '1217752501201407033233368018',
            'spbill_create_ip' => '8.8.8.8',
            'time_start' => '20171225091010',
            'time_expire' => '20171225091510',
            'notify_url' => 'http://www.weixin.qq.com/wxpay/pay.php',
            'trade_type' => 'JSAPI',
            'product_id' => '1234567890',
            'combine_openid' => '120061098828009406',
            'scene_info' => \json_encode([
                'device_id' => 'POS1:1',
                'payer_client_ip' => '14.17.22.32',
                'h5_info' => [
                    'type' => 'iOS | Android | Wap',
                    'app_name' => '王者荣耀',
                    'app_url' => '',
                    'bundle_id' => 'com.tencent.wzryIOS',
                    'package_name' => '',
                ],
            ]),
            'sub_order_list' => \json_encode([
                'order_num' => 2,
                'order_list' => [[
                    'appid' => 'wxdace645e0bc2c424',
                    'mch_id' => '1900009001',
                    'body' => '子订单1',
                    'detail' => '商品详细描述',
                    'attach' => '深圳分店',
                    'out_trade_no' => 'OD201708030001',
                    'fee_type' => 'CNY',
                    'total_fee' => 88,
                    'sub_appid' => 'wxd678efh567hg6787',
                    'sub_mch_id' => '1256324589',
                ],],
            ]),
        ],
    ]): PromiseInterface;
}
