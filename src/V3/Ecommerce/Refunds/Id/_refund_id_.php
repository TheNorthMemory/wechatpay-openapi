<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Refunds\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _refund_id_
{
    /**
     * 通过微信支付退款单号查询退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/refunds/id/%7Brefund_id%7D
     */
    public function get(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'query' => [
            'individual_auth_id' => '1900000109',
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 通过微信支付退款单号查询退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/refunds/id/%7Brefund_id%7D
     */
    public function getAsync(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'query' => [
            'individual_auth_id' => '1900000109',
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
