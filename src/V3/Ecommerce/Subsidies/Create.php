<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Subsidies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Create
{
    /**
     * 请求补差(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/subsidies/create
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'amount' => 10,
            'description' => '测试备注',
            'refund_id' => '3008450740201411110007820472',
        ],
    ]): ResponseInterface;

    /**
     * 请求补差(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/subsidies/create
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'amount' => 10,
            'description' => '测试备注',
            'refund_id' => '3008450740201411110007820472',
        ],
    ]): PromiseInterface;
}
