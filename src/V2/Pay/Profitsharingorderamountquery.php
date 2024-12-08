<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Profitsharingorderamountquery
{
    /**
     * 查询订单待分账金额(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/profitsharingorderamountquery
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'transaction_id' => '4208450740201411110007820472',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单待分账金额(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/profitsharingorderamountquery
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'transaction_id' => '4208450740201411110007820472',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
