<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Mweb
{
    /**
     * H5支付下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/H5Payment/chapter3_3.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'json' => [
            'mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => '',
            'description' => 'image形象店-深圳腾大- QQ公仔',
            'attach' => '自定义数据',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'out_trade_no' => '1217752501201407033233368018',
            'goods_tag' => 'WXG',
            'trade_type' => 'APP',
            'limit_pay' => 'no_credit',
            'time_start' => '2018-06-08T10:34:56+08:00',
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'merchant_category_code' => '1011',
            'payer' => [
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
            'amount' => [
                'total' => 888,
                'currency' => 'HKD',
            ],
            'scene_info' => [
                'device_id' => '013467007045764',
                'device_ip' => '128.0.0.1',
                'payer_client_ip' => '128.0.0.1',
                'operator_id' => '123145',
                'store_info' => [
                    'id' => '0001',
                    'name' => '腾讯大厦分店',
                    'address' => '广东省深圳市南山区科技中一道10000号',
                ],
            ],
            'promotion_detail' => [[
                'cost_price' => 608800,
                'receipt_id' => 'wx123',
                'goods_detail' => [[
                    'goods_id' => '12345',
                    'wxpay_goods_id' => '1001',
                    'goods_name' => 'iPhone6s 16G',
                    'quantity' => 1,
                    'price' => 528800,
                ],],
            ],],
        ],
    ]): ResponseInterface;

    /**
     * H5支付下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/H5Payment/chapter3_3.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'json' => [
            'mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => '',
            'description' => 'image形象店-深圳腾大- QQ公仔',
            'attach' => '自定义数据',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'out_trade_no' => '1217752501201407033233368018',
            'goods_tag' => 'WXG',
            'trade_type' => 'APP',
            'limit_pay' => 'no_credit',
            'time_start' => '2018-06-08T10:34:56+08:00',
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'merchant_category_code' => '1011',
            'payer' => [
                'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            ],
            'amount' => [
                'total' => 888,
                'currency' => 'HKD',
            ],
            'scene_info' => [
                'device_id' => '013467007045764',
                'device_ip' => '128.0.0.1',
                'payer_client_ip' => '128.0.0.1',
                'operator_id' => '123145',
                'store_info' => [
                    'id' => '0001',
                    'name' => '腾讯大厦分店',
                    'address' => '广东省深圳市南山区科技中一道10000号',
                ],
            ],
            'promotion_detail' => [[
                'cost_price' => 608800,
                'receipt_id' => 'wx123',
                'goods_detail' => [[
                    'goods_id' => '12345',
                    'wxpay_goods_id' => '1001',
                    'goods_name' => 'iPhone6s 16G',
                    'quantity' => 1,
                    'price' => 528800,
                ],],
            ],],
        ],
    ]): PromiseInterface;
}
