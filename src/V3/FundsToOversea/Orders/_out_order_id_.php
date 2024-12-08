<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundsToOversea\Orders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_order_id_
{
    /**
     * 查询出境结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/funds-to-oversea/orders/%7Bout_order_id%7D
     */
    public function get(array $options = [
        'out_order_id' => 'merchant123123',
        'query' => [
            'sub_mchid' => '1231231',
            'transaction_id' => '4200000000000',
        ],
    ]): ResponseInterface;

    /**
     * 查询出境结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/funds-to-oversea/orders/%7Bout_order_id%7D
     */
    public function getAsync(array $options = [
        'out_order_id' => 'merchant123123',
        'query' => [
            'sub_mchid' => '1231231',
            'transaction_id' => '4200000000000',
        ],
    ]): PromiseInterface;
}
