<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing\ReturnOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_return_no_
{
    /**
     * 查询分账回退结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/return-orders/%7Bout_return_no%7D
     */
    public function get(array $options = [
        'out_return_no' => 'R20190516001',
        'query' => [
            'sub_mchid' => '1900000109',
            'out_order_no' => 'P20190806125346',
        ],
    ]): ResponseInterface;

    /**
     * 查询分账回退结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/return-orders/%7Bout_return_no%7D
     */
    public function getAsync(array $options = [
        'out_return_no' => 'R20190516001',
        'query' => [
            'sub_mchid' => '1900000109',
            'out_order_no' => 'P20190806125346',
        ],
    ]): PromiseInterface;
}
