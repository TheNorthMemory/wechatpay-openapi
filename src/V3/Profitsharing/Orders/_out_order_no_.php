<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing\Orders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_order_no_
{
    /**
     * 查询分账结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/orders/%7Bout_order_no%7D
     */
    public function get(array $options = [
        'out_order_no' => 'P20150806125346',
        'query' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
        ],
    ]): ResponseInterface;

    /**
     * 查询分账结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/orders/%7Bout_order_no%7D
     */
    public function getAsync(array $options = [
        'out_order_no' => 'P20150806125346',
        'query' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
        ],
    ]): PromiseInterface;
}
