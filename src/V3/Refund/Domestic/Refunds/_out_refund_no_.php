<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Refund\Domestic\Refunds;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_refund_no_
{
    /**
     * 查询单笔退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/refund/domestic/refunds/%7Bout_refund_no%7D
     */
    public function get(array $options = [
        'out_refund_no' => 'sdk12345678920210326144648',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询单笔退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/refund/domestic/refunds/%7Bout_refund_no%7D
     */
    public function getAsync(array $options = [
        'out_refund_no' => 'sdk12345678920210326144648',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
