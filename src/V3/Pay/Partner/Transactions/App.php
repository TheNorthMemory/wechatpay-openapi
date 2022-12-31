<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Partner\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface App
{
    /**
     * APP下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transactions/chapter5_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'settle_info' => [
                'profit_sharing' => true,
                'subsidy_amount' => 10,
            ],
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'attach' => '自定义数据',
            'out_trade_no' => '1217752501201407033233368018',
            'amount' => [
                'total' => 100,
                'currency' => 'CNY',
            ],
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'goods_tag' => 'WXG',
            'limit_pay' => ['string'],
            'support_fapiao' => true,
            'detail' => [
                'cost_price' => 608800,
                'invoice_id' => '微信123',
                'goods_detail' => [[
                    'merchant_goods_id' => '商品编码',
                    'wechatpay_goods_id' => '1001',
                    'goods_name' => 'iPhoneX 256G',
                    'quantity' => 1,
                    'unit_price' => 828800,
                ],],
            ],
            'scene_info' => [
                'payer_client_ip' => '14.23.150.211',
                'device_id' => '013467007045764',
                'store_info' => [
                    'id' => '0001',
                    'name' => '腾讯大厦分店',
                    'area_code' => '440305',
                    'address' => '广东省深圳市南山区科技中一道10000号',
                ],
            ],
        ],
    ]): ResponseInterface;

    /**
     * APP下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transactions/chapter5_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'settle_info' => [
                'profit_sharing' => true,
                'subsidy_amount' => 10,
            ],
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'attach' => '自定义数据',
            'out_trade_no' => '1217752501201407033233368018',
            'amount' => [
                'total' => 100,
                'currency' => 'CNY',
            ],
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'goods_tag' => 'WXG',
            'limit_pay' => ['string'],
            'support_fapiao' => true,
            'detail' => [
                'cost_price' => 608800,
                'invoice_id' => '微信123',
                'goods_detail' => [[
                    'merchant_goods_id' => '商品编码',
                    'wechatpay_goods_id' => '1001',
                    'goods_name' => 'iPhoneX 256G',
                    'quantity' => 1,
                    'unit_price' => 828800,
                ],],
            ],
            'scene_info' => [
                'payer_client_ip' => '14.23.150.211',
                'device_id' => '013467007045764',
                'store_info' => [
                    'id' => '0001',
                    'name' => '腾讯大厦分店',
                    'area_code' => '440305',
                    'address' => '广东省深圳市南山区科技中一道10000号',
                ],
            ],
        ],
    ]): PromiseInterface;
}
