<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AppWithContract
{
    /**
     * APP下单并签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/app-with-contract
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'out_trade_no' => '1217752501201407033233368018',
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'attach' => '自定义数据说明',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'goods_tag' => 'WXG',
            'support_fapiao' => true,
            'amount' => [
                'total' => 100,
                'currency' => 'CNY',
            ],
            'detail' => [
                'cost_price' => 608800,
                'invoice_id' => '微信123',
                'goods_detail' => [[
                    'merchant_goods_id' => '1246464644',
                    'wechatpay_goods_id' => '1001',
                    'goods_name' => 'iPhoneX 256G',
                    'quantity' => 1,
                    'unit_price' => 528800,
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
            'settle_info' => [
                'profit_sharing' => true,
            ],
            'contract_info' => [
                'plan_id' => '3484306348',
                'contract_mchid' => '1200009811',
                'contract_appid' => 'wxcbda96de0b165486',
                'contract_code' => '100001256',
                'request_serial' => '1695',
                'contract_display_account' => '123456',
                'contract_notify_url' => 'https://yoursite.com',
            ],
        ],
    ]): ResponseInterface;

    /**
     * APP下单并签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/app-with-contract
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'out_trade_no' => '1217752501201407033233368018',
            'time_expire' => '2018-06-08T10:34:56+08:00',
            'attach' => '自定义数据说明',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'goods_tag' => 'WXG',
            'support_fapiao' => true,
            'amount' => [
                'total' => 100,
                'currency' => 'CNY',
            ],
            'detail' => [
                'cost_price' => 608800,
                'invoice_id' => '微信123',
                'goods_detail' => [[
                    'merchant_goods_id' => '1246464644',
                    'wechatpay_goods_id' => '1001',
                    'goods_name' => 'iPhoneX 256G',
                    'quantity' => 1,
                    'unit_price' => 528800,
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
            'settle_info' => [
                'profit_sharing' => true,
            ],
            'contract_info' => [
                'plan_id' => '3484306348',
                'contract_mchid' => '1200009811',
                'contract_appid' => 'wxcbda96de0b165486',
                'contract_code' => '100001256',
                'request_serial' => '1695',
                'contract_display_account' => '123456',
                'contract_notify_url' => 'https://yoursite.com',
            ],
        ],
    ]): PromiseInterface;
}
