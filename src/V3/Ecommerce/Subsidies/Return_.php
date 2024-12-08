<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Subsidies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Return_
{
    /**
     * 请求补差回退(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/subsidies/return
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_order_no' => 'P20150806125346',
            'transaction_id' => '4208450740201411110007820472',
            'refund_id' => '3008450740201411110007820472',
            'amount' => 10,
            'description' => '测试备注',
        ],
    ]): ResponseInterface;

    /**
     * 请求补差回退(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/subsidies/return
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_order_no' => 'P20150806125346',
            'transaction_id' => '4208450740201411110007820472',
            'refund_id' => '3008450740201411110007820472',
            'amount' => 10,
            'description' => '测试备注',
        ],
    ]): PromiseInterface;
}
