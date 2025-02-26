<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundsToOversea\Return_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read ReturnOrders\OutReturnNo $outReturnNo
 */
interface ReturnOrders
{
    /**
     * 申请资金出境退回(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/funds-to-oversea/return/return-orders
     */
    public function post(array $options = [
        'json' => [
            'out_return_no' => 'R20250220103930',
            'sub_mchid' => '123456',
            'out_order_id' => 'merchant_1123123',
            'transaction_id' => '420000000000000010',
            'refund_id' => '5017752501201407033233368018',
            'amount' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 申请资金出境退回(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/funds-to-oversea/return/return-orders
     */
    public function postAsync(array $options = [
        'json' => [
            'out_return_no' => 'R20250220103930',
            'sub_mchid' => '123456',
            'out_order_id' => 'merchant_1123123',
            'transaction_id' => '420000000000000010',
            'refund_id' => '5017752501201407033233368018',
            'amount' => 100,
        ],
    ]): PromiseInterface;
}
