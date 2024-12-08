<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Profitsharingquery
{
    /**
     * 查询分账结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/profitsharingquery
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 查询分账结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/profitsharingquery
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
