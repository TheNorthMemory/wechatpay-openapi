<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read ReturnOrders\_out_return_no_ $_out_return_no_
 */
interface ReturnOrders
{
    /**
     * 请求分账回退(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/return-orders
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'order_id' => '3008450740201411110007820472',
            'out_order_no' => '',
            'out_return_no' => 'R20190516001',
            'return_mchid' => '86693852',
            'amount' => 10,
            'description' => '用户退款',
        ],
    ]): ResponseInterface;

    /**
     * 请求分账回退(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/profitsharing/return-orders
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'order_id' => '3008450740201411110007820472',
            'out_order_no' => '',
            'out_return_no' => 'R20190516001',
            'return_mchid' => '86693852',
            'amount' => 10,
            'description' => '用户退款',
        ],
    ]): PromiseInterface;
}
