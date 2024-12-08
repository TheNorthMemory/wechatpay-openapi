<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Refund\Domestic;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Refunds\_refund_id_ $_refund_id_
 * @property-read Refunds\_out_refund_no_ $_out_refund_no_
 */
interface Refunds
{
    /**
     * 申请退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/refund/domestic/refunds
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'notify_url' => 'https://weixin.qq.com',
            'funds_account' => 'AVAILABLE',
            'amount' => [
                'refund' => 888,
                'from' => [[
                    'account' => 'AVAILABLE',
                    'amount' => 444,
                ],],
                'total' => 888,
                'currency' => 'CNY',
            ],
            'goods_detail' => [[
                'merchant_goods_id' => '1217752501201407033233368018',
                'wechatpay_goods_id' => '1001',
                'goods_name' => 'iPhone6s 16G',
                'unit_price' => 528800,
                'refund_amount' => 528800,
                'refund_quantity' => 1,
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 申请退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/refund/domestic/refunds
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'notify_url' => 'https://weixin.qq.com',
            'funds_account' => 'AVAILABLE',
            'amount' => [
                'refund' => 888,
                'from' => [[
                    'account' => 'AVAILABLE',
                    'amount' => 444,
                ],],
                'total' => 888,
                'currency' => 'CNY',
            ],
            'goods_detail' => [[
                'merchant_goods_id' => '1217752501201407033233368018',
                'wechatpay_goods_id' => '1001',
                'goods_name' => 'iPhone6s 16G',
                'unit_price' => 528800,
                'refund_amount' => 528800,
                'refund_quantity' => 1,
            ],],
        ],
    ]): PromiseInterface;
}
