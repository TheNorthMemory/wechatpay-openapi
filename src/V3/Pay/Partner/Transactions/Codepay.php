<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Partner\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Codepay
{
    /**
     * 付款码支付(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/codepay
     */
    public function post(array $options = [
        'json' => [
            'sp_appid' => 'wxd678efh567hg6787',
            'sp_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'out_trade_no' => '1217752501201407033233368018',
            'attach' => '自定义数据说明',
            'goods_tag' => 'WXG',
            'support_fapiao' => true,
            'payer' => [
                'auth_code' => '130061098828009406',
            ],
            'amount' => [
                'total' => 100,
                'currency' => 'CNY',
            ],
            'scene_info' => [
                'device_id' => '013467007045764',
                'device_ip' => '128.0.0.1',
                'store_info' => [
                    'id' => '0001',
                    'out_id' => 'A1111',
                ],
            ],
            'detail' => [
                'cost_price' => 608800,
                'invoice_id' => '微信123',
                'goods_detail' => [[
                    'merchant_goods_id' => '1246464644',
                    'wxpay_goods_id' => '1001',
                    'goods_name' => 'iPhoneX 256G',
                    'quantity' => 1,
                    'unit_price' => 528800,
                ],],
            ],
            'settle_info' => [
                'profit_sharing' => true,
            ],
        ],
    ]): ResponseInterface;

    /**
     * 付款码支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/codepay
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_appid' => 'wxd678efh567hg6787',
            'sp_mchid' => '1230000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'description' => 'Image形象店-深圳腾大-QQ公仔',
            'out_trade_no' => '1217752501201407033233368018',
            'attach' => '自定义数据说明',
            'goods_tag' => 'WXG',
            'support_fapiao' => true,
            'payer' => [
                'auth_code' => '130061098828009406',
            ],
            'amount' => [
                'total' => 100,
                'currency' => 'CNY',
            ],
            'scene_info' => [
                'device_id' => '013467007045764',
                'device_ip' => '128.0.0.1',
                'store_info' => [
                    'id' => '0001',
                    'out_id' => 'A1111',
                ],
            ],
            'detail' => [
                'cost_price' => 608800,
                'invoice_id' => '微信123',
                'goods_detail' => [[
                    'merchant_goods_id' => '1246464644',
                    'wxpay_goods_id' => '1001',
                    'goods_name' => 'iPhoneX 256G',
                    'quantity' => 1,
                    'unit_price' => 528800,
                ],],
            ],
            'settle_info' => [
                'profit_sharing' => true,
            ],
        ],
    ]): PromiseInterface;
}
