<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Refunds;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 退款申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/refunds/apply
     */
    public function post(array $options = [
        'json' => [
            'individual_auth_id' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'combine_transaction_id' => '1217752501201407033233368018',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'amount' => [
                'refund' => 888,
                'from' => [[
                    'account' => 'AVAILABLE | UNAVAILABLE',
                    'amount' => 444,
                ],],
                'total' => 888,
                'currency' => 'CNY',
            ],
            'notify_url' => 'https://weixin.qq.com',
            'refund_account' => 'REFUND_SOURCE_SUB_MERCHANT | REFUND_SOURCE_PARTNER_ADVANCE',
            'funds_account' => 'AVAILABLE',
        ],
    ]): ResponseInterface;

    /**
     * 退款申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/refunds/apply
     */
    public function postAsync(array $options = [
        'json' => [
            'individual_auth_id' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'combine_transaction_id' => '1217752501201407033233368018',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'amount' => [
                'refund' => 888,
                'from' => [[
                    'account' => 'AVAILABLE | UNAVAILABLE',
                    'amount' => 444,
                ],],
                'total' => 888,
                'currency' => 'CNY',
            ],
            'notify_url' => 'https://weixin.qq.com',
            'refund_account' => 'REFUND_SOURCE_SUB_MERCHANT | REFUND_SOURCE_PARTNER_ADVANCE',
            'funds_account' => 'AVAILABLE',
        ],
    ]): PromiseInterface;
}
