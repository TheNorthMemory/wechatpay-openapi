<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Profitsharing\Orders\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Amounts
{
    /**
     * 查询订单剩余待分金额(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/profitsharing/orders/%7Btransaction_id%7D/amounts
     */
    public function get(array $options = [
        'transaction_id' => '4208450740201411110007820472',
    ]): ResponseInterface;

    /**
     * 查询订单剩余待分金额(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/profitsharing/orders/%7Btransaction_id%7D/amounts
     */
    public function getAsync(array $options = [
        'transaction_id' => '4208450740201411110007820472',
    ]): PromiseInterface;
}
