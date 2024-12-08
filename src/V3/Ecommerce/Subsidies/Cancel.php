<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Subsidies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 取消补差(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/subsidies/cancel
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'description' => '订单退款',
        ],
    ]): ResponseInterface;

    /**
     * 取消补差(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/subsidies/cancel
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'description' => '订单退款',
        ],
    ]): PromiseInterface;
}
