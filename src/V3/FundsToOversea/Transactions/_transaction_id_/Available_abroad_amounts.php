<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundsToOversea\Transactions\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Available_abroad_amounts
{
    /**
     * 查询订单剩余可出境余额(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/funds-to-oversea/transactions/%7Btransaction_id%7D/available_abroad_amounts
     */
    public function get(array $options = [
        'transaction_id' => '4208450740201411110007820472',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单剩余可出境余额(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/funds-to-oversea/transactions/%7Btransaction_id%7D/available_abroad_amounts
     */
    public function getAsync(array $options = [
        'transaction_id' => '4208450740201411110007820472',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
